<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use Sentinel;



class RegisterController extends Controller
{
    public function registerEmployee() {
    	return view('admins.addFaculty');
    }

    public function registerStudent() {
        return view('admins.addStudent');
    }

    public function registration(Request $request) {

    	$user= Sentinel::registerAndActivate($request->all());
    
    	if($user) {
            $notification=array(
                'message'=>'New User Added Successfully!',
                'alert-type'=>'success'
            );
               return Redirect()->back()->with($notification);

        }

    }


    public function allTeachers() {
        $teachers=Sentinel::getUser()->where('user_type', 'employee')->get();
        return view('admins.allTeachers',compact('teachers'));

    }

    public function allStudents() {
        $students=Sentinel::getUser()->where('user_type', 'student')->get();
        return view('admins.allStudents',compact('students'));

    }

    public function deleteTeacher($id) {
        //$deleteTeacher=Sentinel::getUser($id)->delete();

  //      $deleteTeacher=Sentinel::getUser($id);
//        var_dump($deleteTeacher); die;
    //    $deleteTeacher->delete();

        $user = Sentinel::EloquentUser()->delete($id);
        var_dump($user); die;
        if($deleteTeacher) {
            $notification=array(
                'message'=>'Teachers Deleted Successfully!',
                'alert-type'=>'success'
            );
                return Redirect()->back()->with($notification);
        }

        else
                echo "Error";
    }

}
