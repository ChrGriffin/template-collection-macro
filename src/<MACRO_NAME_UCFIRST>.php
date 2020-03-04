<?php

namespace <PACKAGE_NAMESPACE>;

use Illuminate\Support\Collection;

class <MACRO_NAME_UCFIRST>
{
    /** @var Collection */
    private $collection;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }
}
