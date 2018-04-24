<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/24
 * Time: 10:37
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\TransactionModel;
use App\Http\Models\TransactionFoldModel;
use App\Http\Models\CreditorRecordModel;
use App\Http\Models\CreditorFoldModel;

/**
 * Class ColumnarController
 * @package App\Http\Controllers\Admin
 * 柱状图
 */
class ColumnarController extends Controller
{
    public function index()
    {
        $transactionFold = $this->transactionFold();
        $creditorFold = $this->creditorFold();
        return view('admin/columnar/index',['tf'=>$transactionFold,'cr'=>$creditorFold]);
    }

    /**
     * 交易记录折线表处理数据
     */
    public function transactionFold()
    {
        $transactionFold = new TransactionFoldModel(); //实例化交易记录折线表
        $arr = $transactionFold->theSum();
        foreach ($arr as $v) {
            $data[] = $v['sum(t_amount)'];
        }
        $res = implode(",",$data);
        return $res;
    }

    /**
     * 债权记录折线表处理数据
     */
    public function creditorFold()
    {
        $creditorFold = new CreditorFoldModel(); //实例化交易记录折线表
        $arr = $creditorFold->theSum();
        foreach ($arr as $v) {
            $arr1[] = $v['sum(r_price)'];
            $arr2[] = $v['sum(r_lend)'];
        }
        $arr1 = implode(",",$arr1);
        $arr2 = implode(",",$arr2);
        $res = ['arr1'=>$arr1,'arr2'=>$arr2];
        return (object)$res;
    }
}