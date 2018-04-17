<?php
/**
 * User: Feng Yikai
 * Date: 2018/4/16
 * Time: 11:07
 */

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

/**
 * Class LoanController
 * @package App\Http\Controllers
 */
class LoanController extends Controller
{
    public function index()
    {
        return view('home/loan/index');
    }
}