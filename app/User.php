<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // student to batch 1:1
    public function studentBatch()
    {
        return $this->hasOne('App\StudentBatch');
    }

    // teacher to course
    public function courses()
    {
        return $this->hasMany('App\Course');
    }

    // a user has many course posts
    public function posts()
    {
        return $this->hasMany('App\CoursePost');
    }

    // a student has many payments on different semesters
    public function payments()
    {
        return $this->hasMany('App\Payment');
    }

    // a student has many borrowed books
    public function borrowedBooks()
    {
        return $this->hasMany('App\Borrowed');
    }

    public function bloodDonation(){
        return $this->hasOne('App\BloodDonation');
    }
}
