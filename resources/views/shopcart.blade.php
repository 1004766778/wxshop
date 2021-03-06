@extends('public')
@section('title', '购物车')
@section('content')
    @csrf
<body id="loadingPicBlock" class="g-acc-bg">
    <input name="hidUserID" type="hidden" id="hidUserID" value="-1" />
    <div>
        <!--首页头部-->
        <div class="m-block-header">
            <a href="/" class="m-public-icon m-1yyg-icon"></a>
            <a href="/" class="m-index-icon">编辑</a>
        </div>
        <!--首页头部 end-->
        <div class="g-Cart-list">
            <ul id="cartBody">
                @foreach($arr as $v)
                <li cart_id="{{$v->cart_id}}" goods_id="{{$v->goods_id}}">
                    <s class="xuan current"></s>
                    <a class="fl u-Cart-img" href="/v44/product/12501977.do">
                        <img src="/goodsimg/{{$v->goods_img}}" border="0" alt="">
                    </a>
                    <div class="u-Cart-r">
                        <a href="/v44/product/12501977.do" class="gray6">{{$v->goods_name}}</a>
                        <span class="gray9">
                            <em>价格：￥<a  class="self_price" self_price="{{$v->self_price}}">{{$v->self_price}}</a></em>
                        </span>
                        <div class="num-opt">
                            <em class="num-mius dis min"><i></i></em>
                            <input class="text_box" name="num" maxlength="6" type="text" value="{{$v->buy_number}}"  codeid="12501977">
                            <em class="num-add add"><i></i></em>
                        </div>
                        <a href="javascript:;" name="delLink" cid="12501977" isover="0"cart_id="{{$v->cart_id}}" class="z-del delete"><s ></s></a>
                    </div>    
                </li>
                @endforeach
               
            </ul>
            <div id="divNone" class="empty "  style="display: none"><s></s><p>您的购物车还是空的哦~</p><a href="https://m.1yyg.com" class="orangeBtn">立即潮购</a></div>
        </div>
        <div id="mycartpay" class="g-Total-bt g-car-new" style="">
            <dl>
                <dt class="gray6">
                    <s class="quanxuan current"></s>全选
                    <p class="money-total">合计<em class="orange total"><span>￥</span>17.00</em></p>
                    
                </dt>
                <dd>

                    <a href="javascript:;" id="a_payment" class="orangeBtn w_account remove alldel">删除</a>
                    <a href="javascript:;" id="payment" class="orangeBtn w_account">去结算</a>
                </dd>
            </dl>
        </div>
        <div class="hot-recom">
            <div class="title thin-bor-top gray6">
                <span><b class="z-set"></b>人气推荐</span>
                <em></em>
            </div>
            <div class="goods-wrap thin-bor-top">
                <ul class="goods-list clearfix">
                    <li>
                        <a href="https://m.1yyg.com/v44/products/23458.do" class="g-pic">
                            <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                        </a>
                        <p class="g-name">
                            <a href="https://m.1yyg.com/v44/products/23458.do">(第<i>368671</i>潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                        </p>
                        <ins class="gray9">价值:￥7130</ins>
                        <div class="btn-wrap">
                            <div class="Progress-bar">
                                <p class="u-progress">
                                    <span class="pgbar" style="width:1%;">
                                        <span class="pging"></span>
                                    </span>
                                </p>
                            </div>
                            <div class="gRate" data-productid="23458">
                                <a href="javascript:;"><s></s></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="" class="g-pic">
                            <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                        </a>
                        <p class="g-name">
                            <a href="https://m.1yyg.com/v44/products/23458.do">(第368671潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                        </p>
                        <ins class="gray9">价值:￥7130</ins>
                        <div class="btn-wrap">
                            <div class="Progress-bar">
                                <p class="u-progress">
                                    <span class="pgbar" style="width:45%;">
                                        <span class="pging"></span>
                                    </span>
                                </p>
                            </div>
                            <div class="gRate" data-productid="23458">
                                <a href="javascript:;"><s></s></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="https://m.1yyg.com/v44/products/23458.do" class="g-pic">
                            <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                        </a>
                        <p class="g-name">
                            <a href="https://m.1yyg.com/v44/products/23458.do">(第<i>368671</i>潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                        </p>
                        <ins class="gray9">价值:￥7130</ins>
                        <div class="btn-wrap">
                            <div class="Progress-bar">
                                <p class="u-progress">
                                    <span class="pgbar" style="width:1%;">
                                        <span class="pging"></span>
                                    </span>
                                </p>
                            </div>
                            <div class="gRate" data-productid="23458">
                                <a href="javascript:;"><s></s></a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="https://m.1yyg.com/v44/products/23458.do" class="g-pic">
                            <img src="https://img.1yyg.net/goodspic/pic-200-200/20160908092215288.jpg" width="136" height="136">
                        </a>
                        <p class="g-name">
                            <a href="https://m.1yyg.com/v44/products/23458.do">(第368671潮)苹果（Apple）iPhone 7 Plus 128G版 4G手机</a>
                        </p>
                        <ins class="gray9">价值:￥7130</ins>
                        <div class="btn-wrap">
                            <div class="Progress-bar">
                                <p class="u-progress">
                                    <span class="pgbar" style="width:1%;">
                                        <span class="pging"></span>
                                    </span>
                                </p>
                            </div>
                            <div class="gRate" data-productid="23458">
                                <a href="javascript:;"><s></s></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

       
        

<div class="footer clearfix">
    <ul>
        <li class="f_home"><a href="{{url('/')}}"><i></i>潮购</a></li>
        <li class="f_announced"><a href="{{url('allshops')}}" ><i></i>晒单</a></li>
        <li class="f_car"><a id="btnCart" href="{{url('shopcart')}}"  class="hover"><i></i>购物车</a></li>
        <li class="f_personal"><a href="{{url('userpage')}}" ><i></i>我的潮购</a></li>
    </ul>
</div>
@endsection
@section('my-js')

    <script type="text/javascript">
    $(function () {
        //劈山
        $('.alldel').click(function(){
            var _li=$("s[class='xuan current']").parent('li');
            var goods_id='';
            _li.each(function (index) {
                goods_id+=$(this).attr('cart_id')+',';
            })
            $.post(
                "shopcartDels",
                {cart_id:goods_id,_token:$('input[name=_token]').val()},
                function(res){
                    if(res==1){
                        layer.msg('删除成功',{icon:1});
                        history.go(0);
                        //location.href="shopcart";
                    }else {
                        layer.msg('删除失败',{icon:2});
                        //location.href="";
                    }
                }
            )
        })
        //删除
        $(".delete").click(function(){
            var _this=$(this);
            var cart_id=_this.attr('cart_id');
            $.post(
                "shopcartDel",
                {cart_id:cart_id,_token:$('input[name=_token]').val()},
                function(res){
                    if(res==1){
                        layer.msg('删除成功',{icon:1});
                        history.go(0);
                        //location.href="shopcart";
                    }else {
                        layer.msg('删除失败',{icon:2});
                        //location.href="";
                    }
                }
            )
        })
        $(".add").click(function () {
            var t = $(this).prev();
            t.val(parseInt(t.val()) + 1);
            GetCount();
        })
        $(".min").click(function () {
            var t = $(this).next();
            if(t.val()>1){
                t.val(parseInt(t.val()) - 1);
                GetCount();
            }
        })
    })


    // 全选        
    $(".quanxuan").click(function () {
        if($(this).hasClass('current')){

            $(this).removeClass('current');

             $(".g-Cart-list .xuan").each(function () {
                if ($(this).hasClass("current")) {
                    $(this).removeClass("current"); 
                } else {
                    $(this).addClass("current");
                } 
            });
            GetCount();
        }else{
            $(this).addClass('current');

             $(".g-Cart-list .xuan").each(function () {
                $(this).addClass("current");
                // $(this).next().css({ "background-color": "#3366cc", "color": "#ffffff" });
            });
            GetCount();
        }
        
        
    });
    //点击去结算
    $("#payment").click(function(){
        var goods_id='';
        $(".g-Cart-list .xuan").each(function(){
//                console.log($(this));
            if($(this).attr('class')=='xuan current'){
                for(var i=0;i<$(this).length;i++){
                    goods_id+=$(this).parent('li').attr('goods_id')+',';
                }
            }
        })

        goods_id=goods_id.substr(0,goods_id.length-1);
           console.log(goods_id);
        $.post(
            'paymentdo',
            {goods_id:goods_id,_token:$("[name='_token']").val()},
            function(res){
                location.href="payment"
            }
        )
    })

    // 单选
    $(".g-Cart-list .xuan").click(function () {
        if($(this).hasClass('current')){
            

            $(this).removeClass('current');

        }else{
            $(this).addClass('current');
        }
        if($('.g-Cart-list .xuan.current').length==$('#cartBody li').length){
                $('.quanxuan').addClass('current');

            }else{
                $('.quanxuan').removeClass('current');
            }
        // $("#total2").html() = GetCount($(this));
        GetCount();
        //alert(conts);
    });
  // 已选中的总额
    function GetCount() {
        var conts = 0;
        var aa = 0;
        $(".xuan").each(function () {
            if($(this).attr('class')=='xuan current'){
                var self_price=$(this).siblings("div[class='u-Cart-r']").find("a[class='self_price']").attr('self_price');
                var buy_number=$(this).siblings("div[class='u-Cart-r']").find("input[class='text_box']").val()
                conts+=parseInt(self_price)*parseInt(buy_number);
            }
        });

        $(".total").html('<span>￥</span>'+(conts).toFixed(2));
    }
    GetCount();
</script>
@endsection
