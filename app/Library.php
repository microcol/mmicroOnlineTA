<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = [
        'book_title', 'course_code', 'file',
    ];
}
