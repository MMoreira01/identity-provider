<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Generate authorization code
            $authRequest = $request->session()->get('authRequest');
            $authCode = $authRequest->approve($authRequest->getUser()->id, $authRequest->getScopes());

            // Redirect back to SP with the authorization code
            return redirect(env('SP_APP_URL').'/callback?code='.$authCode->getHeader('Location')[0]);
        }

        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
