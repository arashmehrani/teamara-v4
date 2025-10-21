<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Auth\AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');
});
