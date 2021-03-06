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


        
        $data= $request->all();
        //dd($data);

        try{

        
        $request->validate([
            'file' => "required|mimes:pdf|max:10000",
        ]);

        $fileName = time().'.'.$request->file->getClientOriginalExtension();
        
        $response = $request->file->move(public_path('uploads/library'), $fileName);
        
         
        $data['file']= $fileName;
        
        }catch (\Exception $e) {

        }finally{

        
        $uploadFile= ClassroomPosts::create($data);

        
    	if($uploadFile) {
            $notification=array(
                'message'=>'Notice Posted Successfully!',
                'alert-type'=>'success'
            );
               return Redirect()->back()->with($notification);

        }

   }
    }


    public function classroomComment(Request $request) {

        $saveComments= ClassroomComments::create($request->all());
        
        $getClassroomsComment= DB::table('classroomcomments')
            ->join('classroomposts','classroomcomments.classroompost_id','classroomposts.id')
            ->join('users','classroomcomments.user_id','users.id')
            ->select('classroomcomments.classroompost_id','classroomcomments.comment','classroomcomments.created_at','users.full_name','users.photo')
            ->orderBy('classroomcomments.id','ASC')
            ->get();            

        return redirect()->back()->with('getClassroomsComment',$getClassroomsComment);

    }

    

}
