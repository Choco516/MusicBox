<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/*Route::post('/store','MusicBoxController@store');
Route::resource('musicBox', 'MusicBoxController');
Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::post('/store','HomeController@store');
Route::get('/destroy/{id}','HomeController@destroy');


Route::resource('/','HomeController');