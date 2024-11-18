<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('admin.room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'number_of_seats' => 'required|string',
            'age_of_kids' => 'required|string',
            'description' => 'required|string',
            'name' => 'required|string',
            'class_time' => 'required|string',
            'Tution_Fee' => 'required|string',

            
        ]);
        Room::create([
                'number_of_seats' => $request->number_of_seats,
                'age_of_kids' => $request->age_of_kids,
                'description' => $request->description,
                'name' => $request->name,
                'class_time' => $request->class_time,
                'Tution_Fee' => $request->Tution_Fee,
            

        ]);
        return redirect()->route('room.index');

        
        
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
        $room = Room::find($id);
        // $gallary = Gallary::where('id',$id);
        return view('admin.room.edit', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'number_of_seats' => 'required|string',
            'age_of_kids' => 'required|string',
            'description' => 'required|string',
            'name' => 'required|string',
            'class_time' => 'required|string',
            'Tution_Fee' => 'required|string',

            
        ]);
        $room = Room::find($id);

        $room->update([
            'number_of_seats' => $request->number_of_seats,
            'age_of_kids' => $request->age_of_kids,
            'description' => $request->description,
            'name' => $request->name,
            'class_time' => $request->class_time,
            'Tution_Fee' => $request->Tution_Fee,
        ]);
       
        return redirect()->route('room.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // العثور على السجل بناءً على المعرف
        $room = Room::findOrFail($id);

        // إذا كان هناك صورة مرتبطة بالسجل
        

        // حذف السجل من قاعدة البيانات
        $room->delete();

        // إعادة التوجيه مع رسالة نجاح
        return redirect()->route('room.index');
    }
}