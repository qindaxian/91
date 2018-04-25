<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 9:10
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\Admin_a_rModel;
use App\Http\Models\AdminModel;
use App\Http\Models\Admin_roleModel;
use APP\Http\Models;


/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class AdminController extends Controller
{
    public function adminList(){
    	//查出所有管理员信息
    	$adminModel = new AdminModel();
    	$userArr=$adminModel->get()->toarray();
    	$newUserArr = [];
    	foreach ($userArr as $k => $v) {
    		$newUserArr[$v['a_id']] = $v;
    	}
    	//print_r($newUserArr);die;
    	//查出所有用户的角色id
    	$adminRoleModel = new Admin_a_rModel();
    	$aRole = $adminRoleModel->get()->toarray();
    	$newAdminRole = [];
    	foreach ($aRole as $k => $v) {
    		$newAdminRole[$v['r_id']][] = $v;
    	}
		//查出所有角色
    	$roleModel = new Admin_roleModel();
		$roleArr=$roleModel->get()->toarray();
		$newRoleArr=[];
		foreach ($roleArr as $k => $v) {
			$newRoleArr[$v['r_id']] = $v['r_name'];
		}
		foreach ($newAdminRole as $k => $v) {
			foreach ($v as $ke => $val) {
				$newAdminRole[$k][$ke]['r_id'] = $newRoleArr[$k];
			}
		}
		foreach ($newAdminRole as $k => $v) {
			foreach ($v as $key => $value) {
				$newAdminRole[$k][$key]['a_name'] = $newUserArr[$value['a_id']]['a_name'];
				$newAdminRole[$k][$key]['a_start_time'] = $newUserArr[$value['a_id']]['a_start_time'];
				$newAdminRole[$k][$key]['a_phone'] = $newUserArr[$value['a_id']]['a_phone'];
				$newAdminRole[$k][$key]['a_email'] = $newUserArr[$value['a_id']]['a_email'];
				$newAdminRole[$k][$key]['a_status'] = $newUserArr[$value['a_id']]['a_status'];
			}
		}
		$adminListArr = [];
		foreach ($newAdminRole as $k => $v) {
			foreach ($v as $key => $value) {
				$adminListArr[] = $value;
			}
		}

        return view('admin/admin_list/list',['adminListArr' => $adminListArr]);
    }

    public function adminAdd()
    {
    	$roleModel = new Admin_roleModel();
		$roleArr=$roleModel->get()->toarray();
    	return view('admin/admin_list/admin_add',['roleArr' => $roleArr]);
    }
}