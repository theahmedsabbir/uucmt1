<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    //an exam belongs to a course
    public function course(){
    	return $this->belongsTo('App\Course');
    }

    //an exam has many exam questions
    public function questions(){
    	return $this->hasMany('App\ExamQuestion');
    }

    //an exam has many results
    public function results(){
    	return $this->hasMany('App\Result');
    }
}
