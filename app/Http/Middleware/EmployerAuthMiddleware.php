<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmployerAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('employer')->check()) {
            // Perform custom authentication logic for employers
            // If authentication fails, you can redirect or respond accordingly
            return redirect()->route('home')->with('error', 'Please login to access your pages.');
        }

        return $next($request);
    }
}
