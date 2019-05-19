<?php

// app()->singleton('App\Example', function () {
//     dd('called');
//     return new \App\Example;
// });

// app()->singleton('App\Services\Twitter', function () {
//     return new \App\Services\Twitter('twitter_api_key');
// });

// Route::get('/wc', function() {
//     dd(app('App\Example'));

//     return view('welcome');
// });

use App\Services\Twitter;

//use App\Repositories\UserRepository;
// use App\Repositories\DbUserRepository;

Route::get('/', function(Twitter $twiter) {
    return view('welcome');
});

// Route::get('/wc', function(UserRepository $users) {

//     dd($users);

//     return view('welcome');
// });

//Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::get('/about', 'PagesController@aboutus');
/*
Route::get('/project', 'ProjectController@index');
Route::post('/project', 'ProjectController@store');
Route::get('/project/create', 'ProjectController@create');
*/
Route::resource('project', 'ProjectController')->middleware('can:update,project');

Route::post('/project/{project}/tasks', 'ProjectTasksController@store');

// Route::patch('/tasks/{task}', 'ProjectTasksController@update');

Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
