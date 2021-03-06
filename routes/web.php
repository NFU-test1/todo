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

#Route::get('/', function () {
#    return view('welcome');
#});


#Route::post('tasks', function() {
    #return redirect('/');
#});

Route::patch('tasks/{task}', function($task) {
    return redirect('/');
});

#Route::delete('tasks/{task}', function($task) {
#    return redirect('/');
#});

Route::get('/', 'TasksController@index');
Route::get('/create', 'TasksController@create');
Route::post('tasks', 'TasksController@store');
Route::get('tasks/{id?}/edit', 'TasksController@edit');
Route::patch('tasks/{task}', 'TasksController@update');
Route::delete('tasks/{task}', 'TasksController@destroy');

