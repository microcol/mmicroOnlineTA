<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classroom;

class ClassroomController extends Controller
{
    public function index() {
        $courseInfo= Classroom::all();
        return view('admins.classroom_panel')->with('courseInfo',$courseInfo);
    }

    public function createDepartment(Request $request) {
        $dept= Classroom::create($request->all());

        if($dept) {
            $notification=array(
                'message'=> 'Course Created Successfully!',
                'alert-type'=>'success'
            );
               return Redirect()->back()->with($notification);

        }

    }

    public function viewAllCourseCode() {
        
    } 

}
