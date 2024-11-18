<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\Father;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fathers=Father::all();

        return view('admin.review.create' , compact('fathers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'comment' => 'required|string',
            'father_id' => 'required',
            
        ]);
        Review::create([
            'comment' => $request->comment,
            'father_id' => $request->father_id,


        ]);

           return redirect()->route('review.index');
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
        $fathers=Father::all();
        $review = Review::find($id);
        // $gallary = Gallary::where('id',$id);
        return view('admin.review.edit', compact('review','fathers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'comment' => 'required|string',
            'father_id' => 'required',
            
        ]);
        
        $review = Review::find($id);

        $review->update([
            'comment' => $request->comment,
            'father_id' => $request->father_id,
        ]);
               return redirect()->route('review.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على السجل بناءً على المعرف
        $review = Review::findOrFail($id);

        // إذا كان هناك صورة مرتبطة بالسجل
        

        // حذف السجل من قاعدة البيانات
        $review->delete();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('review.index');
    }
}