<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('user-form','user-form');
Route::post('adduser',[UserController::class,'addUser']);
//this rout is made for view and our usercontroller as you can see we have imported the controller also in this post route adduser is the action of form(user-form) that we made and when we click submit the post request is sent from the form through this post route in the second column [UserController::class,'addUser'] the addUser is the function that is called upon the action and is shown on the separate page "adduser".check the controller for more explaination.