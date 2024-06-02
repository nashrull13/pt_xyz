<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $role, $company = null)
    {
        if (!auth()->check() || auth()->user()->role->name != $role) {
            abort(403);
        }

        if ($company && auth()->user()->company->name != $company) {
            abort(403);
        }

        return $next($request);
    }

}
