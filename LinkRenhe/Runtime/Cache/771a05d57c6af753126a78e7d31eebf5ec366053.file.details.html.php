<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 16:21:59
         compiled from "./LinkRenhe/Home/View\Complaints\details.html" */ ?>
<?php /*%%SmartyHeaderCode:31360587da28ec9fb44-56604360%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '771a05d57c6af753126a78e7d31eebf5ec366053' => 
    array (
      0 => './LinkRenhe/Home/View\\Complaints\\details.html',
      1 => 1490862117,
      2 => 'file',
    ),
    '08d8e2490653c736451d13f779c2958d7a7fa5a6' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31360587da28ec9fb44-56604360',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587da28edd064',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587da28edd064')) {function content_587da28edd064($_smarty_tpl) {?><html>
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
        <div class="top_lanm details_line bgcolor">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">投诉详情</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box"> 
            <a href="#"> 
                <div class="details_content_text">                           
                    投诉标题：<span id="biaoti"></span><br>投诉编号：<span id="tousubh"></span><br>投诉时间：<span id="toususj"></span>
                </div>
            </a>
            <div class="clear"></div>           
            <div class="clear"></div>
            <div class="middle_center navtab_button_box">                
                <a href="../../../complaints/detailsDes/id/<?php echo $_GET['id'];?>
"><div class="details_button right" >更多信息</div></a>
                <a href="" id="ahref"><div class="details_button right" style="display: none" id="hree">处理结果</div></a>                
            </div>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div> 
        <div class="myjob_box">
            <div class="details_jindu details_line">
                <span class="red_block left"><img src="<?php echo @IMG_URL;?>
09.png"></span>
                进度追踪
            </div>
            <div class="clear"></div>
            <div class="only_line"></div>        
            <div class="clear"></div>
            <div class="program_box middle_center" style="display:none">            
                <ul>               
                    <li> 
                        <div class="tscl_content_box">                            
                            <div class="program_text huixian2">                         
                                <div class="xian_juli">
                                    <div id="chulizt"></div>
                                    <div id="xqxians" style="display:none">
                                        <a href="../../../complaints/chuliyijian/id/" id="xqhref">
                                            <div class="program_xq">
                                                <div class="left">详情</div><div class="left"><img src="<?php echo @IMG_URL;?>
more1.png"></div>
                                            </div>
                                        </a>
                                    </div>                                   
                                    <span id="chuliyj"></span><br><span id="chulisj"></span>
                                </div>                                
                            </div>
                        </div>
                        <div id="lei1"></div>                                                
                    </li>
                </ul>            
            </div>
            <div class="clear"></div>
        </div>
    </div>        
</div>
<script type="text/javascript">
    $(function () {
        var id = "<?php echo $_GET['id'];?>
";
        $.ajax({
            type: "GET",
            url: "../../../Complaints/ComplaintsDetailsAction/id/" + id,
            success: function (msg) {
                //alert(msg);                
                var data = JSON.parse(msg);
                $("#biaoti").html(data.title);
                $("#tousubh").html(data.id);
                $("#toususj").html(data.createtime);
                if (data.status == 4 || data.status == 5 || data.status == 8) {
                    $("#hree").css("display", "block");
                }
            }
        });
        //处理进度
        $.ajax({
            type: "GET",
            url: "../../../Complaints/ComplaintsTimelineAction/id/" + id,
            success: function (msg) {
                var data = JSON.parse(msg);
                $("#ahref").attr("href", "../../../complaints/opinions/id/" + data.datalist[0].stepid + "/pid/" + "<?php echo $_GET['id'];?>
");//给“处理结果”按钮赋值
                //显示“更多”按钮并且给其赋值
                if (data.datalist[0].status != 0) {
                    $("#xqxians").css("display", "block");
                    $("#xqhref").attr("href", "../../../complaints/chuliyijian/id/" + data.datalist[0].stepid);
                }
                $("#chulizt").html(data.datalist[0].stepname);
                $("#chuliyj").html(data.datalist[0].remark);
                if ($("#chuliyj").text().length > 10) {
                    $("#chuliyj").text($("#chuliyj").text().substring(0, 10));
                    $("#chuliyj").html($("#chuliyj").html() + "...");
                }
                $("#chulisj").html(data.datalist[0].time);
				//展示进度信息
				if(data.result!=0){
					$(".program_box").css("display","block");
				}
				for (var i = 1; i <= data.datalist.length; i++) {				
					$("#lei1").prepend("<div class='tscl_content_box'><div class='program_text text_color huixian'><div class='xian_juli'>" + data.datalist[i].stepname + "<br /><div class='laiyuan" + i + "'>" + data.datalist[i].remark + "</div>" + data.datalist[i].time + "</div></div></div>");
					if ($(".laiyuan" + i).text().length > 10) {
						$(".laiyuan" + i).text($(".laiyuan" + i).text().substring(0, 10));
						$(".laiyuan" + i).html($(".laiyuan" + i).html() + "...");
					}
				}
				
            }
        });
        $("#navtab .title li").hover(function () {
            $(this).addClass("active").siblings().removeClass("active");
            var index = $(this).index();
            var li = $(this).parent().next().children();
            $(li[index]).show().siblings().hide();
        });
    });
</script>

    </body>
</html>
<?php }} ?>