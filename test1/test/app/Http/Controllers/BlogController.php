<?php

namespace App\Http\Controllers;

use App\Http\Traits\BlogTrait;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use BlogTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
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
        Blog::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->file('image')->getClientOriginalName(),
        ]);
        $this->uploadFile($request, 'image', 'Blog_attachments');
        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'name' => 'required|string',
            'description' => 'required|string',
        

        ]);
        // return $request;
        $blog = Blog::find($id);

        $blog->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        if ($request->hasFile('image')) {
            // حذف الصورة القديمة
            $this->deleteFile($blog->image);

            // رفع الصورة الجديدة
            $image_new = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('Blog_image/attachments/Blog_attachments/'), $image_new);

            // تحديث اسم الصورة في قاعدة البيانات
            $blog->image = $image_new;
            $blog->save();
        }

        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $this->deleteFile($request->file_name);
        $blog = Blog::where('id', $request->id)->delete();
        if ($request->hasFile('image')) {
            $this->deleteFile($blog->image);

            $image_new = $request->file('image')->getClientOriginalName();
            $blog->icon = $blog->icon !== $image_new ? $image_new : $blog->icon;
        }
        return redirect()->back();
    }
}