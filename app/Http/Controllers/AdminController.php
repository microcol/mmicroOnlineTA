<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Sentinel;

class AdminController extends Controller
{
    public function adminPanel() {
    	
    	return view('admins.panel');
    }
}
