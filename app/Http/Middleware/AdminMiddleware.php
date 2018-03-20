<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
         if (Auth::user()->role == '2' || Auth::user()->role = '3') {
                return $next($request);
        }else{
             return redirect()->back()->with('messageerror', 'Anda tidak di perkenankan masuk ke halaman ini!'); // not admin. redirect whereever you like
        }   
    }
}
