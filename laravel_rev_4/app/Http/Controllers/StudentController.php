<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//grouping via controllers

class StudentController extends Controller
{
    function show(){
        return "Show Student List";
    }
    function add(){
        return "Add a Student";
    }
    function delete(){
        return "Delete a student";
    }
    function about($name){
        return "Student name is $name";
    }
}
