<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoursePost extends Model
{
    //A Post belongs to a course
    public function course(){
    	return $this->belongsTo('App\Course');
    }

    //A Post belongs to a author
    public function author(){
        return $this->belongsTo('App\User', 'user_id');
    }

    //A Post has many comments
    public function comments(){
    	return $this->hasMany('App\PostComment');
    }

    //A Post has many files
    public function files(){
    	return $this->hasMany('App\PostFile');
    }
}
