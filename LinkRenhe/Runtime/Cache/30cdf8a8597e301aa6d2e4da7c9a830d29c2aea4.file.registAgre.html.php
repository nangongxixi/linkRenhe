<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 10:29:17
         compiled from "./LinkRenhe/Home/View\Login\registAgre.html" */ ?>
<?php /*%%SmartyHeaderCode:29783587da01a590443-57095246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30cdf8a8597e301aa6d2e4da7c9a830d29c2aea4' => 
    array (
      0 => './LinkRenhe/Home/View\\Login\\registAgre.html',
      1 => 1490840956,
      2 => 'file',
    ),
    '41f95adb5947cca4cb069155c1c658a77c2a148b' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultJamp.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29783587da01a590443-57095246',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587da01a73ad4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587da01a73ad4')) {function content_587da01a73ad4($_smarty_tpl) {?>
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
            <div class="login_box_text myjob_box">
                <div id="login_dengl">                        
                    <ul>
                        <li>
                            <div class="myinfo_lanm kuan">                
                                <div class="phone_title left"><img src="<?php echo @IMG_URL;?>
re.png"></div>           
                                <div class="login_kuang left">                                   
                                    <input type="hidden" value="<?php echo $_SESSION['user']['registphone'];?>
" id="phoneyz" class="phone_input phone"/>                                    
                                    <input type="text" value="" placeholder="请输入姓名" name="consumersname" id="consumersname" class="phone_input consumersname del0"/>
                                </div>                              
                                <div class="yanz0" style="display: none" id="del0"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="only_line"></div>        
                            <div class="clear"></div>
                            <div class="myinfo_lanm kuan" style="margin-bottom:5px">                
                                <div class="phone_title left"><img src="<?php echo @IMG_URL;?>
sf.png" width="28" style="margin-top:12px"></div>           
                                <div class="login_kuang left">
                                    <input type="text" value="" placeholder="请输入身份证号码" name="idcard" maxlength="18" id="idcard"  class="phone_input idcard del1"/>
                                </div>                                
                                <div class="yanz1" style="display: none" id="del1"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="only_line"></div>        
                            <div class="clear"></div>
                            <div class="myinfo_lanm kuan">
                                <div class="left"><img src="<?php echo @IMG_URL;?>
lock.png" class="phone_title_paddtop login_ico"></div>
                                <div class="phone_del right">
                                    <img src="<?php echo @IMG_URL;?>
by.png" class="phone_title_paddtop login_ico">
                                    <img src="<?php echo @IMG_URL;?>
zy.png" style="display:none" class="phone_title_paddtop login_ico">
                                </div>
                                <div class="regist_pwd left">
                                    <input type="password" value="" placeholder="请输入8-12位密码" name="text" maxlength="12" id="pwd" class="phone_input password del2"/>                                    
                                </div>                               
                                <div class="yanz2" style="display: none" id="del2"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="only_line"></div>        
                            <div class="clear"></div>
                        </li>                           
                    </ul>
                </div>
                <div class="phone_next_box login_submit_bgcolor">
                    <div id="submit" class="tousReview_submit middle_center tijiao"/>提交</div>        
                </div>
                <div class="middle_center regist_text">
                    <span style="position: relative;top:2px"><input type="checkbox" name="isagree" id="isagree" checked="checked"/></span>&nbsp;我已阅读并接受<a href="../login/agreement"><span class="zcxy">《注册协议》</span></a>
                    <br> <br> <br>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

<script type="text/javascript">
    
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

    $("#consumersname").keyup(function () {
        var consumersname = $.trim($("#consumersname").val());
        if (consumersname != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#idcard").keyup(function () {
        var idcard = $.trim($("#idcard").val());
        if (idcard != '') {
            $("#del1").css("display", "block");
        } else {
            $("#del1").css("display", "none");
        }
    });
    $("#pwd").keyup(function () {
        var pwd = $.trim($("#pwd").val());
        sessionStorage.setItem('pwd', pwd);
        if (pwd != '') {
            $("#del2").css("display", "block");
        } else {
            $("#del2").css("display", "none");
        }
    });
    
   
    $("#del0").click(function () {
        var consumersname = $.trim($("#consumersname").val());
        if (consumersname != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#del1").click(function () {
        var idcard = $.trim($("#idcard").val());
        if (idcard != '') {
            $("#del1").css("display", "block");
        } else {
            $("#del1").css("display", "none");
        }
    });
    $("#del2").click(function () {
        var pwd = $.trim($("#pwd").val());
        if (pwd != '') {
            $("#del2").css("display", "block");
        } else {
            $("#del2").css("display", "none");
        }
    });   
    
    $("#submit").click(function () {
        var phoneyz = $.trim($("#phoneyz").val());
        var consumersname = $.trim($("#consumersname").val());//姓名
        var idcard = $.trim($("#idcard").val());//身份证
        var password = $.trim($("#pwd").val());       
        //非空验证        
        
        if (consumersname == '') {
            layer.open({
                content: '姓名不能为空或空格',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (password == '' || password.length < 8 || password.length > 12) {
            layer.open({
                content: '密码不能为空或空格且长度为8-12位',
                time: 2,
                shadeClose: true
            });
            return false;
        }
		if (idcard.match(/^[1-9]\d{7}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}$|^[1-9]\d{5}[1-9]\d{3}((0\d)|(1[0-2]))(([0|1|2]\d)|3[0-1])\d{3}([0-9]|X)$/)) {
		}else {
			layer.open({
				content: '请填写正确的证件号码',
				time: 2,
				shadeClose: true
			});
			return false;                
		}
		
		
		
		
        if ($("#isagree").is(':checked')) {

        } else {
            layer.open({
                content: '必须选择已阅读',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        //提交注册信息      
        $.ajax({
            type: "POST",
            url: "../login/submitRegist11",
            data: {
                "phone": phoneyz,
                "password": password,
                "consumersname": consumersname,
                "idcard": idcard,
                "isagree": 0
            },
            success: function (msg) {
                //alert(msg);
                if ('0' == msg) {
                    layer.open({
                        content: '注册成功',
                        btn: ['OK'],
                        yes: function () {
                            location.href = "../login/index";
                        }
                    });

                } else if ('-3' == msg) {
                    layer.open({
                        content: '手机号已存在',
                        time: 2,
                        shadeClose: true
                    });
                    return false;
                } else if ('-4' == msg) {
                    layer.open({
                        content: '用户名已存在',
                        time: 2,
                        shadeClose: true
                    });
                    return false;
                } else if ('-6' == msg) {
                    layer.open({
                        content: '身份证已存在',
                        time: 2,
                        shadeClose: true
                    });
                    return false;
                } else {
                    layer.open({
                        content: '注册失败',
                        time: 2,
                        shadeClose: true
                    });
                }
            }
        });
    });

    
    $(function () {
        var pwd = sessionStorage.getItem('pwd');        
        $("#pwd").val(pwd);
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
    $(".yanz").click(function () {
        $(".del").val('');
    });

</script>


    </body>
</html>
<?php }} ?>