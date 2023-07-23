<?php

namespace App\Jobs;

use App\Mail\WelcomeEmail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class WelcomeEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(protected string $username, protected string $email)
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $dashboardLink = route('dashboard');
        $welcomeEmail = new WelcomeEmail($this->username, $dashboardLink);
        Mail::to($this->email)->send($welcomeEmail);
        logger('dispatched welcome email to ' . $this->email);
    }
}
