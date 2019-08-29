<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use App\User;
use Closure;

class IsAdmin
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
        if (Auth::user() != null) {
            $user = User::findOrFail(Auth::user()->id);
            if (Auth::user() &&  $user->role_id == 2) {
                return $next($request);
            }
        }
        return redirect('/');
    }
}
