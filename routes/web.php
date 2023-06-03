<?php

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
    return view('welcome');
})->name('home');

//AUTH ROUTES
Route::prefix('auth')->group(function () {
    Route::middleware(['guest'])->group(function () {
        Route::get('login', [Auth::class, 'login'])->name('auth.get.login');
        Route::get('register', [Auth::class, 'register'])->name('auth.get.register');
        Route::get('forgot-password', [Auth::class, 'forgotPassword'])->name('auth.get.forgot');
        Route::post('login', [Auth::class, 'signIn'])->name('auth.post.login');
        Route::post('register', [Auth::class, 'signUp'])->name('auth.post.register');
    });
});

Route::prefix('legal')->group(function () {
    Route::get('terms', [Legal::class, 'terms'])->name('legal.get.terms');
    Route::get('privacy', [Legal::class, 'privacy'])->name('legal.get.privacy');
});
