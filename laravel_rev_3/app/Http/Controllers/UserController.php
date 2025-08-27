<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request) {
        $request->validate([
            'username'=>'required | min:3 | max:15 | uppercase',//this uppercase is our custom rule
            'email'=>'required | email',//here rules are required min and max
            'password'=>'required',
            'gender'=>'required',
            'skill'=>'required'
        ],[
            'username.required'=>'username can not be empty',
            'username.min'=>'min name length should be 3+', //for every property add custom
        ]);//adding custom msg too
    }
}
