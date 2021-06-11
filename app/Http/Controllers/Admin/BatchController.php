<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Batch;
use App\StudentBatch;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class BatchController extends Controller
{
    public function index(){

		$batches = Batch::orderBy('name','asc')->get();
		return view('admin.pages.batches.all', compact('batches'));

    }

    public function create(){
		return view('admin.pages.batches.create');
    }

    public function store(Request $request){
		$batch = new Batch;
    	$request->validate([
			'name'     => 'required|max:5000|numeric|unique:batches',
			'session'     => 'numeric',
    	],[
    		// 'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);



		$batch->name        = $request->name;
		$batch->session    = $request->session;

		$batch->save();

		session()->flash('my_success', 'Congratulation!! New Batch Registered');
		return redirect()->route('admin.batch.all');
    }

    public function edit($id){
    	$batch = Batch::find($id);
    	return view('admin.pages.batches.edit', compact('batch'));
    }

    public function update(Request $request, $id){
		$batch = Batch::find($id);
    	$request->validate([
			'name'     => 'required|max:5000|numeric|unique:batches,name,'.$batch->id,
			'session'     => 'max:50|numeric',
    	],[
    		// 'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);



		$batch->name        = $request->name;
		$batch->session    = $request->session;

		$batch->save();

		session()->flash('my_success', 'Congratulation!! Batch Updated');
		return redirect()->route('admin.batch.all');
    }

    public function delete(Request $request, $id){
		$batch = Batch::find($id);
		$batchStudents = StudentBatch::where('batch_id', $batch->id )->get();

		// delete batch dependencies 
        foreach ($batchStudents as $bs) {
        	$bs->delete();
        }

		// delete this batch  
		$batch->delete();

		session()->flash('my_success', 'Congratulation!! Batch Deleted');
		return redirect()->route('admin.batch.all');
    }


}
