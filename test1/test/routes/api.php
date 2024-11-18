<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\Contactcontroller;

Route::get('/contact', [Contactcontroller::class,'conc']);
Route::get('/delete/{id}', [Contactcontroller::class,'destroy']);


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

