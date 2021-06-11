<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostComment extends Model
{
    //a postComment belongs to a post
    public function post(){
    	return $this->belongsTo('App\CoursePost', 'course_post_id');
    }
    //a postComment belongs to a commentor
    public function commentor(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
