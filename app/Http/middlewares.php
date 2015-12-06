<?php

/*
|--------------------------------------------------------------------------
| Register Middleware
|--------------------------------------------------------------------------
|
| Next, we will register the middleware with the application. These can
| be global middleware that run before and after each request into a
| route or middleware that'll be assigned to some specific routes.
|
*/

//$app->middleware([
//]);

$app->routeMiddleware([
    'login' => App\Http\Middleware\LoginMiddleware::class
]);