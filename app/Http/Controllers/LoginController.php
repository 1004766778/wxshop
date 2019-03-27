<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Goods;
use App\Model\Category;
use App\Model\User;
class LoginController extends Controller
{

    //登录
    public function login()
    {

        return view('login');
    }
    //登录执行
    public function loginDo(Request $request)
    {
        $data=$request->all();
        unset($data['_token']);
        $res=User::where('user_tel',$data['user_tel'])->first();
        $pwd=decrypt($res['user_pwd']);
        if($pwd==$data['user_pwd']){
            echo 1;
            session(['user_name'=>$data['user_tel'],'user_id'=>$res['user_id']]);

        }else{
            echo 2;
        }
    }
    //注册
    public function register()
    {

        return view('register');
    }
    //注册执行
    public function registerDo(Request $request)
    {
        $data=$request->post();
//        echo $data['code'];die;
        $coded=session('mobilecode');
        unset($data['_token']);
        if($data['code']!=$coded){
            echo '验证码错误';die;
        }
        unset($data['code']);
        $data['user_pwd']=encrypt($data['user_pwd']);
        //crypt($data['user_pwd']);
        //print_r($data);die;
        $res=User::insert($data);
        $res1=User::where('user_tel',$data['user_tel'])->first();
        //  echo $res1['user_id'];die;
        //print_r($res1);die;
        //dd($res);
        if($res){
            echo 1;
            session(['user_name'=>$data['user_tel'],'user_id'=>$res1['user_id']]);
        }else{
            echo 2;
        }


    }

    //传手机号
    public function sendcode(Request $request){
        $mobile=$request->u_name;

        $code=1111;

        session(['mobilecode'=>$code]);

        //$this->sendMobile($code,$mobile);
    }


    /*
     * @content 发送手机验证码
     * @params  $mobile  要发送的手机号
     *
     * */
//    private function sendMobile($code,$mobile)
//    {
//        $host = env("MOBILE_HOST");
//        $path = env("MOBILE_PATH");
//        $method = "POST";
//        $appcode = env("MOBILE_APPCODE");
//        $headers = array();
//        array_push($headers, "Authorization:APPCODE " . $appcode);
//        $querys = "content=【创信】你的验证码是：".$code."，3分钟内有效！&mobile=".$mobile;
//        $bodys = "";
//        $url = $host . $path . "?" . $querys;
//
//        $curl = curl_init();
//        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
//        curl_setopt($curl, CURLOPT_URL, $url);
//        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
//        curl_setopt($curl, CURLOPT_FAILONERROR, false);
//        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
//        curl_setopt($curl, CURLOPT_HEADER, true);
//        if (1 == strpos("$".$host, "https://"))
//        {
//            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
//            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
//        }
//        var_dump(curl_exec($curl));
//    }
}
