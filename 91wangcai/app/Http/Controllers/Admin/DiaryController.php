<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\Http\Models\DiaryModel;
//产品管理
class DiaryController extends Controller
{
    public function diary(){
        $diary = new DiaryModel;
        $data = $diary->showInfo();
        // print_r($data[0]->d_title);die;
        return view('admin/diary/diary',['data'=>$data]);
    }

    public function diaryAdd(Request $request){
        if(Input::all()){
            $arr = Input::all();
            $data['d_title'] = $arr['d_title'];
            $data['d_type'] = $arr['d_type'];
            $data['d_content'] = $arr['editorValue'];
            $data['d_label'] = $arr['d_label'];
            $data['d_img'] = session('diary_upload');
            $request->session()->forget('diary_upload');
            if(empty($data['d_title']) || empty($data['d_type']) || empty($data['d_content']) || empty($data['d_img'])){
                 return redirect('admin/diary');
            }
            $data['d_time'] = date('Y-m-d');
            $diary = new DiaryModel;
            $res = $diary->add($data);
            if($res){
                return redirect('admin/diary');
            }
        }
        return view('admin/diary/diary_add');
    }

    public function diaryUpload(Request $request)
    {
        $file = $request->file('file');
        $allowed_extensions = ["png", "jpg", "gif","jpeg"];
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            return ['error' => '你必须上传 png, jpg 或者 gif格式的图片.'];
        }
        $destinationPath = 'uploads/diary/'; //public 文件夹下面建 storage/uploads 文件夹
        $extension = $file->getClientOriginalExtension();
        $fileName = str_random(10).'.'.$extension;
        $res = $file->move($destinationPath, $fileName);
        $filePath = asset($destinationPath.$fileName);
        session(['diary_upload' => $filePath]);
    }

    public function diaryStop(){
        $id = Input::get('id');
        $diary = new DiaryModel;
        $res = $diary->disry_status($id,0);
        return $res;
    }

    public function diaryStart(){
        $id = Input::get('id');
        $diary = new DiaryModel;
        $res = $diary->disry_status($id,1);
        return $res;
    }

    public function diaryDel(){
        $id = Input::get('id');
        $diary = new DiaryModel;
        $res = $diary->delRow($id);
        return $res;
    }

    // public function diary_update(){
    //     return view('admin/diary/diary_update',['data'=>$data]);
    // }
}