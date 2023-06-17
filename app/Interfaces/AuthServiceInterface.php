<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface AuthServiceInterface
{
    public function registerNewUser(Request $request): void;

    public function resendVerificationEmail(): void;

    public function verifyEmail($token): void;
}
