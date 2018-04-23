<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRolePowerModel extends Model
{
    protected $table = 'admin_p_r';
    protected $primaryKey = 'apr_id';
    public $timestamps = false;

//获取角色对应的权限id
    public function getRolePower($roleId)
    {
    	$powerId=$this->whereIn('r_id',$roleId)->get()->toarray();
        if ($powerId) {
            return $powerId;
        }
        return false;
    }
}
