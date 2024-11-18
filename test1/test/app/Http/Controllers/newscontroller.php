<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newsletter;

class newscontroller extends Controller
{
    
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|string',
            'email' => 'required|email',
            
        ]);
        Newsletter::create([
            'name' => $request->name,
            'email' => $request->email,

        ]);
        

            

           return redirect('/');
    }
}
