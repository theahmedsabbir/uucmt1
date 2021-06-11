<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{      
    //a answer belongs to a question
    public function question(){
    	return $this->belongsTo('App\ExamQuestion', 'exam_question_id');
    }
}
