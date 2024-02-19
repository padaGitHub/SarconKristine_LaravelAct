<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class verifyAgeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

         // Check if the 'yes' parameter is present in the URL query string
         if ($request->query('yes') === 'yes') {
            return $next($request);
        } else {
            // Otherwise, deny access
            return abort(403, 'Access Forbidden. Age verification required.');
        }
    }
}
