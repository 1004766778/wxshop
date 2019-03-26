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
        $cate_id=$request->input('cate_id');
//        echo $cate_id;die;
        $type=$request->type;
//        echo $cate_id;
        if(empty($cate_id)){
            if(empty($type)){
                $goodsInfo=Goods::get();
            }else{

                if($type==1){
                    $goodsInfo=Goods::orderBy('goods_num','desc')
                        -> take(10)->get();
                }
                if($type==2){
                    $goodsInfo=Goods::orderBy('create_time','asc')
                        -> take(10)->get();
                }
                if($type==3){
                    $goodsInfo=Goods::orderBy('self_price',$type)
                        -> take(10)->get();
                }
            }
        }else{
            if(empty($type)){
                $goodsInfo=Goods::where('cate_id',$cate_id)->get();
            }

        }
        return view('div',['goodsInfo'=>$goodsInfo]);
    }


    //商品详情
    public function shopcontent($id)
    {
        $res=Goods::where('goods_id',$id)->first();
        //print_r($res);die;
        return view('shopcontent',['arr'=>$res]);
    }

}
