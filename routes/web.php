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


Route::get('/', 'SchoolsController@index');
Route::get('schools', 'SchoolsController@index');
Route::get('schools/create','SchoolsController@create');
Route::post('schools','SchoolsController@store');
Route::get('schools/{id}','SchoolsController@show');

Route::get('students/create','StudentsController@create');
Route::post('students','StudentsController@store');
