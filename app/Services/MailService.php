<?php

namespace App\Services;

use App\Jobs\VerifyEmailJob;
use App\Jobs\WelcomeEmailJob;
use Illuminate\Database\Eloquent\Model;

class MailService
{
    static function sendVerificationMail(Model $user, $token): void
    {
        dispatch(new VerifyEmailJob($user->username, $user->email, $token));
    }

    static function sendWelcomeMail(Model $user): void
    {
        dispatch(new WelcomeEmailJob($user->username, $user->email));
    }
}
