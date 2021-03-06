<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // dd('ria');
        // dd($request);
        if (Auth::guard($guard)->check() && Auth::user()->user_role == 1) {
            return redirect()->route('admin.dashboard');
            // return redirect(RouteServiceProvider::HOME);
        }else if (Auth::guard($guard)->check() && Auth::user()->user_role == 2) {
            return redirect()->route('teacher.dashboard');
        }else{
            // dd('hello1');
            return $next($request);
        }

        
    }
}
