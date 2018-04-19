<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 9:29
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

/**
 * Class HelpcenterController
 * @package App\Http\Controllers\Auth
 */
class HelpcenterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 前台帮助中心
     */
    public function index()
    {
        return view("home/helpcenter/index");
    }
}