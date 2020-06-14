<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
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
        if (auth()->check()) {
            if (auth()->user()->is_admin == 1) {
                return $next($request);
            }
        }
        return redirect(url('/'))->with('error', "You don't have admin access.");
    }
}