<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
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
    public function boot()
    {
        // Share the role with all views
        View::composer('*', function ($view) {
            $isAdmin = Auth::check() && Auth::user()->hasRole('admin');
            $view->with('isAdmin', $isAdmin);
        });
    }
}
