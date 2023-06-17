<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class MailService
{
    static function sendVerificationMail(Model $user, $token): void
    {
        $mailData = [
            'username' => $user->username,
            'verifyLink' => URL::signedRoute('auth.get.verify', ['token' => $token])
        ];

        // queuw mails to be sent later

//        Mail::to($user->email)->queue('');
//
//        Mail::queue('emails.verify-email', $mailData, function ($message) use ($user) {
//            $message->to($user->email);
//            $message->subject('Verify Email');
//        });

    }
}
