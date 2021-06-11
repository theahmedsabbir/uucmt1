<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;

use Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo;    

    protected function redirectTo(){
        if ( Auth::check() && Auth::user()->user_role == 1 ) {
            return route('admin.dashboard');
        }else if ( Auth::check() && Auth::user()->user_role == 2 ) {
            return route('teacher.dashboard');
        }else if ( Auth::check() && Auth::user()->user_role == 3 ) {
            return route('stuff.dashboard');
        }else if ( Auth::check() && Auth::user()->user_role == 4 ) {
            return route('student.dashboard');
        }else{
            session()->flash('my_error', 'Login Error, please contact system administrator');
            return route('login');
        }
    }



    public function __construct()
    {
        
        // if ( Auth::check() && Auth::user()->user_role == 1 ) {
        //     $this->redirectTo = route('admin.dashboard');
        // }else if ( Auth::check() && Auth::user()->user_role == 2 ) {
        //     $this->redirectTo = route('teacher.dashboard');
        // }
        $this->middleware('guest');
    }
}
