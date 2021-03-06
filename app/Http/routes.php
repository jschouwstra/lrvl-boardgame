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

Route::get('/', function () {
    return view('pages.home');
});

// Route::get('games','GameController@index');
// Route::get('games/create','GameController@create');
// Route::post('games', 'GameController@store');
// Route::post('games', 'GameController@update');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//
// Route::get('games/{id}', 'GameController@show');
// Route::get('games/edit/{id}','GameController@edit');

//
 Route::resource('games', 'GameController');
 Route::resource('gamegroups', 'GamegroupController');
