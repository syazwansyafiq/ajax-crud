<?php

use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;
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
Auth::routes();
Route::get('/', 'TaskController@index');

Route::get('/tasks/{task_id}', 'TaskController@show');

Route::post('/tasks', 'TaskController@create');

Route::put('/tasks/{task_id}', 'TaskController@edit');

Route::delete('/tasks/{task_id}', 'TaskController@delete');

Route::get('/home', 'HomeController@index')->name('home');
