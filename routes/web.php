<?php

// rutas

Route::get('test', function(){
	$user = new App\User;

	$user->name = "David";

	$user->email = "admccxx@gmail.com";

	$user->password = bcrypt('123123');

	$user->role_id = "1";

	$user->save();

	return $user;


} );

Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludos'])->where('nombre', "[A-Za-z]+");


Route::resource('messages', 'MessagesController');

Route::resource('user', 'UserController');

Route::get('login', 'Auth\LoginController@showLoginForm');

Route::post('login',['as' => 'login', 'uses' => 'Auth\LoginController@login']);

Route::get('logout', 'Auth\LoginController@logout');
