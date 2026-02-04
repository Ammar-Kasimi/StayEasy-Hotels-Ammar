<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\gerant;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class,'index']);
Route::get('/', function () {
    return view('welcome', ['name' => 'James']);
});

Route::resource('room', RoomController::class);