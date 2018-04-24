<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/23
 * Time: 10:44
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class TransactionModel
 * @package App\Http\Models
 * 交易记录表
 */
class TransactionModel extends Model
{
    protected $table = 'transaction';

    /**
     * @return mixed
     * 查询表中所有数据
     */
    public function showInfo($t_time)
    {

        $obj = DB::table($this->table)->whereNotIn('t_time', $t_time)->get(); //查询时间不等参数的时间
        $res = object_to_arrays($obj); //将返回回来的对面转换为数组
        return $res; //返回数组
    }
}