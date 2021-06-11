<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\User;
use App\Course;
use App\Notice;
use App\Library;
use App\Club;

class FrontendController extends Controller
{
    public function index(){
    	$courses = Course::orderBy('id', 'asc')->get();
    	$clubs = Club::orderBy('id', 'asc')->get();
    	$notices = Notice::orderBy('created_at', 'desc')->take(4)->get();
    	$libraries = Library::orderBy('id', 'desc')->take(6)->get();
    	$teachers = User::where('user_role',2)->get();
    	return view('frontend.root', compact('courses', 'notices', 'teachers', 'libraries', 'clubs'));
    }
}
