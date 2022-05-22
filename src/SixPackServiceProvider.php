<?php

namespace ewoskyx\sixpack\src\SixPackServiceProvider;

use Illuminate\Support\ServiceProvider;
use ewoskyx\sixpack\Facades\GBValidator;

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