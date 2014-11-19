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

// auth
Route::get('adminLogin', 'LoginController@adminLogin');
Route::get('studentLogin', 'LoginController@studentLogin');
Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@doLogin');
Route::get('logout', 'LoginController@logout');

// admin group
Route::group(['prefix' => 'admin', 'before' => 'auth.admin'], function()
{

});

// student group
Route::group(['prefix' => 'student', 'before' => 'auth.student'], function()
{

});
