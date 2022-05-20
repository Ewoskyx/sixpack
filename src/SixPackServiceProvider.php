<?php

namespace ewoskyx\sixpack\src;

use ewoskyx\sixpack\Fields\Concretes\NameValidator;
use ewoskyx\sixpack\Fields\Contracts\INameValidator;
use Illuminate\Support\ServiceProvider;

class SixPackServiceProvier extends ServiceProvider{

    public function boot(){
        $this->app->bind(INameValidator::class, NameValidator::class);
    }

    public function register()
    {
    
    }

}