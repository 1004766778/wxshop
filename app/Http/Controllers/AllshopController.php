<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Goods;
use App\Model\Category;
class AllshopController extends Controller
{

    //全部商品
    public function allshops(Request $request)
    {

        $res1=Goods::get();
        $res=Category::get();
        return view('allshops',['arr'=>$res,'arr1'=>$res1]);
    }
    //点击商品分类
    public function allshopsDo(Request $request)
    {
        $cate_id=$request->cate_id;
        if(empty($cate_id)){
            $res1=Goods::get();

        }else{
            $res1=Goods::where('cate_id',$cate_id)->get();
        }


        return view('div',['arr1'=>$res1]);
    }


    //商品详情
    public function shopcontent($id)
    {
        $res=Goods::where('goods_id',$id)->first();
        //print_r($res);die;
        return view('shopcontent',['arr'=>$res]);
    }

}
