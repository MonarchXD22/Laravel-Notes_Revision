<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    function list(){
        return Student::all();
    }

    // function addStudent(Request $req){
    //     return $req->input();
    // } //testing thunder client post on add route

    function addStudent(Request $request){
        $student = new Student();
        $student->full_name=$request->full_name;
        $student->marks=$request->marks;
        $student->city=$request->city;
        $student->stu_age=$request->stu_age;
        if($student->save()){
            return ["result"=>"Student added."];
        } else{
            return ["result"=>"Operation Failed."];
        }
    }
    function updateStudent(Request $request){
        $student = Student::find($request->rollno);//when we use find
        $student->rollno=$request->rollno;
        $student->full_name=$request->full_name;
        $student->marks=$request->marks;
        $student->city=$request->city;
        $student->stu_age=$request->stu_age;
        if($student->save()){//and then we use save this basically updates the student
            return ["result"=>"Student updated."];
        } else{
            return ["result"=>"Operation failed."];
        }
    }
    function deleteStudent($rollno){
        $student = Student::destroy($rollno);
        if($student){
            return ["result"=>"Student deleted."];
        } else{
            return ["result"=>"Operation failed."];
        }
    }
    function searchStudent($name){
        $student = Student::where('full_name','like',"%$name%")->get();
        if($student){
            return ["result"=>$student];
        } else{
            return ["result"=>"Operation failed."];
        }
    }
}
