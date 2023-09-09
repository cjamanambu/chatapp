<?php

namespace App\Http\Controllers;

use App\Interfaces\AuthServiceInterface;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;
use Inertia\Response;

class Auth extends Controller
{
    public function __construct(readonly AuthServiceInterface $authService)
    {
    }

    function getLogin(): Response
    {
        return Inertia::render('Auth/Login');
    }

    function getRegister(): Response
    {
        return Inertia::render('Auth/Register');
    }

    function getLogout(Request $request): RedirectResponse
    {
        try {
            $this->authService->signOut($request);
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('auth.get.login');
    }

    function getForgotPassword(): Response
    {
        return Inertia::render('Auth/ForgotPassword');
    }

    function getVerifyEmail($token): RedirectResponse
    {
        try {
            $this->authService->verifyEmail($token);
        } catch (ModelNotFoundException $exception) {
            abort(403, $exception->getMessage());
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('dashboard');
    }

    function getUnverified(): Response
    {
        return Inertia::render('Auth/Unverified');
    }

    function changePassword(): Response
    {
        return Inertia::render('Auth/ChangePassword');
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

        return redirect()->route('dashboard');
    }

    function verifyResetLink($token): Response
    {
        try {
            $user = $this->authService->verifyResetLink($token);
        } catch (ModelNotFoundException $exception) {
            abort(403, $exception->getMessage());
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return Inertia::render('Auth/ResetPassword', [
            'user' => $user,
            'token' => $token
        ]);
    }

    function postRegister(Request $request): RedirectResponse
    {
        try {
            $this->authService->register($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors());
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('auth.get.unverified');
    }

    function postLogin(Request $request): RedirectResponse
    {
        try {
            $this->authService->signIn($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('dashboard');
    }

    function postForgotPassword(Request $request): RedirectResponse
    {
        try {
            $this->authService->sendResetLinkEmail($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('auth.get.forgot-password');
    }

    function resetPassword(Request $request): RedirectResponse
    {
        try {
            $this->authService->resetPassword($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('auth.get.login');
    }

    function updatePassword(Request $request): RedirectResponse
    {
        try {
            $this->authService->updatePassword($request);
        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        } catch (\Exception $exception) {
            logger($exception->getMessage());
            abort(500);
        }

        return redirect()->route('auth.get.change-password');
    }
}
