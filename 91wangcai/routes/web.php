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
   	Route::get('admin/product-project','ProductController@project');
   	Route::get('admin/product-creditor','ProductController@creditor');
   	//债权添加
   	Route::get('admin/creditor-add','ProductController@creditor_add');
   	//债权图片上传
   	Route::get('admin/creditor_upload','ProductController@creditor_upload');
   	Route::post('admin/creditor_upload','ProductController@creditor_upload');
});

/*//中间件
Route::group(['middleware' => ['web','admin.login.login']], function () {
    Route::get('/admin/login/login','Admin\LoginController@login');
    //登录页面
    Route::get('/admin/index/index','Admin\IndexController@index');
    //后台首页路由
});*/


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