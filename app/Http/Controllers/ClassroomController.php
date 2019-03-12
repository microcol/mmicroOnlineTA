<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classroom;

class ClassroomController extends Controller
{
    public function index() {
        $courseInfo= Classroom::all();
        
        $generateClassroomCode= substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 6);
        //dd($courseInfo,$generateClassroomCode);
        return view('admins.classroom_panel')
                ->with('courseInfo',$courseInfo)
                ->with('generateClassroomCode',$generateClassroomCode);
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

    public function createClassroomCode() {

        $generateClassroomCode= substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, 6);

        $courseInfo= Classroom::all();
        
        return Redirect()->back()->with('generateClassroomCode',$generateClassroomCode);

    } 

    public function viewClassrooms() {
        
        $viewClassrooms= Classroom::OrderBy('created_at','DESC')->get();

        return view('admins.viewClassroom')->with('viewClassrooms',$viewClassrooms); 


    }

    public function deleteClassrooms($id) {

        $deleteClassroom= Classroom::findorFail($id);
        $deleteClassroom->delete();

        return Redirect()->back();

    }


}
