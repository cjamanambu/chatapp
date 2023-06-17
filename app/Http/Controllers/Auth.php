<?php

namespace App\Http\Controllers;

use App\Interfaces\AuthServiceInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class Auth extends Controller
{
    public function __construct(readonly AuthServiceInterface $authService)
    {
    }

    function login(): View
    {
        return view('pages.auth.login');
    }

    function register(): View
    {
        return view('pages.auth.register');
    }

    function forgotPassword(): View
    {
        return view('pages.auth.forgot-password');
    }

    function verifyEmail($token): void
    {
        logger($token);
    }

    function signIn()
    {

    }

    function signUp(Request $request): RedirectResponse
    {
        try {
            $this->authService->registerNewUser($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }

        return redirect()->route('home');
    }
}
