<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Response::macro('login', function ($message, array $data, $token, int $status_code) {
            return response()->json([
                'message' => $message,
                'data' => $data,
                'token' => $token
            ], $status_code);
        });

        Response::macro('success', function ($message, array $data, int $status_code) {
            return response()->json([
                'message' => $message,
                'data' => $data,
            ], $status_code);
        });

        Response::macro('failed', function ($message, int $status_code) {
            return response()->json([
                'message' => $message,
            ], $status_code);
        });

        Response::macro('errors', function ($message, array $errors, int $status_code) {
            return response()->json([
                'message' => $message,
                'errors' => $errors,
            ], $status_code);
        });
    }
}
