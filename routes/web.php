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

// 症状一覧
Route::get('syojo', 'SyojoController@index');

// 不良箇所一覧
Route::get('part', 'PartController@index');

// 不良箇所追加処理
Route::get('part/add', 'PartController@add');
Route::post('part/add', 'PartController@create');

// 原因一覧表示
Route::get('cause', 'CauseController@index');

// 所見一覧表示
Route::get('comment', 'CommentController@index');

// 全レコードを横に一覧表示
Route::get('all', 'AllController@index');

// テーブルの関連性
Route::get('relation', 'RelationController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
