<?php

namespace ewoskyx\sixpack\src;

use Illuminate\Support\ServiceProvider;

class SixPackServiceProvier extends ServiceProvider{

    public function boot(){
        dd('The goodies are on the way!');
    }

    public function register()
    {
        
    }

}