<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Course;
use App\Exam;
use App\Result;
use App\ExamQuestion;
use App\CoursePost;
use App\Batch;
use App\User;
use App\Semester;
use App\Payment;
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;
use Auth;

class PaymentController extends Controller
{
	public function index(){
		$semesters = Semester::orderBy('start_date', 'asc')->get();
		$payments = Payment::orderBy('id', 'desc')->get();

		return view('teacher.pages.payments.all', compact('semesters', 'payments'));
	}

	public function create(){
		$semesters = Semester::orderBy('start_date', 'asc')->get();
		$students = User::orderBy('username', 'asc')->where('user_role', 4)->get();
		return view('teacher.pages.payments.create', compact('semesters', 'students'));
	}

    public function store(Request $request){

    	$record = Payment::where('user_id', $request->user_id)->where('semester_id', $request->semester_id)->first();
    	// payment record jodi thake to ager tai add hobe 

    	// dd($record->student->studentBatch->batch->courses->where('semester_id', $request->semester_id));

    	if(!is_null($record)){
    		$thisSemCourses = $record->student->studentBatch->batch->courses->where('semester_id', $request->semester_id);
    		$record->semester_fee = 4000;
    		$record->per_credit_fee = 2000;
    		$credits = 0;
    		foreach ($thisSemCourses as $course) {
    			$credits += $course->credit;
    		}
    		$record->total_credit = $credits;
    		$record->payable = 4000 + ( $record->total_credit * $record->per_credit_fee );
    		$record->paid += $request->paid;
    		$record->due = $record->payable - $record->paid;

    		$record->save();
    	}else{
    		// or notun record create hobe 
    		$record = new Payment;
    		$student = User::find($request->user_id);
    		$thisSemCourses = $student->studentBatch->batch->courses->where('semester_id', $request->semester_id);
    		$record->user_id = $request->user_id;
    		$record->semester_id = $request->semester_id;
    		$record->semester_fee = 4000;
    		$record->per_credit_fee = 2000;
    		$credits = 0;
    		foreach ($thisSemCourses as $course) {
    			$credits += $course->credit;
    		}
    		$record->total_credit = $credits;
    		$record->payable = 4000 + ( $record->total_credit * $record->per_credit_fee );
    		$record->paid += $request->paid;
    		$record->due = $record->payable - $record->paid;

    		$record->save();
    	}

    	
		session()->flash('my_success', 'Payment Added');
		return redirect()->route('teacher.payments.all');
    }

    public function myPayment(){
		$semesters = Semester::orderBy('start_date', 'asc')->get();
		$payments = Payment::orderBy('semester_id', 'asc')->where('user_id', Auth::user()->id)->get();

		return view('teacher.pages.payments.myPayment', compact('semesters', 'payments'));

    }
}