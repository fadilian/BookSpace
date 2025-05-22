<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $level): Response
    {
        if (Auth::check() && Auth::user()->level === $level) {
            return $next($request);
        }

        return redirect('/'); // atau redirect ke halaman lain sesuai kebutuhan
    }
}
