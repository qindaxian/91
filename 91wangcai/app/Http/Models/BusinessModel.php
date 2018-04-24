<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessModel extends Model
{
    protected $table = 'apply_qa';
    protected $primaryKey = 'apply_qa_id';
    public $timestamps = false;

}
