<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
        'department', 'course_title', 'course_code', 'classroom_code',
    ];
}
