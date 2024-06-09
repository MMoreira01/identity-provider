<?php

use App\Http\Controllers\OAuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Passport\Token;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/dashboard/clients', function (Request $request) {
    return view('clients', [
        'clients' => $request->user()->clients,
    ]);
})->middleware(['auth'])->name('dashboard.clients');

Route::get('/dashboard/courses', function (Request $request) {
    return view('courses');
})->middleware(['auth'])->name('dashboard.courses');

Route::get('/dashboard/oauthTokens', function (Request $request) {
    return view('oauthTokens', [
        'oauthTokens' => Token::query()
            ->with('client')
            ->where('user_id', $request->user()->id)
            ->get(),
    ]);
})->middleware(['auth'])->name('dashboard.oauthTokens');

Route::delete('/oauth/revoke/{token}', [OAuthController::class, 'revoke'])->name('oauth.revoke');

require __DIR__.'/auth.php';
