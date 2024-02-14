<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('company', function () {
            return Auth::check() && Auth::user()->role ==='company';
        });
        Blade::if('admin', function () {
            return Auth::check() && Auth::user()->role==='admin';
        });
        Blade::if('user', function () {
            return Auth::check() && Auth::user()->role==='user';
        });
    }
}
