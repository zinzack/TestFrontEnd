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

/*Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/features', 'HomeController@features');
Route::get('/testimonial', 'HomeController@testimonial');
Route::get('/ss', 'HomeController@ss');
Route::get('/price', 'HomeController@price');*/

Route::get('/features', function () {
    return view('features');
});

Route::get('/testimonial', function () {
    return view('testimonial');
});

Route::get('/ss', function () {
    return view('ss');
});

Route::get('/price', function () {
    return view('price');
});

Route::get('/register', function () {
    return view('register');
});


