<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registereds extends Model
{
    protected $fillable = [
        'student_id', 'classroom_id', 'full_name', 'course_title', 'course_code', 'classroom_code',
    ];
}
