<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function addUser(Request $request){
        echo $request->username;
        echo"<br>";
        echo $request->email;
        echo"<br>";
        echo $request->city;
    }
}
//this is the user controller that is called through the post route when the form is submitted and in this line     function addUser(Request $request){  Request contains the data submitted from the form of page user-form and weve displayed that.