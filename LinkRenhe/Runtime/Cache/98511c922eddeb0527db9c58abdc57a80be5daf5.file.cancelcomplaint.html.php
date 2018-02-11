<?php /* Smarty version Smarty-3.1.6, created on 2017-01-18 11:20:37
         compiled from "./LinkRenhe/Home/View\Complaints\cancelcomplaint.html" */ ?>
<?php /*%%SmartyHeaderCode:16044587da2af1d24d8-14933526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98511c922eddeb0527db9c58abdc57a80be5daf5' => 
    array (
      0 => './LinkRenhe/Home/View\\Complaints\\cancelcomplaint.html',
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
  'nocache_hash' => '16044587da2af1d24d8-14933526',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587da2af2c60d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587da2af2c60d')) {function content_587da2af2c60d($_smarty_tpl) {?>
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
            <div class="details_title middle_center bgcolor">取消投诉</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box myinfo_padd">
            <div class="styled-select">
                <select id="select1">
                    <option value="">请选择取消投诉的原因</option>
                    <option value="1">未完全了解情况</option>
                    <option value="2">事情已妥善处理</option>
                    <option value="3">其他</option>   
                </select>
            </div>
        </div>
        <div class="clear"></div>
        <div class="phone_next_box ">
            <div class="iphone_next_text">确定</div>                
        </div>
    </div>
</div>

<script>
    $(function () {
        $(".iphone_next_text").click(function () {
            var userid = "<?php echo $_SESSION['user']['userid'];?>
";
            var id = "<?php echo $_GET['id'];?>
";
            var reason = $("#select1  option:selected").val();
            var remarks = "";
            if (reason != '') {
                $.ajax({
                    type: "POST",
                    url: "../../../Complaints/CancelComplaintsAction",
                    data: {
                        "userid": userid,
                        "id": id,
                        "reason": reason,
                        "remarks": remarks
                    },
                    success: function (msg) {
                        var data = JSON.parse(msg);
                        if (data.result == 1) {
                            layer.open({
                                content: '取消成功',
                                time: 2
                            });
                            location.href = "../../../Complaints/index";
                        }
                    }
                });
            }else{
                layer.open({
                    content: '请选择取消原因',
                    time: 2
                });
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