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


Route::get('/', 							'HomeController@index');

Route::get('/subscribe/', 					'SubscribeController@index');
Route::post('/subscribe/submit', 			'SubscribeController@subscribe');
Route::post('/subscribe/delete', 			'SubscribeController@unsubscribe');
Route::post('/subscribe/confirm-delete',	'SubscribeController@UnsubscribeConfirm');


Auth::routes(['register' => false],['login' => false]);