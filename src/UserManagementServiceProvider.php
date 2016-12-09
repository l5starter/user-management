<?php

namespace L5Starter\UserManagement;

use Illuminate\Support\ServiceProvider;

class UserManagementServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!$this->app->routesAreCached()) {
            require __DIR__ . '/Http/routes.php';
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'l5starter');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
