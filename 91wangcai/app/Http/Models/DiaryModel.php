<?php
/**
 * User: Li Houlong
 * Date: 2018/4/19
 * Time: 15:03
 */

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

    protected $table='diary';//表名称

    public function showInfo(){
        //查询所有数据
        return DB::table($this->table)->get();
    }
    public function delRow($id){
        //删除
        return DB::table($this->table)->where(['d_id'=>$id])->delete();
    }
    public function getRow($id){
        //查询一条数据

        $row=DB::table($this->table)->where(['d_id'=>$id])->first();
        return $row;

    }
    public function add($data){
        return DB::table($this->table)->insert($data);
    }
    public function saveRow($post){
        //修改数据
        return DB::table($this->table)->where(['d_id'=>$id])->update($data);
    }
    public function disry_status($id,$d_status){
        //修改状态
        return DB::table($this->table)->where(['d_id' => $id])->update(['d_status' => $d_status]);
    }

    public function diarySum(){
        //统计总数
        return DB::table($this->table)->get()->count();
    }

    public function diaryTime($begin,$end){
        //按条件查资讯数
        $begin = date('Y-m-d',$begin);
        $end = date('Y-m-d',$end);
        return DB::table($this->table)->whereBetween('d_time', array($begin,$end))->get()->count();
    }

}
