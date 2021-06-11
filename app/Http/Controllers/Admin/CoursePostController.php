<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Course;
use App\CoursePost;
use App\PostFile;
use App\PostComment;
use App\Batch;
use App\User;
use App\Semester;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class CoursePostController extends Controller
{

    public function store(Request $request){
    	$request->validate([
			'course_id' => 'required|numeric',
			'user_id'   => 'required|numeric',
			'files'     => 'max:10000'
    	],[
    		
    	]);

		$coursePost = new CoursePost;
		
		$coursePost->course_id = $request->course_id;
		$coursePost->user_id   = $request->user_id;
		$coursePost->post      = $request->post;

		$coursePost->save();


		// multiple file upload 
		$courseName = Str::slug(Course::find($request->course_id)->name);
		if( !is_null( $request->file('files') ) ){
			foreach ($request->file('files') as $file) {

				// rename & upload files to uploads folder
	            $name = $courseName . uniqid() . '_' . time(). '.' . $file->getClientOriginalExtension();
	            $path = 'backend/uploads/';
	            $file->move($path, $name);

				// save every file in PostFile
				$postFile = new PostFile;
				$postFile->course_post_id = $coursePost->id;
				$postFile->file = $name;
				$postFile->save();
			}
		}

		session()->flash('my_success', 'New Post Added');
		return redirect()->route('admin.courses.show', $request->course_id );
    }

    public function edit($id){
    	$course = Course::find($id);
    	$batches = Batch::orderBy('name', 'asc')->get();
    	$teachers = User::orderBy('name', 'asc')->where('user_role', 2)->get();
    	$semesters = Semester::orderBy('start_date', 'desc')->get();
    	return view('admin.pages.courses.edit', compact('course', 'batches', 'teachers', 'semesters'));
    }

    public function show($id){
    	$course = Course::find($id);
    	$coursePosts = CoursePost::orderBy('created_at', 'desc')->get();
    	return view('admin.pages.courses.show', compact('course', 'coursePosts'));
    }

    public function update(Request $request, $id){
		
    }

    public function delete(Request $request, $id){
    	// get post
		$coursePost = CoursePost::find($id);

    	// get post files
    	$postFiles = PostFile::where( 'course_post_id', $id )->get();

		// delete post files
		foreach ($postFiles as $file) {			
			if( File::exists( 'backend/uploads/'.$file->file) ){
	           File::delete( 'backend/uploads/'.$file->file );
	        }
		}

        // delete post files from database
		foreach ($postFiles as $file) {
			$file->delete();
		}
    	
        // get post comments
		$postComments = PostComment::where( 'course_post_id', $id )->get();

        // delete post comments
		foreach ($postComments as $comment) {
			$comment->delete();
		}


		// delete this post  
		$coursePost->delete();

		session()->flash('my_success', 'Post Deleted');
		return redirect()->back();
    }


    // comment
    public function commentStore(Request $request){

    	$request->validate([
			'course_post_id' => 'required|numeric',
			'user_id'        => 'required|numeric',
			'comment'        => 'required'
    	],[
    		
    	]);

		$postComment = new PostComment;
		
		$postComment->course_post_id = $request->course_post_id;
		$postComment->user_id        = $request->user_id;
		$postComment->comment        = $request->comment;

		$postComment->save();

		return redirect()->back();
    }



    public function commentDelete(Request $request, $id){
    	
    	// get comment
		$courseComment = PostComment::find($id);

		// delete this comment  
		$courseComment->delete();

		return redirect()->back();
    }


}
