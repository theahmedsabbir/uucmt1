<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\BusSchedule;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;

class BusController extends Controller
{
    public function index(){

		$busServices = BusSchedule::orderBy('time','asc')->get();
		return view('admin.pages.busServices.all', compact('busServices'));

    }

    public function create(){
		return view('admin.pages.busServices.create');
    }

    public function store(Request $request){
		$busService = new BusSchedule;
    	$request->validate([
			// 'name'    => 'required',
    	],[
    		// 'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);



		$busService->type       = $request->type;
		$busService->starting_station       = $request->starting_station;
		$busService->time = $request->time;
		$busService->route = $request->route;
		$busService->destination = $request->destination;
		$busService->active_days = $request->active_days;

		$busService->save();

		session()->flash('my_success', 'New BusSchedule Added');
		return redirect()->route('admin.busServices.all');
    }

    public function edit($id){
    	$busService = BusSchedule::find($id);
    	return view('admin.pages.busServices.edit', compact('busService'));
    }

    public function update(Request $request, $id){
		$busService = BusSchedule::find($id);
    	$request->validate([
			'name'    => 'required',
			'year'    => 'required|numeric',
    	],[
    		// 'image.dimensions' => 'Image should be not more than 500px width & 500px height',
    	]);

		$busService->name       = $request->name;
		$busService->year       = $request->year;
		$busService->start_date = $request->start_date;
		$busService->is_current = $request->is_current;

		$busService->save();

		session()->flash('my_success', 'Congratulation!! BusSchedule Updated');
		return redirect()->route('admin.busServices.all');
    }

    public function delete(Request $request, $id){
		$busService = BusSchedule::find($id);

		// delete this batch  
		$busService->delete();

		session()->flash('my_success', 'BusSchedule Deleted');
		return redirect()->route('admin.busServices.all');
    }


}
