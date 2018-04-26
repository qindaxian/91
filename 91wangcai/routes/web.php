<?php

/*
|__------------------------------------------------------------------------
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
    Route::get('admin/product_project','ProductController@project');
    Route::get('admin/product_project_add','ProductController@projectAdd');

    //旺财记事
    Route::get('admin/diary','DiaryController@diary');
    Route::get('admin/diary_add','DiaryController@diaryAdd');
    Route::get('admin/diary_upload','DiaryController@diaryUpload');
    Route::post('admin/diary_upload','DiaryController@diaryUpload');
    Route::get('admin/diary_stop','DiaryController@diaryStop');
    Route::get('admin/diary_start','DiaryController@diaryStart');
    Route::get('admin/diary_del','DiaryController@diaryDel');
    Route::get('admin/diary_update','DiaryController@diaryUpdate');
    Route::get('admin/product_creditor','ProductController@creditorAdd');

    //登录
    Route::get('admin/login','LoginController@login');

    //退出登录
    Route::get('admin/out','LoginController@out');
    Route::post('admin/login','LoginController@login');

    //债权添加
    Route::get('admin/creditor_add','ProductController@creditorAdd');
    //贷款资格申请
    Route::get('admin/business_qualification','BusinessController@businessQua');
    Route::post('admin/business_qualification','BusinessController@businessQua');
    Route::get('admin/business_qualification_list','BusinessController@businessQuaList');
    Route::post('admin/qualification_ajax','BusinessController@qualificationAjax');
    //债权图片上传
    Route::get('admin/creditor_upload','ProductController@creditor_upload');
    Route::post('admin/creditor_upload','ProductController@creditor_upload');

    //后台登陆用户退出
    Route::get('admin/out','LoginController@out');
    Route::get('admin/login','LoginController@login');

    //业务申请-项目贷款申请列表

    Route::get('admin/applyproject','ApplyProjectController@index');
    Route::post('admin/applyproject','ApplyProjectController@index');
    Route::post('admin/applyproject_add','ApplyProjectController@ajaxAdd');


    //业务申请-项目贷款申请列表展示

    Route::get('admin/applyproject_list','ApplyProjectController@list');
    Route::get('admin/ProductAdd','ApplyProjectController@productAdd');
    Route::get('admin/applyProductdel','ApplyProjectController@applyProductdel');




    //后台管理员管理
    Route::get('admin/role','RoleController@index');
    Route::get('admin/admin_add','AdminController@adminAdd');
    Route::get('admin/admin_list','AdminController@adminList');
    Route::get('admin/power','PowerController@index');
    Route::get('admin/admin_power_add','PowerController@powerAdd');
    Route::post('admin/admin_power_add','PowerController@powerAdd');
    Route::post('admin/powerAddAjax','PowerController@powerAddAjax');
    //无权限
    Route::get('admin/noPower',function(){
        return view('admin/login/nopower');
    });
    //折线图
    Route::get('admin/fold', 'FoldController@index');
    Route::get('admin/conformity', 'FoldController@conformity'); //交易记录折线表数据更新
    Route::get('admin/creditor', 'FoldController@creditor'); //债权记录折现表更新


    //时间轴折线图
    Route::get('admin/time','TimebaseController@index');


    //图片管理
    Route::get('admin/slideshow', 'PictureController@slideShow');
    Route::post('admin/slideshowinsert', 'PictureController@slideShowInsert');
    Route::post('admin/picture_upload','PictureController@pictureUpload');

    //波浪图
    Route::get('admin/wave', 'WaveController@index');

    //柱状图
    Route::get('admin/columnar', 'ColumnarController@index');

    //饼状图
    Route::get('admin/pancake', 'PancakeController@index');


});


//中间件
Route::group(['middleware' => ['web','admin.login']], function () {
    Route::get('/admin/index','Admin\IndexController@index');
    Route::get('admin/index','Admin\IndexController@index');
    Route::get('admin/product_project','Admin\ProductController@project');
    Route::get('admin/product_project_add','Admin\ProductController@project_add');

    Route::get('admin/product_creditor','Admin\ProductController@creditor');
    //债权添加
    Route::get('admin/creditor_add','Admin\ProductController@creditorAdd');
    //贷款资格申请
    Route::get('admin/business_qua','Admin\BusinessController@businessQua');
    //后台管理员管理
    Route::get('admin/role','Admin\RoleController@index');
    Route::get('admin/admin_list','Admin\AdminController@adminList');
    Route::get('admin/power','Admin\PowerController@index');
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
    Route::get('/chronicle', 'ChronicleController@index');
    //前台财主见面会
    Route::get('/caizhu', 'ChronicleController@caizhu');
    //前台旺财日记或财主数据
    Route::get('/meeting_diary', 'ChronicleController@meeting_diary');
    


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
    //用户设置
    Route::get('info/setup', 'InfoController@setup');
    Route::get('/islogin', 'InfoController@islogin');
    Route::get('/account', 'InfoController@account');  

    //获取理财列表数据  
    Route::get('/capital_detail_priority', 'InfoController@capital_detail_priority');
    //获取交易记录
    Route::get('/detail', 'InfoController@detail'); 
    //获取全部交易
    Route::get('/detailAll', 'InfoController@detailAll'); 
    //退出登陆删除cookie
    Route::get('home/cookies','IndexController@cookies');


});