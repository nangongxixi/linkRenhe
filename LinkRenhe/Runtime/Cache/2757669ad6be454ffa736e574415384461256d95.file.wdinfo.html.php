<?php /* Smarty version Smarty-3.1.6, created on 2018-02-11 09:20:44
         compiled from "./LinkRenhe/Home/View\Myinfo\wdinfo.html" */ ?>
<?php /*%%SmartyHeaderCode:9624587d80d3c5bfa3-01984256%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2757669ad6be454ffa736e574415384461256d95' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\wdinfo.html',
      1 => 1490840110,
      2 => 'file',
    ),
    'c4eeed64900bb0b09c35a5ea820680eb8697bbac' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9624587d80d3c5bfa3-01984256',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d80d3d4fba',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d80d3d4fba')) {function content_587d80d3d4fba($_smarty_tpl) {?><html>
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
        <div class="top_lanm details_line">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">我的消息</div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
        <div class="myjob_box">                        
            <div id="lei1"></div>
            <div id="lei2"></div> 
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
    </div>
</div>
<script>
    $(function () {
        $.ajax({
            type: "POST",
            url: "../myinfo/wdInfoAction",
            success: function (msg) {
                var data = JSON.parse(msg);
                //var dd = $(".wdinfo_text").text();
                for (var i = 0; i <= data.datalist.length; i++) {
                    if (data.datalist[i].isread == 0) {
                        $("#lei1").prepend("<a href='../myinfo/systemInfo?id=" + data.datalist[i].msgid + "'><div class='kuan wdinfo'><div class='wdinfo_redyuan'></div><div class='wdinfo_pic left'><img src='" + data.datalist[i].picurls + "' width='55' height='55'></div><div class='wdinfo_titile' id='biaot'>" + data.datalist[i].title + "</div><div class='titlen" + i + " wdinfo_text' id='content'>" + data.datalist[i].description + "<span id='zis' style='display: none'>…</span></div></div></a><div class='clear'></div><div class='news_bottom_nei'></div><div class='clear'></div>");
                        if ($(".titlen" + i).text().length > 20) {
                            $(".titlen" + i).text($(".titlen" + i).text().substring(0, 20));
                            $(".titlen" + i).html($(".titlen" + i).html() + "...");
                        }
                        if(data.datalist[i].picurls==''){
                            $(".wdinfo_pic img").attr("src",'<?php echo @IMG_URL;?>
nopic.jpg');
                        }
                    } else {
                        $("#lei2").prepend("<a href='../myinfo/systemInfo?id=" + data.datalist[i].msgid + "'><div class='kuan wdinfo'><div class='wdinfo_pic left'><img src='" + data.datalist[i].picurls + "' width='55' height='55'></div><div class='wdinfo_titile'>" + data.datalist[i].title + "</div><div class='titlen" + i + " wdinfo_text'>" + data.datalist[i].description + "<span id='zis' style='display:none'>…</span></div></div></a><div class='clear'></div><div class='news_bottom_nei'></div><div class='clear'></div>");
                        if ($(".titlen" + i).text().length > 20) {
                            $(".titlen" + i).text($(".titlen" + i).text().substring(0, 20));
                            $(".titlen" + i).html($(".titlen" + i).html() + "...");
                        }
                        if(data.datalist[i].picurls==''){
                            $(".wdinfo_pic img").attr("src",'<?php echo @IMG_URL;?>
nopic.jpg');
                        }
                    }
                }
            }
        });
    });
</script>

    </body>
</html>
<?php }} ?>