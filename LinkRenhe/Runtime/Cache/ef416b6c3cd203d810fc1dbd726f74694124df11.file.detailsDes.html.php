<?php /* Smarty version Smarty-3.1.6, created on 2017-03-31 09:49:50
         compiled from "./LinkRenhe/Home/View\Complaints\detailsDes.html" */ ?>
<?php /*%%SmartyHeaderCode:17028587da2931ca4c0-49847454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef416b6c3cd203d810fc1dbd726f74694124df11' => 
    array (
      0 => './LinkRenhe/Home/View\\Complaints\\detailsDes.html',
      1 => 1490869592,
      2 => 'file',
    ),
    '08d8e2490653c736451d13f779c2958d7a7fa5a6' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17028587da2931ca4c0-49847454',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587da2932fafc',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587da2932fafc')) {function content_587da2932fafc($_smarty_tpl) {?><html>
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
            <div class="details_title middle_center bgcolor">投诉详情</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box">                                   
            <div class="details_content_text " >
                <ul>
                    <li class="details_content_text_title ">投诉标题：</li>
                    <li ><div class="details_content_text_con" id="biaoti"></div></li>
                </ul>
                <div class="clear"></div>
                <ul>
                    <li class="details_content_text_title ">事发时间：</li>
                    <li class="details_content_text_con " id="shifasj"></li>
                </ul>
                <div class="clear"></div>
                <ul>
                    <li class="details_content_text_title ">事发地址：</li>
                    <li class="details_content_text_con " id="shifadz"></li>
                </ul>
                <div class="clear"></div>
                <ul>
                    <li class="details_content_text_title ">投诉内容：</li>
                    <li class="details_content_text_con ">
                        <div class="qian" id="tousulr"></div>
                        <div class='shouqi  program_xqn' style="display: none">向上收起∧</div>
                    </li>
                </ul>
                <div class="clear"></div>
                <ul id="pic">
                    <li class="details_content_text_title ">相关图片：</li>
                    <li class="details_content_text_con ">
                        <div class="details_content_text_pic "></div>
                    </li>
                </ul>
                <div class="clear"></div>
                <ul>
                    <li class="details_content_text_title" >投诉编号：</li>
                    <li class="details_content_text_con " id="tousubh"></li>
                </ul>
                <div class="clear"></div>
                <ul>
                    <li class="details_content_text_title ">投诉时间：</li>
                    <li class="details_content_text_con " id="toususj"></li>
                </ul>                    
            </div> 
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
    </div>        
</div>
<script type="text/javascript">
    $(function () {
        var id = "<?php echo $_GET['id'];?>
";
        $.ajax({
            type: "POST",
            url: "../../../Complaints/ComplaintsDetailsAction/id/" + id,
            success: function (msg) {
                //alert(msg);                
                var data = JSON.parse(msg);
                $("#biaoti").html(data.title);
                $("#toususj").html(data.createtime);
                $("#shifadz").html(data.address);
                $("#tousulr").html(data.content);
                $("#biaoti").html(data.title);
                $("#tousubh").html(data.id);
                $("#shifasj").html(data.operationtime);
				//显示字数控制
				var maxwidth = 42;//设置最多显示的字数
				var text = $("#tousulr").html();				
				if ($(".qian").text().length > maxwidth) {
					$(".qian").text($(".qian").text().substring(0, maxwidth));
					$(".qian").html($(".qian").html() + "..." + "<div class='program_xqn '>显示全部∨</div>");
				}
				$(".qian").click(function () {
					$(this).text(text);
					$(".shouqi").show();
				});
				$(".shouqi").click(function () {                    
					var text = $(this).text();
					if ($(".qian").text().length > maxwidth) {
						$(".qian").text($(".qian").text().substring(0, maxwidth));
						$(".qian").html($(".qian").html() + "..." + "<div class='program_xqn'>显示全部∨</div>");
					}
					$(".shouqi").hide();
				});
                for (var i = 0; i <= 10; i++) {
                    if(data.picurls==null){
                        $("#pic").css("display","none");
                    }
                    $(".details_content_text_pic").prepend('<div><a href="' + data.picurls[i].largepic + '"><img src="' + data.picurls[i].largepic + '" width="60" height="60"></a></div>');
                }				

            }
        });


    });
</script>

    </body>
</html>
<?php }} ?>