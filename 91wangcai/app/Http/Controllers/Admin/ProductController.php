<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 9:10
 */

namespace App\Http\Controllers\Admin;

use App\Http\Models\CreditorModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class ProductController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     * 前台首页
     */
    public function project(){
        return view('admin/product/project_list');
    }

    public function creditor_add(){
        return view('admin/product/creditor_add');
    }

    public function creditor(){
        $CreditorModel=new CreditorModel();
        $Creditor=$CreditorModel
            ->get()
            ->toArray();
        //print_r($Creditor);die;
    	return view('admin/product/creditor_list');
    }

    public function creditor_upload(Request $request)
    {
        if ($_FILES) {
            $file_arr=explode('.',$_FILES['file']['name']);
            $file = $request->file('file');
            // 第一个参数代表目录, 第二个参数代表我上方自己定义的一个存储媒介
            $path = $file->storeAs('image',rand().'.'.$file_arr[1]);

            return response()->json(array('msg' => $path));
        }
    }
}