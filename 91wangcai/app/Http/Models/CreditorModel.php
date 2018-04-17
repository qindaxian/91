<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class CreditorModel extends Model
{
    protected $table = 'creditor';
    protected $primaryKey = 'c_id';
    public $timestamps = false;


    public function getCreditorAll()
    {

    }
}
