<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostFile extends Model
{
    //a postfile belongs to a post
    public function post(){
    	return $this->belongsTo('App\CoursePost', 'course_post_id');
    }
}
