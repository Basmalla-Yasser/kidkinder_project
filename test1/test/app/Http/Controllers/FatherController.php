<?php

namespace App\Http\Controllers;

use App\Models\Father;
use Illuminate\Http\Request;

class FatherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fathers = Father::all();
        return view('admin.father.index', compact('fathers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.father.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'job' => 'required|string',
            'address' => 'required|string',
            'state' => 'required|string',
            'phone' => 'required|min:10',

        ]);
        Father::create([
            'name' => $request->name,
            'email' => $request->email,
            'job' => $request->job,
            'address' => $request->address,
            'state' => $request->state,
            'phone' => $request->phone,

        ]);
        return redirect()->route('father.index');

        
        
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
        $father = Father::find($id);
        // $gallary = Gallary::where('id',$id);
        return view('admin.father.edit', compact('father'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|string',
            'job' => 'required|string',
            'address' => 'required|string',
            'state' => 'required|string',
            'phone' => 'required|string',

        ]);
        // return $request;
        $father = Father::find($id);

        $father->update([
            'name' => $request->name,
            'email' => $request->email,
            'job' => $request->job,
            'address' => $request->address,
            'state' => $request->state,
            'phone' => $request->phone,
        ]);
       
        return redirect()->route('father.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على السجل بناءً على المعرف
        $father = Father::findOrFail($id);

        // إذا كان هناك صورة مرتبطة بالسجل
        

        // حذف السجل من قاعدة البيانات
        $father->delete();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('father.index');
    }
}