<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{

//    protected $defter = true;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        foreach (glob(base_path('app').'/Helpers/*.php') as $filename){
            require_once($filename);
        }
    }
}
