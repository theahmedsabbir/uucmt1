<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

use Auth;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
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
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }
}
