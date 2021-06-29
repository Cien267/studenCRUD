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

Route::get('/', 'StudentsController@index');
Route::get('/students', 'StudentsController@create')->name('student.create');
Route::post('/students', 'StudentsController@store')->name('student.store');

Route::get('/students/{student}', 'StudentsController@edit')->name('student.edit');
Route::post('/students/{student}', 'StudentsController@update')->name('student.update');

Route::delete('/students/{student}', 'StudentsController@destroy')->name('student.destroy');

Route::post('/', 'StudentsController@index')->name('student.index');