<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 				'HomeController@index');
Route::get('/contact', 			'HomeController@contact');
Route::get('/dogs', 			'HomeController@dogs');
Route::get('/dogs/details', 	'HomeController@dogsDetails');
Route::get('/cats', 			'HomeController@cats');
Route::get('/fish', 			'HomeController@fish');
Route::get('/birds', 			'HomeController@birds');
Route::get('/small-animals', 	'HomeController@smallAnimals');
Route::get('/other', 			'HomeController@other');

//FAQ endless scroll
Route::get('/questions/{id}',	'HomeController@questions'); 

//Post
Route::post('/subscribe/', 		'SubscribeController@submit');


//disable accounts if installed
Auth::routes(['register' => false],['login' => false]);