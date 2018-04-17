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

Route::post('/user/{username}/follow', 'UserController@follow')->name('user.show');
Route::get('/user/{username}', 'UserController@show')->name('user.show');
Route::resource('user','UserController');

Route::get('/my-exercise-plan', 'ExercisePlansController@show');
Route::resource('ExercisePlans','ExercisePlansController');

Route::get('/exercise/{id}', 'ExerciseController@show')->name('exercise.show');
Route::resource('exercise','ExerciseController');

Route::put('/exercise-plan-manager/create/send', 'ExercisePlansController@store');
Route::get('/exercise-plan-manager/create', 'ExercisePlansController@create');
Route::get('/exercise-plan-manager/edit/{id}', 'ExercisePlansController@edit');
Route::get('/exercise-plan-manager', 'ExercisePlansController@index');
Route::resource('ExercisePlans','ExercisePlansController');


Route::get('/client-manager', 'ClientManagerController@index');
Route::resource('ClientManager','ClientManagerController');
