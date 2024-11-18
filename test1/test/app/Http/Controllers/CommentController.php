<?php

namespace App\Http\Controllers;

use App\Models\Comment;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comments = Comment::all();
        return view('admin.comment.index', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.comment.create' );
    }

    /**
     * Store a newly created resource in storage.
     */
    /**public function store(Request $request)
    {
        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'message' => $request->message,
            


        ]);

           return redirect()->route('comment.index');
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
        $comment = Comment::find($id);
        // $gallary = Gallary::where('id',$id);
        return view('admin.comment.edit', compact('comment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|string',
            'website' => 'required|string',
            'message' => 'required|string',

        ]);
        $comment = Comment::find($id);

        $comment->update([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
            'message' => $request->message,
        ]);
               return redirect()->route('comment.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على السجل بناءً على المعرف
        $comment = Comment::findOrFail($id);

        // إذا كان هناك صورة مرتبطة بالسجل
        

        // حذف السجل من قاعدة البيانات
        $comment->delete();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('comment.index');
    }
}