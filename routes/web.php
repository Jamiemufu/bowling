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

// Route::get('/', function () {
//     return view('pages.home');
// });

//root and view
Route::get('/', 'Controller@index');
Route::get('/view/{id}', 'Controller@show');

//venues
Route::get('/venues', 'VenuesController@index');
Route::get('/venues/create', 'VenuesController@create');
Route::post('/venues', 'VenuesController@store');
Route::get('/venues/edit/{id}', 'VenuesController@edit');
Route::get('/venues/{id}', 'VenuesController@show');
Route::delete('/venues/{id}', 'VenuesController@destroy');

//players
Route::get('/players', 'PlayersController@index');
Route::get('/players/create', 'PlayersController@create');
Route::post('/players', 'PlayersController@store');
Route::get('/players/edit/{id}', 'PlayersController@edit');
Route::get('/players/{id}', 'PlayersController@show');
Route::delete('/players/{id}', 'PlayersController@destroy');
Route::post('/players/search', 'PlayersController@search');
Route::get('/players/stats/{id}', 'PlayersController@stats');