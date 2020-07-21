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
    Route::get('/brand_add','Index\BrandController@brand_add'); //分类添加视图
    Route::post('/brand_add','Index\BrandController@brand_addDo'); //分类执行添加
});

