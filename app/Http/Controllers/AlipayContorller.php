<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tools\alipay\wappay\buildermodel\AlipayTradeWapPayContentBuilder;
use App\Tools\alipay\wappay\service\AlipayTradeService;
class AlipayContorller extends Controller
{
    //支付宝首页
    public function index()
    {
        header("Content-type: text/html; charset=utf-8");


        //require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'service/AlipayTradeService.php';
        //require_once dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'buildermodel/AlipayTradeWapPayContentBuilder.php';
       // require dirname ( __FILE__ ).DIRECTORY_SEPARATOR.'./../config.php';
        $config=config('alipay');
            //商户订单号，商户网站订单系统中唯一订单号，必填
            $out_trade_no = date('ymdhis').rand(10000,99999);

            //订单名称，必填
            $subject ='vivo—X200';

            //付款金额，必填
            $total_amount = 3000000;

            //商品描述，可空
            $body = Null;

            //超时时间
            $timeout_express="1m";

            $payRequestBuilder = new AlipayTradeWapPayContentBuilder();
            $payRequestBuilder->setBody($body);
            $payRequestBuilder->setSubject($subject);
            $payRequestBuilder->setOutTradeNo($out_trade_no);
            $payRequestBuilder->setTotalAmount($total_amount);
            $payRequestBuilder->setTimeExpress($timeout_express);

            $payResponse = new AlipayTradeService($config);
            $result=$payResponse->wapPay($payRequestBuilder,$config['return_url'],$config['notify_url']);

            return ;
        }
}
