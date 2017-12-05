<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Toastr;
class AdminMiddleware
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
            if(Auth::user()->roles==2)
                return $next($request);
            else
                 Toastr::success('Only the administrator has the right to edit this section', $title = null, $options = []);
                 return redirect()->route('admin')->with('info','Success');
        }
        else{
            Toastr::success('Only the administrator has the right to edit this section', $title = null, $options = []);
            return redirect()->route('admin')->with('info','Success');
        }
    }
}
