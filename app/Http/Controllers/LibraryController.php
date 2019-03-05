<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classroom;

class LibraryController extends Controller
{
    public function index() {
        $courseInfo= Classroom::all();
        return view('admins.library')->with('courseInfo',$courseInfo);
    }
}
