<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Services\LoggerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
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
             $data = Banner::select('*');
             return DataTables::of($data)
                 ->addIndexColumn()
                 ->addColumn('action', function ($row) {
                     $id = $row->id;
                     $btn = '<a class="btn btn-warning" href="' . route("banner.edit", $id) . '"><i class="bi bi-exclamation-square-fill"></i></a>&nbsp; <button class="btn btn-danger delete-item" data-id="' . $id . '"><i class="bi bi-trash-fill"></i></button>';
                     return $btn;
                 })
                 ->addColumn('image', function ($row) {
                     // Assuming 'image' is the field containing the image path or URL
                     $imagePath = $row->image;
                     $imgTag = '<img src="' . url('storage/banner') . '/' . $imagePath . '" alt="Banner Image" width="200" height="200">';
                     return $imgTag;
                 })
                 ->rawColumns(['action', 'image'])
                 ->make(true);
         }
         return view('backend.pages.banner.index');
     }
 
     /**
      * Show the form for creating a new resource.
      */
     public function create()
     {
         return view('backend.pages.banner.create');
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
                 $image->storeAs('public/banner', $imageName);
                 // You can also store the image path in the database if needed
             }

             $request->merge([
                'created_by' => Auth::user()->id,
                'updated_by' => Auth::user()->id
            ]);
 
             Banner::create($request->except('image') + ['image' => $imageName ?? null]);
             return redirect()->route('banner.index')->with('success', 'Created New Banner Successfully.');
         } catch (\Exception $e) {
             //send to log provider
             $message = $e->getMessage();
             $this->logger->logMessage($message);
 
             return redirect()->back()->with('error', 'An error occurred while create the banner.');
         }
     }
 
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(Banner $banner)
     {
         return view('backend.pages.banner.edit', compact('banner'));
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, Banner $banner)
     {
         try {
             // Handle image upload
             if ($request->hasFile('image')) {
                 $image = $request->file('image');
                 $imageName = time() . '-' . $request->category . '.' . $image->getClientOriginalExtension();
                 $image->storeAs('public/banner', $imageName);
                 // You can also update the image path in the database if needed
                 if (Storage::exists('public/banner/' . $banner->image)) {
                     Storage::delete('public/banner/' . $banner->image);
                 }
 
                 $banner->image = $imageName;
             }

             $request->merge([
                 'updated_by' => Auth::user()->id
             ]);
 
             $banner->update($request->except('image'));
 
             return redirect()->route('banner.index')->with('success', 'Updated Banner Successfully.');
         } catch (\Exception $e) {
             //send to log provider
             $message = $e->getMessage();
             $this->logger->logMessage($message);
 
             return redirect()->back()->with('error', 'An error occurred while update the Banner.');
         }
     }
 
     /**
      * Remove the specified resource from storage.
      */
     public function delete(Request $request)
     {
         try {
             $id = $request->itemID;
             $record = Banner::find($id);
 
             if (Storage::exists('public/banner/' . $record->image)) {
                 Storage::delete('public/banner/' . $record->image);
             }
             
             $record->delete();
 
             return response()->json(['status' => 'success', 'message' => 'Banner deleted successfully']);
         } catch (\Exception $e) {
             $this->logger->logMessage($e->getMessage());
             return response()->json(['status' => 'failed', 'message' => 'Banner deleted failed']);
         }
     }
}
