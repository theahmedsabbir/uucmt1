<?php
namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\User;
use App\BloodDonation;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;
use Auth;

class BloodDonationController extends Controller
{
    public function index(){

		$bloodDonations = BloodDonation::orderBy('created_at','desc')->get();
		return view('student.pages.bloodDonations.all', compact('bloodDonations'));

    }

    public function create(){
		return view('student.pages.bloodDonations.create');
    }

    public function store(Request $request){

		$bloodDonation = new BloodDonation;

		$bloodDonation->user_id         = $request->user_id;
		$bloodDonation->donation_date   = $request->donation_date;
		$bloodDonation->redonation_date = $request->redonation_date;
		$bloodDonation->blood_group     = $request->blood_group;
		$bloodDonation->frequency       = $request->frequency;

		$bloodDonation->save();

		session()->flash('my_success', 'New BloodDonation Added');
		return redirect()->route('student.bloodDonations.all');
    }

    public function edit($id){
    	$bloodDonation = BloodDonation::find($id);
    	return view('student.pages.bloodDonations.edit', compact('bloodDonation'));
    }

    public function update(Request $request, $id){
		$bloodDonation = BloodDonation::find($id);

		$bloodDonation->user_id         = $request->user_id;
		$bloodDonation->donation_date   = $request->donation_date;
		$bloodDonation->redonation_date = $request->redonation_date;
		$bloodDonation->blood_group     = $request->blood_group;
		$bloodDonation->frequency       = $request->frequency;

		$bloodDonation->save();

		session()->flash('my_success', 'BloodDonation Updated');
		return redirect()->route('student.bloodDonations.all');
    }

    public function delete(Request $request, $id){
		$bloodDonation = BloodDonation::find($id);

		// delete this batch  
		$bloodDonation->delete();

		session()->flash('my_success', 'BloodDonation Deleted');
		return redirect()->route('student.bloodDonations.all');
    }

    public function myDonation(){
    	$user =  Auth::user();
		$bloodDonation = $user->bloodDonation;
		return view('student.pages.bloodDonations.myDonation', compact('bloodDonation'));

    }


}
