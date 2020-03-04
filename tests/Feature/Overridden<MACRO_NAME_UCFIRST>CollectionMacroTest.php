<?php

namespace <PACKAGE_NAMESPACE>\Tests\Feature;

use <PACKAGE_NAMESPACE>\ServiceProvider;
use <PACKAGE_NAMESPACE>\Tests\Fakes\FakeOverridingServiceProvider;
use <PACKAGE_NAMESPACE>\Tests\TestCase;
use Illuminate\Support\Collection;

class Overridden<MACRO_NAME_UCFIRST>CollectionMacroTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            FakeOverridingServiceProvider::class,
            ServiceProvider::class
        ];
    }

    public function testItDoesNotOverrideAnExistingCollectionMacro(): void
    {

    }
}
