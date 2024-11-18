<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subjects = Subject::all();
        return view('admin.subject.index', compact('subjects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.subject.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string',
            'duration' => 'required|string',
            


            
        ]);
        Subject::create([
            'name' => $request->name,
            'duration' => $request->duration,
            

        ]);
        return redirect()->route('subject.index');

        
        
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
        $subject = Subject::find($id);
        // $gallary = Gallary::where('id',$id);
        return view('admin.subject.edit', compact('subject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'name' => 'required|string',
            'duration' => 'required|string',
            


            
        ]);
        // return $request;
        $subject = Subject::find($id);

        $subject->update([
            'name' => $request->name,
            'duration' => $request->duration,
        ]);
       
        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على السجل بناءً على المعرف
        $subject = Subject::findOrFail($id);

        // إذا كان هناك صورة مرتبطة بالسجل
        

        // حذف السجل من قاعدة البيانات
        $subject->delete();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('subject.index');
    }
}