<?php

namespace Story\Theme;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Leafo\ScssPhp\Server;

class ThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'story-theme');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Route::get('/style/backend', function() {
            return Server::serveFrom(__DIR__.'/../resources/sass/bootstrap');
        });
    }

}
