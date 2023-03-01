<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();
        if ($request->expectsJson() && $request->has('device_name')) {
            $device_name = $request->input('device_name');
            $token = $request->user()->createToken($device_name)->plainTextToken;
            return response()->json(['message' => __("controller.success.login"), 'token' => $token, "device_name" => $device_name], 200);
        }
        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        if($request->expectsJson() && $request->bearerToken()) {
            $token = $request->user()->currentAccessToken();
            if(!empty($token)) {
                $token->delete();
            }
            return response()->json(['message' => __("controller.success.logout")], 200);
        }
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
