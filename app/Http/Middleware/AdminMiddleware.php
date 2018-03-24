<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Notifications\ReportNotification;
use Notification;
use App\User;
use App\Reports;

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
         if (Auth::user()->role == '2' || Auth::user()->role == '3') {
                return $next($request);
        }else{
            $catchIdentity[] = 
            [
                'user_id' => Auth::id(),
                'admin_id' => 1,
                'reason' => 'Mencoba masuk ke dalam panel admin.'
            ];
            // data will be store to database Admin
             Reports::insert($catchIdentity);
            //will be send a notification to Admin.
            $user_id = Auth::user();
            $admin_id = User::where('role', '=', '2')->get();
            Notification::send($admin_id, new ReportNotification($user_id));
             return redirect()->back()->with('messageerror', 'Anda tidak di perkenankan masuk ke halaman ini!'); // not admin. redirect whereever you like
        }   
    }
}
