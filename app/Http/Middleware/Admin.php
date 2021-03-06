<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
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
        //dd(Auth::guard('admin')->check());
        if (Auth::guard('admin')->check()) {
            if (auth()->user()->is_admin == 1) {
                return $next($request);
            }
        }
        return redirect('/admin/login')->with('error', "You don't have admin access.");
    }
}
