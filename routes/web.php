<?php



$router->get('/', function () use ($router) {
    $results =  app('db')->select("SELECT * FROM recursos");
    dd($results);
    return $router->app->version();
});
$router->get('/perfil', 'ExampleController@example');
$router->get('get-rompecabeza/{id}', 'RompecabezaController@show');