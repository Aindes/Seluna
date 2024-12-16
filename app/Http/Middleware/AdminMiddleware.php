<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user() instanceof \App\Models\Admin) {
            return $next($request);
        }

        return redirect()->route('home')->with('error', 'You are not authorized to access this page');
    }
}
