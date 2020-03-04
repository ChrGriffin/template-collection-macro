<?php

namespace <PACKAGE_NAMESPACE>;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    public function boot()
    {
        if(!Collection::hasMacro('<MACRO_NAME>')) {
            Collection::macro('<MACRO_NAME>', function () {

            });
        }
    }
}
