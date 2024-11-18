<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class commentscontroller extends Controller
{
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            'website' => 'required|string',
            'message' => 'required|string',

        ]);
        Comment::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'website' => $request->website,
        ]);

           return redirect('/');
    }
}
