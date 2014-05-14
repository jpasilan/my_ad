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

Route::get('/', 'StaticPagesController@index');

//Route::get('social/{action?}', array('as' => 'hybridauth', 'uses' => 'UserController@socialAuth'));

// User login and logout routes.
Route::get('login', 'UserController@login');
Route::post('login', array('before' => 'csrf', 'uses' => 'UserController@login'));
Route::get('logout', 'UserController@logout');
