<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Notice;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;
use Auth;

class NoticeController extends Controller
{
    public function index(){

		$notices = Notice::orderBy('created_at','desc')->get();
		return view('admin.pages.notices.all', compact('notices'));

    }

    public function create(){
		return view('admin.pages.notices.create');
    }

    public function store(Request $request){

		$notice = new Notice;


		$notice->posted_by       = Auth::user()->name;
		$notice->headline       = $request->headline;
		$notice->description       = $request->description;
		$notice->is_approved       = 1;

		// single image upload 
		if( !is_null($request->image) ){
			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->headline );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/notices/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$notice->image = $image_name;
		}

		$notice->save();

		session()->flash('my_success', 'New Notice Added');
		return redirect()->route('admin.notices.all');
    }

    public function edit($id){
    	$notice = Notice::find($id);
    	return view('admin.pages.notices.edit', compact('notice'));
    }

    public function update(Request $request, $id){
		$notice = Notice::find($id);

		$notice->posted_by       = Auth::user()->name;
		$notice->headline       = $request->headline;
		$notice->description       = $request->description;
		$notice->is_approved       = 1;

		// single image upload 
		if( !is_null($request->image) ){

			// delete image from location if any
			if( File::exists( 'backend/images/notices/'.$notice->image) ){
	           File::delete( 'backend/images/notices/'.$notice->image);
	        }

			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->headline );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/notices/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$notice->image = $image_name;
		}

		$notice->save();

		session()->flash('my_success', 'Notice Updated');
		return redirect()->route('admin.notices.all');
    }

    public function delete(Request $request, $id){
		$notice = Notice::find($id);

		// delete image from location if any
		if( File::exists( 'backend/images/notices/'.$notice->image) ){
           File::delete( 'backend/images/notices/'.$notice->image);
        }

		// delete this batch  
		$notice->delete();

		session()->flash('my_success', 'Congratulation!! Notice Deleted');
		return redirect()->route('admin.notices.all');
    }


}
