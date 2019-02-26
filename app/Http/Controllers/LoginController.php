<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;


class LoginController extends Controller
{
    public function login() {
    	return view('admins.login');
    }

    public function dashboard(Request $request) {

    	Sentinel::authenticate($request->all());

    	//return Sentinel::check();

        $userType=Sentinel::getUser()->user_type;

        
        if($userType=='employee') {
            return redirect('/dashboard');
        }
        else if($userType=='student') {
            //return redirect('/');
            
            return "You are not an Employee";
        }    
    	
    }


    public function studentDashboard(Request $request) {

    	Sentinel::authenticate($request->all());

    	//return Sentinel::check();

        $userType=Sentinel::getUser()->user_type;

        
        if($userType=='student') {
            return redirect('/profile');
        }
        else if($userType=='employee') {
            //return redirect('/');
            
            return "You are not a Student";
        }    
        
        else {
            return "Wrong Information Provided!!!";
        }

    }


    public function logout() {
    	$logout=Sentinel::logout();

    	if($logout) {
    		return redirect('/login');
    	}
    	else
    		return redirect('/login'); 
    }
    
    public function student_logout() {
    	$student_logout=Sentinel::logout();

    	if($student_logout) {
    		return redirect('/');
    	}
    	else
    		return redirect('/'); 
    }

}
