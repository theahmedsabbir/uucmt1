<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Complain;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class ComplainController extends Controller
{
    public function index(){

		$complains = Complain::orderBy('created_at','desc')->get();
		return view('student.pages.complains.all', compact('complains'));

    }

    public function create(){
		return view('student.pages.complains.create');
    }

    public function store(Request $request){
		$complain = new Complain;



		if ($request->name != NULL) {
			$complain->name       = $request->name;
		}
		$complain->subject       = $request->subject;
		$complain->complain = $request->complain;

		$complain->save();

		session()->flash('my_success', 'New Complain Added');
		return redirect()->back();
    }

    public function edit($id){
    	$complain = Complain::find($id);
    	return view('student.pages.complains.edit', compact('complain'));
    }

    public function update(Request $request, $id){
		$complain = Complain::find($id);
    	$request->validate([
			'name'    => 'required',
			'year'    => 'required|numeric',
    	],[
    		// 'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);

		$complain->name       = $request->name;
		$complain->year       = $request->year;
		$complain->start_date = $request->start_date;
		$complain->is_current = $request->is_current;

		$complain->save();

		session()->flash('my_success', 'Congratulation!! Complain Updated');
		return redirect()->route('student.complains.all');
    }

    public function delete(Request $request, $id){
		$complain = Complain::find($id);

		// delete this batch  
		$complain->delete();

		session()->flash('my_success', 'Congratulation!! Complain Deleted');
		return redirect()->route('student.complains.all');
    }


}
