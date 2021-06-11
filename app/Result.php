<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //a result belongs to a exam
    public function exam(){
    	return $this->belongsTo('App\Exam', 'exam_id');
    }
    //a result belongs to a student
    public function student(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
