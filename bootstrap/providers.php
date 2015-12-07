<?php
/*
|--------------------------------------------------------------------------
| Register Container Bindings
|--------------------------------------------------------------------------
|
| Now we will register a few bindings in the service container. We will
| register the exception handler and the console kernel. You may add
| your own bindings here if you like or you can make another file.
|
*/

//$app->singleton(
//    Illuminate\Contracts\Console\Kernel::class,
//    App\Console\Kernel::class
//);

$providers = [
    App\Providers\HelperServiceProvider::class,
    App\Providers\LiboneServiceProvider::class,
];

foreach ($providers as $provider) {
    $app->register($provider);
}