<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Goods;
use App\Model\Category;
use App\Model\Cart;
class ShopcartController extends Controller
{

    //购物车
    public function shopcart()
    {
        $user_id=session('user_id');
        $res=Cart::where('user_id',$user_id)
            ->join('goods','goods.goods_id','=','cart.goods_id')
            ->get();
        return view('shopcart',['arr'=>$res]);
    }
    //购物车执行
    public function shopcartDo(Request $request)
    {
        $user_id=session('user_id');
        $data=$request->all();
        $data['user_id']=$user_id;
        unset($data['_token']);
        $goods_id=$request->goods_id;
        $where=[
            'goods_id'=>$goods_id,
            'user_id'=>$user_id
        ];
        $arr=Cart::where($where)->first();

        if(!empty($arr)){
            $buy_number=$arr['buy_number'];
            $buy_number+=1;
            //echo $buy_number;
            $data=['buy_number'=>$buy_number];
            $res=Cart::where($where)->update($data);
            //print_r($res);

        }else{

            $data['buy_number']=1;
            $res=Cart::insert($data);
        }
        if($res){
            echo 1;
        }else{
            echo 2;
        }

    }
    //购物车删除
    public function shopcartDel(Request $request)
    {
        $cart_id=$request->cart_id;
        $res=Cart::where('cart_id',$cart_id)->delete();
        if($res){
            echo 1;
        }else{
            echo 2;
        }
    }
    //购物车删除
    public function shopcartDels(Request $request)
    {
        $cart_id=explode(',',rtrim($request->cart_id,','));
        $res=Cart::whereIn('cart_id',$cart_id)->delete();
        if($res){
            echo 1;
        }else{
            echo 2;
        }
    }

}
