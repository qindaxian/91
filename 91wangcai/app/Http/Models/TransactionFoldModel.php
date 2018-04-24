<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/23
 * Time: 11:05
 */
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class TransactionFoldModel
 * @package App\Http\Models
 * 交易记录折线表
 */
class TransactionFoldModel extends Model
{
    protected $table = 'transaction_fold';

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
     * 交易记录表提出数据入交易记录表
     */
    public function add($res)
    {
        foreach($res as $v) { //将查询结果遍历
            $month = date('m',$v['t_time']);
            $data =  DB::table($this->table)->insertGetId(['t_amount'=>$v['t_amount'],'t_time'=>$v['t_time'],'t_month'=>$month]); //入库
        }
        return $data; //返回数据
    }

    /**
     * 按照月份算出交易金额总和
     */
    public function theSum()
    {
        $obj = DB::table($this->table)->select('t_month',DB::raw('sum(t_amount)'))->groupBy('t_month')->get(); //查询表中数据分组
        $res = object_to_arrays($obj); //将返回回来的对面转换为数组
        return $res;
    }
}
