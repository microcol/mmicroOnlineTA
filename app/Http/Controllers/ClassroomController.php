<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Classroom;

use App\Registereds;

use App\ClassroomPosts;

use App\ClassroomComments;

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

        if( $getClassCode == $checkClassCode ) {
            return ('You are already enrolled in this course');
        }    

        elseif(count($checkClassCode)>0) {


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
        // $getId= ClassroomPosts::findorFail($classroom_id);
        // dd($getId);
        // $getClassroomsComment= DB::table('classroomcomments')
        //     ->orderBy('created_at','DESC')
        //     ->get();


        $getClassroomsComment= DB::table('classroomcomments')
            ->join('classroomposts','classroomcomments.classroompost_id','classroomposts.id')
            ->join('users','classroomcomments.user_id','users.id')
            ->select('classroomcomments.classroompost_id','classroomcomments.comment','classroomcomments.created_at','users.full_name','users.photo')
            ->orderBy('classroomcomments.id','ASC')
            ->get();

        // dd($getClassroomsComment);  
        
        
        
        return view('users.classroom_details',compact('getClassroomInfo'))
            ->with('getUserInfos',$getUserInfos)
            ->with('classroomAllPosts',$classroomAllPosts)
            ->with('getClassroomsComment',$getClassroomsComment);
    }


    public function viewClasswiseStudents($id) {
        
        $getClasswiseStudents= DB::table('classrooms')
        ->join('registereds','classrooms.id','registereds.classroom_id')
        ->join('users','registereds.student_id','users.id')
        ->select('classrooms.*','registereds.full_name','registereds.student_id','registereds.classroom_id','users.varsity_id','users.email','users.photo')
        ->where('registereds.classroom_id',$id)
        ->get();
        


        return view('admins.getclasswiseStudents')->with('getClasswiseStudents',$getClasswiseStudents);

    }


    public function deleteEnrolledStudent($student_id) {

        dd($student_id);
        

    }
    
    
    public function uneroll_students($id) {

        $unerollStudent= Registereds::findorFail($id);
        $unerollStudent->delete();

        $getCurrentStudentId= Sentinel::getUser()->id;

        $displayRegisteredsClassroooms= DB::table('Registereds')
            ->where('student_id',$getCurrentStudentId)
            ->get();

        return redirect()->back()->with('displayRegisteredsClassroooms',$displayRegisteredsClassroooms);

    }




}
