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

    public function projectAdd(){
        return view('admin/product/project_add');
    }
    //债权转让管理

    public function creditorAdd(){
        return view('admin/product/creditor_add');
    }

    public function creditor(){
        $creditorModel = new CreditorModel();
        $creditor=$creditorModel
            ->get()
            ->toArray();
        return view('admin/product/creditor_list');
    }
}