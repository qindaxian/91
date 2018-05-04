<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

	

class ApplyProjectModel extends Model
{

	protected $table = 'apply_project';
	public $timestamps = false;



    
    //添加 返回id  
    public function project_add($data)  
    {  
        return $this->insertGetId($data);  
    }
  
//单条查找  
  
    public function getFind($where,$id)
    {  
        if($this->where($where,$id)->first()){
            return $this->where($where,$id)->first()->toArray();
        }else{  
            return [];  
        }  
  
    }  
  
//查询用户有几个uid,返回数量  
    public function countCity($uid){  
        if($this->where('uid',$uid)->first()){  
            return $this->where('uid',$uid)->count();  
        }else{  
            return [];  
        }  
          
  
    }        
  
  
  
//查询全部数据  
  
    public function getAll()  
    {  
        $a_id=session('admin')->a_id;
        $roleInfo=session('roleInfo');
        if ($roleInfo[0]['r_id']==1) {
            return $this->get()->toArray();
        }
            return $this->where(['user_id'=>$a_id])->get()->toArray();
  
    }
  
      /** 
     * 修改管理员信息 
     * @param $id 
     * @param $data 
     * @return bool 
     */  
    public function change($where,$where_id,$ziduan,$data){
        return DB::table($this->table)->where([$where => $where_id])->update([$ziduan=>$data]);
    }  
  
//加条件，时间  
  
//查询用户的认购的城数  
    public function buy_num($uid)
    {  
        $startDate = date('Y-m-01', strtotime(date("Y-m-d")));  
        $endDate = date('Y-m-d', strtotime("$startDate +1 month -1 day"));  
        // 将日期转换为Unix时间戳  
        $endDate=$endDate." 22:59:59";  
        $startDateStr = strtotime($startDate);  
        $endtDateStr = strtotime($endDate);  
        return $this->where('uid',$uid)->where('buy_type',1)->whereBetween('create_time', array($startDateStr,$endtDateStr))->sum('buy_num');  
    }  
  
 /** 
     * 根据id查找城池信息 只返回某个字段的值 
     * @param $id 
     * @return array 
     */  
    public function getCityName($id)  
    {  
        if($this->where('city_id',$id)->first()){  
            return $this->where('city_id',$id)->lists('city_name')[0];  
        }else{  
            return [];  
        }  
    }  
}
