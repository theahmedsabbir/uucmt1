<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\User;
use App\Batch;
use App\StudentBatch;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class StudentController extends Controller
{
    public function index(){

		$students = User::orderBy('id','asc')->where('user_role', 4)->get();
		return view('admin.pages.students.all', compact('students'));

    }

    public function create(){
    	$batches = Batch::orderBy('name', 'asc')->get();
		return view('admin.pages.students.create', compact('batches'));
    }

    public function store(Request $request){
    	$request->validate([
			'name'     => 'required|max:255|string',
			'username' => 'required|max:255|string|unique:users',
			'email'    => 'required|unique:users|string',
			'password' => 'required|max:1000',
			'gender'   => 'required|numeric',
			'batch'   => 'required|numeric',
			'phone'    => 'unique:users',
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000|dimensions:max_height=1000,max_width=1000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);


		$student = new User;

		$student->name        = $request->name;
		$student->username    = $request->username;
		$student->email       = $request->email;
		$student->password    = Hash::make($request->password);
		$student->phone       = $request->phone;
		$student->address     = $request->address;
		$student->gender      = $request->gender;
		$student->bio         = $request->bio;


		$student->user_role   = 4;
		if ($request->is_approved == "on") {
			$student->is_approved = 1;
		}else{
			$student->is_approved = 0;
		}

		// single image upload 
		if( !is_null($request->image) ){
			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/Students/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$student->image = $image_name;
		}

		$student->save();


		// saving student batch
		$studentBatch = new StudentBatch;
		$studentBatch->user_id = $student->id;
		$studentBatch->batch_id = $request->batch;
		$studentBatch->save();

		session()->flash('my_success', 'Congratulation!! New Student Registered');
		return redirect()->route('admin.students.all');
    }

    public function edit($id){
    	$student = User::find($id);
    	$batches = Batch::orderBy('name', 'asc')->get();
    	return view('admin.pages.students.edit', compact('student', 'batches'));
    }

    public function update(Request $request, $id){
		$student = User::find($id);

		// validation
    	$request->validate([
			'name'     => 'required|max:255|string',
			'username' => 'required|max:255|string|unique:users,username,'.$student->id,
			'email'    => 'required|email|unique:users,email,'.$student->id,
			'password' => 'required|max:1000',
			'gender'   => 'required|numeric',
			'batch'   => 'required|numeric',
			'phone'    => 'unique:users,phone,'.$student->id,
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000|dimensions:max_height=1000,max_width=1000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);


    	// update text data
		$student->name        = $request->name;
		$student->username    = $request->username;
		$student->email       = $request->email;
		$student->password    = Hash::make($request->password);
		$student->phone       = $request->phone;
		$student->address     = $request->address;
		$student->gender      = $request->gender;
		$student->bio         = $request->bio;
		$student->user_role   = 4;
		if( $request->is_approved == "on" ){
			$student->is_approved = 1;
		}else{
			$student->is_approved = 0;
		}

		//single image upload 

		if( !is_null($request->image) ){

			// delete old image from location 
			if( File::exists( 'backend/images/Students/'.$student->image) ){
                    File::delete( 'backend/images/Students/'.$student->image);
            }


			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/Students/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$student->image = $image_name;
		}

		$student->save();



		// updating studentBatch table
		$studentBatch = StudentBatch::where( 'user_id', $student->id )->first();
		if (!is_null($studentBatch)) {			
			$studentBatch->user_id = $student->id;
			$studentBatch->batch_id = $request->batch;
			$studentBatch->save();
		} else {	
			$studentBatch = new StudentBatch;
			$studentBatch->user_id = $student->id;
			$studentBatch->batch_id = $request->batch;
			$studentBatch->save();			
		}

		// dd($studentBatch);


		session()->flash('my_success', 'Congratulation!! Student Updated');
		return redirect()->route('admin.students.all');
    }

    public function delete(Request $request, $id){
		$student = User::find($id);
        $studentBatch = StudentBatch::where('user_id', $student->id )->get();


		// delete image from location if any
		if( File::exists( 'backend/images/Students/'.$student->image) ){
           File::delete( 'backend/images/Students/'.$student->image);
        }

        // delete studentBatch dependencies
        foreach ($studentBatch as $sb) {
        	$sb->delete();
        }


		// delete this user  
		$student->delete();

		session()->flash('my_success', 'Congratulation!! Student Deleted');
		return redirect()->route('admin.students.all');
    }


}
