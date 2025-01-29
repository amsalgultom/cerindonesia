<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Services\LoggerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
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
             $data = Service::select('*');
             return DataTables::of($data)
                 ->addIndexColumn()
                 ->addColumn('action', function ($row) {
                     $id = $row->id;
                     $btn = '<a class="btn btn-warning" href="' . route("service.edit", $id) . '"><i class="bi bi-exclamation-square-fill"></i></a>&nbsp; <button class="btn btn-danger delete-item" data-id="' . $id . '"><i class="bi bi-trash-fill"></i></button>';
                     return $btn;
                 })
                 ->addColumn('image', function ($row) {
                     // Assuming 'image' is the field containing the image path or URL
                     $imagePath = $row->image;
                     $imgTag = '<img src="' . asset('storage/service') . '/' . $imagePath . '" alt="Service Image" width="200" height="200">';
                     return $imgTag;
                 })
                 ->rawColumns(['action', 'image'])
                 ->make(true);
         }
         return view('backend.pages.service.index');
     }
 
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         return view('backend.pages.service.create');
     }
 
     /**
      * Store a newly created resource in storage.
      */
     public function store(Request $request)
     {
         try {
 
             // Handle image upload
             if ($request->hasFile('image')) {
                 $image = $request->file('image');
                 $imageName = time() . '-' . $request->title_id . '.' . $image->getClientOriginalExtension();
                 $image->storeAs('public/service', $imageName);
                 // You can also store the image path in the database if needed
             }


            // Merge additional data
            $request->merge([
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id
            ]);
 
             Service::create($request->except('image') + ['image' => $imageName ?? null]);
             return redirect()->route('service.index')->with('success', 'Created New Service Successfully.');
         } catch (\Exception $e) {
             //send to log provider
             $message = $e->getMessage();
             $this->logger->logMessage($message);
 
             return redirect()->back()->with('error', 'An error occurred while create the service.');
         }
     }
 
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(Service $service)
     {
         return view('backend.pages.service.edit', compact('service'));
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, Service $service)
     {
         try {
             // Handle image upload
             if ($request->hasFile('image')) {
                 $image = $request->file('image');
                 $imageName = time() . '-' . $request->title_id . '.' . $image->getClientOriginalExtension();
                 $image->storeAs('public/service', $imageName);
                 // You can also update the image path in the database if needed
                 if (Storage::exists('public/service/' . $service->image)) {
                     Storage::delete('public/service/' . $service->image);
                 }
 
                 $service->image = $imageName;
             }
 
            $now = date('Y-m-d H:i:s');

            // Merge additional data
            $request->merge([
                'updated_by' => Auth::user()->id,
                'updated_at' => $now
            ]);
 
             $service->update($request->except('image'));
 
             return redirect()->route('service.index')->with('success', 'Updated Service Successfully.');
         } catch (\Exception $e) {
             //send to log provider
             $message = $e->getMessage();
             $this->logger->logMessage($message);
 
             return redirect()->back()->with('error', 'An error occurred while update the Service.');
         }
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function delete(Request $request)
     {
         try {
             $id = $request->itemID;
             $record = Service::find($id);
 
             if (Storage::exists('public/service/' . $record->image)) {
                 Storage::delete('public/service/' . $record->image);
             }
             
             $record->delete();
 
             return response()->json(['status' => 'success', 'message' => 'Service deleted successfully']);
         } catch (\Exception $e) {
             $this->logger->logMessage($e->getMessage());
             return response()->json(['status' => 'failed', 'message' => 'Service deleted failed']);
         }
     }
}
