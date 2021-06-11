<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Course;
use App\Exam;
use App\Result;
use App\CoursePost;
use App\Batch;
use App\User;
use App\Semester;
use Hash;
use Auth;

use Illuminate\Support\Str;
use Image; 
use File;

class ResultController extends Controller
{
	public function index(){
		$results = Result::orderBy('created_at')->where('user_id', Auth::user()->id )->get();
		return view('student.pages.results.all', compact('results'));
	}
}