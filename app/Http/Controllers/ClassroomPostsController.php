<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;

use App\Classroom;

use App\Registereds;

use App\ClassroomPosts;


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

}
