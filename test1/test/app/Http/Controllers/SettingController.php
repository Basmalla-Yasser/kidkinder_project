<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::all();
        return view('admin.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.Setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'address' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|min:10',
            'twitter' => 'required|string',
            'linkedin' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',


            
        ]);
        Setting::create([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,

        ]);
        return redirect()->route('setting.index');

        
        
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
        $setting = Setting::find($id);
        // $gallary = Gallary::where('id',$id);
        return view('admin.Setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'address' => 'required|string',
            'email' => 'required|string',
            'phone' => 'required|string',
            'twitter' => 'required|string',
            'linkedin' => 'required|string',
            'facebook' => 'required|string',
            'instagram' => 'required|string',
            
        ]);
        // return $request;
        $setting = Setting::find($id);

        $setting->update([
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
        ]);
       
        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على السجل بناءً على المعرف
        $setting = Setting::findOrFail($id);

        // إذا كان هناك صورة مرتبطة بالسجل
        

        // حذف السجل من قاعدة البيانات
        $setting->delete();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('setting.index');
    }
}