<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'rollno';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = ['full_name', 'marks', 'city', 'stu_age'];
}
