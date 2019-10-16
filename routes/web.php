<?php

Route::get('/', function () {
	return 'Home';
});

Route::get('/users', function() {
	return 'Users';
});

Route::get('/users/{id}', function($id) {
	return "Show details of user: {$id}";
})->where('id', '[0-9]+');

Route::get('/users/new', function() {
	return 'Create new user';
});

Route::get('/greet/{name}/{nickname?}', function($name, $nickname = null) {
	$name = ucfirst($name);
	if($nickname) {
		return "Hello {$name}, your nick is: {$nickname}";
	} else {
		return "Hello {$name}";
	}
});