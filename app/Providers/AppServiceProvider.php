<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

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
        // Load routes from config/routes.php
        $routes = config('routes');

        foreach ($routes as $name => $route) {
            Route::middleware($route['middleware'] ?? [])
                ->prefix($route['prefix'] ?? '')
                ->group($route['path']);
        }
    }
}
