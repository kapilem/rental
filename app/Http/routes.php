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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('admin', 'AdminController@index');
Route::get('admin/armada', 'AdminController@getArmada');
Route::get('admin/armada', 'AdminController@getArmada');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['prefix' => 'api/v1', 'after' => 'allowOrigin'], function() {
	Route::get('/jeniskendaraan', 'ApiController@getJenisKendaraan');
	
	Route::group(['prefix' => '/mobil', 'after' => 'allowOrigin'], function() {
		Route::get('/', 'ApiController@getMobil');
		Route::get('/{merk}', 'ApiController@getByMerkMobil');
		Route::get('/{merk}/yyyy/{tahun}', 'ApiController@getByMerkTahunMobil');
		Route::get('/yyyy/{tahun}', 'ApiController@getByTahunMobil');
	});

	Route::group(['prefix' => '/motor', 'after' => 'allowOrigin'], function() {
		Route::get('/', 'ApiController@getMotor');
		Route::get('/{merk}', 'ApiController@getByMerkMobil');
	});

	Route::group(['prefix' => '/customer', 'after' => 'allowOrigin'], function() {
		Route::get('/', 'ApiController@getCust');
		Route::get('/{nama}', 'ApiController@getCustByName');
	});
	
	
	Route::group(['prefix'=>'/kendaraan', 'after'=>'allowOrigin'],function(){
		Route::get('/','ApiController@getKendaraan');
	});


});