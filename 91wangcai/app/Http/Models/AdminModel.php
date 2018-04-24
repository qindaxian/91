<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminModel extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'admin';

    public function getRow($a_name,$a_password){
        //查询一条数据
        return DB::table($this->table)->where(['a_name'=>$a_name,'a_password'=>$a_password])->first();
    }

    public function getAll()  
    {  
        return $this->get()->toArray();
    }  

    public function change($a_id,$a_end_time,$a_end_ip){
        return DB::table($this->table)->where(['a_id'=>$a_id])->update(['a_end_time' => $a_end_time,'a_end_ip' => $a_end_ip]);
    }
    
    public function getName($a_name){
        //查询用户名
        return DB::table($this->table)->where(['a_name'=>$a_name])->first();
    }

    public function getPwd($a_password){
        //查询密码
        return DB::table($this->table)->where(['a_password'=>$a_password])->first();
    }

}
