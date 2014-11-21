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

// login check
Route::get('/', function() {

    if ( Auth::admin()->check() || Auth::student()->check() )
    {
        return Redirect::to( Auth::admin()->check() ? 'admin' : 'student' );
    }
    else
    {
        return Redirect::to('login');
    }
});

// auth
Route::get('adminLogin', 'LoginController@adminLogin');
Route::get('studentLogin', 'LoginController@studentLogin');
Route::get('login', 'LoginController@login');
Route::post('login', 'LoginController@doLogin');
Route::get('logout', 'LoginController@logout');

// admin group
Route::group(['prefix' => 'admin', 'before' => 'auth.admin'], function()
{
    // index
    Route::get('/', function() {

        return Redirect::to('admin/lessons');
    });

    // lessons resource
    Route::resource('lessons', 'LessonsController');

    // student resource
    Route::resource('students', 'StudentsController');

    // faculty member resource
    Route::resource('faculty_members', 'FacultyMembersController');

    // classroom resource
    Route::resource('classrooms', 'ClassroomsController');
});

// student group
Route::group(['prefix' => 'student', 'before' => 'auth.student'], function()
{
    // index
    Route::get('/', function() {

        return Redirect::to('student/lessons');
    });

    // lessons
    Route::get('lessons', 'StudentController@lessons');
    Route::get('lessons/create', 'StudentController@createLesson');
    Route::post('lessons', 'StudentController@storeLesson');
    Route::delete('lessons/{id}', 'StudentController@destroyLesson');
});
