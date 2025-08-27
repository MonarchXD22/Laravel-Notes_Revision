<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    //till hasfactory if the table's name have s like students then it will autodetect but if it dosnt
    //then
    protected $table = "students";//well here we have it in plural but taking an assumption
    //we can even add functions here
    function testFun(){
        return "this is dummy function.";
    }
}
