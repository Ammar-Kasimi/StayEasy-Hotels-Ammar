<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\gerant;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class,'index']);
Route::get('/', function () {
    return view('welcome', ['name' => 'James']);
});
 
Route::get('/gerant', [gerant::class, 'index'])->name('gerant');
Route::get('/gerant/add', [gerant::class, 'add'])->name('gerantAdd');

