<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class Homecontroller extends Controller
{
    public function index()
    {
      $settings= Setting::all();




        return view('layout.app' ,compact('settings'));
        }
    //
}
