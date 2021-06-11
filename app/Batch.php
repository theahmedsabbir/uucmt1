<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{    

    public function batchStudents()
    {
        return $this->hasMany('App\StudentBatch');
    }  

    // batch has many courses
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
