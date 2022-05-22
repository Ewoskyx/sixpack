<?php

namespace ewoskyx\sixpack;

use ewoskyx\sixpack\GBValidator;
use Illuminate\Support\ServiceProvider;


class SixPackServiceProvider extends ServiceProvider{

    public function boot(){
        
    }

    public function register()
    {
        $this->app->bind('GBValidator', function($app) {
            return new GBValidator();
        });
    }

}