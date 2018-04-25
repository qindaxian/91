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
use App\Http\Models\ProjectModel;


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
        $ap_pro_date = $data['z_date'];
        if (!preg_match('/^[6-8]+(.[0-9]{1,2})?$/', $ap_pro_rate)) {  
            return '请输入符合规范的年利率';   
        }
        $ap_pro_money = (int)$ap_pro_money;
        if($ap_pro_money < 10000){
            return '最少借10000元';
        }
        if($ap_pro_money > 1000000){
            return '最多借1000000元';
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
            'ap_pro_date' => $ap_pro_date
        ];
        

        $res = $obj-> project_add($inter_data);
        if($res){
            return '申请贷款项目成功待审核';
        }


    }

    public function list(){

        $obj = new ApplyProjectModel();
        $res = $obj -> getAll();
        $num = count($res);

        return view('admin/applyProject/applyProject_list',['res'=>$res,'num'=>$num]);

    }
    //如若管理员同意此用户贷款
    public function productAdd(){
        $user_id = Input::get('user_id');
        $ap_id = Input::get('ap_id');

        $obj = new ApplyProjectModel();
        $res = $obj -> getFind('user_id',$user_id);

        $data['user_id'] = $res['user_id'];
        $data['p_annual_interest_rate'] = $res['ap_pro_rate'];
        $data['p_term'] = $res['ap_pro_date'];
        $data['p_loan_amount'] = $res['ap_pro_money'];
        $data['p_amount_investment'] = '100';
        $data['p_loan'] = $res['ap_pro_money'];
        $data['p_purpose'] = '经营周转';
        $data['p_day_interest'] = time();
        $data['p_one_source'] = '金融机构贷款';
        $data['p_two_source'] = '自筹还款';
        $data['p_three_source'] = '北京房产变现';
        $data['p_status'] = '1';
        $data['p_start_time'] = time();
        $data['p_state'] = $res['ap_pro_state'];


        $addRes = (new ProjectModel) -> project_add($data);
        if($addRes){
           $upRes = $obj ->change('ap_id',$ap_id,'ap_pro_status','2');
           if($upRes){
            return '您的项目已经通过申请,请继续关注网站动态';
           }
        }
        
    }

    public function applyProductdel(){
        $ap_id = Input::get('ap_id');
        $obj = new ApplyProjectModel();
        $upRes = $obj ->change('ap_id',$ap_id,'ap_pro_status','1');
        if($upRes){
            return '此项目被驳回,请用户修整';
        }
    }

}