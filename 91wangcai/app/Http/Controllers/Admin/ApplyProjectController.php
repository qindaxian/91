<?php
/**
 * User: Qin Jinzhuo
 * Date: 2018/4/21
 * Time: 9:27
 */
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Models\BusinessModel;
use App\Common\curl;


/**
 * Class ApplyProjectController
 * @package App\Http\Controllers\Admin
 */
class ApplyProjectController extends Controller{
    public  function  index(){
        $admin_id = session('admin');
        $admin_id = $admin_id -> a_id;

        $obj = new BusinessModel();

        $one_data = $obj->where('user_id',$admin_id)->first()->toArray();

        //如果此用户没用贷款资格就让他返回贷款资格去申请资格
        if($one_data['apply_status'] == '0' ){
            return redirect('admin/business_qualification');
        }else if(Input::all()){
            $data = Input::all();
            $arr = [
                '6' => '6',
                '7' => '7',
                '8' => '8',
            ];
            $res = in_array($data['rate'],$arr);

            if($res === false){
                return redirect('admin/ApplyProject');
            }
            

            $money = (int)$data['money'];
             if(empty($data['money']));{
                return redirect('admin/ApplyProject');
            } 
            dd($money);die;
            if( 10000 <= $money && $money <= 100000){
                echo '1';
            }
            echo '2';

        } else {
            return view('admin/applyProject/applyProject');
        }





    }
}