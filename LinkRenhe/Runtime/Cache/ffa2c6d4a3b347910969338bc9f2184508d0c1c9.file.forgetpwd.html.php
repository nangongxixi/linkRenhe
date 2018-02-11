<?php /* Smarty version Smarty-3.1.6, created on 2017-01-20 20:24:15
         compiled from "./LinkRenhe/Home/View\Myinfo\forgetpwd.html" */ ?>
<?php /*%%SmartyHeaderCode:7830587d776439a656-44822615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ffa2c6d4a3b347910969338bc9f2184508d0c1c9' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\forgetpwd.html',
      1 => 1484915051,
      2 => 'file',
    ),
    '0fbdcb5562e1f89fecd7b339a718d049ec0bc819' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\LinkRenhe\\Home\\View\\Common\\defaultJamp.html',
      1 => 1484704308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7830587d776439a656-44822615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d776450805',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d776450805')) {function content_587d776450805($_smarty_tpl) {?>
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
            <div class="myinfo_lanm login_kong">                
                <div class="phone_title left">手机号&nbsp;&nbsp;&nbsp;&nbsp;</div>
                <div class="phone_modify_checkbox right">
                    <div style="display:inline"  id="getverify">
                        <div class="phone_modify_check" id="cxhq">获取验证码</div>                                                
                    </div>
                    <div style="diplay:none" id="yanze">
                        <div class="phone_modify_checkAction"><span id="daojishi">60</span> s</div>
                    </div>
                </div>                                   
                <div class="yanz" style="display: none" id="del"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput delinput_padd"></div>
                <div class="phone_modify_box left">
                    <input type="text" value="" name="phoneyz"  placeholder="请输入手机号" maxlength="11" id="phoneyz"  class="phone_input del"/>
                </div>     
            </div>
            <div class="clear"></div>
            <div class="only_line"></div>        
            <div class="clear"></div>    
            <div class="myinfo_lanm">                
                <div class="phone_title left wangjpwd_distance">验证码&nbsp;&nbsp;&nbsp;&nbsp;</div>           
                <div class="phone_modify_box left">
                    <input type="text" value="" placeholder="请输入验证码" id="vircode" class="phone_input"/>                    
                </div>     
            </div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
        <div class="clear"></div>            
        <div class="phone_next_box "> 
           <div id="submit2" class="tousReview_submit middle_center"  style="display:none"/>下一步</div>    
           <div id="submithui" class="tousReview_submit middle_center tousReview_submithui"/>下一步</div>                           
        </div>           
    </div>
</div>
<script>
    //发送验证码
    $("#getverify").click(function () {
        var phoneyz = $("#phoneyz").val();
        if (phoneyz == '' || phoneyz.length < 11) {
            layer.open({
                content: '请输入正确的手机号',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        $.ajax({
            type: "GET",
            url: "../login/sendVricode/phoneyz/" + phoneyz,
            success: function (msg) {
                if (msg != '') {
                    if ('1' == msg) {
                        layer.open({
                            content: '发送成功',
                            time: 1,
                            shadeClose: true,
                            success: function () {
                                //验证码倒计时
                                var phoneyz = $("#phoneyz").val();
                                if (phoneyz != '') {
                                    $("#getverify").css("display", "none");
                                    setTimeout(jishiqi, 1000);
                                    function jishiqi() {
                                        var dd = $("#daojishi").html();
                                        dd = dd - 1;
                                        $("#daojishi").html(dd);
                                        if (dd == 0) {
                                            $("#yanze").css("display", "none");
                                            $("#getverify").css("display", "inline");
                                            $("#cxhq").html("重新获取");
                                            $("#daojishi").html("60");
                                            $("#submit2").css("display", "none");
                                            $("#submithui").css("display", "block");
                                        }
                                        if (dd > 0) {
                                            $("#yanze").css("display", "inline");
                                            $("#submit2").css("display", "block");
                                            $("#submithui").css("display", "none");
                                            setTimeout(jishiqi, 1000);
                                        }
                                    }
                                }
                            }
                        });
                    }
                    if ('-1' == msg) {
                        layer.open({
                            content: '获取验证码失败',
                            time: 1,
                            shadeClose: true
                        });
                    }
                    if ('-2' == msg) {
                        layer.open({
                            content: '手机号未注册',
                            time: 1,
                            shadeClose: true
                        });
                    }
                    if ('-3' == msg) {
                        layer.open({
                            content: '手机号已注册',
                            time: 1,
                            shadeClose: true
                        });
                    }
                    if ('-5' == msg) {
                        layer.open({
                            content: '手机号为原来手机号',
                            time: 1,
                            shadeClose: true
                        });
                    }
                } else {
                    layer.open({
                        content: '发送失败',
                        time: 1,
                        shadeClose: true
                    });
                }
            }
        });
    });
    
    $("#submithui").click(function () {
        layer.open({
            content: '请先获取验证码',
            time: 2,
            shadeClose: true
        });
        return false;
    });
    //提交验证
    $("#submit2").click(function () {
        var phoneyz = $("#phoneyz").val();
        var vircode = $("#vircode").val();

        if (phoneyz == '') {
            layer.open({
                content: '请输入电话号码',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (vircode == '') {
            layer.open({
                content: '请输入验证码',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        //验证验证码
        $.ajax({
            type: "GET",
            url: "../login/VricodeEnter/",
            data: phoneyz + '/' + vircode,
            success: function (msg) {
                if ('success' == msg) {
                    location.href = "../myinfo/forgetPwdSur";
                } else {
                    layer.open({
                        content: msg,
                        time: 2,
                        shadeClose: true
                    });
                    return false;
                }
            }
        });
    });
   
    $(".phone_del").click(function () {
        $(".phone_del>img").toggle();
        var leix = $(this).next().find("input").attr("type");
        if (leix == "password") {
            $(this).next().find("input").attr("type", "text");
        } else {
            $(this).next().find("input").attr("type", "password");
        }
    });
    $(".yanz").click(function () {
        $(".del").val('');
    });


    $("#phoneyz").keyup(function () {
        var phoneyz = $("#phoneyz").val();
        if (phoneyz != '') {
            $("#del").css("display", "block");
        } else {
            $("#del").css("display", "none");
        }
    });

    $("#del").click(function () {
        var phoneyz = $("#phoneyz").val();
        if (phoneyz != '') {
            $("#del").css("display", "block");
        } else {
            $("#del").css("display", "none");
        }
    });
</script>

    </body>
</html>
<?php }} ?>