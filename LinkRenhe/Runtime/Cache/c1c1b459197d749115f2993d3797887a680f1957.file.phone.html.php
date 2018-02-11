<?php /* Smarty version Smarty-3.1.6, created on 2017-01-20 22:15:39
         compiled from "./LinkRenhe/Home/View\Myinfo\phone.html" */ ?>
<?php /*%%SmartyHeaderCode:11792587da07b9630f2-64955460%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1c1b459197d749115f2993d3797887a680f1957' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\phone.html',
      1 => 1484921716,
      2 => 'file',
    ),
    'e688c14c08d64f53c4ce800e86995ea5d945a210' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1484704308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11792587da07b9630f2-64955460',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587da07ba93bf',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587da07ba93bf')) {function content_587da07ba93bf($_smarty_tpl) {?>
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
            <div class="details_title middle_center bgcolor">修改手机号码</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box myinfo_padd">
            <div class="myinfo_lanm">
                <!--
                <div class="phone_del right">
                    <img src="<?php echo @IMG_URL;?>
by.png">
                    <img src="<?php echo @IMG_URL;?>
zy.png" style="display:none">
                </div>
                -->
                <div class="phone_title left">登录密码</div>           
                <div class="phone_box left">                
                    <input type="password" value="" placeholder="请输入8-12位密码" id="dlpwd" class="phone_input del0" style="padding-left:5%"/>                    
                </div> 
                <div class="yanz0" style="display: none" id="del0"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
            </div>            
        </div>
        <div class="clear"></div>        
        <div class="phone_next_box ">
            <div class="tousReview_submit" id="submit">下一步</div>                
        </div> 
    </div>
</div>

<script>
    
    //删除输入
    $(".yanz0").click(function () {
        $(".del0").val('');
    });
    $("#dlpwd").keyup(function () {
        var dlpwd = $("#dlpwd").val();
        if (dlpwd != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#del0").click(function () {
        var dlpwd = $("#dlpwd").val();
        if (dlpwd != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });

    
    
    $("#submit").click(function () {
        var dlpwd = $("#dlpwd").val();
        //非空验证 
        if (dlpwd == '') {
            layer.open({
                content: '请输入密码',
                time: 1,
                shadeClose: true
            });
            return false;
        }
        $.ajax({
            type: "GET",
            url: "../myinfo/dlpwdAction/pwd/" + dlpwd,
            success: function (msg) {
                //alert(msg);
                if (0 == msg) {
                    location.href = "../myinfo/modifyPhone";
                } else {
                    layer.open({
                        content: '密码错误',
                        time: 1,
                        shadeClose: true
                    });
                }
            }
        });
    });
    $(".phone_deldddddddddddddddddddddd").click(function () {
        $(".phone_del>img").toggle();
        var leix = $("#dlpwd").attr("type");
        if (leix == "password") {
            $("#dlpwd").attr("type", "text");
        } else {
            $("#dlpwd").attr("type", "password");
        }
    });
</script>



    </body>
</html>
<?php }} ?>