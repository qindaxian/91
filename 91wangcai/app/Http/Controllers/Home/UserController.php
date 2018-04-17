<?php
/**
 * User: yang
 * Date: 2018/4/17
 * Time:
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Cookie;
/**
 * Class Chronicle
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    public function index()
    { 
    	//获取cookis用户id
    	// Cookie::queue('user_name', 111, 30);
    	$user_id = Cookie::get('user_name'); 
        $user_id = 1;   //测试用

        /**
        *注释:对用户id加密，加密方法
        *param():
        *
        *return():
        */
        $md_id = substr(md5($user_id.'wc'.time()),0,7);
        
        return view('home/user/index',['md_id'=>$md_id]);
    }
}