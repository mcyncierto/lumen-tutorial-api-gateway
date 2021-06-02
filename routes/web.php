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

/**
 * Routes for authors
 */
$router->get('/authors', 'AuthorController@index');
$router->post('/authors', 'AuthorController@store');
$router->get('/authors/{authorId}', 'AuthorController@show');
$router->put('/authors/{authorId}', 'AuthorController@update');
$router->patch('/authors/{authorId}', 'AuthorController@update');
$router->delete('/authors/{authorId}', 'AuthorController@destroy');

/**
 * Routes for books
 */
$router->get('/books', 'BookController@index');
$router->post('/books', 'BookController@store');
$router->get('/books/{bookId}', 'BookController@show');
$router->put('/books/{bookId}', 'BookController@update');
$router->patch('/books/{bookId}', 'BookController@update');
$router->delete('/books/{bookId}', 'BookController@destroy');
