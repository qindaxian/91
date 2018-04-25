<?php
/**
 * User: Qin Daxian
 * Date: 2018/4/19
 * Time: 10:00
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\AdminModel;
use Illuminate\Support\Facades\Input;
use App\Http\Models\AdminPowerModel;
use Illuminate\Support\Facades\DB;



/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class PowerController extends Controller
{
    public function index(){
    	//获取当前管理员权限
    	$powerArr = session('powerArr');
        return view('admin/power/power',['powerArr' => $powerArr]);
    }

    public function powerAdd()
    {
    	$adminPowerModel = new AdminPowerModel();
		$parentArr = $adminPowerModel->getParentPower();
        return view('admin/power/power_add',['parentArr'=>$parentArr]);
    }
    public function powerAddAjax()
    {
    	/*$all=input::all();
    	$adminPowerModel = new AdminPowerModel();
    	$res=$adminPowerModel->insert($all);*/
    	echo 1;
    }
}