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

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::any('index', 'IndexController@index');
    Route::get('quit', 'LoginController@quit');
    Route::any('pass', 'IndexController@pass');
    Route::resource('category', 'CategoryController');
    Route::resource('article', 'ArticleController');
    Route::resource('categories', 'CategoriesController');
    Route::post('cate/changeorder', 'CategoryController@changeOrder');
});

Route::get('admin/code', 'Admin\LoginController@code');
Route::any('admin/login', 'Admin\LoginController@login');
