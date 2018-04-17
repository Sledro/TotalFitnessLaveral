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
Route::get('/settings', 'UserController@settings')->middleware('auth');
Route::put('/settings/update', 'UserController@updateSettings')->middleware('auth');
Route::resource('user','UserController');

Route::get('/my-exercise-plan', 'ExercisePlansController@show')->middleware('auth');
Route::resource('ExercisePlans','ExercisePlansController');

Route::get('/exercise/{id}', 'ExerciseController@show')->name('exercise.show');
Route::resource('exercise','ExerciseController');

Route::put('/exercise-plan-manager/create/send', 'ExercisePlansController@store')->middleware('auth');
Route::get('/exercise-plan-manager/create', 'ExercisePlansController@create')->middleware('auth');
Route::get('/exercise-plan-manager/edit/{id}', 'ExercisePlansController@edit')->middleware('auth');
Route::get('/exercise-plan-manager', 'ExercisePlansController@index')->middleware('auth');
Route::resource('ExercisePlans','ExercisePlansController');

Route::put('/client-manager/update', 'ClientManagerController@updatePlan')->middleware('auth');
Route::put('/client-manager/accept', 'ClientManagerController@accept')->middleware('auth');
Route::get('/client-manager', 'ClientManagerController@index')->middleware('auth');
Route::get('/client-manager/requests', 'ClientManagerController@requests')->middleware('auth');
Route::resource('ClientManager','ClientManagerController');

Route::put('/trainer-finder/request', 'TrainerFinderController@request')->middleware('auth');
Route::get('/trainer-finder', 'TrainerFinderController@index')->middleware('auth');
Route::resource('TrainerFinder','TrainerFinderController');

Route::put('/mailbox/reply', 'MailboxController@reply')->middleware('auth');
Route::get('/mailbox', 'MailboxController@index')->middleware('auth');
Route::get('/mailbox/view/{id}', 'MailboxController@show')->middleware('auth');
Route::resource('Mailbox','MailboxController');