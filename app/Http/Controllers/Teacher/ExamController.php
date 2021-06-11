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
use Hash;

use Illuminate\Support\Str;
use Image; 
use File;
use Auth;

class ExamController extends Controller
{

	public function store(Request $request){
		$request->validate([
			'course_id'  => 'required',
			'name'       => 'required',
			'date'       => 'required',
			'start_time' => 'required',
			'end_time'   => 'required',
    	],[
    		
    	]);
    	$exam = new Exam;
    	$exam->course_id = $request->course_id;
    	$exam->name = $request->name;
    	$exam->date = $request->date;
    	$exam->start_time = $request->start_time;
    	$exam->end_time = $request->end_time;
    	$exam->total_marks = $request->total_marks;
    	$exam->is_completed = 0;
    	$exam->is_open = $request->is_open;
    	$exam->description = $request->description;
    	$exam->save();

		return redirect()->back();
	}

	public function update(Request $request, $id){
    	$exam = Exam::find($id);
    	if ($request->is_open) {
    		$exam->is_open = 1;
    	} else {
    		$exam->is_open = 0;
    	}
    	$exam->save();

		return redirect()->back();
	}


	public function delete(Request $request, $id ){
		$exam = Exam::find($id);
		$exam->delete();
		return redirect()->back();
	}

	public function showQuestionMaker($id){
		$exam = Exam::find($id);
		return view('teacher.pages.exams.showQuestionMaker', compact('id','exam'));
	}

	public function questionStore(Request $request){
		$question = new ExamQuestion;

		$question->exam_id = $request->exam_id;
		$question->type = $request->type;
		$question->question = $request->question;
		$question->mark = $request->mark;
		$question->option1 = $request->option1;
		$question->option2 = $request->option2;
		$question->option3 = $request->option3;
		$question->option4 = $request->option4;
		$question->default_answer = $request->default_answer;

		$question->save();

		session()->flash('my_success', 'Question Added');
		return redirect()->back();
	}


	// answer

	public function showAnswerSheet($id){
		$exam = Exam::find($id);

		return view('teacher.pages.exams.showAnswerSheet', compact('id','exam'));
	}

	public function answerStore(Request $request){
		$exam = Exam::find($request->exam_id);
		// dd($exam->course->id);

		$answer = new Result;

		$answer->exam_id = $request->exam_id;
		$answer->user_id = $request->user_id;
		$answer->a1 = $request->a1;
		$answer->a2 = $request->a2;
		$answer->a3 = $request->a3;
		$answer->a4 = $request->a4;
		$answer->a5 = $request->a5;
		$answer->a6 = $request->a6;
		$answer->a7 = $request->a7;
		$answer->a8 = $request->a8;
		$answer->a9 = $request->a9;
		$answer->a10 = $request->a10;

		$answer->save();

		session()->flash('my_success', 'Answer Saved');
		return redirect()->route('teacher.courses.show', $exam->course->id);
	}

	public function answerMark(Request $request){

		// dd($request);
		$user_id = $request->user_id;
		$exam_id = $request->exam_id;
		$result = Result::where('user_id', $request->user_id)->where('exam_id', $request->exam_id)->first();
		$exam = $result->exam;

		return view('teacher.pages.exams.answerMark', compact('result', 'user_id', 'exam_id','exam'));
	}

	public function markStore(Request $request, $resultId){
		$result = Result::find($resultId);
		$exam = Exam::find($result->exam_id);


		$result->total_marks = $request->total_marks;
		$result->result = $request->result;

		$result->save();

		session()->flash('my_success', 'Mark Saved');
		return redirect()->route('teacher.courses.show', $exam->course->id);
	}
}
