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
            
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        
        $response = request()->image->move(public_path('uploads/images'), $imageName);
        
        // $user= Sentinel::registerAndActivate($request->all());
        
        $data= $request->all();
        
        $data['photo']= $imageName;
        
        $user= Sentinel::registerAndActivate($data);
        
    	if($user) {
            $notification=array(
                'message'=>'New User Added Successfully!',
                'alert-type'=>'success'
            );
               return Redirect()->back()->with($notification);

        }

    }



    public function updateRegisteredUserData(Request $request, $id) {

        $userId = Sentinel::findById($id);
        
        // $userId = Sentinel::findById($id);
            
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        
        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        
        $response = request()->image->move(public_path('uploads/images'), $imageName);
        
        // $user= Sentinel::registerAndActivate($request->all());
        
        $data= $request->all();
        
        $data['photo']= $imageName;
        
        $user=Sentinel::update($userId, $data);

    	if($user) {
            $notification=array(
                'message'=> 'User Information Updated Successfully!',
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
