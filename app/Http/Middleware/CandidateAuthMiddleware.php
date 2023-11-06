<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CandidateAuthMiddleware
{
    public function handle($request, Closure $next)
    {
        // Check if the candidate is authenticated using the 'candidate' guard
        if (!Auth::guard('candidate')->check()) {
            // Candidate is not authenticated, you can handle this as needed
            return redirect()->route('candidate.login'); // Redirect to the candidate login page
        }

        // Candidate is authenticated, proceed with the request
        return $next($request);
    }
}
