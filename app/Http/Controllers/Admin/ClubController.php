<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Club;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class ClubController extends Controller
{
    public function index(){

		$clubs = Club::orderBy('id','asc')->get();
		return view('admin.pages.clubs.all', compact('clubs'));

    }

    public function create(){
		return view('admin.pages.clubs.create');
    }

    public function store(Request $request){
    	$request->validate([
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);
		$club = new Club;

		$club->name        = $request->name;
		$club->description        = $request->description;
		$club->phone        = $request->phone;
		$club->email        = $request->email;

		// single image upload 
		if( !is_null($request->image) ){
			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/clubs/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$club->image = $image_name;
		}

		$club->save();

		session()->flash('my_success', 'Club Added');
		return redirect()->route('admin.clubs.all');
    }

    public function edit($id){
    	$club = Club::find($id);
    	return view('admin.pages.clubs.edit', compact('club'));
    }

    public function update(Request $request, $id){
		$club = Club::find($id);

		// validation
    	$request->validate([
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);


    	// update text data

		$club->name        = $request->name;
		$club->description        = $request->description;
		$club->phone        = $request->phone;
		$club->email        = $request->email;

		// single image upload 
		if( !is_null($request->image) ){


			// delete image from location if any
			if( File::exists( 'backend/images/clubs/'.$club->image) ){
	           File::delete( 'backend/images/clubs/'.$club->image);
	        }

			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/clubs/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$club->image = $image_name;
		}

		$club->save();


		session()->flash('my_success', 'Club Updated');
		return redirect()->route('admin.clubs.all');
    }

    public function delete(Request $request, $id){
		$club = Club::find($id);

		// delete image from location if any
		if( File::exists( 'backend/images/clubs/'.$club->image) ){
           File::delete( 'backend/images/clubs/'.$club->image);
        }


		// delete this club  
		$club->delete();

		session()->flash('my_success', 'Club Deleted');
		return redirect()->route('admin.clubs.all');
    }


}
