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
    //旺财日记
    public function index()
    {
        return view('home/chronicle/index');
    }

    //旺财财主见面会
    public function caizhu()
    {
        return view('home/chronicle/caizhu');
    }
    
    /**
     * @Author   yangshancheng
     * @DateTime 2018-04-25
     * @param
     * @page_size:每页条数; @page_num:当前页数; @year:年份; @type:类型;
     * @return   
     * @year:年份
     * @title:标题:
     * @title_time:时间
     * @content:内容
     * @file_url:图片链接
     * @content_url:内容连接
     * @page_size:每页条数; @page_num:当前页数; @total:总条数
     */
    public function meeting_diary()
    {             
        $_=Input::get('_');
        $type=Input::get('type'); //类型
        $page_size=Input::get('page_size'); //每页条数
        $page_num=Input::get('page_num'); //当前页码
        $year=Input::get('year'); //年份

        $diary = new DiaryModel; //计事表 
        $data=[];

        if (!empty($_)) {
            
            $data['status']=200;
            $data['message']='请求成功';
            switch ($type) {
                case 1:  //日记
                   //时间结果集
                   $pluck=$diary->pluck(['is_diary'=>0],'year');                          
                   $data['data']['year']=$this->year($pluck);
                    
                   //开始条数
                   $page_start=$page_num*$page_size+1;
                   //当前年份
                   if ($year=='') {
                       $year=substr(date('Y'),0,4);
                   }
                   $arr=$diary->showDiary(['is_diary'=>0,'year'=>$year],$page_start,$page_size);

                   for($i=0; $i<count($arr); $i++){

                       $contents['title']=$arr[$i]['title'];
                       $contents['contents']=$arr[$i]['contents'];
                       $contents['file_url'][]=$arr[$i]['file_url'];
                       $contents['content_url']=$arr[$i]['content_url'];
                       $contents['title_time']=$arr[$i]['year'].'-'.$arr[$i]['month'].'-'.$arr[$i]['day'];
                       $data['data']['messageInfo'][]=$contents;
                   }  

                   if ($page_num!='' && $page_size!='') {
                       //页数
                       $count=$diary->count(['is_diary'=>0,'year'=>$year]);
                       $total=intval(ceil($count/$page_size));

                       $data['page']['total']=$total;           
                       $data['page']['pageSize']=intval($page_size);           
                       $data['page']['pageNum']=intval($page_num);                                                               
                    } else {
                        $data['page']=null;
                    } 

                    $data=json_encode($data);                          
                    echo $data;                
                break;
                    
                case 2: //财主见面
                    //时间结果集
                    $pluck=$diary->pluck(['is_diary'=>1],'year');                          
                    $data['data']['year']=$this->year($pluck);
                    
                    //开始条数
                    $page_start=$page_num*$page_size+1;
                    //当前年份
                    if ($year=='') {
                       $year=substr(date('Y'),0,4);
                    }
                    $arr=$diary->showDiary(['is_diary'=>1,'year'=>$year],$page_start,$page_size);
 
                    for($i=0; $i<count($arr); $i++){

                       $contents['title']="";
                       $contents['contents']=$arr[$i]['contents'];
                       $contents['file_url'][]=$arr[$i]['file_url'];
                       $contents['content_url']=$arr[$i]['content_url'];
                       $contents['title_time']=$arr[$i]['year'].'-'.$arr[$i]['month'].'-'.$arr[$i]['day'];
                       $data['data']['messageInfo'][]=$contents;
                    }  

                    if ($page_num!='' && $page_size!='') {
                       //页数
                       $count=$diary->count(['is_diary'=>1,'year'=>$year]);
                       $total=intval(ceil($count/$page_size));

                       $data['page']['total']=$total;           
                       $data['page']['pageSize']=intval($page_size);           
                       $data['page']['pageNum']=intval($page_num);                                                               
                    } else {
                        $data['page']=null;
                    } 

                    $data=json_encode($data);                          
                    echo $data;
                    break;
            }
        } else {
   
            $data['status']=300;
            $data['message']='请求失败';    
        }
    }

    /**
     * @Author   yangshancheng
     * @DateTime 2018-04-25
     * @param
     * @year:年份数组
     * @return   
     */
    public function year($year){
        
        $data = array_unique($year); //去重加排序
        $length =count($data);
        //从小到大排序
        sort($data);
        for($i=0; $i<count($data); $i++){
            $arr['time'] = $data[$i];
            $array[] = $arr;
        }
        return $array;
    }
    
}