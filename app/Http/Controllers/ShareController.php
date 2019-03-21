<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Goods;
use App\Model\Category;
class ShareController extends Controller
{

    //晒单分享
    public function share()
    {

        return view('share');
    }

}
