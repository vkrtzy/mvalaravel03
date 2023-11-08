<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventLoginPageAccess
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            return redirect('/home'); // Ganti '/home' dengan rute beranda Anda.
        }

        return $next($request);
    }
}
