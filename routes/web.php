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

Auth::routes(['register' => false]);

Route::group(['middleware' => ['auth']], function () {

	Route::get('/', 'DashboardController@index')->name('dashboard.index');

	Route::get('/customers/list', 'CustomerController@list');
	Route::resource('customers', 'CustomerController');

	Route::get('/projects/list', 'ProjectController@list');
	Route::get('/projects/{project}/archive', 'ProjectController@destroy')->name('projects.archive');
	Route::resource('projects', 'ProjectController');

	Route::resource('hours', 'HourController');

	Route::get('/user/board', 'UserController@board');
	Route::get('/users/list', 'UserController@getUsers');
	Route::resource('users', 'UserController');

	Route::get('boards', function() {
		return view('tasks.index');
	})->name('boards.index');

	Route::resource('checklists', 'TaskChecklistController');

    Route::get('/board/{board}/tasks', 'BoardController@tasks');    
    Route::resource('/boards', 'BoardController');

	Route::get('/task/archive/{task}', 'TaskController@archive');
	Route::post('/task/{task}/tags', 'TaskController@tags');
	Route::resource('/task', 'TaskController');
	Route::resource('/tags', 'TagController');


	Route::resource('passwords', 'PasswordController');

	Route::get('accounts', function() {
		return view('accounts.index');
	})->name('accounts.index');

	Route::post('settings/upload', 'SettingController@upload');
	Route::resource('settings', 'SettingController');


});