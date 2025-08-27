<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('user-form','user-form');
Route::view('home','home');
Route::view('about','about');

Route::post('add-user',[UserController::class,'addUser']);