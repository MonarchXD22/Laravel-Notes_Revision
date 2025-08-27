<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get("/test",function(){
    return ["name"=>"Anil Sidhu", "channel"=>"code Step by Step"];
});

Route::get('/students',[StudentController::class,'list']);
Route::post('/add',[StudentController::class,'addStudent']);
Route::put('/update',[StudentController::class,'updateStudent']);
Route::delete('/delete/{rollno}',[StudentController::class,'deleteStudent']);
Route::get('/search/{full_name}',[StudentController::class,'searchStudent']);