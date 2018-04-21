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



Route::group(['namespace' => 'Admin'], function(){
    // 控制器在 "App\Http\Controllers\Admin" 命名空间下
    Route::get('admin/index','IndexController@index');
    Route::get('admin/product-project','ProductController@project');

    Route::get('admin/product-project_add','ProductController@projectAdd');

    //旺财记事
    Route::get('admin/diary','DiaryController@diary');
    Route::get('admin/diary_add','DiaryController@diary_add');
    Route::get('admin/diary_upload','DiaryController@diary_upload');
    Route::post('admin/diary_upload','DiaryController@diary_upload');
    Route::get('admin/diary_stop','DiaryController@diary_stop');
    Route::get('admin/diary_start','DiaryController@diary_start');
    Route::get('admin/diary_del','DiaryController@diary_del');
    Route::get('admin/diary_update','DiaryController@diary_update');


    Route::get('admin/product-creditor','ProductController@creditor');
    //登录
    Route::get('admin/login','LoginController@login');
    //退出登录
    Route::get('admin/out','LoginController@out');
    Route::post('admin/login','LoginController@login');

    //债权添加
    Route::get('admin/creditor-add','ProductController@creditorAdd');
    //贷款资格申请
    Route::get('admin/business-qua','BusinessController@businessQua');
    Route::get('admin/business-qua-list','BusinessController@businessQuaList');

    //债权图片上传
    Route::get('admin/creditor_upload','ProductController@creditor_upload');
    Route::post('admin/creditor_upload','ProductController@creditor_upload');
    Route::get('admin/business-qua','BusinessController@business_qua');

    //后台管理员管理
    Route::get('admin/role','RoleController@index');
    Route::get('admin/admin_list','PowerController@adminList');
    Route::get('admin/power','PowerController@index');
    


});


//中间件
Route::group(['middleware' => ['web','admin.login']], function () {
    Route::get('/admin/index','Admin\IndexController@index');
    Route::get('admin/index','Admin\IndexController@index');
    Route::get('admin/product-project','Admin\ProductController@project');
    Route::get('admin/product-project_add','Admin\ProductController@project_add');

    Route::get('admin/product-creditor','Admin\ProductController@creditor');
    //债权添加
    Route::get('admin/creditor-add','Admin\ProductController@creditor_add');
    //贷款资格申请
    Route::get('admin/business-qua','Admin\BusinessController@businessQua');
    Route::get('admin/business-qua-list','Admin\BusinessController@businessQuaList');
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
    //前台旺财日记
    Route::get('home/notes', 'ChronicleController@meeting_diary');
    //前台财主见面会
    Route::get('home/caizhu', 'ChronicleController@meeting');


    //用户登陆
    Route::post('/login','IndexController@login');
    Route::get('/user','IndexController@user');

    //用户注册
    Route::post('/register','IndexController@register');

    //验证码
    Route::get('home/captcha','IndexController@captcha');

    //短信验证码
    Route::get('home/registers','IndexController@loginDo');

    //验证码
    Route::get('home/captcha','IndexController@captcha');


  //前台个人中心
  Route::get('home/info', 'InfoController@index');
    //验证登录
    Route::get('/islogin', 'InfoController@islogin');
    //获取账户信息
    Route::get('/account', 'InfoController@account');  

    //获取理财列表数据  
    Route::get('/capital_detail_priority', 'InfoController@capital_detail_priority');
    Route::get('/islogin', 'InfoController@islogin');  


    //退出登陆删除cookie
    Route::get('home/cookies','IndexController@cookies');

});