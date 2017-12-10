<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::auth();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/tasks', 'TaskController@index');

Route::get('/help', function() {
	return view('help');
});

Route::get('/why', function() {
	return view('why');
});

Route::get('/about', function() {
	return view('about');
});



// Rpoute Management for Groups 
Route::post('/view-groups', 'GroupController@getGroups');

Route::post('/create-groups', 'GroupController@createGroups');

Route::post('/manage-groups', 'GroupController@manageGroups');

// Rpoute Management for Tasks 
Route::post('/view-tasks', 'TaskController@getTasks');

Route::post('/create-tasks', 'TaskController@createTasks');

Route::post('/delete-tasks', 'TaskController@deleteTask');

Route::post('/uncomplete-tasks', 'TaskController@uncompleteTask');

Route::post('/complete-tasks', 'TaskController@completeTask');

Route::get('/dashboard', function () {
    return view('app.dashboard');
})->middleware('auth');