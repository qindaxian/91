<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/23
 * Time: 20:01
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class CreditorFoldModel
 * @package App\Http\Models
 * 债权记录表折线图
 */
class CreditorFoldModel extends Model
{
    protected $table = 'creditor_fold';

    /**
     * @return array
     * 查询表中数据
     */
    public function sel()
    {
        $obj = DB::table($this->table)->get(); //查询表中数据
        $res = object_to_arrays($obj); //将返回回来的对面转换为数组
        return $res; //返回数据;
    }

    /**
     * 记录表提出数据入交易记录表
     */
    public function add($res)
    {
        foreach($res as $v) { //将查询结果遍历
            $month = date('m',$v['r_start_time']);
            $data =  DB::table($this->table)->insertGetId(['r_price'=>$v['r_price'],'r_lend'=>$v['r_lend'],'r_time'=>$v['r_start_time'],'r_month'=>$month]); //入库
        }
        return $data; //返回数据
    }

    /**
     * 按照月份算出交易金额总和
     */
    public function theSum()
    {
        $obj = DB::table($this->table)->select('r_month',DB::raw('sum(r_price)'),DB::raw('sum(r_lend)'))->groupBy('r_month')->get(); //查询表中数据分组
        $res = object_to_arrays($obj); //将返回回来的对面转换为数组
        return $res;
    }
}