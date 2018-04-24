<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Models\AdminPowerModel;

class AdminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //session获取哟用户信息
        $adminInfo = session('admin');
        //判断是否登陆
        if(!$adminInfo){
            return redirect('admin/login');
        }
        //获取当前用户权限
        $userId = $adminInfo->a_id;//获取当前用户id
        $adminPowerModel = new AdminPowerModel();
        $powerArr = $adminPowerModel->getPower($userId);
        //dd($powerArr);
        $parentArr = $adminPowerModel->getParentPower();
        //判断如果是无权限就什么都没有
        if (empty($powerArr)) {
            $powerArr = [];
            session(['powerArr' => $powerArr]);
            return $next($request);
        }
        //获取当前访问的路由
        $nowUri = $request->path();
        $urlArr=array_column($powerArr,'url');
        if($nowUri!='admin/index'&&!in_array($nowUri,$urlArr)){
            return redirect('admin/noPower');
        }
        //遍历数组，将子集导航包含在父集中
        $powerNewArr=[];
        foreach ($powerArr as $k => $v) {
            if ($v['parent_id'] == 0) {
                $v['data'] = [];
            }
            else{
                $powerNewArr[$v['parent_id']]['data'][] = $v;
            }
        }
        $parentNewArr = [];
        //处理父集导航数组，将父集id作为对应的下标
        foreach ($parentArr as $k => $v) {
            $parentNewArr[$v['ap_id']] = $v;
        }
        //处理权限数组，把对应的父集标题塞进对应的父集数组中
        foreach ($powerNewArr as $k => $v) {
            $powerNewArr[$k]['parent_name'] = $parentNewArr[$k]['ap_content'];
        }
        session(['powerArr' => $powerNewArr]);
        return $next($request);
    }
}
