<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 11:10
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Class OperationreportController
 * @package App\Http\Controllers
 */
class OperationreportController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 前台运营报告
     */
    public function index()
    {
        return view('operationreport/index');
    }
}