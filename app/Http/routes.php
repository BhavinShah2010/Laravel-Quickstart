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

Route::get('/', 'PagesController@index' );


Route::get('facebooklogin', 'Auth\AuthController@getfacebooklogin');

Route::get('/dashboard', 'PagesController@getDashboard');

Route::get('logout', 'Auth\AuthController@getlogout');


Route::get('twitterlogin','Auth\AuthController@gettwitterlogin');

Route::get('googlelogin','Auth\AuthController@getgooglelogin');

Route::get('githublogin','Auth\AuthController@getgithublogin');

Route::get('linkedinlogin','Auth\AuthController@getlinkedinlogin');

Route::get('pinterestlogin','Auth\AuthController@getpinterestlogin');

Route::get('instagramlogin','Auth\AuthController@getinstagramlogin');

Route::get('dropboxlogin','Auth\AuthController@getdropboxlogin');

