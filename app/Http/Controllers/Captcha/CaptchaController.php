<?php

namespace App\Http\Controllers\Captcha;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tools\Captcha;

class CaptchaController extends Controller
{
    //
    public function create()
    {
        $verify = new Captcha();
        $code = $verify->getCode();
        //var_dump($code);
        session(['verifycode'=>$code]);
        return $verify->doimg();


    }
}
