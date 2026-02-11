<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\gerant;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;

use Illuminate\Support\Facades\Route;
Route::get('/',function(){
return view('index');
});
Route::get('/login', [AuthController::class,'index']);

Route::resource( 'hotel', HotelController::class);
// Route::group(['prefix' => 'admin'], function () {
//     Route::resource('hotel', HotelController::class)->names('admin.hotel');
// });
Route::resource( 'admin/hotel', AdminController::class)->names('admin.hotel');
Route::resource( 'client/hotel', ClientController::class)->names('client.hotel');

Route::resource('room', RoomController::class);

Route::post('/admin/hotel/{hotel}/status',[AdminController::class,'updateStatus'])->name('admin.hotel.updateStatus');
// Route::get('hotel', [HotelController::class,'index']);
