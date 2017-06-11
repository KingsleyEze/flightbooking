<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



//web app controller
Route::get('/', 'SynController@index');
Route::get('/article', 'SynController@article');
Route::get('/article/{id}', 'SynController@articleShow');
Route::get('/services', 'SynController@services');
Route::get('/about', 'SynController@about');
Route::get('/contact', 'SynController@contact');
Route::get('/courier', 'SynController@courier');

Route::post('/', 'SynController@store');

//admin controller

Route::get('/admin/login', 'AdminController@login');
Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/blogger', 'AdminController@blogger');
Route::get('/admin/location', 'AdminController@location');

Route::post('/admin/dashboard', 'AdminController@store');

Route::post('/admin/location', 'AdminController@store_location');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

