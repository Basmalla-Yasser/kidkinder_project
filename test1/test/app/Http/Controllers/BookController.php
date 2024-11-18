<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Room;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $rooms=Room::all();

        return view('admin.book.create' , compact('rooms'));
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     Book::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'room_id' => $request->room_id,


    //     ]);

    //        return redirect()->route('book.index');
    // }

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
        $rooms=Room::all();
        $book = Book::find($id);
        // $gallary = Gallary::where('id',$id);
        return view('admin.book.edit', compact('book','rooms'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|string',
            'room_id' => 'required',

        

        ]);
        $book = Book::find($id);

        $book->update([
            'name' => $request->name,
            'email' => $request->email,
            'room_id' => $request->room_id,
        ]);
               return redirect()->route('book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على السجل بناءً على المعرف
        $book = Book::findOrFail($id);

        // إذا كان هناك صورة مرتبطة بالسجل
        

        // حذف السجل من قاعدة البيانات
        $book->delete();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('book.index');
    }
}