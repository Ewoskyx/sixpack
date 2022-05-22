<?php

namespace ewoskyx\sixpack;

use Illuminate\Support\ServiceProvider;


class SixPackServiceProvider extends ServiceProvider{

    public function boot(){
        $this->app->bind('GBValidator', function() {
            return new \Ewoskyx\Sixpack\GBValidator;
        });
    }

    public function register()
    {
        
    }

}