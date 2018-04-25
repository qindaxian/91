<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Models\AdminModel;
use App\Http\Models\UserModel;


class LoginController extends Controller
{
    //登录
    public function login(){
     	if($arr = Input::all()){
    		$a_name = $arr['name'];
    		$a_password = md5($arr['password']);
			$admin = new AdminModel;
            if(empty($a_name)){
                $res = '用户名不能为空';
                return json_encode($res);
                false;
            }else if(empty($arr['password'])){
                $res = '密码不能为空';
                return json_encode($res);
                false;
            }else if(empty($admin->getName($a_name))){
                $res = '用户名不存在';
                return json_encode($res);
                false;
            }else if(empty($admin->getPwd($a_password))){
                $res = '密码错误';
                return json_encode($res);
                false;
            }
    		$data = $admin->getRow($a_name,$a_password);
            if(empty($data)){
                $res = '用户名或密码错误';
                return json_encode($res);
                false;
            }
            $a_id = $data->a_id;
            session(['last_time' => $data->a_log_num]);
            $a_end_time = time();
            $a_end_ip = $this->getIp();
            $a_log_num = $data->a_log_num + 1;
            $res = $admin->change($a_id,$a_end_time,$a_end_ip,$a_log_num);
    		if($res){
    			session(['admin' => $data]);
    			return json_encode($res);
                false;
    		}
    	}
        return view('admin/login/login');
    }
    //获取当前用户ip
    public function getIp(){
        static $realip;
        if(isset($_SERVER)){
            if(isset($_SERVER["HTTP_X_FORWARDED_FOR"])){
                $realip = $_SERVER["HTTP_X_FORWARDED_FOR"];
            }else if(isset($_SERVER["HTTP_CLIENT_IP"])) {
                $realip = $_SERVER["HTTP_CLIENT_IP"];
            }else{
                $realip = $_SERVER["REMOTE_ADDR"];
            }
        }else{
            if(getenv("HTTP_X_FORWARDED_FOR")){
                $realip = getenv("HTTP_X_FORWARDED_FOR");
            }else if(getenv("HTTP_CLIENT_IP")) {
                $realip = getenv("HTTP_CLIENT_IP");
            }else{
                $realip = getenv("REMOTE_ADDR");
            }
        }
        return $realip;
    }
    //获取当前用户地理位置
    public function getCity($ip = ''){
        if($ip == ''){
            $url = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json";
            $ip = json_decode(file_get_contents($url),true);
            $data = $ip;
        }else{
            $url = "http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
            $ip = json_decode(file_get_contents($url));
            if((string)$ip->code == '1'){
               return false;
            }
            $data = (array)$ip->data;
        }
        return $data;
    }
    //退出
    public function out(Request $request){
        $request->session()->forget('admin');
        $request->session()->forget('powerArr');
        return redirect('admin/login');
    }
}