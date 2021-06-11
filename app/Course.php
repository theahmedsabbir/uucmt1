<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{   
    // course to teacher->1
    public function teacher()
    {
        return $this->belongsTo('App\User', 'user_id');
    } 

    // course to batch
    public function batch()
    {
        return $this->belongsTo('App\Batch', 'batch_id');
    }
    
    // course belongs to a semester
    public function semester()
    {
        return $this->belongsTo('App\Semester', 'semester_id');
    }

    
    // course has many posts
    public function posts()
    {
        return $this->hasMany('App\CoursePost');
    }

    // a course has many exams
    public function exams(){
        return $this->hasMany('App\Exam');
    }
}
