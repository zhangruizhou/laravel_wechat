<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::group(['domain'=>'dashboard.yaoxuefei.net','namespace' => 'Dashboard'],function(){

    Route::get('/', 'IndexController@index');
});


Route::group(['domain'=>'login.yaoxuefei.net'],function(){
    Auth::routes();
    //Route::get('/', 'IndexController@index');
});