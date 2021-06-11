<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Library;
use App\Borrowed;
use App\Batch;
use App\User;
use Hash;
use Auth;

use Illuminate\Support\Str;
use Image; 
use File;

class LibraryController extends Controller
{
    public function index(){
    	$students = User::where('user_role', 4)->orderBy('username', 'asc')->get();
		$libraries = Library::orderBy('id','asc')->get();
		$borrowed_books = Borrowed::all();
 		return view('student.pages.libraries.all', compact('libraries','students', 'borrowed_books'));

    }

    public function create(){
		return view('student.pages.libraries.create');
    }

    public function store(Request $request){
    	$request->validate([
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);

		$library = new Library;

		$library->book_name        = $request->book_name;
		$library->subject        = $request->subject;
		$library->details        = $request->details;
		$library->stock        = $request->stock;

		// single image upload 
		if( !is_null($request->image) ){
			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->book_name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/libraries/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$library->image = $image_name;
		}

		$library->save();

		session()->flash('my_success', 'New Book Registered');
		return redirect()->route('student.libraries.all');
    }

    public function edit($id){
    	$library = Library::find($id);
    	return view('student.pages.libraries.edit', compact('library'));
    }

    public function update(Request $request, $id){
		$library = Library::find($id);

		// validation
    	$request->validate([
			'image'    => 'image|mimes:jpg,jpeg,png|max:5000'
    	],[
    		'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);


    	// update text data
		$library->book_name        = $request->book_name;
		$library->subject        = $request->subject;
		$library->details        = $request->details;
		$library->stock        = $request->stock;

		// single image upload 
		if( !is_null($request->image) ){
			// get image && image name unique && fix location
			$image = $request->image;
			$img_slug = Str::slug( $request->book_name );
			$image_name = $img_slug . time() . uniqid() . '.' . $image->getClientOriginalExtension();

			$location = 'backend/images/libraries/'.$image_name;

			// save image in location & database
			Image::make($image)->save($location);
			$library->image = $image_name;
		}

		$library->save();


		session()->flash('my_success', 'Library Updated');
		return redirect()->route('student.libraries.all');
    }

    public function delete(Request $request, $id){
		$library = Library::find($id);


		// delete image from location if any
		if( File::exists( 'backend/images/libraries/'.$library->image) ){
           File::delete( 'backend/images/libraries/'.$library->image);
        }

		// delete this user  
		$library->delete();

		session()->flash('my_success', 'Congratulation!! Book Deleted');
		return redirect()->route('student.libraries.all');
    }

    public function borrow(Request $request){


    	$request->validate([
    		'date_taken' => 'required',
    		'date_to_submit' => 'required',
    	]);

    	// substract book amount in library
    	$book = Library::find($request->library_id);
    	$book->stock = $book->stock - $request->amount;
    	$book->save();

    	// add a new rocord in borrowed

		$borrowRecord                 = new Borrowed;
		$borrowRecord->user_id        = $request->user_id;
		$borrowRecord->library_id     = $request->library_id;
		$borrowRecord->amount         = $request->amount;
		$borrowRecord->date_taken     = $request->date_taken;
		$borrowRecord->date_to_submit = $request->date_to_submit;

		$borrowRecord->save();


		session()->flash('my_success', 'Book Borrowed');
		return redirect()->route('student.libraries.all');
    }

    public function borrowDelete(Request $request){
    	// find borred record    	
		$borrowedRecord = Borrowed::find( $request->id );

    	// add book amount in library
    	$book = $borrowedRecord->library;
    	$book->stock = $book->stock + $borrowedRecord->amount;
    	$book->save();

    	// delete this record
		$borrowedRecord->delete();


		session()->flash('my_success', 'Book Record Updated');
		return redirect()->route('student.libraries.all');
    }

    public function myBooks(){
    	$student = Auth::user();
    	$borrowed_books = $student->borrowedBooks;
 		return view('student.pages.libraries.myBooks', compact('borrowed_books'));

    }




}
