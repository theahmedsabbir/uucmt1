<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{     
    //an payment belongs to a student
    public function student(){
    	return $this->belongsTo('App\User', 'user_id');
    }  
    //an payment belongs to a semester
    public function semester(){
    	return $this->belongsTo('App\Semester', 'semester_id');
    }
}
