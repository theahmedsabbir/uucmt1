<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class TeacherMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
    public function handle($request, Closure $next)
    {
        if( Auth::check() && Auth::user()->user_role == 2 ){
            return $next($request);
        }else{
            return redirect()->route('login');
        }
        
    }
}
