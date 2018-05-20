<?php

namespace Fully\Search\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class Search.
 *
 */
class Search extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'search';
    }
}
