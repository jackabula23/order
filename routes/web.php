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

Route::group(['middleware' => ['web', 'admin.login'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::any('index', 'IndexController@index');
    Route::get('quit', 'LoginController@quit');
    Route::any('pass', 'IndexController@pass');
    Route::resource('category', 'CategoryController');
    //文章管理的增删改查
    Route::resource('article','ArticleController');
    //图片上传路由
    Route::any('upload','CommonController@upload');
    
    Route::resource('links', 'LinksController');
    Route::any('links/changeorder','LinksController@changeOrder');

    Route::resource('navs', 'NavsController');
    Route::post('navs/changeorder','NavsController@changeOrder');

    Route::resource('categories', 'CategoriesController');
    Route::post('cate/changeorder', 'CategoryController@changeOrder');

    //配置项路由
    Route::get('config/putfile','ConfigController@putFile');//需要卸载资源路由前面，否则和show方法冲突
    Route::post('config/changeorder','ConfigController@changeOrder');
    Route::resource('config','ConfigController');
    Route::post('config/changecontent','ConfigController@changeContent');
});

Route::get('admin/code', 'Admin\LoginController@code');
Route::any('admin/login', 'Admin\LoginController@login');
