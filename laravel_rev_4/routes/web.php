<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

//grouping via controller
//as you can see same controller is repeating again and again.
// Route::get('show',[StudentController::class,'show']);
// Route::get('add',[StudentController::class,'add']);
// Route::get('delete',[StudentController::class,'add']);
//we can group it like this
Route::controller(StudentController::class)->group(function(){
    Route::get('show','show');
    Route::get('add','add');
    Route::get('delete','delete');
    //no need to add controller part again and again
    //2nd method
    Route::get('about/{name}','about');
});

//so what if you want to pass a dyanamic name here?
//first the old method
// Route::get('about/{name}',[StudentController::class,'about']);
//second method look in the grouping controller


//grouping with prefix.
//even works with double prefix
// Route::prefix('student/india')->group(function(){
//     Route::view('/home','home');
//     Route::get('/show',[HomeController::class,'show']);
//     Route::get('/add',[HomeController::class,'add']);
// });