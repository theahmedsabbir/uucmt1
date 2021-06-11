<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExamQuestion extends Model
{    
    //an question belongs to a exam
    public function exam(){
    	return $this->belongsTo('App\Exam', 'exam_id');
    }

    
    //a question has many answers
    public function answers(){
    	return $this->hasMany('App\Answer');
    }
}
