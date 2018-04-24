<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class SlideShowModel extends Model
{
    protected $table = 'slideshow';

    public function getSlideShow(){
    	$slideArr=$this->where('status',1)->orderBy('time', 'desc')->limit(5)->get()->toarray();
    	return $slideArr;
    }
}
