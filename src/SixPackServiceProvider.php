<?php

namespace ewoskyx\sixpack\src;

use ewoskyx\sixpack\Fields\Concretes\NameValidator;
use ewoskyx\sixpack\Fields\Contracts\INameValidator;
use Illuminate\Support\ServiceProvider;

class SixPackServiceProvider extends ServiceProvider{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Actual provider
     *
     * @var \Illuminate\Support\ServiceProvider
     */
    protected $provider;

    /**
     * Create a new service provider instance.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function __construct($app)
    {
        parent::__construct($app);

        $this->provider = $this->getProvider();
    }


    public function boot(){
        $this->app->bind(INameValidator::class, NameValidator::class);
    }

    public function register()
    {
        return $this->provider->register();
    }

}