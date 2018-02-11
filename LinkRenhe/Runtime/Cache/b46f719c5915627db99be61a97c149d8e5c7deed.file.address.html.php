<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 11:14:02
         compiled from "./LinkRenhe/Home/View\Myinfo\address.html" */ ?>
<?php /*%%SmartyHeaderCode:24852587da076aefe62-35850556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b46f719c5915627db99be61a97c149d8e5c7deed' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\address.html',
      1 => 1490840103,
      2 => 'file',
    ),
    '08d8e2490653c736451d13f779c2958d7a7fa5a6' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24852587da076aefe62-35850556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587da076c2097',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587da076c2097')) {function content_587da076c2097($_smarty_tpl) {?><html>
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
return.png" width="100%" ></a></div>
            <div class="details_title middle_center bgcolor">地址</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box myinfo_padd">
            <div class="myinfo_lanm">
                <div class="phone_del"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
            
                <div class="phone_modify_box left address_modify">
                    <input type="text" value="<?php echo $_SESSION['user']['address'];?>
" placeholder="请输入地址信息" id="address" class="phone_input del phong_address_del"/>                
                </div>             
            </div>
        </div>
        <div class="clear"></div>        
        <div class="phone_next_box ">
            <div class="tousReview_submit" id="submit">确定</div>                
        </div>       
        <div class="huihe"></div>    
        <div class="huihe"></div>       
    </div>
</div>
<script>

    $("#submit").click(function () {
        var address = $.trim($("#address").val());
        if (address == '') {
            layer.open({
                content: '地址信息不能为空或者空格',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        //验证验证码
        $.ajax({
            type: "GET",
            url: "../myinfo/modyaddress/address/" + address,
            success: function (msg) {
                //alert(msg);
                if (0 == msg) {
                    layer.open({
                        content: '修改成功',
                        time: 2,
                        shadeClose: true
                    });
                    location.href = "../myinfo/perinfo";
                } else {
                    layer.open({
                        content: '修改失败',
                        time: 2,
                        shadeClose: true
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