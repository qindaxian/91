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
        return view('admin/diary/diary',['data'=>$data]);
    }

    public function diaryAdd(Request $request){
        if(Input::all()){
            $arr = Input::all();
            $data['title'] = $arr['title'];

            $data['contents'] = $arr['editorValue'];
            $data['file_url'] = $arr['file_url'];
            $data['content_url'] = $arr['content_url'];
            // $data['d_img'] = session('diary_upload');
            // $request->session()->forget('diary_upload');
            if(empty($data['title']) || empty($data['contents']) || empty($data['file_url']) || empty($data['content_url'])){

            $data['file_url'] = $arr['file_url'];
            $data['contents'] = $arr['editorValue'];
            $data['content_url'] = $arr['content_url'];
            // $data['d_img'] = session('diary_upload');
            // $request->session()->forget('diary_upload');
            if(empty($data['title']) || empty($data['file_url']) || empty($data['contents']) || empty($data['content_url'])){

                 return redirect('admin/diary');
            }
            $data['year'] = date('Y');
            $data['month'] = date('m');
            $data['day'] = date('d');
            $diary = new DiaryModel;
            $res = $diary->add($data);
            if($res){
                return redirect('admin/diary');
            }
        }
        return view('admin/diary/diary_add');
    }
}

    // public function diaryUpload(Request $request)
    // {
    //     $file = $request->file('file');
    //     $allowed_extensions = ["png", "jpg", "gif","jpeg"];
    //     if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
    //         return ['error' => '你必须上传 png, jpg 或者 gif格式的图片.'];
    //     }
    //     $destinationPath = 'uploads/diary/'; //public 文件夹下面建 storage/uploads 文件夹
    //     $extension = $file->getClientOriginalExtension();
    //     $fileName = str_random(10).'.'.$extension;
    //     $res = $file->move($destinationPath, $fileName);
    //     $filePath = asset($destinationPath.$fileName);
    //     session(['diary_upload' => $filePath]);
    // }

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