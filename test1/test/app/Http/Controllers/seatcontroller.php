<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class seatcontroller extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'room_id' => 'required',
        ]);
        Book::create([
            'name' => $request->name,
            'email' => $request->email,
            'room_id' => $request->room_id,


        ]);

           return redirect('/');
    }
}
