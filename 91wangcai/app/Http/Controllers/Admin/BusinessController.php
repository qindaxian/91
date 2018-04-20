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
    	if (Input::get('id_card')&&Input::get('real_name')){
    		$idCard = Input::get('id_card');
    		$realName = Input::get('real_name');
    		$curlPath='http://apis.juhe.cn/idcard/index';
		    $data=['cardno'=>$idCard,'key'=>'d24a00abb03b729c3738b8b89febc435'];
		    $curl=new curl();
		    $content = $curl->curlGet($curlPath,$data);
		    $arrContent=json_decode($content,true);
		    $arrContent['error_code']?$applyStatus=0:$applyStatus=1;
		    $bus=new BusinessModel();
            //print_r(session('admin'));die;
		    $insertData=['apply_status'=>$applyStatus,'apply_name'=>$realName,'apply_idcard'=>$idCard,'user_id'=>session('admin')->a_id,"apply_time"=>date('Y-m-d H:i:s')];
		    $insertRes=$bus->insert($insertData);
            //echo $insertRes;die;
            if ($insertRes) {
                return redirect('admin/business-qua-list');
            }
		}
        return view('admin/business/qua');
    }

    public function businessQuaList(Request $request)
    {
        $bus=new BusinessModel();
        $list=$bus->all()->toarray();
        return view('admin/business/qualist',['list'=>$list]);
    }
}