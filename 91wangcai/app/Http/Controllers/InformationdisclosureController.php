<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 10:53
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Class InformationdisclosureController
 * @package App\Http\Controllers
 */
class InformationdisclosureController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 前台信息披露
     */
    public function index()
    {
        return view("informationdisclosure/index");
    }
}