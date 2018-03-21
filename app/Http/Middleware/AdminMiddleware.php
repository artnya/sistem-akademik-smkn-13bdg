<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\TaskAdmin;

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
         if (Auth::user()->role == '2') {
                return $next($request);
        }else{
            $catchIdentity[] = 
            [
                'user_id' => Auth::id(),
                'admin_id' => 1,
                'reason' => 'Mencoba masuk ke dalam panel admin.'
            ];
            // will be send a report to TaskAdmin
             TaskAdmin::insert($catchIdentity);
             return redirect()->back()->with('messageerror', 'Anda tidak di perkenankan masuk ke halaman ini!'); // not admin. redirect whereever you like
        }   
    }
}
