<?php

namespace App\Http\Controllers\Stuff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{    
    public function index(){
    	return view('stuff.dashboard');
    }
    
    public function profile(){
    	return view('stuff.profile');
    }
    
}
