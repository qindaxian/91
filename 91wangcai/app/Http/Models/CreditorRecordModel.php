<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/23
 * Time: 20:16
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class CreditorRecordModel
 * @package App\Http\Models
 * 债权记录折现
 */
class CreditorRecordModel extends Model
{
    protected $table = 'creditor_record';

    /**
     * @return mixed
     * 查询表中所有数据
     */
    public function showInfo($t_time)
    {

        $obj = DB::table($this->table)->whereNotIn('r_start_time', $t_time)->get(); //查询时间不等参数的时间
        $res = object_to_arrays($obj); //将返回回来的对面转换为数组
        return $res; //返回数组
    }
}