<?php /* Smarty version Smarty-3.1.6, created on 2018-02-09 15:05:49
         compiled from "./LinkRenhe/Home/View\Myinfo\index.html" */ ?>
<?php /*%%SmartyHeaderCode:11587c1da79dad33-80527476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02226ad7dc5e3a0e95a6d42b54ce286afdccd7f8' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\index.html',
      1 => 1491468756,
      2 => 'file',
    ),
    'cba641dc9a691784a5c853a28cd0e485e77cb07f' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\default.html',
      1 => 1490840098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11587c1da79dad33-80527476',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587c1da7babb2',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c1da7babb2')) {function content_587c1da7babb2($_smarty_tpl) {?><html>
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
    <div id="contt" data-role="content">             
        <div class="clear"></div> 
        <div class="headpic_box">
            <a <?php if (!empty($_SESSION['user']['userid'])){?>href="../myinfo/perinfo"<?php }else{ ?>onclick="land()"<?php }?>>            
                <div class="headpic_xbo">
                    <div><img src="<?php if ($_SESSION['user']['headurl']=='null'){?><?php echo @IMG_URL;?>
defauhead.png<?php }else{ ?>http://221.10.2.222:5680/api/v1/Files?filename=<?php echo $_SESSION['user']['headurl'];?>
<?php }?>" class="headpic_img"></div>                    
                </div>
                <div class="headpic_name middle_center"><?php echo $_SESSION['user']['consumersname'];?>
</div>
            </a>
        </div>           
        <div class="clear"></div>
        <div class="myjob_box myinfo_padd">
            <a <?php if (!empty($_SESSION['user']['userid'])){?>href="../myinfo/wdinfo"<?php }else{ ?>onclick="land()"<?php }?>>                
                <div class="myinfo_lanm kuan">
                    <div class="myinfo_headpic left"><img src="<?php echo @IMG_URL;?>
nav/wdxx.png"></div>
                    <div class="myinfo_lanm_title left">我的消息</div> 
                    <div style="position: relative"><span style="color:red; position: absolute;color: red;right: 6%;display:none; position: absolute; border-radius: 50%; width: 20px; height: 20px; background-color: red; top: 16px" id="wdxs"><span id="wd" style="line-height: 20px;
    color: #fff; padding:1px 0 0 6px"></div>
                    <div class="myinfo_jiant right"><img src="<?php echo @IMG_URL;?>
jt.png"></div>
                </div> 
            </a>            
            <div class="clear"></div>
            <div class="only_line"></div>       
            <div class="clear"></div>
            <a <?php if (!empty($_SESSION['user']['userid'])){?>href="../complaints/index"<?php }else{ ?>onclick="land()"<?php }?>>               
                <div class="myinfo_lanm kuan">
                    <div class="myinfo_headpic left"><img src="<?php echo @IMG_URL;?>
nav/wdts.png"></div>
                    <div class="myinfo_lanm_title left">我的投诉</div>               
                    <div class="myinfo_jiant right"><img src="<?php echo @IMG_URL;?>
jt.png"></div>
                </div> 
            </a>
            <div class="clear"></div>
            <div class="only_line"></div>       
            <div class="clear"></div>
            <div class="dengluzdd">
                <a <?php if (!empty($_SESSION['user']['userid'])){?>href="../myinfo/mycollection"<?php }else{ ?>onclick="land()"<?php }?>>
                    <div class="myinfo_lanm kuan">
                        <div class="myinfo_headpic left"><img src="<?php echo @IMG_URL;?>
nav/wdsc.png"></div>
                        <div class="myinfo_lanm_title left">我的收藏</div>               
                        <div class="myinfo_jiant right"><img src="<?php echo @IMG_URL;?>
jt.png"></div>
                    </div> 
                </a>
                <div class="clear"></div>
                <div class="only_line"></div>          
                <div class="clear"></div>               
                <?php if (!empty($_SESSION['user']['userid'])&&$_SESSION['user']['consumerstype']==1){?>
                <a href="../myinfo/myjob">                   
                    <div class="myinfo_lanm kuan">
                        <div class="myinfo_headpic left"><img src="<?php echo @IMG_URL;?>
nav/wdgz.png"></div>
                        <div class="myinfo_lanm_title left">我的工作</div>
                        <div style="position: relative"><span style="color:red; position:absolute; display:none; color: red;right: 6%; position: absolute; border-radius: 50%; width: 20px; height: 20px; background-color: red; top: 16;"  id="wdxs1"><span id="workwd" style="line-height: 20px;
    color: #fff;
    padding: 1 0 0 6 "></span></span></div>
                        <div class="myinfo_jiant right"><img src="<?php echo @IMG_URL;?>
jt.png"></div>
                    </div> 
                </a>              
                <div class="clear"></div>
                <div class="only_line"></div>         
                <div class="clear"></div>
                <?php }?>                
                <a href="../myinfo/about">
                    <div class="myinfo_lanm kuan myinfo_gywm">
                        <div class="myinfo_headpic left"><img src="<?php echo @IMG_URL;?>
nav/gywm.png"></div>
                        <div class="myinfo_lanm_title left">关于我们</div>               
                        <div class="myinfo_jiant right"><img src="<?php echo @IMG_URL;?>
jt.png"></div>
                    </div> 
                </a>
            </div>
        </div>

        <?php if (!empty($_SESSION['user']['userid'])){?>
        <div class="clear"></div>        
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box myinfo_padd">
            <a <?php if (!empty($_SESSION['user']['userid'])){?>href="../myinfo/modifypwd"<?php }else{ ?>onclick="land()"<?php }?>>
                <div class="myinfo_lanm kuan">
                    <div class="myinfo_headpic left"><img src="<?php echo @IMG_URL;?>
nav/xgmm.png"></div>
                    <div class="myinfo_lanm_title left">修改密码</div>               
                    <div class="myinfo_jiant right"><img src="<?php echo @IMG_URL;?>
jt.png"></div>
                </div> 
            </a>
            <div class="clear"></div>
            <div class="only_line"></div>       
            <div class="clear"></div>                 
            <div class="myinfo_lanm kuan myinfo_tcdl" <?php if (!empty($_SESSION['user']['userid'])){?>id="tuichudengl"<?php }else{ ?>onclick="land()"<?php }?>>
                 <div class="myinfo_headpic left"><img src="<?php echo @IMG_URL;?>
nav/tcdl.png"></div>
                <div class="myinfo_lanm_title left">退出登录</div>               
                <div class="myinfo_jiant right"><img src="<?php echo @IMG_URL;?>
jt.png"></div>
            </div>                 
        </div>
        <?php }?>

        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
    </div>
</div>


<SCRIPT type="text/javascript">
    $(function () {
        $.ajax({
            type: "POST",
            url: "../myinfo/wdInfowdAction",
            success: function (msg) {                
                var data = JSON.parse(msg);                
                if (data.msgcount != 0) {                    
                    $("#wdxs").css("display","block");
                    $("#wd").html(data.msgcount);                    
                }
                if (data.taskcount != 0) {
                    $("#wdxs1").css("display","block");
                    $("#workwd").html(data.taskcount);        
                }
            }
        });
    });

    $('#tuichudengl').click(function () {
        layer.open({
            content: '<div style="text-align:left">退出后将影响部分功能使用，是否确认退出</div>',
            btn: ['确认', '取消'],
            shadeClose: true, //默认：true，是否点击遮罩时关闭层            
            yes: function () {
                layer.open({
                    content: '退出成功',
                    time: 20
                });
                location.href = "../login/logout";
            }
        });
    });
</SCRIPT>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        
    </body>
</html>
<?php }} ?>