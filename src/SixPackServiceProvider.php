<?php

namespace ewoskyx\sixpack;

use Illuminate\Support\ServiceProvider;


class SixPackServiceProvider extends ServiceProvider{

    public function boot(){
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('GBValidator', "Ewoskyx\\SixPack\\Facades\\GBValidator");
    }

    public function register()
    {
        $this->app->bind('GBValidator', function($app) {
            return new GBValidator();
        });
    }

}