<?php

namespace App\Http\Middleware;

use Closure;

class Holding
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
        if (!$request->user()) {
            return redirect('/login');
        } elseif ($request->user()->active) {
            return redirect('/');
        }

        return $next($request);
    }
}
