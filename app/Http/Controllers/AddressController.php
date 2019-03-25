<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Area;
use App\Model\Address;
class AddressController extends Controller
{
    //展示地址
    public function index()
    {
        $id=session('user_id');
        $arr=Address::where('user_id',$id)->get();
        return view('address',['arr'=>$arr]);
    }
    //展示地址
    public function addressAdd()
    {
        $arr=Area::where('pid',0)->get();
        return view('writeaddr',['arr'=>$arr]);
    }
    //收货地址添加
    public function addressAddDo(Request $request)
    {
        $data=$request->all();
        $data['user_id']=session('user_id');
        unset($data['_token']);
      $aaa= $data['is_default'];
        if($aaa==1){
            $res1=Address::where('user_id',$data['user_id'])->update(['is_default'=>2]);
            $res=Address::insert($data);
        }else{
            $res=Address::insert($data);
        }
        if($res){
            echo 1;
        }else{
            echo 2;
        }
    }
    //收货地址删除
    public function addressDel(Request $request)
    {
        $address_id=$request->address_id;
        $user_id=session('user_id');
        $res=Address::where('address_id',$address_id)->delete();
            if($res){
                echo 1;
            }else{
                echo 2;
            }
    }
    //收货地址修改展示
    public function addressUpd(Request $request)
    {
        $address_id=$request->id;
        $arr1=Area::where('pid',0)->get();
        $res=Address::where('address_id',$address_id)->first();
        //print_r($res);die;
        return view('addressupd',['arr'=>$res,'arr1'=>$arr1]);
    }
    //收货地址修改执行
    public function addressUpdDo(Request $request)
    {
        $data=$request->all();
        //print_r($data);die;
        $address_id=$request->address_id;
        unset($data['address_id']);
        unset($data['_token']);
        //$arr1=Area::where('address_id',$address_id)->get();
        $res=Address::where('address_id',$address_id)->update($data);
        if($res){
            echo 1;
        }else{
            echo 2;
        }
    }
}
