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

Auth::routes();

Route::get('/', 'StaticPagesController@home')->name('home');

Route::resource('articles','ArticlesController');

Route::resource('comments','CommentsController');

Route::resource('users','UsersController',['only' => ['show','edit','update']]);

Route::resource('notices','NoticesController',['only' => ['index',]]);
