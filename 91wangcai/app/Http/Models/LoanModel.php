<?php
/**
 * User: yangshancheng 
 * Date: 2018/4/19
 * Time: 15:03
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LoanModel extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'loan';

   
    /**
     * 查询项目借贷表
     * @Author   yangshancheng
     * @DateTime 2018-04-23
     * @param
     * @offset 从那条开始 @limit查询几条 @where查询条件
     * @return 
     */
    public function showLoan($where='',$offset=0,$limit){
         $res = DB::table($this->table)->where($where)->offset($offset)->limit($limit)->get();
         return $res;
    }
}