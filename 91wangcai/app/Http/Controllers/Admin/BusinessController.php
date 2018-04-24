<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 9:10
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Models\BusinessModel;
use App\Http\Models\ApplyQualificationModel;
//use APP\Http\Models;
use App\Common\curl;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class BusinessController extends Controller
{
    public function businessQua(Request $request)
    {
        $all=Input::all();
    	if (!empty($all)){
    		$idCard = $all['id_card'];
    		$realName = $all['real_name'];
    		$curlPath='http://apis.juhe.cn/idcard/index';
		    $data=['cardno'=>$idCard,'key'=>'d24a00abb03b729c3738b8b89febc435'];
		    $curl=new curl();
		    $content = $curl->curlGet($curlPath,$data);
		    $arrContent=json_decode($content,true);
		    $arrContent['error_code']?$applyStatus=0:$applyStatus=1;
		    $bus=new BusinessModel();
		    $insertData=[
            'apply_status'=>$applyStatus,
            'apply_name'=>$realName,
            'apply_idcard'=>$idCard,
            'user_id'=>session('admin')->a_id,
            "apply_time"=>date('Y-m-d H:i:s')
            ];
		    $insertRes=$bus->insert($insertData);
            if ($insertRes) {
                return redirect('admin/business_qualification_list');
            }
		}
        return view('admin/business/qualification');
    }

    public function businessQuaList(Request $request)
    {
        $bus=new BusinessModel();
        //判断如果是普通会员只展示自己的业务申请记录
        $arr=session('roleInfo');
        if (in_array('4',$arr[0])) {
            $list=$bus->where('user_id',session('admin')->a_id)->get()->toarray();
        }else{
            $list=$bus->all()->toarray();
        }
        return view('admin/business/qualification_list',['list'=>$list]);
    }

    public function qualificationAjax(){
        $idCard=Input::all();
        $applyModel = new ApplyQualificationModel();
        $idCardArr = $applyModel->where('apply_idcard',$idCard)->get()->toarray();
        if (empty($idCardArr)) {
            $arr=["msg"=>'未申请过身份证，可以使用','status'=>1];
        }else{
            $arr=["msg"=>'申请过身份证，不可以使用','status'=>0];
        }
        return json_encode($arr);
    }
}