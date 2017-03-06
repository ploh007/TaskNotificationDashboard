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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/tasks', 'TaskController@index');

Route::post('/view-tasks', 'TaskController@getTasks');

Route::post('/create-tasks', 'TaskController@createTasks');

Route::post('/delete-tasks', 'TaskController@deleteTask');

Route::post('/uncomplete-tasks', 'TaskController@uncompleteTask');

Route::post('/complete-tasks', 'TaskController@completeTask');

Route::get('/dashboard', function () {
    return view('app.landing');
})->middleware('auth');