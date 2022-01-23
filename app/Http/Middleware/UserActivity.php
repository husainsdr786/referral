<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Cache;

class UserActivity
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
        if (Auth::check()) {
            $expire = now()->addMinutes(2); /* keep online for 2 min */
            Cache::put('user-is-online-' .Auth::user()->id,true,$expire);
            /* last seen */
            User::where('id',Auth::user()->id)->update(['last_seen' => now()]);
        }
        return $next($request);
    }
}
