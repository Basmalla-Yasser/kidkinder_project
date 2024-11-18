<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Storage;

trait GalleryTrait
{
    public function uploadFile($request, $name, $folder)
    {
        $image = $request->file($name)->getClientOriginalName();
        $request->file($name)->storeAs('attachments/', $folder . '/' . $image, 'Gallery_attachments');
    }

    public function deleteFile($name)
    {
        $exists = Storage::disk('Gallery_attachments')->exists('attachments/library/' . $name);

        if ($exists) {
            Storage::disk('Gallery_attachments')->delete('attachments/library/' . $name);
        }
    }
}
