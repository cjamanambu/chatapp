<?php

namespace App\Providers;

use App\Interfaces\AuthServiceInterface;
use App\Interfaces\UserServiceInterface;
use App\Services\AuthService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // register auth service
        $this->app->singleton(
            AuthServiceInterface::class,
            AuthService::class
        );

        // register user service
        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
