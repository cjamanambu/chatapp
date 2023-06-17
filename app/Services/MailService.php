<?php

namespace App\Services;

use App\Jobs\VerifyEmailJob;
use Illuminate\Database\Eloquent\Model;

class MailService
{
    static function sendVerificationMail(Model $user, $token): void
    {
        dispatch(new VerifyEmailJob($user->username, $user->email, $token));
    }
}
