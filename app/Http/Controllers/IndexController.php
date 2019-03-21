<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Goods;
use App\Model\Category;
class IndexController extends Controller
{
    //首页
    public function index()
    {

        $res=Goods::limit(20)->get();
        $res1=Category::where('pid',0)->limit(4)->get();
        return view('index',['arr'=>$res,'arr1'=>$res1]);
    }

}
