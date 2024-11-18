<?php

namespace App\Http\Controllers;

use App\Http\Traits\GalleryTrait;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    use GalleryTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.Gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.Gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string',
            'description' => 'required|string',
            'image' => 'required',

        ]);
        Gallery::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->file('image')->getClientOriginalName(),

        ]);

        $this->uploadFile($request, 'image', 'gallery_attachments');
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);
        // $gallery = gallery::where('id',$id);
        return view('admin.Gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        // return $request;
        $request->validate([

            'name' => 'required|string',
            'description' => 'required|string',

        ]);
        $gallery = Gallery::find($id);

        $gallery->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);


        if ($request->hasFile('image')) {
            // حذف الصورة القديمة
            $this->deleteFile($gallery->image);

            // رفع الصورة الجديدة
            $image_new = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('Gallery_img/attachments/Gallery_attachments/'), $image_new);

            // تحديث اسم الصورة في قاعدة البيانات
            $gallery->image = $image_new;
            $gallery->save();
        }


        return redirect()->route('gallery.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Request $request)
    {

        $this->deleteFile($request->file_name);
        $gallery = Gallery::where('id', $request->id)->delete();
        if ($request->hasFile('image')) {
            $this->deleteFile($gallery->image);

            $image_new = $request->file('image')->getClientOriginalName();
            $gallery->icon = $gallery->icon !== $image_new ? $image_new : $gallery->icon;
        }
        return redirect()->back();
    }
}