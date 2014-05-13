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

Route::get('/our-story', 'StaticPagesController@ourStory');

Route::get('/about-us', 'StaticPagesController@aboutUs');

Route::get('/privacy-policy', 'StaticPagesController@privacyPolicy');

Route::get('/terms-and-condition', 'StaticPagesController@termsAndCondition');
