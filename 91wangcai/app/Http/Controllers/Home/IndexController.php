<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 9:10
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Models\user;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Input;


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
     * 用户登陆
     */
    public function login()
    {
        session_start();
        $user_phone = Input::get('user_phone');
        $user_password = md5(Input::get('user_password'));
        $code = Input::get('code');
        $user = new user();
        $phone = $user->phone($user_phone);
        $login = $user->login($user_phone,$user_password);
        if($_SESSION['milkcaptcha'] != $code) {
            return json_encode(0);
        }
        if(!$phone) {
            return json_encode(1);
        }
        if($phone) {
            $res = object_to_arrays($phone);
            if($res['user_error'] == 0) {
                return ['state'=>3,'text'=>'账号已被冻结,请联系管理员!'];
            }
            $res = object_to_arrays($phone);
            if($user_password != $res['user_password']) {
                $error = ['user_error'=>$res['user_error']];
                $errors = $error['user_error'] - 1;
                $user_error = ['user_error'=>$errors];
                $user->pwd_error($user_phone,$user_error);
                return ['state'=>2,'text'=>$user_error['user_error']];
            }
        }
        if($login) {
            $data = object_to_arrays($login);
            setcookie('user_name',$data['user_phone'],time()+3600*24);
            return json_encode(4);
        }
    }

    /**
     * 登陆成功
     */
    public function user()
    {
        if(empty($_COOKIE['user_name'])){
            echo "<script>alert('您好！您还没有登陆');</script>";
            die;
        }
        $user = new user();
        $data = $user->selOne($_COOKIE['user_name']);
        return view('home/index/user',['data'=>$data]);
    }

    /**
     * 注册账号
     */
    public function register()
    {
        session_start();
        $user_phone = Input::get('user_phone');
        $code = Input::get('code');
        $sms = Input::get('sms');
        $user_password = Input::get('user_password');
        $message = $_SESSION['code'];
        if($_SESSION['milkcaptcha'] != $code) {
            return json_encode(0);
        }
        if($sms != $message) {
            return json_encode(1);
        }else{
            $pwd = md5($user_password);
            $data = ['user_phone'=>$user_phone,'user_password'=>$pwd];
            $user = new user();
            $result = $user->selOne($user_phone);
            if($result) {
                return json_encode(2);
            }else {
                $res = $user->add($data);
                if($res) {
                    unset($_SESSION);
                    session_destroy();
                    setcookie('user_name',$user_phone,time()+3600*24);
                    return json_encode(3);
                }
            }
        }
    }

    /**
     * @return $this
     * 验证码
     */
    public function captcha()
    {
        $builder = new CaptchaBuilder();
        $builder->build(150,32);
        //获取验证码内容
        $phrase = $builder->getPhrase();

        //把内容存到session
        session_start();
        $_SESSION['milkcaptcha'] = $phrase;
        ob_clean();//清楚缓存;
        return response($builder->output())->header('content-type','image/jpeg');
    }

    /**
     * 调用短信接口
     */
    public function loginDo()
    {
        header("Content-Type:text/html;charset=UTF-8");
        $user_phone = Input::get('user_phone');
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
        return json_encode(1);
    }

    public function cookies()
    {
        setcookie("user_name","");
        return redirect('home/index');
    }
}