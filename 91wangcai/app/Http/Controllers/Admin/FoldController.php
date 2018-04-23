<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/23
 * Time: 10:14
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\TransactionModel;
use App\Http\Models\TransactionFoldModel;
use App\Http\Models\CreditorRecordModel;
use App\Http\Models\CreditorFoldModel;

/**
 * Class FoldController
 * @package App\Http\Controllers\Admin
 * 折线图控制器
 */
class FoldController extends Controller
{
    public function index()
    {
        $transactionFold = $this->transactionFold();
        $creditorFold = $this->creditorFold();
        return view('admin/fold/index',['tf'=>$transactionFold,'cr'=>$creditorFold]);
    }

    /**
     * 交易记录折线表数据更新
     */
    public function conformity()
    {
        //交易记录更新
        $transactionFold = new TransactionFoldModel(); //实例化交易记录折线表
        $arr = $transactionFold->sel(); //调用查询方法
        foreach($arr as $v) { //将查询结果遍历
            $data[] = $v['t_time']; //将遍历结果存入新的变量
        }
        $transaction = new TransactionModel(); //实例化交易记录表
        $res = $transaction->showInfo($data); //调用查询方法
        $transactionFold -> add($res); //调用交易记录表提出数据入交易记录表方法
    }

    /**
     * 债权记录折现表更新
     */
    public function creditor()
    {
        $creditorFold = new CreditorFoldModel(); //实例债权记录折线表
        $arr = $creditorFold->sel(); //调用查询方法
        foreach($arr as $v) { //将查询结果遍历
            $data[] = $v['r_time']; //将遍历结果存入新的变量
        }
        $creditorRecord = new CreditorRecordModel(); //实例债权记录表
        $res = $creditorRecord->showInfo($data); //调用查询方法
        $creditorFold  -> add($res); //调用债权记录表提出数据入债权记录折线表方法
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