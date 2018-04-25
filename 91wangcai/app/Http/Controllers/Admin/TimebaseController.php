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
        $tra = (new TransactionFoldModel)->sel();

        $tra_times = array_column($tra,'t_time');

        //一维数组    时间戳转换 年-月-日
        foreach ($tra_times as $v) {

            $tra_time[] = date('Y,m,d',$v);
        }

        $cre = (new CreditorFoldModel)->theSum();

        //转让价格
        $transfer_price = array_column($cre,'sum(r_price)');

        //出借金额
        $lend_price = array_column($cre,'sum(r_lend)');


        return view('admin/timebase/index',['tra'=>$tra_time,'len'=>$lend_price,'transfer'=>$transfer_price]);

    }


}