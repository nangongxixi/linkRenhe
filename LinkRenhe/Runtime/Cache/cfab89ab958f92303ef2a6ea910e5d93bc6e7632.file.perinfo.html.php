<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 11:13:56
         compiled from "./LinkRenhe/Home/View\Myinfo\perinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:14137587da07059bcb6-94725205%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfab89ab958f92303ef2a6ea910e5d93bc6e7632' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\perinfo.html',
      1 => 1490840109,
      2 => 'file',
    ),
    '08d8e2490653c736451d13f779c2958d7a7fa5a6' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14137587da07059bcb6-94725205',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587da0706cc7b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587da0706cc7b')) {function content_587da0706cc7b($_smarty_tpl) {?><html>
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
            <div class="return_img"><a href="../myinfo/index"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">个人信息</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box myinfo_padd">
        <a href="../myinfo/modifyhead">
            <div class="psdthumb kuan">
                <div class="psdthumb_title left">头像</div>
                <li><div class="qq right"><img src="<?php if ($_SESSION['user']['headurl']=='null'){?><?php echo @IMG_URL;?>
defauhead.png<?php }else{ ?>http://221.10.2.222:5680/api/v1/Files?filename=<?php echo $_SESSION['user']['headurl'];?>
<?php }?>" width="86" height="70"></div></li>
                <li style="width:22px;overflow:hidden;"><div class="qq right"><img src="<?php echo @IMG_URL;?>
jt.png"></div></li>
            </div>
        </a>
        <div class="clear"></div>
            <div class="only_line"></div> 
            <div class="clear"></div>
        <a href="#">
            <div class="myinfo_lanm kuan">                
                <div class="myinfo_lanm_title left">姓名</div> 
                <div class="myinfo_jiant right">&nbsp;</div>
                <div class="myinfo_lanm_title right myinfo_lanm_name"><?php echo $_SESSION['user']['consumersname'];?>
</div>     
            </div> 
        </a>
        <div class="clear"></div>
            <div class="only_line"></div>        
            <div class="clear"></div>
        <a href="../myinfo/phone">
            <div class="myinfo_lanm_tel">
                <div class="bottom_border kuan">                
                    <div class="myinfo_lanm_title left">手机号码</div>               
                    <div class="myinfo_jiant right"><img src="<?php echo @IMG_URL;?>
jt.png"></div>
                    <div class="myinfo_tel_color right"><?php echo $_SESSION['user']['phone'];?>
</div>
                </div>
            </div> 
        </a>
        <div class="clear"></div>
            <div class="only_line"></div> 
            <div class="clear"></div>
        <a href="#">
            <div class="myinfo_lanm kuan">                
                <div class="myinfo_lanm_title left">身份证号</div>
                <div class="myinfo_jiant right">&nbsp;</div>
                <div class="myinfo_lanm_title right myinfo_lanm_name"><?php echo $_SESSION['user']['idcard'];?>
</div>     
            </div> 
        </a>
        <div class="clear"></div>
            <div class="only_line"></div>       
            <div class="clear"></div>
        <a href="../myinfo/address">
            <div class="myinfo_lanm_tel">
                <div class="bottom_border kuan">                
                    <div class="myinfo_lanm_title left">地址</div>               
                    <div class="myinfo_jiant right"><img src="<?php echo @IMG_URL;?>
jt.png"></div>
                    <div class="myinfo_tel_color right"><?php echo $_SESSION['user']['address'];?>
</div>
                </div>
            </div>
        </a>
       </div>
       <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
    </div>
</div>


    </body>
</html>
<?php }} ?>