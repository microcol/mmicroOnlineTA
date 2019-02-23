<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function userPanel() {
        return view('users.index');
    }

    public function blog() {
        return view('users.blog');
    }

    public function single_blog_post() {
        return view('users.single_blog_post');
    }

    public function classroom() {
        return view('users.classroom');
    }
    
    public function classroom_details() {
        return view('users.classroom_details');
    }
    
    public function library() {
        return view('users.library');
    }

}
