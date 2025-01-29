<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Services\LoggerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    protected $logger;

    public function __construct(LoggerService $logger)
    {
        $this->logger = $logger;
    }
    
    /**
     * Display a listing of the resource.
     */

     public function index(Request $request)
     {
         if ($request->ajax()) {
             $data = Team::select('*');
             return DataTables::of($data)
                 ->addIndexColumn()
                 ->addColumn('action', function ($row) {
                     $id = $row->id;
                     $btn = '<a class="btn btn-warning" href="' . route("team.edit", $id) . '"><i class="bi bi-exclamation-square-fill"></i></a>&nbsp; <button class="btn btn-danger delete-item" data-id="' . $id . '"><i class="bi bi-trash-fill"></i></button>';
                     return $btn;
                 })
                 ->addColumn('image', function ($row) {
                     // Assuming 'image' is the field containing the image path or URL
                     $imagePath = $row->image;
                     $imgTag = '<img src="' . asset('storage/team') . '/' . $imagePath . '" alt="Team Image" width="200" height="200">';
                     return $imgTag;
                 })
                 ->rawColumns(['action', 'image'])
                 ->make(true);
         }
         return view('backend.pages.team.index');
     }
 
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         return view('backend.pages.team.create');
     }
 
     /**
      * Store a newly created resource in storage.
      */
     public function store(Request $request)
     {
         try {
             $request->validate([
                 'name' => 'required'
             ]);
 
             // Handle image upload
             if ($request->hasFile('image')) {
                 $image = $request->file('image');
                 $imageName = time() . '-' . $request->name . '.' . $image->getClientOriginalExtension();
                 $image->storeAs('public/team', $imageName);
                 // You can also store the image path in the database if needed
             }

             $request->merge([
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id
            ]);
 
             Team::create($request->except('image') + ['image' => $imageName ?? null]);
             return redirect()->route('team.index')->with('success', 'Created New Team Successfully.');
         } catch (\Exception $e) {
             //send to log provider
             $message = $e->getMessage();
             $this->logger->logMessage($message);
 
             return redirect()->back()->with('error', 'An error occurred while create the team.');
         }
     }
 
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(Team $team)
     {
         return view('backend.pages.team.edit', compact('team'));
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, Team $team)
     {
         try {
             $request->validate([
                'name' => 'required'
             ]);
             // Handle image upload
             if ($request->hasFile('image')) {
                 $image = $request->file('image');
                 $imageName = time() . '-' . $request->name . '.' . $image->getClientOriginalExtension();
                 $image->storeAs('public/team', $imageName);
                 // You can also update the image path in the database if needed
                 if (Storage::exists('public/team/' . $team->image)) {
                     Storage::delete('public/team/' . $team->image);
                 }
 
                 $team->image = $imageName;
             }
 
             $now = date('Y-m-d H:i:s');
             $request->merge([
                 'updated_by' => Auth::user()->id
             ]);
 
             $team->update($request->except('image'));
 
             return redirect()->route('team.index')->with('success', 'Updated Team Successfully.');
         } catch (\Exception $e) {
             //send to log provider
             $message = $e->getMessage();
             $this->logger->logMessage($message);
 
             return redirect()->back()->with('error', 'An error occurred while update the Team.');
         }
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function delete(Request $request)
     {
         try {
             $id = $request->itemID;
             $record = Team::find($id);
 
             if (Storage::exists('public/team/' . $record->image)) {
                 Storage::delete('public/team/' . $record->image);
             }
             
             $record->delete();
 
             return response()->json(['status' => 'success', 'message' => 'Team deleted successfully']);
         } catch (\Exception $e) {
             $this->logger->logMessage($e->getMessage());
             return response()->json(['status' => 'failed', 'message' => 'Team deleted failed']);
         }
     }
}
