<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classroomposts extends Model
{
    protected $fillable = [
        'user_id', 'classroom_id', 'post', 'file',
    ];
}
