<?php /*%%SmartyHeaderCode:189285877405ebc1794-60078653%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48d48da4bb6a07165f67242178aca7c3e37abdcc' => 
    array (
      0 => './LinkRenhe/Home/View\\Index\\index.html',
      1 => 1484105457,
      2 => 'file',
    ),
    'bef75d9324567222d272683a8217e31ade0a08df' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\default.html',
      1 => 1483069805,
      2 => 'file',
    ),
    'd2bc4447d1935e1c6f5c15fc52aeb1059e418794' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\bottom.html',
      1 => 1483679501,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189285877405ebc1794-60078653',
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587823ad7c2ef',
  'has_nocache_code' => false,
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587823ad7c2ef')) {function content_587823ad7c2ef($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
        <meta name="keywords" content="仁和信访" />
        <meta name="description" content="仁和信访"/>
        <title>"仁和信访"</title>
        <link type="text/css" rel="stylesheet" href="/./Public/Home/css/style.css" />
        <link type="text/css" rel="stylesheet" href="/./Public/Home/css/bottom.css" />     
        <script type="text/javascript" src="/./Public/Home/js/jquery1.4.2.min.js"></script>
        <script type="text/javascript" src="/./Public/Home/js/banner.js"></script>        

        <script type="text/javascript" src="/./Public/Home/js/jquery-2.1.0.min.js"></script>
        <link rel="stylesheet" href="/./Public/Home/css/layer.css" />
        <script type="text/javascript" src="/./Public/Home/js/fastclick.js"></script>
        <script type="text/javascript" src="/./Public/Home/js/layer.js"></script>
        <!--图片上传-->
        <script type='text/javascript' src='/./Public/lib/js/upload_js/jquery-2.0.3.min.js'></script>
        <script type='text/javascript' src='/./Public/lib/js/upload_js/LocalResizeIMG.js'></script>
        <script type='text/javascript' src='/./Public/lib/js/upload_js/patch/mobileBUGFix.mini.js'></script>
        <!--时间选择-->
        <script type='text/javascript' src='/./Public/lib/js/timechoose.js'></script>
        <link rel="stylesheet" href="/./Public/Home/css/timechoose.css" />        
    </head>
    <body >        
        
<div id="page1" data-role="page">
    <div id="contt" data-role="content">        
        <div class="big-pic">
            <div class="big-pic-in">
                <div class="pic-list" >
                                        <a href="" data-ajax="false"><div><img src="" width="100%"></div></a>
                                        <a href="" data-ajax="false"><div><img src="" width="100%"></div></a>
                                        <a href="" data-ajax="false"><div><img src="" width="100%"></div></a>
                                        
                </div>
                <div class="slide-dot">
                    <span class="slide-dot-cur"></span>
                    <span ></span>
                    <span ></span>                            
                </div>
            </div>
        </div>
        
        <style>
            .big-pic .pic-list {width:300%;}
            .big-pic .pic-list img {width:33.3333333333%; height:220px}
        </style>
              
        <div class="clear"></div>
        <!--栏目-->        
        <div class="navgation">
            <ul>
                <li>                   
                    <a href="../news/index" rel="external" class="ui-link">
                        <div class="left"><img src="/./Public/Home/img/news2x.png"></div><div class="navname">最新资讯</div> 
                    </a>
                </li>
            </ul>
            <ul>                
                <li>
                                        
                    <div class="left denglu"><img src="/./Public/Home/img/zxts_2x.png"></div><div class="navname">在线投诉</div>                    
                                    </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:window.opener=null;window.open('','_self');window.close();" rel="external" class="ui-link">
                        <div class="left"><img src="/./Public/Home/img/znwd_2x.png"></div><div class="navname">智能问答</div> 
                    </a>
                </li>
            </ul>
        </div>

        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>

                
        <!--最新资讯-->
        <div class="myjob_box"> 
            <div class="tscl_box">
                <div class="tscl_img"><img src="/./Public/Home/img/zxzc_2x.png" width="32 height="32"></div>
                <div class="tscl_text">
                    <div class="tscl_title">最新资讯</div>
                    <div class="tscl_date">11-01 12：31</div>
                </div>
            </div>
            <div class="clear"></div>
                          
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
    </div>
</div>
<script>
    $(".denglu").click(function () {
        layer.open({
            btn: ['登录', '取消'],
            shadeClose: false, //默认：true，是否点击遮罩时关闭层                
            yes: function () {
                location.href = "../login/index";
            },
            content: '要想查看更多，必须先登录'
        });
    });
</script>


        <div class="bottom_box">
    <ul>
        <li>           
            <a href="../index/index" class="bottom_btn_box">
                <img src="/./Public/Home/img/nav/home_curr1.png" class="bottom_btn_img"/>             
                <span class="bottom_btn_text">首页</span>                
            </a>
        </li>
        <li>            

            <a  class="bottom_btn_box" onclick="land()">
                <img src="/./Public/Home/img/nav/home2.png" class="bottom_btn_img"/>           
                <span class="bottom_btn_text">投诉处理</span>                
            </a>            
        </li>
        <li>
            <a href="../myinfo/index" class="bottom_btn_box">
                <img src="/./Public/Home/img/nav/home3.png" class="bottom_btn_img"/> 
                <span class="bottom_btn_text">我的</span>                
            </a>           
        </li>
    </ul>
</div>

<SCRIPT type="text/javascript">
    function land() {
        var userid = "";
        if (userid == '') {
            layer.open({
                btn: ['登录', '取消'],
                content: '要想查看更多，必须先登录',
                shadeClose: true, //默认：true，是否点击遮罩时关闭层                
                yes: function () {
                    location.href = "../login/index";
                }
            });
        }
    }
</SCRIPT>        
    </body>
</html>
<?php }} ?>