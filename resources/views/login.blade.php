@extends('public')
@section('title', '项目	')
@section('content')
    @csrf
    
<!--触屏版内页头部-->
<div class="m-block-header" id="div-header">
    <strong id="m-title">登录</strong>
    <a href="javascript:history.back();" class="m-back-arrow"><i class="m-public-icon"></i></a>
    <a href="/" class="m-index-icon"><i class="home-icon"></i></a>
</div>

<div class="wrapper">
    <div class="registerCon">
        <div class="binSuccess5">
            <ul>
                <li class="accAndPwd">
                    <dl>
                            <input id="txtAccount" type="text" placeholder="请输入您的手机号码/邮箱"><i></i>
                        <cite class="passport_set" style="display: none"></cite>
                    </dl>
                    <dl>
                        <input id="txtPassword" type="password" placeholder="密码"  maxlength="20" /><b></b>
                    </dl>
                    <dl>
                        <input type="text" id="txtCode" placeholder="请输入验证码" maxlength="4"><b></b>
                        <img src="{{url('/verify/create')}}" alt="" id="img">
                    </dl>
                </li>
                
            </ul>
            <a id="btnLogin" href="javascript:;" class="orangeBtn loginBtn">登录</a>
        </div>
        <div class="forget">
            <a href="https://m.1yyg.com/v44/passport/FindPassword.do">忘记密码？</a><b></b>
            <a href="{{url('register')}}">新用户注册</a>
        </div>
    </div>
    <div class="oter_operation gray9" style="display: none;">
        
        <p>登录666潮人购账号后，可在微信进行以下操作：</p>
        1、查看您的潮购记录、获得商品信息、余额等<br />
        2、随时掌握最新晒单、最新揭晓动态信息
    </div>
</div>
        
<div class="footer clearfix" style="display:none;">
    <ul>
        <li class="f_home"><a href="{{url('/')}}"><i></i>潮购</a></li>
        <li class="f_announced"><a href="{{url('allshops')}}" ><i></i>所有商品</a></li>

        <li class="f_car"><a id="btnCart" href="{{url('shopcart')}}" ><i></i>购物车</a></li>
        <li class="f_personal"><a href="{{url('userpage')}}" ><i></i>我的潮购</a></li>
    </ul>
</div>
@endsection
@section('my-js')
    <script>
    $("#img").click(function(){
    $(this).attr('src',"{{url('/verify/create')}}"+"?"+Math.random())
    })
    $('#btnLogin').click(function(){
        var user_tel=$('#txtAccount').val();
        var user_pwd=$('#txtPassword').val();

    $.post(
    "loginDo",
    {user_tel:user_tel,user_pwd:user_pwd,_token:$('input[name=_token]').val()},
    function(res){
    //console.log(res)
        if(res==1){
    layer.msg('登录成功',{icon:1});
    location.href="shopcart";
    }else{
    layer.msg('登录失败',{icon:2});
    location.href="login";
        }
    }
    )
    })
    </script>
    @endsection