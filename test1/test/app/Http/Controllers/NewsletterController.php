<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.newsletter.index', compact('newsletters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.newsletter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     Newsletter::create([
    //         'name' => $request->name,
    //         'email' => $request->email,

    //     ]);
        

            

    //        return redirect()->route('newsletter.index');
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
        $newsletter = Newsletter::find($id);
        // $gallary = Gallary::where('id',$id);
        return view('admin.newsletter.edit', compact('newsletter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            
        ]);
        // return $request;
        $newsletter = Newsletter::find($id);

        $newsletter->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);
       
        $newsletter->save();
        return redirect()->route('newsletter.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على السجل بناءً على المعرف
        $newsletter = Newsletter::findOrFail($id);

        // إذا كان هناك صورة مرتبطة بالسجل
        

        // حذف السجل من قاعدة البيانات
        $newsletter->delete();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('newsletter.index');
    }
}