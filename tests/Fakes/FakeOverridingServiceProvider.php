<?php

namespace <PACKAGE_NAMESPACE>\Tests\Fakes;

use Illuminate\Support\Collection;
use Illuminate\Support\ServiceProvider;

class FakeOverridingServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Collection::macro('<MACRO_NAME>', function () {
            return 'this should override the <MACRO_NAME> macro';
        });
    }
}
