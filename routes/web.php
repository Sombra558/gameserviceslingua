<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () use ($router) {
    $results =  app('db')->select("SELECT * FROM recursos");
    dd($results);
    return $router->app->version();
});
$router->get('rompecabeza/{id}', 'RompecabezaController@show');