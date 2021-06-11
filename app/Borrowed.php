<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrowed extends Model
{  

    //a borrowed record belongs to a library
    public function library()
    {
        return $this->belongsTo('App\Library', 'library_id');
    }

    //a borrowed record belongs to a student
    public function student()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
