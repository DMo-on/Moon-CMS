<?php

namespace Fully\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class SearchServiceProvider.
 *
 */
class SearchServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('search', 'Fully\Search\Search');
    }
}
