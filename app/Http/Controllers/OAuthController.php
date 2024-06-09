<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Passport\Token;

class OAuthController extends Controller
{
    public function revoke(Request $request, $token)
    {
        Token::where('id', $token)->delete();

        return redirect()->back()->with('success', 'OAuth token revoked successfully.');
    }
}
