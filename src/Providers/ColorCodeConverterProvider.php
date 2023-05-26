<?php

namespace MiladTech\ColorCodeConverter\Providers;

use MiladTech\ColorCodeConverter\Services\ColorCodeConverter;
use Illuminate\Support\ServiceProvider;

class ColorCodeConverterProvider extends ServiceProvider {

    public function boot()
    {
        # code...
    }

    public function register()
    {
        $this->app->bind(ColorCodeConverter::class, function($app){
            return new ColorCodeConverter();
        });
    }
}