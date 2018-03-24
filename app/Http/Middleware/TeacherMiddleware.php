<?php

namespace App\Http\Middleware;
use Auth;

use Closure;

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
        if (Auth::user()->role == '1') {
            return redirect()->back()->with('messageerror', 'Tidak dapat masuk ke area ini!');
        }
        return $next($request);
    }
}
