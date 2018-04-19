<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'user';

    public function showInfo(){
        //查询所有数据
        return DB::table($this->table)->get();
    }

    public function getRow($a_name,$a_password){
        //查询一条数据
        return DB::table($this->table)->where(['user_phone'=>$a_name,'user_password'=>$a_password])->first();
    }
}
