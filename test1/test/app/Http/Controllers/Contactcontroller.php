<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   /* * public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',

        ]);
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,



        ]);

           return redirect()->route('contact.index');
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
        $contact = Contact::find($id);
        // $gallary = Gallary::where('id',$id);
        return view('admin.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',

        ]);
        $contact = Contact::find($id);

        $contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);
               return redirect()->route('contact.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على السجل بناءً على المعرف
        $contact = Contact::findOrFail($id);

        // إذا كان هناك صورة مرتبطة بالسجل
        

        // حذف السجل من قاعدة البيانات
        $contact->delete();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('contact.index');
    }
}