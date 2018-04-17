<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 11:37
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

/**
 * Class Chronicle
 * @package App\Http\Controllers
 */
class ChronicleController extends Controller
{
    public function index()
    {
        return view('home/chronicle/index');
    }
}