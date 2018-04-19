<?php
/**
 * User: yang
 * Date: 2018/4/18
 * Time: 9:10
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Models\user;
use Cookie;
use Redirect;


/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class InfoController extends Controller
{  
	public function islogin()
	{
		//判断用户是否登录
	    if(!isset($_COOKIE["user_name"])){
	    	 $data['data']=false;
	    	 return $data;
	    }
	    else{
	    	//用户是否存在
	    	$user_id = 2;
	    	// $user_id = Cookie::get('user_name');
	    	//查询用户id是否存在
            $user = new user();
            // $res = DB::table('admin')->update(['a_end_ip'=>2]);
            $data = $user->select($where=['user_id'=>$user_id],$order='',$limit='');
            // var_dump((array)$data);die;
            $array=(array)$data;
            if(empty($array['*items'])){
            	$data['data']=false;
	    	    return $data;
            }
	    }
	}

	//账户概况
	public function index()
	{ 
		// //验证登录
		// $islogin = $this->islogin();
		// if($islogin == 'flash'){
		// 	echo "<script>alert('请登录')</script>";
		// 	return view('home/index/index');
		// }

	    return view('home/info/index');     
	}

	//获取账户信息
	public function account()
	{
		echo 11;
	}
}