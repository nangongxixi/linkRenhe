<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 10:20:11
         compiled from "./LinkRenhe/Home/View\Login\index.html" */ ?>
<?php /*%%SmartyHeaderCode:26106587d7720ba09f6-26568909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7646118ef4904ffc2d8d3827fbc04b028d2e35aa' => 
    array (
      0 => './LinkRenhe/Home/View\\Login\\index.html',
      1 => 1490840102,
      2 => 'file',
    ),
    '41f95adb5947cca4cb069155c1c658a77c2a148b' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultJamp.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26106587d7720ba09f6-26568909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d7720dc50f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d7720dc50f')) {function content_587d7720dc50f($_smarty_tpl) {?>
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
            <div class="return_img">
                <?php if (null!==@user){?>
                <a href="../index/index"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a>                                
                <?php }else{ ?>
                <a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a>    
                <?php }?>
            </div>
            <div class="details_title middle_center bgcolor">登录</div>
        </div>       
        <div class="clear"></div>
        <div class="news_lanm_content_line"></div>
        <div class="clear"></div>
        <div class="login_box" >
            <div class="login_box_img"><img src="<?php echo @IMG_URL;?>
about.png"></div>
            <div class="login_box_text">
                <div id="login_dengl">
                    <ul class="login_dengl_title middle_center" >
                        <li class="active">帐号密码登录</li>
                        <li><div class="suxian left">|</div>手机号快捷登录</li>
                    </ul>                    
                    <ul>
                        <li>
                            <div class="myjob_box">
                                <div class="myinfo_lanm login_kong">                
                                    <div class=" left"><img src="<?php echo @IMG_URL;?>
manager.png" class="phone_title_paddtop login_ico"></div>                                     
                                    <div class="login_kuang left">
                                        <input type="text" name="phone" value="" placeholder="请输入您的帐号" id="account" maxlength="11" class="phone_input del0"/> 
                                    </div> 
                                    <div class="yanz0" style="display: none" id="del0"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput delinput_padd"></div>
                                </div>
                                <div class="clear"></div>
                                <div class="only_line"></div>        
                                <div class="clear"></div>
                                <div class="myinfo_lanm">                
                                    <div class="left"><img src="<?php echo @IMG_URL;?>
lock.png" class="phone_title_paddtop login_ico"></div>
                                    <div class="phone_del right">
                                        <img src="<?php echo @IMG_URL;?>
by.png" class="phone_title_paddtop login_ico">
                                        <img src="<?php echo @IMG_URL;?>
zy.png" style="display:none" class="phone_title_paddtop login_ico">
                                    </div>                                   
                                    <div class="yanz1" style="display: none" id="del1"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
                                    <div class="login_kuang left">
                                        <input type="password" name="easemobspassword" placeholder="请输入您的密码" value="" id="pwd"  class="phone_input del1"/>
                                    </div>     
                                </div>
                                <div class="clear"></div>
                                <div class="only_line"></div>        
                                <div class="clear"></div>
                            </div>
                            <div class="phone_next_box login_submit_bgcolor ">                               
                                <div id="submit1" class="tousReview_submit middle_center"/>登录</div>
                            </div>
                        </li>
                        <li style="display:none" id="litips">
                            <div class="myjob_box">
                                <div class="myinfo_lanm login_kong">                
                                    <div class="left"><img src="<?php echo @IMG_URL;?>
shouj.png" class="ico_padd login_ico"></div>
                                    <div class="phone_modify_checkbox right">
                                        <div style="display:inline"  id="getverify">
                                            <div class="phone_modify_check" id="cxhq">获取验证码</div>                                                
                                        </div>
                                        <div style="diplay:none" id="yanze">
                                            <div class="phone_modify_checkAction"><span id="daojishi">60</span> S</div>
                                        </div>
                                    </div>                                   
                                    <div class="yanz2" style="display: none" id="del2"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput delinput_padd delinput_padd_shouji"></div>
                                    <div class="phone_modify_box left">
                                        <input type="text" value="" name="phoneyz"  placeholder="请输入手机号" maxlength="11" id="phoneyz"  class="phone_input del2"/>
                                    </div>     
                                </div>
                                <div class="clear"></div>
                                <div class="only_line"></div>        
                                <div class="clear"></div>
                                <div class="myinfo_lanm">                
                                    <div class="left"><img src="<?php echo @IMG_URL;?>
mm.png" class="phone_title_paddtop login_ico" ></div>
                                    <div class="yanz3" style="display: none" id="del3"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput delinput_padd"></div>
                                    <div class="login_kuang left">
                                        <input type="text" value="" name="vircode" placeholder="请输入验证码" id="vircode" class="phone_input del3"/>
                                    </div>     
                                </div>
                                <div class="clear"></div>
                                <div class="only_line"></div>        
                                <div class="clear"></div>
                            </div>
                            <div class="phone_next_box login_submit_bgcolor ">
                                <div id="submit2" class="tousReview_submit middle_center"  style="display:none"/>登录</div>
                                <div id="submithui" class="tousReview_submit middle_center tousReview_submithui"/>登录</div>  
                            </div>
                        </li>
                    </ul>
                </div>               
                <div class="login_hre middle_center">
                    <a href="../index/index"><div class="login_lijizc left">随便看看</div></a>
                    <a href="<?php echo @__CONTROLLER__;?>
/regist"><div class="login_lijizc right">立即注册</div></a>
                    <a href="../myinfo/forgetpwd"><div class="login_lijizc right">忘记密码&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</div></a>
                </div> 
                <div style="height: 24%; background-color: #fff"></div>
            </div>
        </div>

    </div>
</div>

<script type="text/javascript">

    //发送验证码
    $("#getverify").click(function () {
        var phoneyz = $.trim($("#phoneyz").val());
        //var reg = /\d{11}/;
        if (phoneyz == '' || phoneyz.length < 11) {
            layer.open({
                content: '请输入正确的手机号',
                time: 2,
                shadeClose: true
            });
            return false;
        }
		if (phoneyz.match(/^((0\d{2,3}-\d{7,8})|(1[3584]\d{9}))$/ig)) {			
		} else {
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
                if (msg != '' || msg == '-1') {
                    if ('1' == msg) {
                        layer.open({
                            content: '发送成功',
                            time: 1,
                            shadeClose: true
                        });
                        //验证码倒计时
                        var phoneyz = $.trim($("#phoneyz").val());
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
                        content: '获取验证码失败',
                        time: 1,
                        shadeClose: true
                    });
                }
            }
        });
    });

    $("#submit1").click(function () {
        var account = $.trim($("#account").val());
        var pwd = $.trim($("#pwd").val());
        //非空验证 
        if (account == '' || account.length < 11) {
            layer.open({
                content: '请输入正确的帐号',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (pwd == '') {
            layer.open({
                content: '请输入密码',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        $.ajax({
            type: "GET",
            url: "../login/loginEnter",
            data: account + '/' + pwd,
            success: function (msg) {
                if ('success' == msg) {

                    //alert(msg);

                    location.href = "../index/index";
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


    $("#submithui").click(function () {
        layer.open({
            content: '请先获取验证码',
            time: 2,
            shadeClose: true
        });
        return false;
    });


    $("#submit2").click(function () {
        var phoneyz = $.trim($("#phoneyz").val());
        var vircode = $.trim($("#vircode").val());
        var daojishi = $.trim($("#daojishi").val());
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
                    location.href = "../index/index";
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

    $(function () {
        $("#login_dengl .login_dengl_title li").click(function () {
            $(this).addClass("active").siblings().removeClass("active");
            var index = $(this).index();
            var li = $(this).parent().next().children();
            $(li[index]).show().siblings().hide();
        });
    });
    
    $(".phone_del").click(function () {
        $(".phone_del>img").toggle();
        var leix = $("#pwd").attr("type");
        if (leix == "password") {
            $("#pwd").attr("type", "text");
        } else {
            $("#pwd").attr("type", "password");
        }
    });



    //删除输入
    $(".yanz0").click(function () {
        $(".del0").val('');
    });
    $(".yanz1").click(function () {
        $(".del1").val('');
    });
    $(".yanz2").click(function () {
        $(".del2").val('');
    });
    $(".yanz3").click(function () {
        $(".del3").val('');
    });

    $("#account").keyup(function () {
        var account = $("#account").val();
        if (account != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#pwd").keyup(function () {
        var pwd = $("#pwd").val();
        if (pwd != '') {
            $("#del1").css("display", "block");
        } else {
            $("#del1").css("display", "none");
        }
    });
    $("#phoneyz").keyup(function () {
        var phoneyz = $("#phoneyz").val();
        if (phoneyz != '') {
            $("#del2").css("display", "block");
        } else {
            $("#del2").css("display", "none");
        }
    });
    $("#vircode").keyup(function () {
        var vircode = $("#vircode").val();
        if (vircode != '') {
            $("#del3").css("display", "block");
        } else {
            $("#del3").css("display", "none");
        }
    });

    $("#del0").click(function () {
        var account = $("#account").val();
        if (account != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#del1").click(function () {
        var pwd = $("#pwd").val();
        if (pwd != '') {
            $("#del1").css("display", "block");
        } else {
            $("#del1").css("display", "none");
        }
    });
    $("#del2").click(function () {
        var phoneyz = $("#phoneyz").val();
        if (phoneyz != '') {
            $("#del2").css("display", "block");
        } else {
            $("#del2").css("display", "none");
        }
    });
    $("#del3").click(function () {
        var vircode = $("#vircode").val();
        if (vircode != '') {
            $("#del3").css("display", "block");
        } else {
            $("#del3").css("display", "none");
        }
    });



</script>


    </body>
</html>
<?php }} ?>