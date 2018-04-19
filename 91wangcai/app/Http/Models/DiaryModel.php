<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DiaryModel extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'diary';

    public function getRow(){
        //查询一条数据
        return DB::table($this->table)->where(['d_type' => $a_name])->first();
    }

    public function add($data){
    	return DB::table($this->table)->insert($data);
    }

    public function showInfo(){
    	return DB::table($this->table)->get();
    }
}
