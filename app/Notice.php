<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'notice_title', 'description', 'department', 'file',
    ];

    protected $dates = ['date_begin', 'date_end'];

}
