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
Route::get('/dogs', 			'HomeController@dogs');
Route::get('/contact', 			'HomeController@contact');
Route::get('/questions/{id}',	'HomeController@questions'); //used for FAQ

//Post
Route::post('/subscribe/', 		'SubscribeController@submit');



Auth::routes(['register' => false],['login' => false]);