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
            return redirect()->route('employer.login');
        }

        return $next($request);
    }
}
