<?php /* Smarty version Smarty-3.1.6, created on 2017-03-01 14:21:22
         compiled from "./LinkRenhe/Home/View\Login\agreement.html" */ ?>
<?php /*%%SmartyHeaderCode:23025587da016c168e7-28233638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e60742ffc1a805eb1a491935b12815eede0169a' => 
    array (
      0 => './LinkRenhe/Home/View\\Login\\agreement.html',
      1 => 1487897776,
      2 => 'file',
    ),
    '41f95adb5947cca4cb069155c1c658a77c2a148b' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultJamp.html',
      1 => 1487897774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23025587da016c168e7-28233638',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587da016ccd5e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587da016ccd5e')) {function content_587da016ccd5e($_smarty_tpl) {?>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
        <meta name="keywords" content="仁和信访" />
        <meta name="description" content="仁和信访"/>
        <title>"仁和信访"</title>
        <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
bottom.css" />     
        <script type="text/javascript" src="<?php echo @JS_URL;?>
jquery1.4.2.min.js"></script>
        <script type="text/javascript" src="<?php echo @JS_URL;?>
banner.js"></script>       

        <script type="text/javascript" src="<?php echo @JS_URL;?>
jquery-2.1.0.min.js"></script>
        <link rel="stylesheet" href="<?php echo @CSS_URL;?>
layer.css" />
        <script type="text/javascript" src="<?php echo @JS_URL;?>
fastclick.js"></script>
        <script type="text/javascript" src="<?php echo @JS_URL;?>
layer.js"></script>
        <!--图片上传-->
        <script type='text/javascript' src='<?php echo @LIB_URL;?>
js/upload_js/jquery-2.0.3.min.js'></script>
        <script type='text/javascript' src='<?php echo @LIB_URL;?>
js/upload_js/LocalResizeIMG.js'></script>
        <script type='text/javascript' src='<?php echo @LIB_URL;?>
js/upload_js/patch/mobileBUGFix.mini.js'></script>
        <!--时间选择-->
        <script type='text/javascript' src='<?php echo @LIB_URL;?>
js/timechoose.js'></script>
        <link rel="stylesheet" href="<?php echo @CSS_URL;?>
timechoose.css" />       
        
    </head>
    <body >
        
<div id="page1" data-role="page">
    <div id="contt" data-role="content" class="contt_padd"> 
        <div class="top_lanm">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center">注册协议</div>           
        </div>       
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box news_lanm_content_title" style="color:#666"> </div>
        <a href="javascript:history.go(-1);">
            <div class="phone_next_box ">
                <div class="tousReview_submit middle_center"/>阅读并接受</div>                              
            </div>
        </a>
    </div>
</div>
<script type="text/javascript">   
    $.ajax({
        type: "GET",
        url: "../Login/registInfoAction",
        success: function (msg) {
            var msg = msg.replace(/\\r\\n/gm,"<br>");
            $(".myjob_box").html(msg);
        }
    });
</script>

    </body>
</html>
<?php }} ?>