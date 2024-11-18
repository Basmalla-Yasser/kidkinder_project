<?php

namespace App\Http\Controllers;

use App\Models\Kid;
use App\Models\Father;

use Illuminate\Http\Request;

class KidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kids = Kid::all();
        return view('admin.kid.index', compact('kids'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $fathers=Father::all();

        return view('admin.kid.create' , compact('fathers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string',
            'age' => 'required|string',
            'hobby' => 'required|string',
            'address' => 'required|string',

        ]);
        Kid::create([
            'name' => $request->name,
            'age' => $request->age,
            'hobby' => $request->hobby,
            'address' => $request->address,

            'father_id' => $request->father_id,


        ]);

           return redirect()->route('kid.index');
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
        $kid = Kid::find($id);
        // $gallary = Gallary::where('id',$id);
        return view('admin.kid.edit', compact('kid','fathers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'name' => 'required|string',
            'age' => 'required|string',
            'hobby' => 'required|string',
            'address' => 'required|string',
        ]);
        $kid = Kid::find($id);

        $kid->update([
            'name' => $request->name,
            'age' => $request->age,
            'hobby' => $request->hobby,
            'address' => $request->address,
            'father_id' => $request->father_id,
        ]);
               return redirect()->route('kid.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على السجل بناءً على المعرف
        $kid = Kid::findOrFail($id);

        // إذا كان هناك صورة مرتبطة بالسجل
        

        // حذف السجل من قاعدة البيانات
        $kid->delete();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('kid.index');
    }
}