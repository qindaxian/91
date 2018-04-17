<?php
/**
 * User: Qin Daxian
 * Date: 2018/4/16
 * Time: 9:10
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
	/**9
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
	 * 前台首页
	 */
	public function index(){
		return view('admin/Login/login');
	}

}