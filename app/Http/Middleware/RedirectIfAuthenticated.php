<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {

            if ($guard == "user" && Auth::guard($guard)->check()) {
    $adminId = Auth::guard($guard)->user()->id;
    return redirect("/admin/dashboard");
}

     if ($guard == "employer" && Auth::guard($guard)->check()) {
            return redirect('/employer');
        }
        if (Auth::guard($guard)->check()) {
            return redirect('/jobseeker');
        }

         return $next($request);
    }
}
