<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Services\LoggerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
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
             $data = Client::select('*');
             return DataTables::of($data)
                 ->addIndexColumn()
                 ->addColumn('action', function ($row) {
                     $id = $row->id;
                     $btn = '<a class="btn btn-warning" href="' . route("client.edit", $id) . '"><i class="bi bi-exclamation-square-fill"></i></a>&nbsp; <button class="btn btn-danger delete-item" data-id="' . $id . '"><i class="bi bi-trash-fill"></i></button>';
                     return $btn;
                 })
                 ->addColumn('image', function ($row) {
                     // Assuming 'image' is the field containing the image path or URL
                     $imagePath = $row->image;
                     $imgTag = '<img src="' . url('storage/client') . '/' . $imagePath . '" alt="Client Image" width="200" height="200">';
                     return $imgTag;
                 })
                 ->rawColumns(['action', 'image'])
                 ->make(true);
         }
         return view('backend.pages.client.index');
     }
 
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         return view('backend.pages.client.create');
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
                 $imageName = time() . '-' . $request->category . '.' . $image->getClientOriginalExtension();
                 $image->storeAs('public/client', $imageName);
                 // You can also store the image path in the database if needed
             }

             $request->merge([
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id
            ]);
 
             Client::create($request->except('image') + ['image' => $imageName ?? null]);
             return redirect()->route('client.index')->with('success', 'Created New Client Successfully.');
         } catch (\Exception $e) {
             //send to log provider
             $message = $e->getMessage();
             $this->logger->logMessage($message);
 
             return redirect()->back()->with('error', 'An error occurred while create the client.');
         }
     }
 
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(Client $client)
     {
         return view('backend.pages.client.edit', compact('client'));
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, Client $client)
     {
         try {
             // Handle image upload
             if ($request->hasFile('image')) {
                 $image = $request->file('image');
                 $imageName = time() . '-' . $request->category . '.' . $image->getClientOriginalExtension();
                 $image->storeAs('public/client', $imageName);
                 // You can also update the image path in the database if needed
                 if (Storage::exists('public/client/' . $client->image)) {
                     Storage::delete('public/client/' . $client->image);
                 }
 
                 $client->image = $imageName;
             }

             $request->merge([
                 'updated_by' => Auth::user()->id
             ]);
 
             $client->update($request->except('image'));
 
             return redirect()->route('client.index')->with('success', 'Updated Client Successfully.');
         } catch (\Exception $e) {
             //send to log provider
             $message = $e->getMessage();
             $this->logger->logMessage($message);
 
             return redirect()->back()->with('error', 'An error occurred while update the Client.');
         }
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function delete(Request $request)
     {
         try {
             $id = $request->itemID;
             $record = Client::find($id);
 
             if (Storage::exists('public/client/' . $record->image)) {
                 Storage::delete('public/client/' . $record->image);
             }
             
             $record->delete();
 
             return response()->json(['status' => 'success', 'message' => 'Client deleted successfully']);
         } catch (\Exception $e) {
             $this->logger->logMessage($e->getMessage());
             return response()->json(['status' => 'failed', 'message' => 'Client deleted failed']);
         }
     }
}
