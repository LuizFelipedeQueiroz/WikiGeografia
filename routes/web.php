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
    return $router->app->version();
});

$router->get('/Inicio', "inicioController@Inicio");

$router->get('/Outro/Economia',"outroController@economia");

$router->get('/Paises/Europa', "paisesController@PaisesEuropeus");
$router->get('/Paises/America', "paisesController@PaisesAmericanos");
$router->get('/Paises/Asia', "paisesController@PaisesAsiaticos");
$router->get('/Paises/Africa', "paisesController@PaisesAfricanos");
$router->get('/Paises/Oceania', "paisesController@PaisesOceania");
$router->get('/Paises/Todos', "paisesController@Todos");