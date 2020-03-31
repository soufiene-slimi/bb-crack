<?php

namespace BbCrack\Crack;

use Illuminate\Support\ServiceProvider;

class CrackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->app['env'] = env('APP_ENV');
    }
}
