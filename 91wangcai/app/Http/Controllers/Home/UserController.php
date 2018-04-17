<?php
/**
 * User: yang
 * Date: 2018/4/17
 * Time:
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

/**
 * Class Chronicle
 * @package App\Http\Controllers
 */
class UserController extends Controller
{
    public function index()
    {
        return view('home/user/index');
    }
}