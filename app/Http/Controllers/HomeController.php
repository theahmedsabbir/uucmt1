<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // echo "<pre>";
        // print_r(Auth::user()->user_role);
        // echo "</pre>";
        // exit();


        if (Auth::user()->user_role == 1) { //admin
            echo "admin's dashboard";
            // return view('admin.dashboard');
        } else if( Auth::user()->user_role == 2 ) {   //teacher
            echo "teacher's dashboard";
            // return view('teacher.dashboard');
        } else if( Auth::user()->user_role == 3 ) {   //stuff
            echo "stuff's dashboard";
            // return view('stuff.dashboard');
        } else if( Auth::user()->user_role == 4 ) {   //student
            echo "student's dashboard";
            // return view('student.dashboard');
        } else{
            echo "invalid login";
        }
        
    }
}
