<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use Sentinel;

use App\Post;

use App\Comment;


class PostController extends Controller
{
    public function postBlog(Request $request) {
        $postBlog= Post::create($request->all());

        if($postBlog) {
            $notification=array(
                'message'=> 'You Posted Successfully!',
                'alert-type'=>'success'
            );
               return Redirect()->back()->with($notification);

        }

    }

    public function viewBlog() {
        
        $viewBlogs=DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.full_name')
            ->get();

        return view('users.blog',compact('viewBlogs'));
    }
    
    public function viewBlogForAdmin() {
        
        $viewBlogs=DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.full_name')
            ->get();

        return view('admins.allBlogs',compact('viewBlogs'));
    }

    public function single_blog_post($id) {

        $singleBlog=DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.full_name')
            ->where('posts.id',$id)
            ->first();
        
        $comments = DB::table('comments')
            ->join('users','comments.user_id','users.id')
            ->select('comments.*','users.photo')
            ->where('post_id',$id)
            ->get();


        
        return view('users.single_blog_post')
            ->with('singleBlog',$singleBlog)
            ->with('comments',$comments);
    }
    
    public function viewSingleBlogForAdmin($id) {

        $singleBlog=DB::table('posts')
            ->join('users','posts.user_id','users.id')
            ->select('posts.*','users.full_name')
            ->where('posts.id',$id)
            ->first();

        return view('admins.viewSingleBlog')->with('singleBlog',$singleBlog);
    }
    
    




}
