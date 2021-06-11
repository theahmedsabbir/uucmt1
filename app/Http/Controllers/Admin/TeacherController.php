<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\User;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class TeacherController extends Controller
{
    public function index(){

		$teachers = User::orderBy('designation','asc')->where('user_role', 2)->paginate(12);
		return view('admin.pages.teachers.all', compact('teachers'));

    }

    public function create(){
		return view('admin.pages.teachers.create');
    }

    public function store(Request $request){
    	$request->validate([
			'name'     => 'required|max:255|string',
			'username' => 'required|max:255|string|unique:users',
			'email'    => 'required|unique:users|string',
			'password' => 'required|max:1000',
			'gender'   => 'required|numeric',
			'phone'    => 'unique:users',
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000|dimensions:max_height=500,max_width=500'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);


		$teacher = new User;

		$teacher->name        = $request->name;
		$teacher->username    = $request->username;
		$teacher->email       = $request->email;
		$teacher->password    = Hash::make($request->password);
		$teacher->phone       = $request->phone;
		$teacher->address     = $request->address;
		$teacher->gender      = $request->gender;
		$teacher->designation      = $request->designation;
		$teacher->bio         = $request->bio;
		$teacher->user_role   = 2;
		if ($request->is_approved == "on") {
			$teacher->is_approved = 1;
		}

		// single image upload 
		if( !is_null($request->image) ){
			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/Teachers/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$teacher->image = $image_name;
		}

		$teacher->save();

		session()->flash('my_success', 'Congratulation!! New Teacher Registered');
		return redirect()->route('admin.teachers.all');
    }

    public function edit($id){
    	$teacher = User::find($id);
    	return view('admin.pages.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, $teacherId){
		$teacher = User::find($teacherId);
    	$request->validate([
			'name'     => 'required|max:255|string',
			'username' => 'required|max:255|string|unique:users,username,'.$teacher->id,
			'email'    => 'required|email|unique:users,email,'.$teacher->id,
			'password' => 'required|max:1000',
			'gender'   => 'required|numeric',
			'phone'    => 'unique:users,phone,'.$teacher->id,
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000|dimensions:max_height=500,max_width=500'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);


    	// update text data
		$teacher->name        = $request->name;
		$teacher->username    = $request->username;
		$teacher->email       = $request->email;
		$teacher->password    = Hash::make($request->password);
		$teacher->phone       = $request->phone;
		$teacher->address     = $request->address;
		$teacher->gender      = $request->gender;
		$teacher->designation = $request->designation;
		$teacher->bio         = $request->bio;
		$teacher->user_role   = 2;
		if( $request->is_approved == "on" ){
			$teacher->is_approved = 1;
		}else{
			$teacher->is_approved = 0;
		}

		//single image upload 

		if( !is_null($request->image) ){

			// delete old image from location 
			if( File::exists( 'backend/images/Teachers/'.$teacher->image) ){
                    File::delete( 'backend/images/Teachers/'.$teacher->image);
            }


			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/Teachers/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$teacher->image = $image_name;
		}

		$teacher->save();

		session()->flash('my_success', 'Congratulation!! Teacher Updated');
		return redirect()->route('admin.teachers.all');
    }

    public function delete(Request $request, $id){
		$teacher = User::find($id);

		// delete image from location if any
		if( File::exists( 'backend/images/Teachers/'.$teacher->image) ){
           File::delete( 'backend/images/Teachers/'.$teacher->image);
        }


		// delete this user  
		$teacher->delete();

		session()->flash('my_success', 'Congratulation!! Teacher Deleted');
		return redirect()->route('admin.teachers.all');
    }


}
