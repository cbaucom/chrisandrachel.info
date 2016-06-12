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

	Route::get('/photos', 'HomeController@index');
	Route::get('/#rsvp', 'RsvpController@create');
// Route::group(['middleware' => 'web'], function() {
	Route::post('/', 'RsvpController@store');
	Route::post('/photos', 'RsvpController@store');
	
	Route::get('sendemail', function () {
		 $data = array(
		     'name' => "Chris and Rachel",
		 );

		 Mail::send('emails.yes', $data, function ($message) {

		     $message->from('chrisrb83@gmail.com', 'Chris and Rachel');

		     $message->to('chrisrb83@gmail.com')->subject('Thank you!');

		 });

		 return view('welcome');
	});
// });
