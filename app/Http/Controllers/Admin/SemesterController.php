<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Semester;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class SemesterController extends Controller
{
    public function index(){

		$semesters = Semester::orderBy('start_date','desc')->get();
		return view('admin.pages.semesters.all', compact('semesters'));

    }

    public function create(){
		return view('admin.pages.semesters.create');
    }

    public function store(Request $request){
		$semester = new Semester;
    	$request->validate([
			'name'    => 'required',
			'year'    => 'required|numeric',
    	],[
    		// 'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);



		$semester->name       = $request->name;
		$semester->year       = $request->year;
		$semester->start_date = $request->start_date;
		$semester->is_current = $request->is_current;

		$semester->save();

		session()->flash('my_success', 'Congratulation!! New Semester Added');
		return redirect()->route('admin.semesters.all');
    }

    public function edit($id){
    	$semester = Semester::find($id);
    	return view('admin.pages.semesters.edit', compact('semester'));
    }

    public function update(Request $request, $id){
		$semester = Semester::find($id);
    	$request->validate([
			'name'    => 'required',
			'year'    => 'required|numeric',
    	],[
    		// 'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);

		$semester->name       = $request->name;
		$semester->year       = $request->year;
		$semester->start_date = $request->start_date;
		$semester->is_current = $request->is_current;

		$semester->save();

		session()->flash('my_success', 'Congratulation!! Semester Updated');
		return redirect()->route('admin.semesters.all');
    }

    public function delete(Request $request, $id){
		$semester = Semester::find($id);

		// delete this batch  
		$semester->delete();

		session()->flash('my_success', 'Congratulation!! Semester Deleted');
		return redirect()->route('admin.semesters.all');
    }


}
