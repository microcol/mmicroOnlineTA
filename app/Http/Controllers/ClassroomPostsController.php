<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;

use App\Classroom;

use App\Registereds;

use App\ClassroomPosts;

use App\ClassroomComments;

use DB;


class ClassroomPostsController extends Controller
{
    public function postDataToClassroom(Request $request) {

        request()->validate([
            'file' => "required|mimes:pdf|max:10000",
        ]);

        
        $fileName = time().'.'.request()->file->getClientOriginalExtension();
        
        $response = request()->file->move(public_path('uploads/library'), $fileName);
        
        $data= $request->all();
        
        $data['file']= $fileName;
        
        $uploadFile= ClassroomPosts::create($data);
        
    	if($uploadFile) {
            $notification=array(
                'message'=>'Notice Posted Successfully!',
                'alert-type'=>'success'
            );
               return Redirect()->back()->with($notification);

        }


    }


    public function classroomComment(Request $request) {

        $saveComments= ClassroomComments::create($request->all());
        $getComments= ClassroomPosts::all();

        // $getUserId= Sentinel::getUser()->id;
        // $getClassroomInfo= Classroom::all();

        // $classroomAllPosts= DB::table('classroomposts')
        //     ->join('users','classroomposts.user_id','users.id')
        //     ->select('classroomposts.*','users.full_name','users.photo')
        //     ->where('classroom_id',$getClassroomInfo[0]->id)
        //     ->orderBy('id','DESC')
        //     ->get();

        // $getClassroomsComment= DB::table('classroomcomments')
        //     ->join('classroomposts','classroomcomments.classroompost_id','classroomposts.id')
        //     ->join('users','classroomcomments.user_id','users.id')
        //     ->select('classroomcomments.*','users.full_name','users.photo')
        //     ->where('classroomcomments.classroompost_id',$getComments->id)
        //     ->get();

        $getId= ClassroomComments::pluck('classroompost_id');
        // dd($getId);
        $getClassroomsComment= DB::table('classroomcomments')
            ->join('classroomposts','classroomcomments.classroompost_id','classroomposts.id')
            ->join('users','classroomcomments.user_id','users.id')
            ->select('classroomcomments.classroompost_id','classroomcomments.comment','classroomcomments.created_at','users.full_name','users.photo')
            ->where('classroomposts.id',$getId)
            ->get();
            

        return redirect()->back()->with('getClassroomsComment',$getClassroomsComment);

    }

    

}
