<?php

use Illuminate\Support\Facades\Route;

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

Route::get('task', 'TaskController@index')->name('task.index');
Route::get('task/create', 'TaskController@create')->name('task.create');
Route::get('task/{id}/done', 'TaskController@done')->name('task.done');
Route::post('task/store', 'TaskController@store')->name('task.store');
