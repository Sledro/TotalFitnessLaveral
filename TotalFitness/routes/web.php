<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesContorller@index');

Route::get('/about', 'PagesContorller@about');

Auth::routes();

Route::resource('newsfeed', 'NewsfeedController');

Route::get('/newsfeed', 'NewsfeedController@index')->middleware('auth');