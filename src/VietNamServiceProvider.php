<?php

namespace NguyenManh1997\VietNam;

use Illuminate\Support\ServiceProvider;

class VietNamServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $package_name = "vietnam";
        // include routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations/');
        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations')
        ], 'migrations');
        // database seeder
        $this->publishes([
            __DIR__.'/database/seeds/' => database_path('seeds')
        ], 'seeds');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}