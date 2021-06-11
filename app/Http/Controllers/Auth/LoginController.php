<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        // dd(Auth::check());
        // if ( Auth::check() && Auth::user()->user_role == 1 ) {
        //     dd('lc1');
        //     $this->redirectTo = route('admin.dashboard');
        // }else if ( Auth::check() && Auth::user()->user_role == 2 ) {
        //     dd('lc2');
        //     $this->redirectTo = route('teacher.dashboard');
        // }
        // dd('hello2');
        $this->middleware('guest')->except('logout');
    }
}
