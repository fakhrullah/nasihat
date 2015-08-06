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

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Main page will show a quote with beautiful background
Route::get('/',[
    'as' => 'welcome',
    'uses' => 'WelcomeController@index'
]);

// About
Route::get('about', [
    'as' => 'about.index',
    'uses'=> 'PageController@about'
]);

// Resources -> ayat al quran and hadis

// Resources -> backgrounds

