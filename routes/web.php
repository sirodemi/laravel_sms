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

Route::get('/', function () {
    return view('welcome');
});

Route::get('syojo', 'SyojoController@index');

Route::get('part', 'PartController@index');

Route::get('part/add', 'PartController@add');
Route::post('part/add', 'PartController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
