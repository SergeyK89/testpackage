<?php

namespace SergeyK89\testpackage;

use Illuminate\Support\ServiceProvider;

class testpackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('SergeyK89\testpackage\TestPackageController');
        $this->loadViewsFrom(__DIR__.'/views', 'testpackages');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
