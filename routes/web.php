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

$router->group(['prefix' => 'tasks'], function () use ($router) {
    $router->post('/', 'TaskController@store');       
    $router->get('/', 'TaskController@index');        
    $router->get('{id}', 'TaskController@show');      
    $router->put('{id}', 'TaskController@update');    
    $router->delete('{id}', 'TaskController@destroy');
});
