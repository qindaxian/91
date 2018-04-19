<?php
/**
 * User: Feng Yikai
 * update:Li Houlong
 * Date: 2018/4/16
 * Time: 11:37
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Models\DiaryModel;

/**
 * Class Chronicle
 * @package App\Http\Controllers
 * [旺财日记,旺财记事]
 */
class ChronicleController extends Controller
{

    public function index()
    {
        return view('home/chronicle/index');
    }

    /**
     * 旺财日记系列
     *
     */
    public function meeting_diary()
    {
        //实例化model
        $diary=new DiaryModel();
        //查询所有数据
        $note=object_to_arrays($diary->showInfo());
        //get 接值[前台发送]
        $data=Input::all();
        dump($data);die;

    }
    /**
     * 财主见面会系列
     *
     */
    public function meeting()
    {

    }
}