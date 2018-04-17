<?php
/**
 * User: Tiney S
 * Date: 2018/4/17
 * Time: 10:26
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Models\AdminModel;
use App\Http\Models\UserModel;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 后台登录
     */

    public function login(){
    	if(Input::get('a_name') && Input::get('a_password')){
    		$a_name = Input::get('a_name');
    		$a_password = md5(Input::get('a_password'));
    		$judge = Input::get('judge');
    		// if($judge == 1){
    			$admin = new AdminModel;
	    		$data = $admin->getRow($a_name,$a_password);
	    		if($data){
	    			session(['admin' => $data]);
	    			return redirect('admin/index');
	    		}
    		// }else{
    		// 	$user = new UserModel;
	    	// 	$data = $user->getRow($a_name,$a_password);
	    	// 	if($data){
	    	// 		session(['user' => $data]);
	    	// 		return redirect('admin/index/index');
	    	// 	}
    		// }	
    	}
        return view('admin/login/login');
    }
}