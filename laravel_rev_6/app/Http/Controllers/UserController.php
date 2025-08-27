<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //usually we use models but using db directly

class UserController extends Controller
{
    // function user(){
    //     // return "User Function Called.";
    //     // return DB::select('select * from student'); //there you go
    //     $users = DB::select('select * from student');
    //     return view('users',['users'=>$users]); //here 2nd 'users' is key
    // }

    //now using models
    function getStudents(){
        $data = new \App\Models\Student;
        echo $data->testfun();
        $student= \App\Models\Student::all();
        return $student;
    }
}
