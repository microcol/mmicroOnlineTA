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

    public function logout() {
    	$logout=Sentinel::logout();

    	if($logout) {
    		return redirect('/login');
    	}
    	else
    		return redirect('/login'); 
    }

}
