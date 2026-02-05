<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\gerant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
Route::get('/',function(){
return view('index');
});
Route::get('/login', [AuthController::class,'index']);

Route::resource('hotel', HotelController::class);

Route::resource('room', RoomController::class);
// Route::get('hotel', [HotelController::class,'index']);
