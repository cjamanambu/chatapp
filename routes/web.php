<?php

use App\Http\Controllers\Home;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Legal;

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
    Route::middleware(['auth', 'email.verified'])->group(function () {
        Route::get('/', [Home::class, 'index'])->name('dashboard');
    });
});

//AUTH ROUTES
Route::prefix('auth')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('login', [Auth::class, 'login'])->name('auth.get.login');
        Route::get('register', [Auth::class, 'register'])->name('auth.get.register');
        Route::get('forgot-password', [Auth::class, 'forgotPassword'])->name('auth.get.forgot');
        Route::post('login', [Auth::class, 'signIn'])->name('auth.post.login');
        Route::post('register', [Auth::class, 'signUp'])->name('auth.post.register');
    });
    Route::middleware(['auth', 'email.not.verified'])->group(function () {
        Route::get('unverified', [Auth::class, 'unverified'])->name('auth.get.unverified');
        Route::get('resend-verification', [Auth::class, 'resendVerificationEmail'])->name('auth.get.resend-verification');
    });
    Route::middleware(['email.not.verified', 'signed'])->group(function () {
        Route::get('verify/{token}', [Auth::class, 'verifyEmail'])->name('auth.get.verify');
    });


});

Route::prefix('legal')->group(function () {
    Route::get('terms', [Legal::class, 'terms'])->name('legal.get.terms');
    Route::get('privacy', [Legal::class, 'privacy'])->name('legal.get.privacy');
});
