<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GerentMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Auth::user() && Auth::user()->tipus !== 'Gerent') {
            abort(403, 'No tens autorizació per accedir a aquesta pàgina.');
        }
        return $next($request);
    }
}