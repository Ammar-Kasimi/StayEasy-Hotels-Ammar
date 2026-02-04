<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
Route::get('/',function(){
return view('index');
});
Route::get('/login', [AuthController::class]);
Route::resource('hotels', HotelController::class);

