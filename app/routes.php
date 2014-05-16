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

Route::group(['before' => 'sentryGuest'], function()
{
    Route::get('/', 'StaticPagesController@index');

    //Route::get('social/{action?}', array('as' => 'hybridauth', 'uses' => 'UserController@socialAuth'));

    // User registration and confirmation
    Route::get('register', 'UserController@register');
    Route::post('register', ['before' => 'csrf', 'uses' => 'UserController@register']);
    Route::get('confirm/{key}', 'UserController@confirm');

    // User login
    Route::get('login', 'UserController@login');
    Route::post('login', ['before' => 'csrf', 'uses' => 'UserController@login']);
});

Route::group(['before' => 'sentryAuth'], function()
{
    // User logout
    Route::get('logout', 'UserController@logout');

    Route::get('dashboard', 'UserController@showDashboard');
});
