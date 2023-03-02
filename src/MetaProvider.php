<?php

namespace Kaplunova\Meta;

use Illuminate\Support\ServiceProvider;

class MetaProvider extends ServiceProvider
{
    public function boot()
    {

    }

    public function register()
    {
        $this->app->singleton('meta', function ($app){
            $meta = new MetaService('value from privider');
            return $meta;
        });
    }

}
