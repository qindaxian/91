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
    Route::get('admin/product-project_add','ProductController@project_add');

    Route::get('admin/product-creditor','ProductController@creditor');
    Route::get('admin/login','LoginController@login');
    Route::post('admin/login','LoginController@login');
    //债权添加
    Route::get('admin/creditor-add','ProductController@creditor_add');
    //债权图片上传
    Route::get('admin/creditor_upload','ProductController@creditor_upload');
    Route::post('admin/creditor_upload','ProductController@creditor_upload');
    Route::get('admin/business-qua','BusinessController@business_qua');
});


//中间件
Route::group(['middleware' => ['web','admin.login']], function () {
    Route::get('/admin/index','Admin\IndexController@index');
});



Route::group(['namespace' => 'Home'], function(){
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


	//用户注册
//    Route::get('home/reg', 'IndexController@reg');

    //用户注册
    Route::get('home/reg', 'IndexController@reg');

    //短信验证码
    Route::get('home/registers','IndexController@loginDo');
    //注册账号
    Route::post('/doreg','IndexController@doReg');
    //用户登陆
    Route::post('/login','IndexController@login');
    //登陆成功
    Route::get('home/user','IndexController@user');

  //前台个人中心
  Route::get('home/info', 'InfoController@index');
    //验证登录
    Route::get('/islogin', 'InfoController@islogin');
    //获取账户信息
    Route::get('/account', 'InfoController@account');  
    //获取理财列表数据  
    Route::get('/capital_detail_priority', 'InfoController@capital_detail_priority');
});