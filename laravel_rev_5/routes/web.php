<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\CountryCheck;

Route::get('/', function () {
    return view('welcome');
});
//middleware showing by default as it is global
// http://127.0.0.1:8000/home?country=india&age=20 thats when it will work
//the below one was using groups
// Route::view('home','home')->middleware('check1'); //here we applied the group of middleware
// Route::view('about','about');
//well the above is one way but how would you apply it to large number of middleware

// Route::middleware('check1')->group(function(){
//     Route::view('about','about');
//     Route::view('home','home');
// });

//now we'll learn how to assign a middleware to a route
//first i imported it see on line 4

Route::view('home','home')->middleware(AgeCheck::class); //and there we go
Route::view('about','about')->middleware(AgeCheck::class,CountryCheck::class); //now we can just add two to this too by