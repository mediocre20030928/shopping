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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/login')->group(function(){
    Route::any('/login','LoginController@login');
    Route::any('/reg','LoginController@reg');
    Route::any('/getpass','LoginController@getpass');
    Route::any('/overpass','LoginController@overpass');
    Route::any('/sendcode','LoginController@sendcode');
    Route::any('/do_reg','LoginController@do_reg');
});

Route::prefix('/shop')->group(function(){
    Route::get('/index','ShopController@index');
    Route::get('/test1/ceater','ShopController@test1');
    Route::get('/test2/getbl','ShopController@test2');

    Route::get('/category','Index\CategoryController@category'); //前台分类展示
    Route::get('/r','Index\CategoryController@r');
    Route::get('/fl','Index\CategoryController@fl');

    Route::get('/category','Index\CategoryController@category');
    Route::get('/test3','Index\CategoryController@test3'); //分类执行添加
    Route::get('/login','Index\CategoryController@login'); //分类执行添加
});

