<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{    

    // semester has many courses
    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    // a semester has many payments on different students
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }
}
