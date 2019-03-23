<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Goods;
use App\Model\Category;
class UserPageController extends Controller
{

    //我的潮购
    public function userpage()
    {
        $id=session('user_id');
        return view('userpage',['id'=>$id]);
    }

}
