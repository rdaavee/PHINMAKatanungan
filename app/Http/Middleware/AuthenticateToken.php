<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateToken
{
    public function handle($request, Closure $next)
    {
        $token = $request->bearerToken();

        if (!$token || !Auth::onceUsingId($token)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $next($request);
    }
}
