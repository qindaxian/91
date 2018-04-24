<?php
/**
 * User: Qin Daxian
 * Date: 2018/4/19
 * Time: 10:00
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\AdminModel;
use Illuminate\Support\Facades\DB;



/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class PowerController extends Controller
{
	public function index(){
		return view('admin/power/power');
	}




    public function adminList(){
        $admin_obj = new AdminModel;
        $data = $admin_obj->getAll();

        $a_id = array_column($data,'a_id','a_name');
        $a_email = array_column($data,'a_email','a_email');
        $a_phone = array_column($data,'a_phone','a_phone');



        foreach ($a_id as $ke => $val) {

            $user = DB::select('select * from admin_a_r where a_id = ?', [$val]);

            foreach($user as $k=>$v){
                $user[$k]=(array)$v;
            }

            foreach ($user as $key => $value) {
                $value['a_name'] = $ke;

                $arr[] = [
                    $key => $value,
                ];
            }

        }

        $new_arr = [];

        foreach ($arr as $a_k => $a_v) {
            $new_arr[] = $a_v[0];
        }

        $r_id = array_column($new_arr,'r_id');


        foreach ($r_id as $k_e => $v_a) {
            $res = DB::select('select * from admin_role where r_id = ?', [$v_a]);
            foreach($res as $k=>$v){
                $res[$k]=(array)$v;
            }
            foreach ($res as $k_y => $v_e) {
                $low_arr[] = [
                    $k_y => $v_e,
                ];
            }
        }
        foreach ($low_arr as $a_k => $a_v) {
            $two_arr[] = $a_v[0];
        }


        $new_tow = [];
        foreach ($two_arr as $k => $v){
            $new_tow[$v['r_id']][]=$v;
        }
        foreach ($new_arr as $k => $v) {
            $new_tow[$v['r_id']][]['a_name']=$v['a_name'];
        }
        echo '<pre>';
        print_r($new_arr);die;

        $new_new_tow=[];

        foreach ($new_tow as $k => $v) {
            $a=array_column($v,'a_name');
            $v[0]['a_name']=$a;
            $new_new_tow[$k][]=$v[0];
        }

        $end_arr = [];
        foreach ($new_new_tow as $a_k => $a_v) {
            $end_arr[] = $a_v[0];
        }

        //通过a_name查邮箱和手机号
//        foreach ($end_arr as $k => $v) {
//            $user_data = DB::select('select a_id,a_name,a_phone,a_email,a_start_time from admin where a_name = ?', [$v['a_name']]);
//        }



        $num = count($end_arr,0);


        return view('admin/admin_list/list');
    }


    
}