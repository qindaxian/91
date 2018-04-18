<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Http\Models\AdminModel;
use App\Http\Models\UserModel;


class LoginController extends Controller
{

public function login(){
 	if(Input::get('a_name') && Input::get('a_password')){
    		$a_name = Input::get('a_name');
    		$a_password = md5(Input::get('a_password'));
    		$judge = Input::get('judge');
    			$admin = new AdminModel;
	    		$data = $admin->getRow($a_name,$a_password);
	    		if($data){
	    			session(['admin' => $data]);
	    			return redirect('admin/index');
	    		}
    	}
        return view('admin/login/login');
    }

}