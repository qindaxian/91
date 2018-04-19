<?php
/**
 * User: Qin Daxian
 * Date: 2018/4/19
 * Time: 10:00
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Admin_roleModel;
use App\Http\Models\Admin_a_rModel;
use App\Http\Models\AdminModel;
use Illuminate\Support\Facades\DB;


/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class RoleController extends Controller
{
    public function index(){
    	$admin_obj = new AdminModel;
    	$data = $admin_obj->getAll();
    	
    	$a_id = array_column($data,'a_id','a_name');

    	// print_r($a_id);die;
    	
    	
    	 
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




		 foreach ($arr as $oneKey => $oneValue) {
		 	$r_id[$oneValue[0]['a_name']] = $oneValue[0]['r_id'];
		 	// $res = DB::select('select * from admin_role where a_id = ?', [$oneValue[0][r_id]]);
		 	foreach ($r_id as $twoKey => $twoValue) {
		 	    $res = DB::select('select * from admin_role where r_id = ?', [$twoValue]);
		 	    foreach($res as $k=>$v){  
			      $res[$k]=(array)$v;             
				} 
		 	}


		 }
		
    	
    	print_r($res);die;

    	$role_obj = new Admin_roleModel;
    	$r_data = $role_obj->getAll();

    	$a_r_obj = new Admin_a_rModel;
    	$r_id = $a_r_obj->getAll();

		// 管理员姓名/管理员id/角色id/角色名字/角色描述


		// $arr = [
		// 	'角色id' => [
		// 		'角色名字' => 'aaa',
		// 		'角色描述' => '啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊b',
		// 		'管理员名字' => [
		// 			'a','b','c'
		// 		]
		// 	]
		// ];

		// $arr['角色id']['管理员名字'][] = $val['管理员名字'];


    	
    	// print_r($r_id);die;
    	// $arr = [];

    	// foreach ($a_id as $key => $value) {
    	// 	foreach ($r_id as $ke => $val) {
    	// 		if($key[a_id] = $ke[a_id]){
    				
    	// 		}
    	// 	}
    	// }
    	// die;
    		

        	
    	


    	// $results = DB::select('select * from users where id = :id', ['id' => 1]);

	    // $r_id = RoleController::select(DB::raw('*'))
	    // ->where('a_id', $a_id)
	    // ->groupBy('a_id')
	    // ->skip($offset)
	    // ->take($limit)
	    // ->get();
    

        return view('admin/role/role');
    }



}