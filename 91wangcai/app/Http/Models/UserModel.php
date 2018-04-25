<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class UserModel extends Model
{
    /**
     * 关联到模型的数据表
     *
     * @var string
     */
    protected $table = 'user';

    public function showInfo(){
        //查询所有数据
        return DB::table($this->table)->get();
    }

    public function getRow($a_name,$a_password){
        //查询一条数据
        return DB::table($this->table)->where(['user_phone'=>$a_name,'user_password'=>$a_password])->first();
    }

    //查询
    public function showUser($where=''){
        return DB::table($this->table)->where($where)->get()->toArray();
    }
    /**
     * @param $data
     * @return int
     * 手机号，密码
     */
    public function add($data)
    {
        return DB::table($this->table)->insert($data);
    }

    /**
     * @param $user_phone
     * @return mixed
     * 查询是否有相同手机号
     */
    public function selOne($user_phone)
    {
        return DB::table($this->table)->where(['user_phone'=>$user_phone])->first();
    }

    /**
     * @param $user_phone
     * @return mixed
     * 手机号密码搜索
     */
    public function phone($user_phone)
    {
        return DB::table($this->table)->where(['user_phone'=>$user_phone])->first();
    }

    /**
     * @param $user_phone
     * @param $user_password
     * @return mixed
     * 用户登陆
     */
    public function login($user_phone,$user_password)
    {
        return DB::table($this->table)->where(['user_phone'=>$user_phone,'user_password'=>$user_password])->first();
    }

    public function pwd_error($user_phone,$user_error)
    {
        return DB::table($this->table)->where(['user_phone'=>$user_phone])->update($user_error);

    }

    public function userSum(){
        //用户总人数统计
        return DB::table($this->table)->get()->count();
    }

    public function userTime($begin,$end){
        //按条件查注册用户统计
        return DB::table($this->table)->whereBetween('user_reg_time', array($begin,$end))->get()->count();
    }
}
