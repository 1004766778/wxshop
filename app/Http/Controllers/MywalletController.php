<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MywalletController extends Controller
{
    //
    public function myWallet()
    {
        return view('mywallet');
    }
    //潮购记录
    public function buyRecord()
    {
        return view('buyrecord');
    }
    //购买的商品
    public function recordDetail()
    {
        return view('recorddetail');
    }
}
