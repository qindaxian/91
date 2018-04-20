<?php
/**
 * User: Qin Daxian
 * Date: 2018/4/19
 * Time: 10:00
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\RoleModel;


/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class PowerController extends Controller
{
	public function index(){
		return view('admin/power/power');
	}




    public function adminList(){

    	$obj = new RoleModel;
    	
    	
        return view('admin/admin_list/list');
    }


    
}