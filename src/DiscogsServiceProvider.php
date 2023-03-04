<?php

namespace Shehzad\DiscogApi;
use DiscogsApi;
use Illuminate\Support\ServiceProvider;

class DiscogsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('discogs', function ($app) {
            return new DiscogsApi([
                'user_agent' => config('discogs.user_agent'),
                'token' => config('discogs.token'),
            ]);
        });
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/discogs.php' => config_path('discogs.php'),
        ]);
    }
}

