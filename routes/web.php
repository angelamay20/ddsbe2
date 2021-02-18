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
$router -> get('/login',['uses' =>'UserController@loginSecurity']);
$router -> get('/users', 'UserController@getUsers'); // get all records of the user
$router ->post('/users', ['uses' => 'UserController@addUsers']); // post new record from user input
$router -> get('/users/{id}', 'UserController@getUser'); // get user data at the specified index
$router -> put('/users/{id}','UserController@updateUser'); //update user through finding data using user_id
$router -> delete('/users/{id}', ['uses' => 'UserController@deleteUser']); //delete existing record of the user
$router -> post('validate', ['as' => 'validate', 'uses' => 'UserController@userValidation']);
$router -> get('dashboard', ['as' =>'dashboard', 'uses' => 'UserController@dashboard']);
?>