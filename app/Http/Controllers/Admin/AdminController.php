<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class AdminController extends Controller
{
    public function index(){

		$admins = User::orderBy('id','asc')->where('user_role', 1)->paginate(5);
		return view('admin.pages.admins.all_admins', compact('admins'));

    }

    public function create(){
		return view('admin.pages.admins.create_admins');
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


		$admin = new User;

		$admin->name        = $request->name;
		$admin->username    = $request->username;
		$admin->email       = $request->email;
		$admin->password    = Hash::make($request->password);
		$admin->phone       = $request->phone;
		$admin->address     = $request->address;
		$admin->gender      = $request->gender;
		$admin->bio         = $request->bio;
		$admin->user_role   = 1;
		$admin->is_approved = 1;

		// single image upload 

		if( !is_null($request->image) ){
			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/Admins/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$admin->image = $image_name;
		}

		$admin->save();

		session()->flash('my_success', 'Congratulation!! New Admin Registered');
		return redirect()->route('admin.admins.all');
    }

    public function edit($id){
    	$admin = User::find($id);
    	return view('admin.pages.admins.edit', compact('admin'));
    }

    public function update(Request $request, $adminId){
		$admin = User::find($adminId);
    	$request->validate([
			'name'     => 'required|max:255|string',
			'username' => 'required|max:255|string|unique:users,username,'.$admin->id,
			'email'    => 'required|email|unique:users,email,'.$admin->id,
			'password' => 'required|max:1000',
			'gender'   => 'required|numeric',
			'phone'    => 'unique:users,phone,'.$admin->id,
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000|dimensions:max_height=1000,max_width=1000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);


    	// update text data
		$admin->name        = $request->name;
		$admin->username    = $request->username;
		$admin->email       = $request->email;
		$admin->password    = Hash::make($request->password);
		$admin->phone       = $request->phone;
		$admin->address     = $request->address;
		$admin->gender      = $request->gender;
		$admin->bio         = $request->bio;
		$admin->user_role   = 1;
		$admin->is_approved = 1;


		//single image upload 

		if( !is_null($request->image) ){

			// delete old image from location 
			if( File::exists( 'backend/images/Admins/'.$admin->image) ){
                    File::delete( 'backend/images/Admins/'.$admin->image);
            }


			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/Admins/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$admin->image = $image_name;
		}

		$admin->save();

		session()->flash('my_success', 'Congratulation!! Admin Updated');
		return redirect()->route('admin.admins.all');
    }

    public function delete(Request $request, $id){
		$admin = User::find($id);

		// delete image from location if any
		if( File::exists( 'backend/images/Admins/'.$admin->image) ){
           File::delete( 'backend/images/Admins/'.$admin->image);
        }


		// delete this user  
		$admin->delete();

		session()->flash('my_success', 'Success!! Admin Deleted');
		return redirect()->route('admin.admins.all');
    }


}
