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

    public function disry_status($id,$is_diary){
        //修改状态
        return DB::table($this->table)->where(['d_id' => $id])->update(['is_diary' => $is_diary]);
    }

    /**
     *            前台
     * 条件查询
     * @Author   yangshancheng
     * @DateTime 2018-04-25
     * @param
     * @where:条件; @offset:从哪开始; @limit:查几条;
     * @return 
     * 
     */
    public function showDiary($where='',$offset=0,$limit=''){
        if ($offset=0 && $limit='') {
            $res = DB::table($this->table)->where($where)->offset($offset)->limit($limit)->get();
        } else {
            $res = DB::table($this->table)->where($where)->get();
        } 
        return  object_to_arrays($res); 
    }
    
    /**
     *             前台
     * 查询结果集
     * @Author   yangshancheng
     * @DateTime 2018-04-25
     * @param
     * @return   [type]        [description]
     */
    public function pluck($where,$pluck){
        $res = DB::table($this->table)->where($where)->pluck($pluck);
        return  object_to_arrays($res);
    }

    public function count($where=''){
        $res = DB::table($this->table)->where($where)->count();
        return $res;
    }


}
