<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 9:10
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 前台首页
     */
    public function index(){
        return view('home/index/index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 用户注册页面
     */
    public function reg()
    {
        return view('home/index/reg');
    }

    /**
     * 调用短信接口
     */
    public function loginDo()
    {
        header("Content-Type:text/html;charset=UTF-8");
        $user_phone = $_GET['user_phone'];
        $code = rand(1000,9999);
        function nowapi_call($a_parm){
            if(!is_array($a_parm)){
                return false;
            }
            //combinations
            $a_parm['format']=empty($a_parm['format'])?'json':$a_parm['format'];
            $apiurl=empty($a_parm['apiurl'])?'http://api.k780.com/?':$a_parm['apiurl'].'/?';
            unset($a_parm['apiurl']);
            foreach($a_parm as $k=>$v){
                $apiurl.=$k.'='.$v.'&';
            }
            $apiurl=substr($apiurl,0,-1);
            if(!$callapi=file_get_contents($apiurl)){
                return false;
            }
            //format
            if($a_parm['format']=='base64'){
                $a_cdata=unserialize(base64_decode($callapi));
            }elseif($a_parm['format']=='json'){
                if(!$a_cdata=json_decode($callapi,true)){
                    return false;
                }
            }else{
                return false;
            }
            //array
            if($a_cdata['success']!='1'){
                echo $a_cdata['msgid'].' '.$a_cdata['msg'];
                return false;
            }
            return $a_cdata['result'];
        }
        $nowapi_parm['app']='sms.send';
        $nowapi_parm['tempid']='51382';
        $nowapi_parm['param']='code%3D'.$code;
        $nowapi_parm['phone']=$user_phone;
        $nowapi_parm['appkey']='30945';
        $nowapi_parm['sign']='7c17bdef0a7c60575c36f72a9cccc6e3';
        $nowapi_parm['format']='json';
        nowapi_call($nowapi_parm);
        session_start();
        $_SESSION['code']=$code;
        echo json_encode(['state'=>1]);
    }

    /**
     * 注册账号
     */
    public function doReg()
    {
        session_start();
        $user_phone = $_POST['user_phone'];
        $sms = $_POST['sms'];
        $user_password = $_POST['user_password'];
        $code = $_SESSION['code'];
        var_dump($code,$sms); 
    }
}