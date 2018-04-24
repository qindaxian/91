<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CreditorModel extends Model
{
    protected $table = 'creditor';
    protected $primaryKey = 'c_id';
    public $timestamps = false;


    //查询
    public function showCreditor($where=''){
         $res = DB::table($this->table)->where($where)->get();
         return $res;
    }
}
