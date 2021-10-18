<?php



$router->get('/', function () use ($router) {
    $recursos = app('db')->select("SELECT * FROM `siluetas`");
    return $recursos;
});
$router->get('/perfil', 'ExampleController@example');
$router->get('get-rompecabeza/{id}/{idioma}', 'RompecabezaController@show');
$router->get('get-memorama/{id}/{idioma}', 'MemoramaController@show');
$router->get('get-silueta/{id}/{idioma}', 'SiluetaController@show');
$router->post('post-silueta-create', 'SiluetaController@store');
$router->get('get-simondice/{id}/{idioma}', 'SimonController@show');
$router->get('get-mochila/{id}/{idioma}', 'MochilaController@show');