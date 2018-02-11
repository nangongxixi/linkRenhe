<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 16:47:28
         compiled from "./LinkRenhe/Home/View\Online\index.html" */ ?>
<?php /*%%SmartyHeaderCode:3100587d772047c7e5-22855309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b215912f43202e70460ee01739cb35ca54cfd4ea' => 
    array (
      0 => './LinkRenhe/Home/View\\Online\\index.html',
      1 => 1490840113,
      2 => 'file',
    ),
    '08d8e2490653c736451d13f779c2958d7a7fa5a6' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3100587d772047c7e5-22855309',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d77205703e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d77205703e')) {function content_587d77205703e($_smarty_tpl) {?><html>
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
        <?php if (empty($_SESSION['user']['userid'])){?><?php echo header("location:../login/index");?>
<?php }?>        
        
<div id="page1" data-role="page">
    <div id="contt" data-role="content" class="contt_padd"> 
        <div class="top_lanm">
            <div class="return_img">
                <?php if (!empty(@user)){?>
                <a href="../index/index"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a>                    
                <?php }else{ ?>
                <a href="../index/index"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a>
                <?php }?>
            </div>
            <div class="details_title middle_center bgcolor">投诉须知</div>           
        </div>       
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box news_lanm_content_title" style="color:#666"> </div>
        <div class="clear"></div>
        <a href="../online/onlineAgainst">
            <div class="phone_next_box ">
                <div class="tousReview_submit">下一步</div>                
            </div>
        </a>
    </div>
</div>

<script type="text/javascript">   
    $.ajax({
        type: "GET",
        url: "../Online/OnlineInfoAction",
        success: function (msg) {
            var msg = msg.replace(/\\r\\n/gm,"<br>");
            $(".myjob_box").html(msg);
        }
    });
</script>


    </body>
</html>
<?php }} ?>