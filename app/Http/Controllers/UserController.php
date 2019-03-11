<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;

use DB;

class UserController extends Controller
{

    public function userPanel() {
        return view('users.index');
    }

    public function blog() {
        return view('users.blog');
    }
    
    public function profile() {


        $viewBlogs=DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.full_name','users.photo')
            ->orderBy('posts.id', 'DESC')
            ->get();


        $userInfo=Sentinel::getUser();
        return view('users.profile')
            ->with('userInfo',$userInfo)
            ->with('viewBlogs',$viewBlogs);
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
