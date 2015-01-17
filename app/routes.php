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

Route::get('/', function()
{
	return View::make('main')
		->with('actors', Actor::all());
});
Route::get('json-test', function(){
	return Actor::first();
});

Route::resource('actors','ActorsController');

App::missing(function($exception){
	return View::make('main');
});