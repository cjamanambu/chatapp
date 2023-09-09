<?php

use App\Http\Controllers\Auth;
use App\Http\Controllers\Home;
use App\Http\Controllers\Legal;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('dashboard');
})->name('home');

Route::get('/home', function () {
    return redirect('dashboard');
});

Route::prefix('dashboard')->group(function () {
    Route::middleware(['auth', 'email.verified', 'pbh'])->group(function () {
        Route::get('/', [Home::class, 'index'])->name('dashboard');
    });
});


Route::prefix('auth')->group(function () {
    Route::middleware(['guest', 'pbh'])->group(function () {
        Route::get('login', [Auth::class, 'getLogin'])->name('auth.get.login');
        Route::get('register', [Auth::class, 'getRegister'])->name('auth.get.register');
        Route::get('forgot-password', [Auth::class, 'getForgotPassword'])->name('auth.get.forgot-password');
        Route::get('google', [Auth::class, 'redirectToGoogle'])->name('auth.get.google');
        Route::get('google/callback', [Auth::class, 'handleGoogleCallback'])->name('auth.get.google.callback');
        Route::post('reset-password', [Auth::class, 'resetPassword'])->name('auth.post.reset-password');
        Route::middleware(['signed'])->group(function () {
            Route::get('reset-password/{token}', [Auth::class, 'verifyResetLink'])->name('auth.get.reset');
        });

        Route::post('register', [Auth::class, 'postRegister'])->name('auth.post.register');
        Route::post('login', [Auth::class, 'postLogin'])->name('auth.post.login');
        Route::post('forgot-password', [Auth::class, 'postForgotPassword'])->name('auth.post.forgot-password');
    });

    Route::middleware(['auth', 'pbh'])->group(function () {
        Route::get('logout', [Auth::class, 'getLogout'])->name('auth.get.logout');
        Route::get('change-password', [Auth::class, 'changePassword'])->name('auth.get.change-password');
        Route::post('change-password', [Auth::class, 'updatePassword'])->name('auth.post.change-password');
        Route::middleware(['email.not.verified', 'pbh'])->group(function () {
            Route::get('unverified', [Auth::class, 'getUnverified'])->name('auth.get.unverified');
            Route::get('resend-verification', [Auth::class, 'resendVerificationEmail'])->name('auth.get.resend-verification');
        });
    });

    Route::middleware(['email.not.verified', 'signed'])->group(function () {
        Route::get('verify/{token}', [Auth::class, 'getVerifyEmail'])->name('auth.get.verify');
    });
});


Route::prefix('legal')->group(function () {
    Route::get('terms', [Legal::class, 'getTerms'])->name('legal.get.terms');
    Route::get('privacy', [Legal::class, 'getPrivacy'])->name('legal.get.privacy');
});

require __DIR__ . '/auth.php';
