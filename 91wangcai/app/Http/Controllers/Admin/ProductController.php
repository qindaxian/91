<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Models\ProjectModel;
use App\Http\Models\CreditorModel;
//产品管理
class ProductController extends Controller
{
    public function project(){

        $obj = new ProjectModel;
        $data = $obj->getfind(1);
        return view('admin/product/project_list');
    }

    public function project_add(){
        return view('admin/product/project_add');
    }
    //债权转让管理

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