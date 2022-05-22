<?php 

namespace ewoskyx\sixpack\Facades;

use Illuminate\Support\Facades\Facade;

class GBValidator extends Facade {

    protected static function getFacadeAccessor()
    {
        return \Ewoskyx\Sixpack\GBValidator::class;
    }
}