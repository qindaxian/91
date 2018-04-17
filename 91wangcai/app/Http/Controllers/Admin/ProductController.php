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
        $creditorModel = new CreditorModel();
        $creditor=$creditorModel
            ->get()
            ->toArray();
    	return view('admin/product/creditor_list');
    }

    public function creditor_upload(Request $request)
    {
        if ($pic=$request->file('file')) {
            $ext=$pic->getClientOriginalExtension();//得到图片后缀
            $file = $request->file('file');
            // 第一个参数代表目录, 第二个参数代表我上方自己定义的一个存储媒介
            $path = $file->storeAs('image',rand().'.'.$ext);

            return response()->json(array('msg' => $path));
        }
    }
}