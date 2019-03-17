<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class  classroomcomments extends Model
{
    protected $fillable = [
        'user_id', 'classroompost_id', 'comment',
    ];
}
