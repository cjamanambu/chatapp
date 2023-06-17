<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface AuthServiceInterface
{
    public function signUp(Request $request): void;

    public function signIn(Request $request): void;

    public function resendVerificationEmail(): void;

    public function verifyEmail($token): void;

    public function signOut(Request $request): void;

    public function redirectToGoogle();

    public function handleGoogleCallback();
}
