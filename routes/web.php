<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Legal;
use Spatie\Honeypot\ProtectAgainstSpam;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('dashboard');
})->name('home');

Route::prefix('dashboard')->group(function () {
    Route::middleware(['auth', 'email.verified', 'pbh'])->group(function () {
        Route::get('/', [Home::class, 'index'])->name('dashboard');
    });
});

//AUTH ROUTES
Route::prefix('auth')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('login', [Auth::class, 'login'])->name('auth.get.login');
        Route::get('register', [Auth::class, 'register'])->name('auth.get.register');
        Route::get('forgot-password', [Auth::class, 'forgotPassword'])->name('auth.get.forgot');
        Route::post('login', [Auth::class, 'signIn'])->name('auth.post.login')->middleware(ProtectAgainstSpam::class);
        Route::post('register', [Auth::class, 'signUp'])->name('auth.post.register')->middleware(ProtectAgainstSpam::class);
        Route::post('forgot-password', [Auth::class, 'sendResetLinkEmail'])->name('auth.post.forgot')->middleware(ProtectAgainstSpam::class);
        Route::get('google', [Auth::class, 'redirectToGoogle'])->name('auth.get.google');
        Route::get('google/callback', [Auth::class, 'handleGoogleCallback'])->name('auth.get.google.callback');
        Route::post('reset-password', [Auth::class, 'resetPassword'])->name('auth.post.reset')->middleware(ProtectAgainstSpam::class);
        Route::middleware(['signed'])->group(function () {
            Route::get('reset-password/{token}', [Auth::class, 'verifyResetLink'])->name('auth.get.reset');
        });
    });
    Route::middleware(['auth'])->group(function () {
        Route::get('logout', [Auth::class, 'signOut'])->name('auth.get.logout');
        Route::get('change-password', [Auth::class, 'changePassword'])->name('auth.get.change-password');
        Route::post('change-password', [Auth::class, 'updatePassword'])->name('auth.post.change-password')->middleware(ProtectAgainstSpam::class);
        Route::middleware(['email.not.verified'])->group(function () {
            Route::get('unverified', [Auth::class, 'unverified'])->name('auth.get.unverified');
            Route::get('resend-verification', [Auth::class, 'resendVerificationEmail'])->name('auth.get.resend-verification');
        });
    });
    Route::middleware(['email.not.verified', 'signed'])->group(function () {
        Route::get('verify/{token}', [Auth::class, 'verifyEmail'])->name('auth.get.verify');
    });
});

Route::prefix('legal')->group(function () {
    Route::get('terms', [Legal::class, 'terms'])->name('legal.get.terms');
    Route::get('privacy', [Legal::class, 'privacy'])->name('legal.get.privacy');
});
