<?php



$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->get('/perfil', 'ExampleController@example');
$router->get('get-rompecabeza/{id}/{idioma}', 'RompecabezaController@show');
$router->get('get-memorama/{id}/{idioma}', 'MemoramaController@show');
$router->get('get-silueta/{id}/{idioma}', 'SiluetaController@show');
$router->get('get-simondice/{id}/{idioma}', 'SimonController@show');
$router->get('get-mochila/{id}/{idioma}', 'MochilaController@show');