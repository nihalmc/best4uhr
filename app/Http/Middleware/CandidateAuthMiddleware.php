<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CandidateAuthMiddleware
{
    public function handle($request, Closure $next)
    {
       // Exclude the registration route from authentication check
        $exceptRoutes = ['candidate.register']; // Adjust this based on your registration route
        if (in_array($request->route()->getName(), $exceptRoutes)) {
            return $next($request);
        }

        // Check if the candidate is authenticated using the 'candidate' guard
        if (!Auth::guard('candidate')->check()) {
            // Candidate is not authenticated, you can handle this as needed
            return redirect()->route('home')->with('error', 'Please login to access your pages.'); // Redirect to the candidate login page
        }

        // Candidate is authenticated, proceed with the request
        return $next($request);
    }
}
