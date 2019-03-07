<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

use Sentinel;



class CommentController extends Controller
{
    
    public function postComment(Request $request) {

        $data=Comment::create($request->all());
        return view('users.single_blog_post');
        
    }


}
