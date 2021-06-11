<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\User;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class StuffController extends Controller
{
    public function index(){

		$stuffs = User::orderBy('id','asc')->where('user_role', 3)->get();
		return view('admin.pages.stuffs.all', compact('stuffs'));

    }

    public function create(){
		return view('admin.pages.stuffs.create');
    }

    public function store(Request $request){
    	$request->validate([
			'name'     => 'required|max:255|string',
			'username' => 'required|max:255|string|unique:users',
			'email'    => 'required|unique:users|string',
			'password' => 'required|max:1000',
			'gender'   => 'required|numeric',
			'phone'    => 'unique:users',
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000|dimensions:max_height=1000,max_width=1000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);


		$stuff = new User;

		$stuff->name        = $request->name;
		$stuff->username    = $request->username;
		$stuff->email       = $request->email;
		$stuff->password    = Hash::make($request->password);
		$stuff->phone       = $request->phone;
		$stuff->address     = $request->address;
		$stuff->gender      = $request->gender;
		$stuff->bio         = $request->bio;


		$stuff->user_role   = 3;
		if ($request->is_approved == "on") {
			$stuff->is_approved = 1;
		}else{
			$stuff->is_approved = 0;
		}

		// single image upload 
		if( !is_null($request->image) ){
			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/Stuffs/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$stuff->image = $image_name;
		}

		$stuff->save();

		session()->flash('my_success', 'Congratulation!! New Stuff Registered');
		return redirect()->route('admin.stuffs.all');
    }

    public function edit($id){
    	$stuff = User::find($id);
    	return view('admin.pages.stuffs.edit', compact('stuff'));
    }

    public function update(Request $request, $id){
		$stuff = User::find($id);

		// validation
    	$request->validate([
			'name'     => 'required|max:255|string',
			'username' => 'required|max:255|string|unique:users,username,'.$stuff->id,
			'email'    => 'required|email|unique:users,email,'.$stuff->id,
			'password' => 'required|max:1000',
			'gender'   => 'required|numeric',
			'phone'    => 'unique:users,phone,'.$stuff->id,
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000|dimensions:max_height=1000,max_width=1000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);


    	// update text data
		$stuff->name        = $request->name;
		$stuff->username    = $request->username;
		$stuff->email       = $request->email;
		$stuff->password    = Hash::make($request->password);
		$stuff->phone       = $request->phone;
		$stuff->address     = $request->address;
		$stuff->gender      = $request->gender;
		$stuff->bio         = $request->bio;
		$stuff->user_role   = 3;
		if( $request->is_approved == "on" ){
			$stuff->is_approved = 1;
		}else{
			$stuff->is_approved = 0;
		}

		//single image upload 

		if( !is_null($request->image) ){

			// delete old image from location 
			if( File::exists( 'backend/images/Stuffs/'.$stuff->image) ){
                    File::delete( 'backend/images/Stuffs/'.$stuff->image);
            }


			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/Stuffs/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$stuff->image = $image_name;
		}

		$stuff->save();


		session()->flash('my_success', 'Congratulation!! Stuff Updated');
		return redirect()->route('admin.stuffs.all');
    }

    public function delete(Request $request, $id){
		$stuff = User::find($id);

		// delete image from location if any
		if( File::exists( 'backend/images/Stuffs/'.$stuff->image) ){
           File::delete( 'backend/images/Stuffs/'.$stuff->image);
        }


		// delete this user  
		$stuff->delete();

		session()->flash('my_success', 'Congratulation!! Stuff Deleted');
		return redirect()->route('admin.stuffs.all');
    }


}
