<?php
/**
 * User: Li Houlong
 * Date: 2018/4/23
 * Time: 10:17
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\TransactionModel;
use App\Http\Models\TransactionFoldModel;
use App\Http\Models\CreditorRecordModel;
use App\Http\Models\CreditorFoldModel;

/**
 * Class TimebaseController
 * @package App\Http\Controllers\Admin
 * 时间轴折线图 控制器
 */
class TimebaseController extends Controller
{
    /**
     *统计
     *
     */
    public function index()
    {

        //获取 交易记录折线表数据
        $Tra=(new TransactionFoldModel)->sel();
        //获取交易记录表 时间
        $Tra_times=array_column($Tra,'t_time');
        //循环一维数组
        foreach ($Tra_times as $v) {
            //定义空数组 $Tra_time   时间戳转换成日期 年-月-日
            $Tra_time[]=date('Y-m-d',$v);
        }
        //数组转换成字符串  时间
//        $Tra_time=json_encode($Tra_time);
        dump($Tra_time);

        //获取 债权记录折线表数据
        $Cre=(new CreditorFoldModel)->theSum();

        //转让价格
        $Transfer_price =array_column($Cre,'sum(r_price)');

        //出借金额
        $Lend_price =array_column($Cre,'sum(r_lend)');


        return view('admin/timebase/index',['tra'=>$Tra_time,'len'=>$Lend_price,'transfer'=>$Transfer_price]);

    }


}