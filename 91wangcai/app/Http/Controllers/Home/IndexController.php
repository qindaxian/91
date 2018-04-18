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

        if($sms != $code) {
            echo "<script>alert('验证码不正确');location.href='home/reg'</script>";
        }else{
            $pwd = md5($user_password);
            $data = ['user_phone'=>$user_phone,'user_password'=>$pwd];
            $user = new user();
            $result = $user->selOne($user_phone);
            if($result) {
                echo "<script>alert('手机号已被注册');location.href='home/reg'</script>";
            }else {
                $res = $user->add($data);
                if($res) {
                    echo "<script>location.href='home/index'</script>";
                    unset($_SESSION);
                    session_destroy();
                }else {
                    echo "<script>alert('注册失败');location.href='home/reg'</script>";
                }
            }
        }
    }

    /**
     * 用户登陆
     */
    public function login()
    {
        $user_phone = $_POST['user_phone'];
        $user_password = md5($_POST['user_password']);
        $code = $_POST['code'];
        session_start();
        $user = new user();
        $phone = $user->phone($user_phone);
        $pwd = $user->pwd($user_password);
        $login = $user->login($user_phone,$user_password);
        if($_SESSION['milkcaptcha'] != $code){
            echo "<script>alert('验证码错误');location.href='home/index'</script>";
        }else if(!$phone) {
            echo "<script>alert('手机号不存在');location.href='home/index'</script>";
        }else if(!$pwd) {
            echo "<script>alert('密码错误');location.href='home/index'</script>";
        }else if($login) {
            $data = $this->object_to_array($login);
            setcookie('user_name',$data['user_phone'],time()+3600*24);
            echo "<script>location.href='home/user'</script>";
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
//        $data = ['user_phone'=>$array['user_phone'],'user_total_assets'=>$array['user_total_assets'],'user_balance'=>$array['user_balance']];
        return view('home/index/user',['data'=>$data]);
    }

    /**
     * 对象 转 数组
     *
     * @param object $obj 对象
     * @return array
     */
    function object_to_array($obj) {
        $obj = (array)$obj;
        foreach ($obj as $k => $v) {
            if (gettype($v) == 'resource') {
                return;
            }
            if (gettype($v) == 'object' || gettype($v) == 'array') {
                $obj[$k] = (array)object_to_array($v);
            }
        }
        return $obj;
    }

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
}