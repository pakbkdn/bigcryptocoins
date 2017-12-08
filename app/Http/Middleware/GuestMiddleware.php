<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Toastr;

class guestMiddleware
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
        if(Auth::check())
        {
            if(Auth::user()->roles==2 or Auth::user()->roles==1)
                return $next($request);
            else
                 Toastr::success('you do not have this function', $title = null, $options = []);
                 return redirect()->route('admin')->with('info','Success');
        }
        else{
            Toastr::success('you do not have this function', $title = null, $options = []);
            return redirect()->route('admin')->with('info','Success');
        }
    }
}
