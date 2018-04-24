<?php
/**
 * User: yang
 * update:
 * Date: 2018/4/18
 * Time: 9:10
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Models\UserModel;
use App\Http\Models\LoanModel;
use App\Http\Models\ProjectModel;
use App\Http\Models\VolumeModel;
use App\Http\Models\CreditorModel;
use Cookie;
use Redirect;


/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class InfoController extends Controller
{  
	public function islogin()
	{
		//判断用户是否登录
	    if (Cookie::get('user_name')==null) {  

	    	 return 1;  //上线改0

	    } else {

	    	//用户是否存在
	    	$user_id = Cookie::get('user_name');

	    	//查询用户id是否存在
            $user = new UserModel();

            $data = $user->showUser(['user_id'=>$user_id]);

            if (empty($data)) {

            	return 0;
            }
	    }
	}

	//账户概况
	public function index()
	{ 
	    return view('home/info/index');     
	}


  /**
   * @Author   yangshancheng
   * @DateTime 2018-04-21
   * 获取账户信息
   * @param
   * @return   
   */
	public function account(){
		//获取user_id 
		$user_id = Cookie::get('user_name');
		// if($user_id){
		// 	$data = ['data'=>'','message'=>"登录已过期，请重新登录",'status'=>300];
		// 	echo json_encode($data);
		// }
        $data = ['status'=>200,'message'=>'请求成功','data'=>["wc_total"=>"0.00","total"=>"0.0","wc_balance"=>"0.00","qb_total"=>"0.00","frost"=>"0.0","isBilateralUser"=>0,"award_status"=>"2","balance"=>"0.00","qb_balance"=>"0.00","old_await"=>"0.00","getMoney"=>"0.00","old_balance"=>"0.00","income"=>"0.00","wc_frost"=>"0.00","user_id"=>1225627,"old_total"=>"0.00","isCheckHistory"=>"1","wc_await"=>"0.00","priority_await"=>"0","qb_await"=>"0.00","old_frost"=>"0.00","await"=>"0.0","end_time"=>"2016.03.29 00=>00=>00","qb_frost"=>"0.00","gains"=>"0.00"],'page'=>null];
         echo json_encode($data);

	}


	/**
	 * @Author   yangshancheng
	 * @DateTime 2018-04-21
	 * 获取理财列表数据
	 * @param
	 * 
	 * @return   
	 * @status:请求是否成功; 
	 * @tender_status:1.投资 2.回款 3.已回款; 
	 * @product_style:end.不显示期数(1/1) tid.显示期数
	 * @show_product_from:展示产品来源 0 散标；1 债权;
	 * @product_nid:项目id;
	 * @name:项目名称;
	 * @origin_account:项目出借金额；
	 * @account:持有金额;
	 * @recover_account_interest:本期利息;
	 * @coupon_interest:加息卷利息；
	 * @repay_account_times:当前期数;
	 * @product_period:总期数;
	 * @redeem_account_time:本期回款时间
	 * @buy_nid:协议书id(你购买项目生成债务的id);
	 * @allow_credit:0.同意转债 1.不同意转债
	 * @selling_status:0.未转债 1.已转债 2.转债中
	 */
	public function capital_detail_priority(){

        $data=[];
        $pagenum=Input::get('pagenum');  //获取显示条数
        $user_name = Cookie::get('user_name');  
        $user_name = 1; //测试用

        if ($user_name!='') {

            $data['status']=200;
            $data['message']='请求成功';

            //查询项目借贷表
            $loan = new LoanModel;
            //加息卷
            $volume = new VolumeModel;
            //项目
            $project = new ProjectModel;

            $show = $loan->showLoan(['user_id'=>$user_name],0,$pagenum);
            $show = object_to_arrays($show);  //对象转数组
            $data['data']['product'] = [];
         
            for ($i=0; $i<count($show); $i++) {

                //项目状态
                $data['data']['product'][$i]['tender_status']=$show[$i]['l_state'];
                //产品来源
                $data['data']['product'][$i]['show_product_from']=$show[$i]['p_type'];
                //项目或债权id
                $data['data']['product'][$i]['product_nid']=$show[$i]['p_id'];
                //持有金额
                $data['data']['product'][$i]['account']=$show[$i]['l_account'];
                //回款时间
                $data['data']['product'][$i]['redeem_account_time']=$show[$i]['l_payment_time'];
                //协议书id
                $data['data']['product'][$i]['buy_nid']=$show[$i]['p_id'];
                //0.同意转债 1.不同意转债
                $data['data']['product'][$i]['allow_credit']=$show[$i]['allow_credit'];
                //0.未转债 1.已转债 2.转债中
                $data['data']['product'][$i]['selling_status']=$show[$i]['selling_status'];               
                
                $p_val = $project->showProject(['p_id'=>$show[$i]['p_id']]);
                $p_val = object_to_arrays($p_val);

                // 项目
                if ($show[$i]['p_type']==0) {

                    //项目名称
                    $data['data']['product'][$i]['name']=$p_val['p_name'];
                    //借出金额
                    $data['data']['product'][$i]['origin_account']=$p_val['p_loan'];            
                    //本期利息(持有金额*年利率/368*借贷天数)
                    $p_annual_interest_rate = $show[$i]['l_account']*$p_val['p_annual_interest_rate']/365*$p_val['p_term'];

                    $data['data']['product'][$i]['recover_account_interest']=$p_annual_interest_rate;

                    if ($show[$i]['volume_id']!='') {

                       //加息卷利息
                       $v_val = $volume->showVolume(['v_id'=>$show[$i]['volume_id']]);
                       $v_val = object_to_arrays($v_val);
                       
                       $coupon_interest = $show[$i]['l_account']*$v_val['v_val']/365*$p_val['p_term'];
                       $data['data']['product'][$i]['coupon_interest']=$coupon_interest;
                    }

                    if ($p_val['p_period']==1) {

                    	//不显示期数
                    	$data['data']['product'][$i]['product_style']='end';
                    } else {

                    	//显示期数
                    	$data['data']['product'][$i]['product_style']='tid';
                    	//总期数
                    	$data['data']['product'][$i]['product_period']=$p_val['p_period'];
                    	//当前期数
                    	$data['data']['product'][$i]['repay_account_times']=$p_val['p_now_period'];
                    }
                }
                //债权
                if ($show[$i]['p_type']==1) {

                	$creditor = new CreditorModel;
                    $c_val = $creditor->showCreditor(['c_id'=>$show[$i]['p_id']]);
                    $c_val = object_to_arrays($c_val);

                    //借出金额
                    $data['data']['product'][$i]['origin_account']=$c_val[0]['c_borrow'];
                     //本期利息(持有金额*年利率/368*借贷天数)
                    $p_annual_interest_rate = $show[$i]['l_account']*$c_val[0]['c_interest_rate']/365*$c_val[0]['c_term'];

                    $data['data']['product'][$i]['recover_account_interest']=$p_annual_interest_rate;
                    //对应项目
                    $p_val = $project->showProject(['p_id'=>$c_val[0]['p_id']]);
                    $p_val = object_to_arrays($p_val);

                    //项目名称
                    $data['data']['product'][$i]['name']=$p_val['p_name'];
                      
                    if ($p_val['p_period']==1) {

                    	//不显示期数
                    	$data['data']['product'][$i]['product_style']='end';
                    } else {

                    	//显示期数
                    	$data['data']['product'][$i]['product_style']='tid';
                    	//总期数
                    	$data['data']['product'][$i]['product_period']=$p_val['p_period'];
                    	//当前期数
                    	$data['data']['product'][$i]['repay_account_times']=$p_val['p_now_period'];
                    }               
                }
            }
        } else {
            //没找到用户，请求失败
        	$data['status']=300;
            $data['message']='请求失败';
        }
        return $data;
	}
    
    /**
     * 最近交易
     * @Author   yangshancheng
     * @DateTime 2018-04-24
     * @param
     * @return 
     */
    public function detail(){
       
    }
}