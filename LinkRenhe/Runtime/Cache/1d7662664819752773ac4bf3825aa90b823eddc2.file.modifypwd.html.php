<?php /* Smarty version Smarty-3.1.6, created on 2018-02-11 09:11:47
         compiled from "./LinkRenhe/Home/View\Myinfo\modifypwd.html" */ ?>
<?php /*%%SmartyHeaderCode:28644587ec7e994a346-25758796%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d7662664819752773ac4bf3825aa90b823eddc2' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\modifypwd.html',
      1 => 1490942758,
      2 => 'file',
    ),
    'c4eeed64900bb0b09c35a5ea820680eb8697bbac' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28644587ec7e994a346-25758796',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587ec7e9a7ae4',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587ec7e9a7ae4')) {function content_587ec7e9a7ae4($_smarty_tpl) {?><html>
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
        <div class="top_lanm bgcolor">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center">修改密码</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div> 

        <div class="myjob_box myinfo_padd">

            <div class="myinfo_lanm">                
                <div class="phone_title left">原密码</div>           
                <div class="phone_box right">
                    <input type="password" value="" placeholder="请输入8-12位密码" id="oldpwd" class="phone_input"/>
                </div>
            </div> 
            <div class="clear"></div>
            <div class="only_line"></div>        
            <div class="clear"></div>
            <div class="myinfo_lanm"> 
                <div class="phone_title left">新密码</div>           
                <div class="phone_box right">
                    <input type="password" value="" placeholder="请输入8-12位密码" id="newpwd" class="phone_input"/>
                </div>
            </div> 
            <div class="clear"></div>
            <div class="only_line"></div>        
            <div class="clear"></div>
            <div class="myinfo_lanm"> 
                <div class="phone_title left">确认密码</div>           
                <div class="phone_box right">
                    <input type="password" value="" placeholder="请再次输入新密码" id="surepwd" class="phone_input"/>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
        <div class="clear"></div>            
        <div class="phone_next_box ">
            <div id="submit" class="tousReview_submit middle_center"/>提交</div>    
        </div>
		<!--
        <div class="huihe">
            <a href="../Myinfo/forgetpwd"><div class="wangjpwd middle_center">忘记密码?</div></a>
        </div>
		-->
    </div>
</div>

<script type="text/javascript">
    $("#submit").click(function () {
        var oldpwd = $.trim($("#oldpwd").val());
        var newpwd = $.trim($("#newpwd").val());
        var surepwd = $.trim($("#surepwd").val());		
        if (oldpwd == '' || oldpwd.length<8 || oldpwd.length>12) {
            layer.open({
                content: '原密码不能为空且长度为8-12位',
                time: 2,
                shadeClose: true
            });
            return false;
        }       
	if (newpwd == '' || newpwd.length<8 || newpwd.length>12) {
            layer.open({
                content: '新密码不能为空且长度为8-12位',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (surepwd == '') {
            layer.open({
                content: '请输入再次输入新密码',
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
            url: "../myinfo/modifyPwdAction/oldpwd/"+oldpwd + '/newpwd/' + newpwd,           
            success: function (msg) {
                //alert(msg);
                if (0 == msg) {
                    layer.open({
                        content: '修改成功',
                        time: 2,
                        shadeClose: true,
                        success:function(){
                            location.href = "../login/index";
                        }
                    });
                    
                } else if (-2 == msg) {
                    layer.open({
                        content: '原密码错误',
                        time: 2,
                        shadeClose: true
                    });
                    return false;
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



</script>


    </body>
</html>
<?php }} ?>