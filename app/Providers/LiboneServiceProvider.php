<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LiboneServiceProvider extends ServiceProvider
{

    protected $defter = true;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('libone', function ($app) {
            require_once base_path('app') . '/Libraries/Libone/lib1.php';
            return new \lib1();
        });
    }
}
