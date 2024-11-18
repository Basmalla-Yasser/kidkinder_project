<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait BlogTrait
{

    // $name =name of input in form
    // $folder =>اسم الملف ال هيكون داخل ملف attachments
    public function uploadFile($request, $name, $folder)
    {
        $image = $request->file($name)->getClientOriginalName();
        $request->file($name)->storeAs('attachments/', $folder . '/' . $image, 'Blog_attachments');
    }

    public function deleteFile($name)
    {
        $exists = Storage::disk('Blog_attachments')->exists('attachments/library/' . $name);

        if ($exists) {
            Storage::disk('Blog_attachments')->delete('attachments/library/' . $name);
        }
    }
}
