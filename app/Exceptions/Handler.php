<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Inertia\Inertia;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        $response = parent::render($request, $e);
        $status = $response->status();
        $message = $response->exception?->getMessage() ?? null;

        if (!app()->environment(['testing'])) {

            return match ($status) {
                404 => Inertia::render('Errors/404', ['message' => $message])->toResponse($request)->setStatusCode($status),
                500, 503 => Inertia::render('Errors/500', ['message' => $message])->toResponse($request)->setStatusCode($status),
                403 => Inertia::render('Errors/403', ['message' => $message])->toResponse($request)->setStatusCode($status),
                401 => Inertia::render('Errors/401', ['message' => $message])->toResponse($request)->setStatusCode($status),
                400 => Inertia::render('Errors/400', ['message' => $message])->toResponse($request)->setStatusCode($status),
                419 => redirect()->back()->withErrors(['status' => __('The page expired, please try again.')]),
                default => $response
            };

        }

        return $response;

    }
}
