<?php

Route::get('/', [
	'as' => 'root_path',
	'uses' => 'PagesController@home'
]);

Route::get('/about', [
	'as' => 'about_path',
	'uses' => 'PagesController@about'
]);

Route::get('/contacts', [
	'as' => 'contact_path',
	'uses' => 'contactsController@create'
]);

