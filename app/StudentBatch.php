<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentBatch extends Model
{      

    public function student()
    {
        return $this->belongsTo('App\User');
    }   

    public function batch()
    {
        return $this->belongsTo('App\Batch');
    }
}
