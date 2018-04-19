<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/17
 * Time: 15:59
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class user
 * @package App\Http\Models
 */
class user extends Model
{
    protected $table = 'user'; //表明
    public $timestamps = false;

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
}