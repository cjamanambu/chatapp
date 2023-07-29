<?php

namespace App\Jobs;

use App\Mail\ResetLinkEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class ResetLinkEmailJob implements ShouldQueue
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
        $expires = now()->addMinutes(15);
        $resetLink = URL::temporarySignedRoute('auth.get.reset', $expires, ['token' => $this->token]);
        $resetLinkEmail = new ResetLinkEmail($this->username, $resetLink);
        Mail::to($this->email)->send($resetLinkEmail);
        logger('dispatched reset link email to ' . $this->email);

    }
}
