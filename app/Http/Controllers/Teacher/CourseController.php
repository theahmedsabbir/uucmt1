<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Course;
use App\Exam;
use App\CoursePost;
use App\Batch;
use App\User;
use App\Semester;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;
use Auth;

class CourseController extends Controller
{
    public function index(){
    	$teacher = Auth::user();
		$courses = $teacher->courses;
		if ($courses->count() == 0) {
			session()->flash('my_error', 'You havent been assigned to any courses'); 
			return redirect()->back();
		}
		return view('teacher.pages.courses.all', compact('courses'));

    }

    public function edit($id){
    	$course = Course::find($id);
    	$batches = Batch::orderBy('name', 'asc')->get();
    	$teachers = User::orderBy('name', 'asc')->where('user_role', 2)->get();
    	$semesters = Semester::orderBy('start_date', 'desc')->get();
    	return view('teacher.pages.courses.edit', compact('course', 'batches', 'teachers', 'semesters'));
    }

    public function show($id){
    	$course = Course::find($id);
    	$coursePosts = CoursePost::orderBy('created_at', 'desc')->where( 'course_id', $id )->get();
    	$exams = Exam::orderBy( 'date','desc' )->where( 'course_id', $course->id )->get();
    	$examCount = Exam::where( 'course_id', $course->id )
    					->where( 'is_completed', 0 )
    					->where( 'is_open', 1 )
    					->count();
    	return view('teacher.pages.courses.show', compact('course', 'coursePosts','exams','examCount'));
    }

    public function update(Request $request, $id){
		$course = Course::find($id);
		
		// validation
    	$request->validate([
			'name'        => 'required',
			'code'        => 'required',
			'batch_id'    => 'required',
			'user_id'     => 'required',
			'semester_id' => 'required',
			'image'       => 'image|mimes:jpg,jpeg,png|max:5000'
    	],[
    		
    	]);


    	// update text data
		$course->batch_id    = $request->batch_id;
		$course->user_id     = $request->user_id;
		$course->semester_id = $request->semester_id;
		$course->name        = $request->name;
		$course->code        = $request->code;
		$course->description = $request->description;
		$course->credit      = $request->credit;
		$course->link        = $request->link;

		//single image upload 
		if( !is_null($request->image) ){

			// delete old image from location 
			if( File::exists( 'backend/images/courses/'.$course->image) ){
                    File::delete( 'backend/images/Courses/'.$course->image);
            }


			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/courses/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$course->image = $image_name;
		}
		$course->save();


		session()->flash('my_success', 'Congratulation!! Course Updated');
		return redirect()->route('teacher.courses.all');
    }


}
