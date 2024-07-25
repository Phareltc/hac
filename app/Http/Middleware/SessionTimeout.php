<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SessionTimeout
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
        $timeout = config('session.lifetime') * 60; // convert minutes to seconds
        $lastActivity = Session::get('lastActivityTime');
        $currentTime = time();

        if (isset($lastActivity) && ($currentTime - $lastActivity) > $timeout) {
            Auth::logout();
            Session::flush();
            return redirect()->route('admin.login');
        }

        Session::put('lastActivityTime', $currentTime);
        
        return $next($request);
    }
}
