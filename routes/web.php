<?php

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// User routes
$router->get('/users', 'UserController@index'); // get all users
$router->post('/users', 'UserController@addUser'); // create new user
$router->get('/users/{id}', 'UserController@show'); // get user by id
$router->put('/users/{id}', 'UserController@update'); // update user
$router->patch('/users/{id}', 'UserController@update'); // update user
$router->delete('/users/{id}', 'UserController@delete'); // delete user

// Job routes
$router->get('/usersjob', 'UserJobController@index');
$router->get('/usersjob/{id}', 'UserJobController@show');
