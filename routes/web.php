<?php

Route::get('/', function () {
	return 'Home';
});

Route::get('/users', 'UserController@index');

Route::get('/users/{id}', 'UserController@show')->where('id', '[0-9]+');

Route::get('/users/new', 'UserController@create');

Route::get('/greet/{name}/{nickname?}', 'WelcomeUserController@greet');