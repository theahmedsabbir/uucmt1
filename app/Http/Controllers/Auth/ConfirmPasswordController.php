<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

use Auth;

class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Where to redirect users when the intended url fails.
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        // if ( Auth::check() && Auth::user()->user_role == 1 ) {
        //     $this->redirectTo = route('admin.dashboard');
        // }else if ( Auth::check() && Auth::user()->user_role == 2 ) {
        //     $this->redirectTo = route('teacher.dashboard');
        // }

        $this->middleware('auth');
    }
}
