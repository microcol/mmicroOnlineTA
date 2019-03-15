<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseRegController extends Controller
{
    protected $fillable = [
        'student_id', 'classroom_id', 'full_name', 'course_title', 'course_code', 'classroom_code',
    ];
}
