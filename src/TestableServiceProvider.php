<?php

namespace Testable;

use Route;
use Illuminate\Support\ServiceProvider;

class TestableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->routes();
        $this->database();
        $this->views();
    }

    protected function routes()
    {
        Route::prefix('/testable')
            ->middleware(['web', 'auth'])
            ->name('testable.')
            ->namespace('Testable\\Http\\Controllers')
            ->group(function () {

            $this->loadRoutesFrom(__DIR__.'/../routes/testable.php');

        });
    }

    protected function database() {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/');
    }

    protected function views() {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'testable');
    }

    /**
    * Get the services provided by the provider.
    *
    * @return array
    */
    public function provides()
    {
        return ['testable'];
    }

}
