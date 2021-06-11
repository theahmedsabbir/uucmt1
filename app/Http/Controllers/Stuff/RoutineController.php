<?php

namespace App\Http\Controllers\Stuff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Routine;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class RoutineController extends Controller
{
    public function index(){

		$routines = Routine::orderBy('id','asc')->get();
		return view('stuff.pages.routines.all', compact('routines'));

    }

    public function create(){
		return view('stuff.pages.routines.create');
    }

    public function store(Request $request){
    	$request->validate([
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);

		$routine = new Routine;

		$routine->day        = $request->day;

		// single image upload 
		if( !is_null($request->image) ){
			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->day );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/routines/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$routine->image = $image_name;
		}

		$routine->save();

		session()->flash('my_success', 'Routine Added');
		return redirect()->route('stuff.routines.all');
    }

    public function edit($id){
    	$routine = Routine::find($id);
    	return view('stuff.pages.routines.edit', compact('routine'));
    }

    public function update(Request $request, $id){
		$routine = Routine::find($id);

		// validation
    	$request->validate([
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);


    	// update text data

		$routine->day        = $request->day;

		// single image upload 
		if( !is_null($request->image) ){


			// delete image from location if any
			if( File::exists( 'backend/images/routines/'.$routine->image) ){
	           File::delete( 'backend/images/routines/'.$routine->image);
	        }

			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->day );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/routines/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$routine->image = $image_name;
		}

		$routine->save();


		session()->flash('my_success', 'Routine Updated');
		return redirect()->route('stuff.routines.all');
    }

    public function delete(Request $request, $id){
		$routine = Routine::find($id);

		// delete image from location if any
		if( File::exists( 'backend/images/routines/'.$routine->image) ){
           File::delete( 'backend/images/routines/'.$routine->image);
        }


		// delete this routine  
		$routine->delete();

		session()->flash('my_success', 'Routine Deleted');
		return redirect()->route('stuff.routines.all');
    }


}
