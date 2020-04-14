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
    Route::get('immo','ImmoController@index')->name('immo');
    Route::get('immo/create','ImmoController@create')->name('immo/create');
    Route::post('immo','ImmoController@store');
    Route::get('immo/{id}/edit','ImmoController@edit');
    Route::get('immo/{id}/edit1','TransfertController@edit1');
    Route::get('immo/{id}/edit2','ImmoController@edit2');
    Route::get('immo/transfert','TransfertController@index1')->name('immo/transfert');
    Route::get('immo/rep','ImmoController@index2')->name('immo/rep');
    Route::get('immo/ref','ImmoController@index3')->name('immo/ref');
    Route::put( 'immo/{id}','ImmoController@update');
    Route::delete( 'immo/{id}','ImmoController@destroy');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

