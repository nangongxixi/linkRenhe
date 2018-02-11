<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 10:20:15
         compiled from "./LinkRenhe/Home/View\Login\regist.html" */ ?>
<?php /*%%SmartyHeaderCode:836587d82e6d29da9-35286033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7395719e6c59ab5af0859a9e1fecd2f77e68dd4c' => 
    array (
      0 => './LinkRenhe/Home/View\\Login\\regist.html',
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
  'nocache_hash' => '836587d82e6d29da9-35286033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d82e6ed46a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d82e6ed46a')) {function content_587d82e6ed46a($_smarty_tpl) {?>
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
            <div class="details_title middle_center bgcolor">注册</div>
        </div>       
        <div class="clear"></div>
        <div class="news_lanm_content_line"></div>
        <div class="login_box" >
            <div class="login_box_img"><img src="<?php echo @IMG_URL;?>
login.png"></div>
            <div class="login_box_text">                
                <div id="login_dengl">                       
                    <ul class="baise">                            
                        <li>                           
                            <div class="myjob_box">
                                <div class="myinfo_lanm login_kong">                
                                    <div class="left"><img src="<?php echo @IMG_URL;?>
shouj.png" class="phone_title_paddtop login_ico"></div>     

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
                                        <input type="text" value="" name="phoneyz"  placeholder="请输入手机号码" maxlength="11" id="phoneyz"  class="phone_input del"/>
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
                                        <input type="text" value="" name="vircode" placeholder="请输入验证码" id="vircode" class="phone_input del0"/>
                                    </div>
                                   
                                </div>
                                <div class="clear"></div>
                                <div class="only_line"></div>        
                                <div class="clear"></div>
                            </div>
                            <div class="phone_next_box login_submit_bgcolor ">
                                <div id="submit2" class="tousReview_submit middle_center"  style="display:none"/>下一步</div>
                                <div id="submithui" class="tousReview_submit middle_center tousReview_submithui"/>下一步</div> 
                            </div>
                        </li>
                    </ul>
                </div>               
                <div style="height: 31%; background-color: #fff"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<script type="text/javascript">
    //发送验证码
    $("#getverify").click(function () {
        var phoneyz = $.trim($("#phoneyz").val());
        if (phoneyz == '' || phoneyz.length < 11 || isNaN(phoneyz)) {
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
            url: "../login/sendVricode/controller/regist/phoneyz/" + phoneyz,
            success: function (msg) {
                if ('1' == msg) {
                    layer.open({
                        content: '发送成功',
                        time: 2,
                        shadeClose: true
                    });
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
                if ('-3' == msg) {
                    layer.open({
                        content: '手机号已存在',
                        time: 2,
                        shadeClose: true
                    });
                }
                if ('-4' == msg) {
                    layer.open({
                        content: '用户名已存在',
                        time: 2,
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

    $("#submit2").click(function () {
        var phoneyz = $("#phoneyz").val();
        var vircode = $("#vircode").val();
        //非空验证
        if (phoneyz == '' || phoneyz.length < 11 || isNaN(phoneyz)) {
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
            url: "../login/checkVricode/phoneyz/" + phoneyz + "/vircode/" + vircode,
            success: function (msg) {
                //alert(msg);
                if (0 == msg) {
                    layer.open({
                        content: '验证码过期',
                        time: 2,
                        shadeClose: true
                    });
                    return false;
                }
                if (-2 == msg) {
                    layer.open({
                        content: '验证码错误',
                        time: 2,
                        shadeClose: true
                    });
                    return false;
                }
                location.href = "../login/registagre";
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
        var leix = $(this).next().find("input").attr("type");
        if (leix == "password") {
            $(this).next().find("input").attr("type", "text");
        } else {
            $(this).next().find("input").attr("type", "password");
        }
    });
    
    //删除输入
    $(".yanz").click(function () {
        $(".del").val('');        
    });    
    $(".yanz0").click(function () {
        $(".del0").val('');        
    });
    $("#phoneyz").keyup(function () {
        var phoneyz = $("#phoneyz").val();
        if (phoneyz != '') {
            $("#del").css("display", "block");
        } else {
            $("#del").css("display", "none");
        }
    });    
    $("#vircode").keyup(function () {       
        var vircode = $("#vircode").val();
        if (vircode != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
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
    $("#del0").click(function () {       
        var vircode = $("#vircode").val();        
        if (vircode != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });


</script>


    </body>
</html>
<?php }} ?>