<?php
/**
 * User: yang 
 * Date: 2018/4/18
 * Time: 15:59
 */

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BaseModel extends Model
{
   protected $table = '';

   /**
   *注释 添加
   *param(): $data(array)添加内容,$id(bool)是否返回插入id：true返回id，flase返回bool值,默认返回id。
   *
   *return():
   */
   public function insert($data,$id=true)
   {
	   	if ($id==true) {
	   		$res = DB::table($this->table)->insertGetId($data);
	   	}
	   	else {
	   		$res = DB::table($this->table)->insert($data);
	   	}
        return $res;
   }

   /**
   *注释 更新
   *param():$where(array)更新条件,$data(array)更新内容
   *
   *return():
   */
   public function up($where='',$data)
   { 
   	 if ($where==''){
   	 	$res = DB::table($this->table)->update($data);
   	 } 
   	 else {
        $res = DB::table($this->table)->where(key($where),current($where))->update($data);
   	 }  
   	 return $res; 	
   }

   /**
   *注释 删除
   *param():$where(array)删除条件
   *
   *return():
   */
   public function delete($where='')
   {
      if ($where=='') {
      	$res = DB::table($this->table)->truncate();
      }
      else {
      	$res = DB::table($this->table)->where(key($where),current($where))->delete();
      }
      return $res;
   }

   /**
   *注释 查询
   *param():$where(array)查询条件,$order(array)排序【字段,(desc|asc)】,limit(int)查几条
   *
   *return():
   */
   public function select($where='',$order='',$limit='')
   {
      if ($where=='' || $order=='' || $limit=''){
      	
      	if ($where!='' && $limit!='') {
            $res = DB::table($this->table)->where(key($where),current($where))->limit($limit)->get();
      	}
      	else{
      		if($where!=''){
      			$res = DB::table($this->table)->where(key($where),current($where))->get();
      		}   		
      	}
      	if ($order!='' && $limit!='') {
           $res = DB::table($this->table)->orderBy(key($order),current($order))->limit($limit)->get();
      	}
      	else{
      		if($order!=''){
      			$res = DB::table($this->table)->orderBy(key($order),current($order))->get();
      		} 	   
      	}

      	if($limit!='' && $where=='' && $order==''){
      		$res = DB::table($this->table)->limit($limit)->get();
      	}
      	if($limit=='' && $where=='' && $order==''){
      		$res = DB::table($this->table)->get();
      	}
      	
      }
      else{
      	$res = DB::table($this->table)->where(key($where),current($where))->orderBy(key($order),current($order))->get();
      }
      return $res;
   }
}