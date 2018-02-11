<?php /* Smarty version Smarty-3.1.6, created on 2017-01-22 10:43:03
         compiled from "./LinkRenhe/Home/View\Complaints\chuliyijian.html" */ ?>
<?php /*%%SmartyHeaderCode:1508258841c37d73811-52530417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb6ec5363aace33cdcd0154f98cfecaaf03af639' => 
    array (
      0 => './LinkRenhe/Home/View\\Complaints\\chuliyijian.html',
      1 => 1484704303,
      2 => 'file',
    ),
    'e688c14c08d64f53c4ce800e86995ea5d945a210' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1484704308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1508258841c37d73811-52530417',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58841c37e6741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58841c37e6741')) {function content_58841c37e6741($_smarty_tpl) {?>
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
        <?php if (empty($_SESSION['user']['userid'])){?><?php echo header("location:../login/index");?>
<?php }?>        
        
<div id="page1" data-role="page">
    <div id="contt" data-role="content" class="contt_padd"> 
        <div class="top_lanm">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">处理详情</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box">
            <div class="tscl_content_box" >                       
                <div class="details_content_text" >                
                    <!--
                    <ul>
                        <li class="opinions_title  middle_center">关于XX区城管滥用职权的处理意见</li>                   
                    </ul>                    
                    <div class="clear"></div>
                    -->
                    <ul>                   
                        <li class=" opinions_sj" id="content"></li>
                    </ul>
                    <div class="clear"></div>
                </div>           
            </div>            
        </div> 
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
    </div>      
</div>

<script>
    var id="<?php echo $_GET['id'];?>
";
    $.ajax({
        type: "GET",
        url: "../../../Complaints/ComplaintsopinionAction/id/"+id,
        success: function (msg) {
            var data = JSON.parse(msg);
            if(data.remark == ''){
                $("#content").html("暂无投诉信息");
            }else{
                $("#content").html(data.remark);
            }            
        }
    });

</script>

    </body>
</html>
<?php }} ?>