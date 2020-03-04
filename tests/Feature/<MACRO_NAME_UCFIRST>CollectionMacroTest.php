<?php

namespace <PACKAGE_NAMESPACE>\Tests\Feature;

use <PACKAGE_NAMESPACE>\ServiceProvider;
use <PACKAGE_NAMESPACE>\Tests\TestCase;
use Illuminate\Support\Collection;

class <MACRO_NAME_UCFIRST>CollectionMacroTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    public function testTheMacroIsAddedToLaravelCollections(): void
    {

    }
}
