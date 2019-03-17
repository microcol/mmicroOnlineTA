<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classroom;

use App\Registereds;

use App\ClassroomPosts;

use DB;

use Illuminate\Support\Facades\Input;

use Sentinel;


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


    public function userClassroomPanel() {

        $getCurrentStudentId= Sentinel::getUser()->id;

        $displayRegisteredsClassroooms= DB::table('Registereds')
            ->where('student_id',$getCurrentStudentId)
            ->get();

        return view('users.classroom')->with('displayRegisteredsClassroooms',$displayRegisteredsClassroooms);

    }


    public function enrollCourse(Request $request) {

        $getClassCode= $request->validate_classroom_code;

        $checkClassCode= DB::table('Classrooms')
            ->where('classroom_code',$getClassCode)
            ->get();

        $input = Input::all();

        $student= DB::table('users')
            ->where('id',$input['student_id'])
            ->get();

        if(count($checkClassCode)>0) {


            DB::table('registereds')->insert(
                [
                'student_id'=>$student[0]->id,
                'classroom_id'=>$checkClassCode[0]->id,
                'full_name'=>$student[0]->full_name,
                'course_title'=> $checkClassCode[0]->course_title,
                'course_code'=>$checkClassCode[0]->course_code,
                'classroom_code'=>$checkClassCode[0]->classroom_code,
                
                ]
                  );	
  
            return redirect()->back();
        }
        
        else {

            return ('You entered wrong Classroom Code');

        }

    }


    public function postToClassroom($id) {
        $getClassroomInfo= Classroom::findorFail($id);
        return view('admins.postClassroom',compact('getClassroomInfo'));
    }


    public function classroom_details($classroom_id) {

        $getUserId= Sentinel::getUser()->id;
        $getClassroomInfo= Classroom::findorFail($classroom_id);

        $getUserInfos= DB::table('users')
            ->select('users.photo')
            ->where('id',$getUserId)
            ->get();
            
            $classroomAllPosts= DB::table('classroomposts')
                ->join('users','classroomposts.user_id','users.id')
                ->select('classroomposts.*','users.full_name','users.photo')
                ->where('classroom_id',$getClassroomInfo->id)
                ->orderBy('id','DESC')
                ->get();

        return view('users.classroom_details',compact('getClassroomInfo'))
            ->with('getUserInfos',$getUserInfos)
            ->with('classroomAllPosts',$classroomAllPosts);
    }


}
