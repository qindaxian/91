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

//前台首页
Route::get('index/index', 'IndexController@index');
//前台帮助中心
Route::get('helpcenter/index', 'HelpcenterController@index');
//前台信息披露
Route::get('informationdisclosure/index', 'InformationdisclosureController@index');
//前台出借金额
Route::get('loan/index', 'LoanController@index');
//前台运营报告
Route::get('operationreport/index', 'OperationreportController@index');
//前台项目列表
Route::get('projectlist/index', 'ProjectlistController@index');
//前台旺财记事
Route::get('chronicle/index', 'ChronicleController@index');