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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');

});
Route::get('historic','HistoricController@index')->name('historic');

Route::get('immo','ImmoController@index')->name('immo');
Route::get('notification','ImmoController@notification')->name('notificationss');
// Route::put( 'reforme/{id}','ImmoController@reforme');
Route::get('immo/create','ImmoController@create')->name('immo/create');
Route::post('immo','ImmoController@store');
Route::get('immo/{id}/edit','ImmoController@edit');
Route::get('immo/{id}/edit1','ImmoController@edit1');
Route::get('immo/{id}/edit2','ImmoController@edit2');
Route::get('immo/transfert','ImmoController@transfert')->name('immo/transfert');
Route::get('immo/rep','ImmoController@rep')->name('immo/rep');
Route::get('immo/ref','ImmoController@ref')->name('immo/ref');
Route::put( 'immo/{id}','ImmoController@update');
Route::put( 'immoT/{id}','ImmoController@updateT');
Route::put( 'immoR/{id}','ImmoController@updateR');
Route::put( 'reforme/{id}','ImmoController@update1');
Route::delete( 'immo/{id}','ImmoController@destroy');

Route::get('departement','departementController@index')->name('departement');
Route::get('departement/create','departementController@create')->name('departement/create');
Route::post('departement','departementController@store');
Route::get('departement/{id}/edit','departementController@edit');
Route::put( 'departement/{id}','departementController@update');
Route::delete( 'departement/{id}','departementController@destroy');

Route::get('service','serviceController@index')->name('service');
Route::get('service/create','serviceController@create')->name('service/create');
Route::post('service','serviceController@store');
Route::get('service/{id}/edit','serviceController@edit');
Route::put( 'service/{id}','serviceController@update');
Route::delete( 'service/{id}','serviceController@destroy');




Route::group(['middleware -> can:manage-users' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
