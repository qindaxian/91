<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 9:10
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use APP\Http\Models;


/**
 * Class IndexController
 * @package App\Http\Controllers
 */
class BusinessController extends Controller
{
    public function business_qua(){
        return view('admin/business/qua');
    }
}