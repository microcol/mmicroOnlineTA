<?php

namespace App\Http\Middleware;

use Closure;

use Sentinel;


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
        if(Sentinel::check() && Sentinel::getUser()->first()->user_type=='employee' || Sentinel::check() && Sentinel::getUser()->first()->user_type=='student')
            return $next($request);
            
        else
            return redirect('/login');
    }
}
