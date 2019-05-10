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

//控制器路由
Route::get('/test','TestController@index');

// //分目录控制
// Route::get('/login','Admin\LoginController@index');

//资源路由 
Route::resource('article','ArticleController');

//路由群组
Route::group(['prefix' => 'admin'], function () {
 Route::get('/login','Admin\LoginController@index');
 Route::get('/login_again','Admin\LoginController@login');
 Route::get('/user','Admin\LoginController@user');	
});

