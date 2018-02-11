<?php /* Smarty version Smarty-3.1.6, created on 2018-02-11 11:28:34
         compiled from "./LinkRenhe/Home/View\Wxcode\wxjamp.html" */ ?>
<?php /*%%SmartyHeaderCode:629958802033123b03-57620713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2c6097b36dd4f5b2bb993057c68a6012872bcf8a' => 
    array (
      0 => './LinkRenhe/Home/View\\Wxcode\\wxjamp.html',
      1 => 1490840114,
      2 => 'file',
    ),
    '53c59fea98c0280b6407ad51b81eb287fa9c93c7' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultBai.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629958802033123b03-57620713',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588020331da80',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588020331da80')) {function content_588020331da80($_smarty_tpl) {?><html>
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
    <body style="background-color:#fff">
        <?php if (empty($_SESSION['user']['userid'])){?><?php echo header("location:../login/index");?>
<?php }?>        
        
<div class="myjob_box">
    <div class="wxjump_logo"><img src="<?php echo @IMG_URL;?>
wxcode/logo.png"></div>
    <div class="wxjump_pic"><img src="<?php echo @IMG_URL;?>
wxcode/pic.png"></div>
    <div class="wxjump_word"><img src="<?php echo @IMG_URL;?>
wxcode/word.png"></div>
    <div class="wxjump_button">
        <div class="wxjump_return"><a href="../index/index"><img src="<?php echo @IMG_URL;?>
wxcode/return.png"></a></div>
        <div class="wxjump_sure" onclick="WeixinJSBridge.call('closeWindow');"><img src="<?php echo @IMG_URL;?>
wxcode/sure.png" onclick="WeixinJSBridge.call('closeWindow');"></div>
        <div class="clear"></div>
    </div>
</div>        

    </body>
</html>
<?php }} ?>