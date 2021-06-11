<?php
namespace App\Http\Controllers\Student;

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
		return view('student.pages.notices.all', compact('notices'));

    }

    public function create(){
		return view('student.pages.notices.create');
    }

    public function store(Request $request){

		$notice = new Notice;



		$notice->posted_by       = Auth::user()->name;
		$notice->headline       = $request->headline;
		$notice->description       = $request->description;
		$notice->is_approved       = 1;

		$notice->save();

		session()->flash('my_success', 'New Notice Added');
		return redirect()->route('student.notices.all');
    }

    public function edit($id){
    	$notice = Notice::find($id);
    	return view('student.pages.notices.edit', compact('notice'));
    }

    public function update(Request $request, $id){
		$notice = Notice::find($id);

		$notice->posted_by       = Auth::user()->name;
		$notice->headline       = $request->headline;
		$notice->description       = $request->description;
		$notice->is_approved       = 1;

		$notice->save();

		session()->flash('my_success', 'Notice Updated');
		return redirect()->route('student.notices.all');
    }

    public function delete(Request $request, $id){
		$notice = Notice::find($id);

		// delete this batch  
		$notice->delete();

		session()->flash('my_success', 'Congratulation!! Notice Deleted');
		return redirect()->route('student.notices.all');
    }


}
