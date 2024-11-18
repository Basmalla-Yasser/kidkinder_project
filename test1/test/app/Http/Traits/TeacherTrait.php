<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait TeacherTrait
{
    public function uploadFile($request, $name, $folder)
    {
        $image = $request->file($name)->getClientOriginalName();
        $request->file($name)->storeAs('attachments/', $folder . '/' . $image, 'Teacher_attachments');
    }

    public function deleteFile($name)
    {
        $exists = Storage::disk('Teacher_attachments')->exists('attachments/library/' . $name);

        if ($exists) {
            Storage::disk('Teacher_attachments')->delete('attachments/library/' . $name);
        }
    }
}
