<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\LoginService;

class LoginServiceProvider extends ServiceProvider
{
    /**
     * Registra el servicio.
     */
    public function register()
    {
        // Registrar el servicio de login
        $this->app->singleton(LoginService::class, function ($app) {
            return new LoginService();
        });
    }

    /**
     * Ejecuta acciones al arrancar.
     */
    public function boot()
    {
        //
    }
}