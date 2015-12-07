<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

//$app->get('/', function () use ($app) {
//    return $app->welcome();
//});

$app->group(['namespace' => 'App\Http\Controllers\Zt', 'prefix' => 'zt'], function($app) {
    $app->get('/one', 'OneController@data_orm');
    $app->get('/two', 'TwoController@hello');
});

$app->group(['middleware' => 'login', 'namespace' => 'App\Http\Controllers\Api', 'prefix' => 'api'], function($app) {
    $app->get('/user', 'UserController@getData');
    $app->get('/user/{name:[\w]+}', 'UserController@service');
});

$app->get('/hello', [
    'uses' => 'TestController@hello',
//    'middleware' => App\Http\Middleware\LoginMiddleware::class,
]);
$app->get('/data_orm', 'TestController@data_orm');