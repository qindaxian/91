<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 9:10
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Models\AdminModel;
use App\Http\Models\UserModel;
use App\Http\Models\ProjectModel;
use App\Http\Models\DiaryModel;


/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
{
    public function index(){
    	// $lowtime=mktime(0,0,0,1,1,date('Y'));当前年初
    	// $time = mktime(0,0,0,1,1,date('Y')+1);当前年末
    	//总数
    	$sum = $this->sum();
    	//今日
    	$day = $this->day();
    	//昨日
    	$yesterday = $this->yesterday();
    	//本周
    	$week = $this->week();
    	//本月
    	$month = $this->month();
        return view('admin/index/index',['sum' => $sum,'day' => $day,'yesterday' => $yesterday,'week' => $week,'month' => $month]);
    }

    public function sum(){
    	//管理员总人数
    	$admin = new AdminModel;
    	$admin_sum = $admin->adminSum();
    	//用户总人数
    	$user = new UserModel;
    	$user_sum = $user->userSum();
    	//项目总数
    	$project = new ProjectModel;
    	$project_sum = $project->projectSum();
    	//资讯总数
    	$diary = new DiaryModel;
    	$diary_sum = $diary->diarySum();
    	$sum = [
    		'admin_sum' => $admin_sum,
    		'user_sum' => $user_sum,
    		'project_sum' => $project_sum,
    		'diary_sum' => $diary_sum
    	];
    	return $sum;
    }

    public function day(){
    	$today = strtotime(date('Y-m-d'));
    	$tomorrow = $today+86400;
    	//今日新增管理员人数
    	$admin = new AdminModel;
    	$admin_day = $admin->adminTime($today,$tomorrow);
    	//今日新增用户人数
    	$user = new UserModel;
    	$user_day = $user->userTime($today,$tomorrow);
    	//今日新增项目数
    	$project = new ProjectModel;
    	$project_day = $project->projectTime($today,$tomorrow);
    	//今日新增资讯数
    	$diary = new DiaryModel;
    	$diary_day = $diary->diaryTime($today,$tomorrow);
    	$day = [
    		'admin_day' => $admin_day,
    		'user_day' => $user_day,
    		'project_day' => $project_day,
    		'diary_day' => $diary_day
    	];
    	return $day;
    }

    public function yesterday(){
    	$today = strtotime(date('Y-m-d'));
    	$yesterday = $today-86400;
    	//昨日新增管理员人数
    	$admin = new AdminModel;
    	$admin_yesterday = $admin->adminTime($yesterday,$today);
    	//昨日新增用户人数
    	$user = new UserModel;
    	$user_yesterday = $user->userTime($yesterday,$today);
    	//昨日新增项目数
    	$project = new ProjectModel;
    	$project_yesterday = $project->projectTime($yesterday,$today);
    	//昨日新增资讯数
    	$diary = new DiaryModel;
    	$diary_yesterday = $diary->diaryTime($yesterday,$today);
    	$yesterday = [
    		'admin_yesterday' => $admin_yesterday,
    		'user_yesterday' => $user_yesterday,
    		'project_yesterday' => $project_yesterday,
    		'diary_yesterday' => $diary_yesterday
    	];
    	return $yesterday;
    }

    public function week(){
    	$week_begin = strtotime('last Monday');
    	$week_end = strtotime('next Sunday');
    	//本周新增管理员人数
    	$admin = new AdminModel;
    	$admin_week = $admin->adminTime($week_begin,$week_end);
    	//本周新增用户人数
    	$user = new UserModel;
    	$user_week = $user->userTime($week_begin,$week_end);
    	//本周新增项目数
    	$project = new ProjectModel;
    	$project_week = $project->projectTime($week_begin,$week_end);
    	//本周新增资讯数
    	$diary = new DiaryModel;
    	$diary_week = $diary->diaryTime($week_begin,$week_end);
    	$week = [
    		'admin_week' => $admin_week,
    		'user_week' => $user_week,
    		'project_week' => $project_week,
    		'diary_week' => $diary_week
    	];
    	return $week;
    }

    public function month(){
    	$month_begin = strtotime(date('Y-m'));
    	$month_end = strtotime(date('Y-m-t'));
    	//本月新增管理员人数
    	$admin = new AdminModel;
    	$admin_month = $admin->adminTime($month_begin,$month_end);
    	//本月新增用户人数
    	$user = new UserModel;
    	$user_month = $user->userTime($month_begin,$month_end);
    	//本月新增项目数
    	$project = new ProjectModel;
    	$project_month = $project->projectTime($month_begin,$month_end);
    	//本月新增资讯数
    	$diary = new DiaryModel;
    	$diary_month = $diary->diaryTime($month_begin,$month_end);
    	$month = [
    		'admin_month' => $admin_month,
    		'user_month' => $user_month,
    		'project_month' => $project_month,
    		'diary_month' => $diary_month
    	];
    	return $month;
    }
}