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
Route::group(['namespace' => 'Admin'], function(){
    // 控制器在 "App\Http\Controllers\Admin" 命名空间下
   	Route::get('admin/index','IndexController@index');
   	Route::get('admin/add','IndexController@add');
});

Route::group(['namespace' => 'Home'], function(){
    // 控制器在 "App\Http\Controllers\Admin" 命名空间下
   	//前台首页
	Route::get('home/index', 'IndexController@index');
	//前台帮助中心
	Route::get('home/helpcenter', 'HelpcenterController@index');
	//前台信息披露
	Route::get('home/informationdisclosure', 'InformationdisclosureController@index');
	//前台出借金额
	Route::get('home/loan', 'LoanController@index');
	//前台运营报告
	Route::get('home/operationreport', 'OperationreportController@index');
	//前台项目列表
	Route::get('home/projectlist', 'ProjectlistController@index');
	//前台旺财记事
	Route::get('home/chronicle', 'ChronicleController@index');
});