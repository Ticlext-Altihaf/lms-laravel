<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }

    public function handle($request, Closure $next, ...$guards)
    {
        if($request->expectsJson()) {
            $bearer = $request->bearerToken();
            if(empty($bearer)) {
                return response()->json(['message' => __('auth.unauthenticated')], 401);
            }
            $token = \Laravel\Sanctum\PersonalAccessToken::findToken($bearer);
            if(empty($token)) {
                return response()->json(['message' => __('auth.unauthenticated')], 401);
            }
            $user = $token->tokenable;
            if(empty($user)) {
                return response()->json(['message' => __('auth.unauthenticated')], 401);
            }
            Auth::setUser($user);
            return $next($request);
        }
        return parent::handle($request, $next, $guards);
    }
}
