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
	    	 $data['data']=true;
	    	 return $data;
	    }
	    else{
	    	//用户是否存在
	    	$user_id = Cookie::get('user_name');
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
		//获取user_id 
		$user_id = Cookie::get('user_name');
		// if($user_id){
		// 	$data = ['data'=>'','message'=>"登录已过期，请重新登录",'status'=>300];
		// 	echo json_encode($data);
		// }
        $data = ['status'=>200,'message'=>'请求成功','data'=>["wc_total"=>"0.00","total"=>"0.0","wc_balance"=>"0.00","qb_total"=>"0.00","frost"=>"0.0","isBilateralUser"=>0,"award_status"=>"2","balance"=>"0.00","qb_balance"=>"0.00","old_await"=>"0.00","getMoney"=>"0.00","old_balance"=>"0.00","income"=>"0.00","wc_frost"=>"0.00","user_id"=>1225627,"old_total"=>"0.00","isCheckHistory"=>"1","wc_await"=>"0.00","priority_await"=>"0","qb_await"=>"0.00","old_frost"=>"0.00","await"=>"0.0","end_time"=>"2016.03.29 00=>00=>00","qb_frost"=>"0.00","gains"=>"0.00"],'page'=>null];
         echo json_encode($data);
         1111
	}
}