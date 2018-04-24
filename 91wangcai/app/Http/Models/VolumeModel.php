<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class VolumeModel extends Model
{
    /**
     * 加息卷的数据表
     *
     * @var string
     */
    protected $table = 'volume';

    //查询
    public function showVolume($where=''){
        return DB::table($this->table)->where($where)->get()->toArray();
    }
}