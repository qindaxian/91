<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Models\Admin_a_rModel;
use App\Http\Models\AdminRolePowerModel;
use App\Http\Models\Admin_roleModel;

class AdminPowerModel extends Model
{
    protected $table = 'admin_power';
    protected $primaryKey = 'ap_id';
    public $timestamps = false;
	//获取当前用户权限
	public function getPower($userId)
	{
		//获取角色id
		$adminRoleModel = new Admin_a_rModel();
		$roleId=$adminRoleModel->getAdminRole($userId);
		$r_id=array_column($roleId,'r_id');
		//将当前登陆用户的角色信息存入ssession
		$roleModel = new Admin_roleModel();
		$roleInfo=$roleModel->whereIn('r_id',$r_id)->get()->toarray();
		session(['roleInfo'=>$roleInfo]);
		//判断是否为超级管理员
		if (in_array(1, $r_id)){
			$power=$this->get()->toarray();
				return $power;//直接返回所有权限
		}
		//获取角色对应id
		$adminPowerRoleModel = new AdminRolePowerModel();
		$powerId=$adminPowerRoleModel->getRolePower($r_id);
		if (empty($powerId)) {
			return false;
		}
		$p_id=array_column($powerId,'p_id');
		//使用p_id查询对应权限
		$power=$this->whereIn('ap_id',$p_id)->get()->toarray();
		return $power;
	}

	public function getParentPower(){
		//获取所有父集导航
		$parentPower=$this->where('parent_id',0)->get()->toarray();
		return $parentPower;
	}
}
