@extends('public')
@section('title', '项目	')
@section('content')

<!--触屏版内页头部-->
@csrf
<div class="m-block-header" id="div-header">
    <strong id="m-title">注册</strong>
    <a href="javascript:history.back();" class="m-back-arrow"><i class="m-public-icon"></i></a>
    <a href="/" class="m-index-icon"><i class="m-public-icon"></i></a>
</div>
    <div class="wrapper">
        <input name="hidForward" type="hidden" id="hidForward" />
        <div class="registerCon">
            <ul>
                <li class="accAndPwd">
                    <dl>
                        <s class="phone"></s>
                        <input id="userMobile" maxlength="11" type="text" placeholder="请输入您的手机号码"  />
                        {{--<span class="clear">x</span>--}}
                    </dl>
                </li>
                <li>
                    <dl>
                        <input  type="text" id="code" placeholder="请输入您的验证码"  />
                        <a href="javascript:void(0);" style="float:right;" class="sendcode" id="btna">获取验证码</a>
                    </dl>
                </li>
                <li class="accAndPwd">
                    <dl>
                        {{--<s class="password"></s>--}}
                        <input class="pwd" id="pwd" maxlength="11" type="text" placeholder="6-16位数字、字母组成"/>
                        <span class="mr clear">x</span>
                        {{--<s class="eyeclose"></s>--}}
                    </dl>
                </li>
                <li class="accAndPwd">

                    <dl>
                        {{--<s class="password"></s>--}}
                        <input class="conpwd" id="conpwd" maxlength="11" type="text" placeholder="请确认密码" />
                        <span class="mrclear">x</span>
                        {{--<s class="eyeclose"></s>--}}
                    </dl>
                </li>
                <li class="accAndPwd">
                <dl class="a-set">
                        <i class="gou"></i><p>我已阅读并同意《666潮人购购物协议》</p>
                    </dl>

                </li>
                <li><a id="btnNext" href="javascript:;" class="orangeBtn loginBtn">下一步</a></li>
            </ul>
        </div>

        

<div class="footer clearfix" style="display:none;">
    <ul>
        <li class="f_home"><a href="/v44/index.do" ><i></i>云购</a></li>
        <li class="f_announced"><a href="/v44/lottery/" ><i></i>最新揭晓</a></li>
        <li class="f_single"><a href="/v44/post/index.do" ><i></i>晒单</a></li>
        <li class="f_car"><a id="btnCart" href="/v44/mycart/index.do" ><i></i>购物车</a></li>
        <li class="f_personal"><a href="/v44/member/index.do" ><i></i>我的云购</a></li>
    </ul>
</div>
<div class="layui-layer-move"></div>
@endsection
@section('my-js')

                    <script>
                        $(function(){$('#btna').click(function(){
                            var u_name = $('#userMobile').val();
                        $.post(
                            "{{url('sendcode')}}",
                            {u_name:u_name,_token:$('input[name=_token]').val()},
                            function(res){
                                console.log(res)
                            }
                        )
                    })


    $('.registerCon input').bind('keydown',function(){
        var that = $(this);
        if(that.val().trim()!=""){

            that.siblings('span.clear').show();
            that.siblings('span.clear').click(function(){
                console.log($(this));

                that.parents('dl').find('input:visible').val("");
                $(this).hide();
            })

        }else{
           that.siblings('span.clear').hide();
        }

    })
    function show(){
        if($('.registerCon input').attr('type')=='password'){
            $(this).prev().prev().val($("#passwd").val());
        }
    }
    function hide(){
        if($('.registerCon input').attr('type')=='text'){
            $(this).prev().prev().val($("#passwd").val());
        }
    }
    $('.registerCon s').bind({click:function(){
        if($(this).hasClass('eye')){
            $(this).removeClass('eye').addClass('eyeclose');

            $(this).prev().prev().prev().val($(this).prev().prev().val());
            $(this).prev().prev().prev().show();
            $(this).prev().prev().hide();


        }else{
                console.log($(this  ));
                $(this).removeClass('eyeclose').addClass('eye');
                $(this).prev().prev().val($(this).prev().prev().prev().val());
                $(this).prev().prev().show();
                $(this).prev().prev().prev().hide();

             }
         }
     })

    function registertel(){
        // 手机号失去焦点
        $('#userMobile').blur(function(){
            reg=/^1(3[0-9]|4[57]|5[0-35-9]|8[0-9]|7[06-8])\d{8}$/;//验证手机正则(输入前7位至11位)
            var that = $(this);

            if( that.val()==""|| that.val()=="请输入您的手机号")
            {
                layer.msg('请输入您的手机号！');
            }
            else if(that.val().length<11)
            {
                layer.msg('您输入的手机号长度有误！');
            }
            else if(!reg.test($("#userMobile").val()))
            {
                layer.msg('您输入的手机号不存在!');
            }
            else if(that.val().length == 11){
                // ajax请求后台数据
            }
        })
        // 密码失去焦点
        $('.pwd').blur(function(){
            reg=/^[0-9a-zA-Z]{6,16}$/;
            var that = $(this);
            if( that.val()==""|| that.val()=="6-16位数字或字母组成")
            {
                layer.msg('请设置您的密码！');
            }else if(!reg.test($(".pwd").val())){
                layer.msg('请输入6-16位数字或字母组成的密码!');
            }
        })

        // 重复输入密码失去焦点时
        $('.conpwd').blur(function(){
            var that = $(this);
            var pwd1 = $('.pwd').val();
            var pwd2 = that.val();
            if(pwd1!=pwd2){
                layer.msg('您俩次输入的密码不一致哦！');
            }
        })

    }
        registertel();
    // 购物协议
    $('dl.a-set i').click(function(){
    	var that= $(this);
    	if(that.hasClass('gou')){
    		that.removeClass('gou').addClass('none');
    		$('#btnNext').css('background','#ddd');

    	}else{
    		that.removeClass('none').addClass('gou');
    		$('#btnNext').css('background','#f22f2f');
    	}

    })
    // 下一步提交

    $('#btnNext').click(function(){
            var tel=$('#userMobile').val();
            var pwd=$('#pwd').val();
            var pwd1=$('#conpwd').val();
    	if(tel==''){
    		layer.msg('请输入您的手机号！');
    	}else if(pwd==''){
    		layer.msg('请输入您的密码!');
    	}else if(pwd1==''){
    		layer.msg('请您再次输入密码！');
    	}else{
    	    var code=$('#code').val();
    	    // console.log();
            $.ajax({
                url:"{{url('registerDo')}}",
                type:'post',
                data:{'user_tel':tel,'code':code,'user_pwd':pwd,'_token': $('input[name=_token]').val()},
                success: function(data){
                    if(data==1){
                        layer.msg('注册成功',{icon:1});
                        location.href="shopcart";
                    }else{
                        layer.msg('注册失败',{icon:2});
                        
                    }
                }
            })
            // $.post(
            //     "registerDo",
            //     {user_tel:tel,user_pwd:pwd,_token:$('input[name=_token]').val()},
            //     function(res){
            //
            //         if(res==1){
            //         layer.msg('添加成功',{icon:1});
            //         location.href="shopcart";
            //         }else{
            //         layer.msg('添加失败',{icon:2});
            //         location.href="register";
            //          }
            //     }
            // )
            }
    })
})
            </script>
@endsection