<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

require __DIR__ . '/auth.php';
