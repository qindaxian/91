<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 9:10
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use APP\Http\Models;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Models\SlideShowModel;
/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class PictureController extends Controller
{
	//轮播图
    public function slideShow(Request $request){
    	$slideModel = new SlideShowModel();
    	$slideArr = $slideModel->getSlideShow();
        return view('admin/picture/slideshow',['slideArr' => $slideArr]);
    }

    public function pictureUpload(Request $request){
    	//$request->session()->forget('slideshow_upload');
    	$file = $request->file('file');
        $allowed_extensions = ["png", "jpg", "gif","jpeg"];
        if ($file->getClientOriginalExtension() && !in_array($file->getClientOriginalExtension(), $allowed_extensions)) {
            return ['error' => '你必须上传 png, jpg 或者 gif格式的图片.'];
        }
        $destinationPath = 'images/lbt/uploads/'; //public 文件夹下面建 storage/uploads 文件夹
        $extension = $file->getClientOriginalExtension();
        $fileName = time().'_'.rand().'.'.$extension;
        $res = $file->move($destinationPath, $fileName);
        $filePath = asset($destinationPath.$fileName);
        $request->session()->push('slideshow_upload.key', $filePath);
    }

    public function slideShowInsert(Request $request){
    	$arr=input::all();
    	$slideModel = new SlideShowModel();
    	foreach (session('slideshow_upload.key') as $k => $v) {
    		$slideModel->insert([
    			'url' => $v,
    			'status' => $arr['status'],
    			'time' => date('Y-m-d H-i-s')
    		]);
    	}
    	$request->session()->forget('slideshow_upload');
    	return redirect('admin/slideshow');
    }
}