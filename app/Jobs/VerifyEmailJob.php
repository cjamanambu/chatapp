<?php

namespace App\Jobs;

use App\Mail\VerificationEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class VerifyEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected string $username, protected string $email, protected string $token)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $verifyLink = URL::signedRoute('auth.get.verify', ['token' => $this->token]);
        $verificationEmail = new VerificationEmail($this->username, $verifyLink);
        Mail::to($this->email)->send($verificationEmail);
        logger('dispatched verification email to ' . $this->email);
    }
}
