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
    return view('welcome');
});

Route::auth();

Route::get('/details', 'HomeController@details');
Route::get('/photos', 'HomeController@photos');
Route::get('/registry', 'HomeController@registry');
Route::get('/rsvp', 'HomeController@rsvp');
