<?php

namespace App\Http\Controllers;

use App\Interfaces\AuthServiceInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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

    function verifyEmail($token): RedirectResponse
    {
        try {
            $this->authService->verifyEmail($token);
        } catch (ModelNotFoundException $exception) {
            abort(403, $exception->getMessage());
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('home');
    }

    function signIn(Request $request): RedirectResponse
    {
        try {
            $this->authService->signIn($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('home');
    }

    function signUp(Request $request): RedirectResponse
    {
        try {
            $this->authService->signUp($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('home');
    }

    function unverified(): View
    {
        return view('pages.auth.unverified');
    }

    function resendVerificationEmail(): RedirectResponse
    {
        try {
            $this->authService->resendVerificationEmail();
            return back();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }
    }

    function signOut(Request $request): RedirectResponse
    {
        try {
            $this->authService->signOut($request);
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('home');
    }

    function redirectToGoogle()
    {
        try {
            return $this->authService->redirectToGoogle();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }
    }

    function handleGoogleCallback(): RedirectResponse
    {
        try {
            $this->authService->handleGoogleCallback();
        } catch (ValidationException $e) {
            return redirect()->route('auth.get.login')->withErrors($e->errors())->withInput();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('home');
    }

    function changePassword(): View
    {
        return view('pages.auth.change-password');
    }

    function updatePassword(Request $request)
    {
        try {
            $this->authService->updatePassword($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return back();
    }
}
