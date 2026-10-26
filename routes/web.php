<?php

/** @var \Laravel\Lumen\Routing\Router $router */

// Endpoint 1: GET /
$router->get('/', 'UsersController@status');

// Endpoint 2: GET /users
$router->get('/users', 'UsersController@index');

// Endpoint 3: GET /users/{userId}
$router->get('/users/{userId}', 'UsersController@show');

$router->get('/posts', 'PostsController@index');

$router->get('products/expensive', 'ProductsController@getExpensiveProducts');

$router->get('/posts', 'PostsController@index');
$router->post('/posts', 'PostsController@store');
$router->get('/post/{id}', 'PostsController@show');
$router->put('/post/{id}', 'PostsController@update');
$router->delete('/post/{id}', 'PostsController@destroy');

$router->get('/customers', 'CustomersController@index');
$router->post('/customers', 'CustomersController@store');
$router->get('/customer/{id}', 'CustomersController@show');
$router->put('/customer/{id}', 'CustomersController@update');
$router->delete('/customer/{id}', 'CustomersController@destroy');