<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Closure;
use RedirectsUsers;

class BannedOrInActive
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
        if ($request->user()->role == '4') {
            Auth::logout();
            $request->session()->invalidate();
            return redirect('/login')->with('messageerror', 'Anda telah di blokir!');
        }
        return $next($request);   
    }

}
