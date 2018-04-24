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
use App\Http\Models\ApplyProjectModel;
use Illuminate\Support\Facades\DB;

/**
 * Class ApplyProjectController
 * @package App\Http\Controllers\Admin
 */
class ApplyProjectController extends Controller{
    public  function  index(){

        $admin_id = session('admin');
        $admin_id = $admin_id -> a_id;

        $one_data = DB::select('select * from apply_qa where user_id = ?', [$admin_id]);
        
        foreach($one_data as $k=>$v){  
                $one_data[$k]=(array)$v;             
        } 

        if(empty($one_data)){ return redirect('admin/business_qualification'); }
        
        //如果此用户没用贷款资格就让他返回贷款资格去申请资格
        if($one_data['apply_status'] = 0 ){
            return redirect('admin/business_qualification');
        } else { 
            return view('admin/applyProject/applyProject');
        }


    }

    public function ajaxAdd(){
        $obj = new ApplyProjectModel();
        $data = Input::All();
        if($data['z_money'] == ''){
            return '贷款金额不能为空';
        }
      
       
        if($data['z_rate'] == ''){
            return '年利率不能为空';
        }
        $ap_pro_rate = $data['z_rate'];
        $ap_pro_money = $data['z_money'];
        $ap_pro_state = $data['z_state'];
        if (!preg_match('/^[6-8]+(.[0-9]{1,2})?$/', $ap_pro_rate)) {  
            echo '请输入符合规范的年利率';   
        }
        $ap_pro_money = (int)$ap_pro_money;
        if($ap_pro_money < 10000){
            echo '最少借10000元';
        }
        if($ap_pro_money > 1000000){
            echo '最多借1000000元';
        }

        $admin_id = session('admin');
        $admin_id = $admin_id -> a_id;

        $one_data = DB::select('select apply_name from apply_qa where user_id = ?', [$admin_id]);
       
        foreach($one_data as $k=>$v){  
                $one_data[$k]=(array)$v;             
        } 


        $inter_data = [
            'ap_pro_rate' => $ap_pro_rate,
            'ap_pro_money' => $ap_pro_money,
            'ap_pro_state' => $ap_pro_state,
            'ap_pro_time' => date('Y-m-d H-i-s'),
            'user_id' => session('admin')->a_id,
            'apply_name' => $one_data[0]['apply_name'],
        ];
        

        $res = $obj-> project_add($inter_data);
        if($res){
            return '申请贷款项目成功待审核';
        }


    }

    public function list(){
//        echo phpinfo();die;
//        echo date('Y-m-d H:i:s');

        $obj = new ApplyProjectModel();
        $res = $obj -> getAll();
        
        
        return view('admin/applyProject/applyProject_list',['res'=>$res]);

    }
}