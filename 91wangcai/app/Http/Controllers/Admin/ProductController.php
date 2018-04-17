<?php
/**
 * User: Qin Daxian
 * Date: 2018/4/17
 * Time: 10:18
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Models\ProjectModel;

/*
 * Class IndexController
 * @package App\Http\Controllers
 */

class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 产品管理
     */
    //项目管理
    public function project(){

        $obj = new ProjectModel;
        $data = $obj->getfind(1);
        // print_r($data);die;
        
        
        return view('admin/product/project_list');
    }

    public function project_add(){
        return view('admin/product/project_add');
    }
    
    //债权转让管理
    public function creditor(){
    	return view('admin/product/creditor_list');
    }
}