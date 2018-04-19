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
    protected $tableName='diary';//表名称

    public function tian($input){

        unset($input['_token']);
        //添加数据
        // return DB::table($this->tableName)->insert($data);
        return $id = DB::table($this->tableName)->insertGetId($data);
    }
    public function showInfo(){
        //查询所有数据
        return DB::table($this->tableName)->get();
    }
    public function delRow($id){
        //删除
        return DB::table($this->tableName)->where(['d_id'=>$id])->delete();
    }
    public function getRow($id){
        //查询一条数据
        $row=DB::table($this->tableName)->where(['d_id'=>$id])->first();
        return $row;
    }
    public function saveRow($post){
        //修改数据

        return DB::table($this->tableName)->where(['d_id'=>$id])->update($data);
    }



}
