<?php

use App\User;
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

$router->post('auth/register', 'User\UserController@register');

$router->post('auth/login', ['uses' => 'AuthController@authenticate']);

$router->group(['middleware' => 'jwt.auth'], function() use ($router) {
    $router->get('users', [
        'uses' => 'User\UserController@info'
    ]);
});

$router->post('file/upload', 'File\FileController@upload');

$router->post('article/create', 'Article\ArticleController@create');
$router->delete('article/delete/{id}', 'Article\ArticleController@delete');
$router->get('posts/{id}', 'Article\ArticleController@show');
$router->get('posts', 'Article\ArticleController@index');
$router->put('article/update/{id}', 'Article\ArticleController@update');

$router->get('system/{path}', 'System\SystemController@show');
