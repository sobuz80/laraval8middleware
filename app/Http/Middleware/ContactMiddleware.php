<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class ContactMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    //https://www.youtube.com/watch?v=AZYMChyS6t0

    public function handle(Request $request, Closure $next)
    {
        /*
        if(!Auth::Check()){
           return redirect()->to('/');
        }
        return $next($request);
        */
  
        if (auth()->user()->status == 'active') {
            return $next($request);
        }
        return response()->json('Your account is inactive');
    }
}
