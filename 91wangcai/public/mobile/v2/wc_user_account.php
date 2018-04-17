<?php
    /**
    *注释:获取账户信息
    *param():_:用户id
    *
    *return():
    */


//{"status":200,"message":"请求成功","data":{"wc_total":"0.00","total":"0.0","wc_balance":"0.00",
//    "qb_total":"0.00","frost":"0.0","isBilateralUser":0,"award_status":"2","balance":"0.00",
//    "qb_balance":"0.00","old_await":"0.00","getMoney":"0.00","old_balance":"0.00","income":"0.00"
//    ,"wc_frost":"0.00","user_id":1225627,"old_total":"0.00","isCheckHistory":"1","wc_await":"0.00"
//    ,"priority_await":"0","qb_await":"0.00","old_frost":"0.00","await":"0.0","end_time":"2016.03.29 00:00:00","qb_frost":"0.00","gains":"0.00"},"page":null}

// $data = ['status'=>200,'message'=>'请求成功','data'=>['wc_total'=>'1000',"isBilateralUser"=>0,"isCheckHistory"=>"1","qb_total"=>100,"wc_frost"=>100,'getMoney'=>'1000']];

echo json_encode($data);