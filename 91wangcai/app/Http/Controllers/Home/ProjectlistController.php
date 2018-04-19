<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 11:24
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

/**
 * Class ProjectlistController
 * @package App\Http\Controllers
 */
class ProjectlistController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 前台项目
     */
    public function index()
    {
        return view('home/projectlist/index');
    }
}