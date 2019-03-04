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
    return view('start');
});

Route::get('/start', 'HomeController@index');
Route::get('/captain/{slug}', 'CaptainController@show');
Route::post('/captain/{slug}', 'CaptainController@store');
Route::get('/captains', 'CaptainController@index');
// Route::get('/create', 'CaptainController@create');

Auth::routes();
