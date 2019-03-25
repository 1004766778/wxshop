<!DOCTYPE html>
<html>
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>地址管理</title>
    <meta content="app-id=984819816" name="apple-itunes-app" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no, maximum-scale=1.0" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <link href="css/comm.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{url('css/address.css')}}">
    <link rel="stylesheet" href="{{url('css/sm.css')}}">
</head>
<body>
  @csrf
<!--触屏版内页头部-->
<div class="m-block-header" id="div-header">
    <strong id="m-title">地址管理</strong>
    <a href="javascript:history.back();" class="m-back-arrow"><i class="m-public-icon"></i></a>
    <a href="addressAdd" class="m-index-icon">添加</a>
</div>
<div class="addr-wrapp">
    @foreach($arr as $v)
    <div class="addr-list">
         <ul>
            <li class="clearfix" >
                <span class="fl">{{$v->address_name}}</span>
                <span class="fr">手机号：{{$v->address_tel}}</span>
            </li>
            <li>
                <p>嘻嘻嘻嘻嘻嘻嘻嘻</p>
            </li>
            <li class="a-set">
                @if($v->is_default==2)
                <s class="z-defalt" style="margin-top: 6px;"></s>
                @else
                    <s class="z-set" style="margin-top: 6px;"></s>
                @endif
                <span>设为默认</span>
                <div class="fr">
                    <span class="edit"><a href="{{url('addressUpd')}}/{{$v->address_id}}">编辑</a></span>
                    <span class="remove" address_id="{{$v->address_id}}">删除</span>
                </div>
            </li>
        </ul>  
    </div>
    @endforeach

   
</div>


<script src="{{url('js/zepto.js')}}" charset="utf-8"></script>
<script src="{{url('js/sm.js')}}"></script>
<script src="{{url('js/sm-extend.js')}}"></script>
  <script src="{{url('layui/layui.js')}}"></script>
<!-- 单选 -->
<script>
    
$(function(){

    layui.use('layer',function(){
        // $('.edit').click(function () {
        //     var address_id=$('.remove').attr('address_id');
        //     $.post(
        //         "addressUpd",
        //         {address_id:address_id,_token:$('input[name=_token]').val()},
        //         function(res){
        //             console.log(res);
        //
        //         }
        //     )
        // })
    var layer=layui.layer;
     // 删除地址
    $(document).on('click','span.remove', function () {
        var address_id=$(this).attr('address_id');
        var buttons1 = [
            {
              text: '删除',
              bold: true,
              color: 'danger',
              onClick: function() {


                  $.post(
                      "addressDel",
                      {address_id:address_id,_token:$('input[name=_token]').val()},
                      function(res){
                          if(res==1){
                              layer.msg('删除成功',{icon:1});
                              history.go(0);
                          }else{
                              layer.msg('删除失败',{icon:2});
                              history.go(0);
                          }

                      }
                  )

              }
            }
          ];
          var buttons2 = [
            {
              text: '取消',
              bg: 'danger'
            }
          ];
          var groups = [buttons1, buttons2];
          $.actions(groups);
    });
})
})
</script>
<script src="{{url('js/jquery-1.8.3.min.js')}}"></script>
<script>
    var $$=jQuery.noConflict();
    $$(document).ready(function(){
            // jquery相关代码
            $$('.addr-list .a-set s').toggle(
            function(){
                if($$(this).hasClass('z-set')){
                    
                }else{
                    $$(this).removeClass('z-defalt').addClass('z-set');
                    $$(this).parents('.addr-list').siblings('.addr-list').find('s').removeClass('z-set').addClass('z-defalt');
                }   
            },
            function(){
                if($$(this).hasClass('z-defalt')){
                    $$(this).removeClass('z-defalt').addClass('z-set');
                    $$(this).parents('.addr-list').siblings('.addr-list').find('s').removeClass('z-set').addClass('z-defalt');
                }
                
            }
        )

    });
    
</script>



</body>
</html>
