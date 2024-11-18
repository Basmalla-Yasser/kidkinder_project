<?php

namespace App\Http\Controllers;

use App\Http\Traits\TeacherTrait;
use App\Models\Teacher;
use App\Models\Subject;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    use TeacherTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teacher.index', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $subjects=Subject::all();


        return view('admin.teacher.create',compact('subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'twitter' => 'required|string',
            'linkedin' => 'required|string',
            'facebook' => 'required|string',
            'subject_id' => 'required',
            
        ]);
        Teacher::create([
            'name' => $request->name,
            'email' => $request->email,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'subject_id' => $request->subject_id,

            'image' => $request->file('image')->getClientOriginalName(),

        ]);

        $this->uploadFile($request, 'image', 'teacher_attachments');
        return redirect()->route('teacher.index');
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
        $subjects=Subject::all();

        $teacher = Teacher::find($id);
        // $gallery = gallery::where('id',$id);
        return view('admin.teacher.edit', compact('teacher','subjects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|string',
            'twitter' => 'required|string',
            'linkedin' => 'required|string',
            'facebook' => 'required|string',
            'subject_id' => 'required',
            
        ]);
        // return $request;
        $teacher = Teacher::find($id);

        $teacher->update([
          'name' => $request->name,
            'email' => $request->email,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'subject_id' => $request->subject_id,

        ]);

        if ($request->hasFile('image')) {
            // حذف الصورة القديمة
            $this->deleteFile($teacher->image);

            // رفع الصورة الجديدة
            $image_new = $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('Teacher_img/attachments/Teacher_attachments/'), $image_new);

            // تحديث اسم الصورة في قاعدة البيانات
            $teacher->image = $image_new;
            $teacher->save();
        }


        return redirect()->route('teacher.index');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Request $request)
    {

        $this->deleteFile($request->file_name);
        $teacher = Teacher::where('id', $request->id)->delete();
        if ($request->hasFile('image')) {
            $this->deleteFile($teacher->image);

            $image_new = $request->file('image')->getClientOriginalName();
            $teacher->icon = $teacher->icon !== $image_new ? $image_new : $teacher->icon;
        }
        return redirect()->back();
    }
}