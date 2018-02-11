<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 10:48:51
         compiled from "./LinkRenhe/Home/View\Myinfo\forgetPwdSur.html" */ ?>
<?php /*%%SmartyHeaderCode:1704588200c01473b9-62031953%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7afec0d5ebb39b8717f9b78e748f0f5fabe60f1b' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\forgetPwdSur.html',
      1 => 1490842120,
      2 => 'file',
    ),
    '41f95adb5947cca4cb069155c1c658a77c2a148b' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultJamp.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1704588200c01473b9-62031953',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_588200c0277eb',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588200c0277eb')) {function content_588200c0277eb($_smarty_tpl) {?>
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
        <div class="top_lanm bgcolor">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">修改密码</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box myinfo_padd">
            <div class="myinfo_lanm">                
                <div class="phone_title left wangjpwd_distance">新&nbsp;密&nbsp;码&nbsp;</div>
                <div class="phone_modify_box left"><input type="password" value="" placeholder="请填8-12位密码" id="newpwd" maxlength="12" class="phone_input del0"/>
                </div>
                <div class="yanz0" style="display: none" id="del0"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput delinput_padd"></div>
            </div>
            <div class="clear"></div>
            <div class="only_line"></div>        
            <div class="clear"></div>  
            <div class="myinfo_lanm">                
                <div class="phone_title left wangjpwd_distance">确认密码</div>           
                <div class="phone_modify_box left"><input type="password" value="" placeholder="请再次填写密码" id="surepwd" maxlength="12" class="phone_input del1"/>
                </div> 
                <div class="yanz1" style="display: none" id="del1"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput delinput_padd"></div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
        <div class="clear"></div>        
        <div class="phone_next_box ">
            <div class="tousReview_submit middle_center" id="submit">提交</div>                
        </div>
    </div>
</div>
<script>
    
    //删除输入
    $(".yanz0").click(function () {
        $(".del0").val('');
    });
    $(".yanz1").click(function () {
        $(".del1").val('');
    });


    $("#newpwd").keyup(function () {
        var newpwd = $.trim($("#newpwd").val());
        if (newpwd != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#surepwd").keyup(function () {
        var surepwd = $.trim($("#surepwd").val());
        if (surepwd != '') {
            $("#del1").css("display", "block");
        } else {
            $("#del1").css("display", "none");
        }
    });


    $("#del0").click(function () {
        var newpwd = $.trim($("#newpwd").val());
        if (newpwd != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#del1").click(function () {
        var surepwd = $.trim($("#surepwd").val());
        if (surepwd != '') {
            $("#del1").css("display", "block");
        } else {
            $("#del1").css("display", "none");
        }
    });

    
    
    $("#submit").click(function () {
        var newpwd = $.trim($("#newpwd").val());
        var surepwd = $.trim($("#surepwd").val());        
        //非空验证
        if (newpwd.length <= 8) {
            layer.open({
                content: '不能为空且必须8位以上',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (newpwd == '') {
            layer.open({
                content: '请输入新密码',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (surepwd == '') {
            layer.open({
                content: '请再次输入新密码',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (newpwd != surepwd) {
            layer.open({
                content: '新密码前后输入不一致',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        $.ajax({
            type: "GET",
            url: "../myinfo/forgetPwdAction/surepwd/"+surepwd,           
            success: function (msg) {
                alert(msg);
                if ('0' == msg) {
                    layer.open({
                        content: '修改成功',
                        time: 2,
                        shadeClose: true,
                        success:function(){
                          location.href = "../login/index";  
                        }
                    });
                }                
            }
        });
        
       
        
    });
    $(".phone_del").click(function () {
        $(".del").val('');
    });
</script>


    </body>
</html>
<?php }} ?>