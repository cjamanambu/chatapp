<?php

namespace App\Services;

use App\Jobs\VerifyEmailJob;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class MailService
{
    static function sendVerificationMail(Model $user, $token): void
    {
        dispatch(new VerifyEmailJob($user->username, $user->email, $token));
    }
}
