<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Sentinel;

use App\Post;

use App\Library;

use App\Notice;

use App\User;

use App\Registereds;

use App\Classroom;

class NoticeController extends Controller
{
    public function index() {
        return view('admins.postNotice');
    }
    
    public function postNotice(Request $request) {

        $data= $request->all();

        try{
        
        request()->validate([
            'file' => "required|mimes:pdf|max:10000",
        ]);

        
        $fileName = time().'.'.request()->file->getClientOriginalExtension();
        
        $response = request()->file->move(public_path('uploads/library'), $fileName);
        
        $data= $request->all();
        
        $data['file']= $fileName;

        }catch (\Exception $e) {

        }finally{
        
        $uploadFile= Notice::create($data);
        
    	if($uploadFile) {
            $notification=array(
                'message'=>'Notice Posted Successfully!',
                'alert-type'=>'success'
            );
               return Redirect()->back()->with($notification);

        }

    }

    }

    public function userHome() {

        $totalUsers= User::count();
        $totalPosts= Post::count();
        $totalNotices= Notice::count();
        $totalBooks= Library::count();
        $totalClassrooms= Classroom::count();
        $totalEnrolledStudents= Registereds::distinct()->get(['student_id'])->count();


        $notices= Notice::all();
        return view('users.index')
            ->with('notices',$notices)
            ->with('totalUsers',$totalUsers)
            ->with('totalPosts',$totalPosts)
            ->with('totalNotices',$totalNotices)
            ->with('totalBooks',$totalBooks)
            ->with('totalClassrooms',$totalClassrooms)
            ->with('totalEnrolledStudents',$totalEnrolledStudents);
            
    }
    
    public function userViewNotice($id) {
        $viewNotice= Notice::findorFail($id);
        return view('users.singleNotice',compact('viewNotice'));
    }
    
    public function adminViewNotice() {
        $notices= Notice::all();
        return view('admins.allNotices')->with('notices',$notices);
    }

}
