<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if (!$request->expectsJson()) {
            if ($request->routeIs('admin.*')) {
                session()->flash('fail', 'Log in to proceed');
                return route('admin.login');
            }
        }
    
        // Return a default URL or null if no redirection is desired
        return null;
    }
}
