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

// カスタムユーザー仕様のため使わない
// Auth::routes();


// ユーザー認証
Route::get('/', 'UserController@index');
Route::get('/signup', 'UserController@getSignup');
Route::post('/signup', 'UserController@postSignup');
Route::get('/login', 'UserController@getLogin');
Route::post('/login', 'UserController@postLogin');
Route::post('/logout', 'UserController@postLogout'); //認証時のみアクセス可

// ユーザー情報
Route::get('/profile', 'UserController@profile');
