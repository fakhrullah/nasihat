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

Route::get('miaw',function(){
    return 'miaw';
});

// Main page will show a quote with beautiful background
Route::get('/',[
    'as' => 'main',
    'uses' => 'MainController@index'
]);

// About
//Route::get('about', [
//    'as' => 'about.index',
//    'uses'=> 'PageController@about'
//]);

// Resources -> ayat al quran and hadis
Route::resource('quote', 'QuoteController',['except' => ['index', 'destroy']]);

// Resources -> backgrounds
Route::resource('background', 'BackgroundController',['except' => [ 'edit', 'show']]);
