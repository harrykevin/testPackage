<?php

namespace Vendor\MyPackage;

use Illuminate\Support\ServiceProvider;

class MyPackageServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Bindings and configurations
    }

    public function boot()
    {
        // Publish files, migrations, routes, etc.
        // Load the package migrations
        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        // Publish the migrations so users can modify them
        $this->publishes([
            __DIR__ . '/migrations/' => database_path('migrations'),
        ], 'migrations');
    }
}
