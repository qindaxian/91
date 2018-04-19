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

}
