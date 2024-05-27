<?php

namespace App\Providers;

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
        $nav_links = config("nav");
        $footer_nav = config('footer_links');

        view()->share(compact("nav_links","footer_nav"));
    }
}
