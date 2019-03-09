<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

use App\Comment;

use Sentinel;

use DB;


class CommentController extends Controller
{
    
    public function postComment(Request $request) {

        
		
        $data=Comment::create($request->all());
		
		
        $singleBlog=DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.full_name')
            ->where('posts.id',$data->post_id)
            ->first();		
        return \Redirect::route('single_blog_post', [$data->post_id])->with('singleBlog', $singleBlog);
        // return view('users.single_blog_post')->with('singleBlog',$singleBlog);
        
    }

    public function getComment($id) {

        $data=Comment::create($request->all());
		
		
        // $singleBlog=DB::table('posts')
        //     ->join('users','posts.user_id','users.id')
        //     ->select('posts.*','users.full_name')
        //     ->where('posts.id',$data->post_id)
        //     ->first();		
        
        $getComment=DB::table('posts')
        ->join('users','posts.user_id','users.id')
        ->select('posts.*','users.full_name')
        ->where('posts.id',$data->post_id)
        ->first();		
    
		
        return view('users.single_blog_post')->with('getComment',$getComment);


    }


}
