<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 11:26:56
         compiled from "./LinkRenhe/Home/View\Myinfo\mycollection.html" */ ?>
<?php /*%%SmartyHeaderCode:1759587da1d14dae71-17039440%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b80492c1c8e9a644b89c7cbaaa6862db7d21df1' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\mycollection.html',
      1 => 1490844407,
      2 => 'file',
    ),
    '08d8e2490653c736451d13f779c2958d7a7fa5a6' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1759587da1d14dae71-17039440',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587da1d168577',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587da1d168577')) {function content_587da1d168577($_smarty_tpl) {?><html>
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
    <div id="contt" data-role="content"> 
        <div class="top_lanm">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor" id="newstitle">我的收藏</div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div> 
        <div class="sear_box">
            <input type="text" value=""  placeholder="请输入关键字…" class="sear" id="sear"/>
            <!--<a href="#"><div class="sear_fd"><img src="<?php echo @IMG_URL;?>
sear.png" height="16" width="16"></div></a>-->
        </div> 
        <div class="clear"></div>
        <div class="myjob_box"> 
            <div id="navtab">
                <ul class="title mycollection_line" >
                    <li class="active" id="all0">全部</li>
                    <li id="all1">新闻</li>
                    <li id="all2">公告</li>
                    <li id="all14">指南</li>
                </ul>            
                <ul class="lilie">
                    <li>
                        <div class="myjob_box">
                            <div id="lei0"></div>                                              
                        </div>
                    </li>
                    <li style="display:none">
                        <div class="myjob_box">
                            <div id="lei1"></div>                                              
                        </div>
                    </li>
                    <li style="display:none">
                        <div class="myjob_box">
                            <div id="lei2"></div>                                              
                        </div> 
                    </li>
                    <li style="display:none">
                        <div class="myjob_box">
                            <div id="lei14"></div>                                              
                        </div>  
                    </li>
                </ul>
                <div class="clear"></div>        
            </div>
        </div>       
    </div>
</div>
<script type="text/javascript">

    $('#sear').keypress(function (event) {
        var keyword = $("#sear").val();
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            $.ajax({
                type: "GET",
                url: "../myinfo/mycollNewsSearList/keyword/" + keyword,
                success: function (msg) {
                    $("#newstitle").html("搜索结果");
                    $(".myjob_box").html("");
                    $(".sear_box").hide();
                    var data = JSON.parse(msg);
                    for (var i = 0; i <= data.datalist.length; i++) {
                        $(".myjob_box").prepend("<a href='../news/shownews/dl/0/id/" + data.datalist[i].id + "'><div class='wdinfo_pic left'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86'></div><div class='news_nei_text'><div class='wdinfo_titile mycollection_title titlensea" + i + "'>" + data.datalist[i].title + "</div><div class='news_date'><span class='laiyuan" + i + "'>" + data.datalist[i].origin + '</span> ' + data.datalist[i].publishtime + "</div></div></a><div class='clear'></div><div class='news_bottom_nei'></div><div class='clear'></div>");
                        if ($(".titlensea" + i).text().length > 10) {
                            $(".titlensea" + i).text($(".titlensea" + i).text().substring(0, 10));
                            $(".titlensea" + i).html($(".titlensea" + i).html() + "...");
                        }
                        if ($(".laiyuan" + i).text().length > 5) {
                            $(".laiyuan" + i).text($(".laiyuan" + i).text().substring(0, 5));
                            $(".laiyuan" + i).html($(".laiyuan" + i).html() + "...");
                        }
                        if (data.datalist[i].picurls[0].largepic == '') {
                            $(".wdinfo_pic img").attr("src", '<?php echo @IMG_URL;?>
nopic.jpg');
                        }
                    }
                }
            });
        }
    });

    $(function () {
        $("#navtab .title li").click(function () {
            $(this).addClass("active").siblings().removeClass("active");
            var index = $(this).index();
            var li = $(this).parent().next().children();
            $(li[index]).show().siblings().hide();
            //var lid = $(".active").attr("id");            
        });

        $.ajax({
            type: "GET",
            url: "../myinfo/myCollectionAction/id/0",
            success: function (msg) {			
                var data = JSON.parse(msg);
                //var liNum = $(".lilie>li").index();
                if (data.datalist == '') {
                    $("#lei0").html("<p style='padding:10px 0px 25px 20px; color:#666'>暂无信息！</p>");
                }
				
                for (var i = 0; i < data.datalist.length; i++) {
                    $("#lei0").prepend("\
                            <a href='../news/shownews/dl/"+data.datalist[i].modeltype+"/id/" + data.datalist[i].id + "'><div class='wdinfo'><div class='wdinfo_pic left'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86'></div><div class='news_nei_text'><div class='wdinfo_titile titlen0" + i + " mycollection_title'>" + data.datalist[i].title + "</div><div class='news_date'><span class='laiyuana" + i + "'>" + data.datalist[i].origin + '</span> ' + data.datalist[i].publishtime + "</div></div></div></a><div class='clear'></div><div class='news_bottom_nei '></div><div class='clear'></div> ");
                    if ($(".titlen0" + i).text().length > 10) {
                        $(".titlen0" + i).text($(".titlen0" + i).text().substring(0, 10));
                        $(".titlen0" + i).html($(".titlen0" + i).html() + "...");
                    }
                    if ($(".laiyuana" + i).text().length > 5) {
                            $(".laiyuana" + i).text($(".laiyuana" + i).text().substring(0, 5));
                            $(".laiyuana" + i).html($(".laiyuana" + i).html() + "...");
                        }
                    if (data.datalist[i].picurls[0].largepic == '') {
                        $(".wdinfo_pic img").attr("src", '<?php echo @IMG_URL;?>
nopic.jpg');
                    }
                }
            }
        });

        $("#all0").click(function () {
            $("#lei0").html("");
            $.ajax({
                type: "GET",
                url: "../myinfo/myCollectionAction/id/0",
                success: function (msg) {
                    var data = JSON.parse(msg);
                    //var liNum = $(".lilie>li").index();
                    if (data.datalist == '') {
                        $("#lei0").html("<p style='padding:10px 0px 25px 20px; color:#666'>暂无信息！</p>");
                    }
                    for (var i = 0; i < data.datalist.length; i++) {
                        $("#lei0").prepend("\
                            <a href='../news/shownews/dl/0/id/" + data.datalist[i].id + "'><div class='wdinfo'><div class='wdinfo_pic left'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86'></div><div class='news_nei_text'><div class='wdinfo_titile titlen00" + i + " mycollection_title'>" + data.datalist[i].title + "</div><div class='news_date'><span class='laiyuanb" + i + "'>" + data.datalist[i].origin + '</span> ' + data.datalist[i].publishtime + "</div></div></div></a><div class='clear'></div><div class='news_bottom_nei '></div><div class='clear'></div> ");
                        if ($(".titlen00" + i).text().length > 10) {
                            $(".titlen00" + i).text($(".titlen00" + i).text().substring(0, 10));
                            $(".titlen00" + i).html($(".titlen00" + i).html() + "...");
                        }
                        if ($(".laiyuanb" + i).text().length > 5) {
                            $(".laiyuanb" + i).text($(".laiyuanb" + i).text().substring(0, 5));
                            $(".laiyuanb" + i).html($(".laiyuanb" + i).html() + "...");
                        }
                        if (data.datalist[i].picurls[0].largepic == '') {
                            $(".wdinfo_pic img").attr("src", '<?php echo @IMG_URL;?>
nopic.jpg');
                        }
                    }
                }
            });
        });

        $("#all1").click(function () {
            $("#lei1").html("");
            $.ajax({
                type: "GET",
                url: "../myinfo/myCollectionAction/id/1",
                success: function (msg) {
                    var data = JSON.parse(msg);
                    //var liNum = $(".lilie>li").index();
                    if (data.datalist == '') {
                        $("#lei1").html("<p style='padding:10px 0px 25px 20px; color:#666'>暂无信息！</p>");
                    }
                    for (var i = 0; i < data.datalist.length; i++) {
                        $("#lei1").prepend("\
                            <a href='../news/shownews/dl/1/id/" + data.datalist[i].id + "'><div class='wdinfo'><div class='wdinfo_pic left'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86'></div><div class='news_nei_text'><div class='wdinfo_titile titlen1" + i + " mycollection_title'>" + data.datalist[i].title + "</div><div class='news_date'><span class='laiyuanc" + i + "'>" + data.datalist[i].origin + '</span> ' + data.datalist[i].publishtime + "</div></div></div></a><div class='clear'></div><div class='news_bottom_nei '></div><div class='clear'></div> ");
                        if ($(".titlen1" + i).text().length > 10) {
                            $(".titlen1" + i).text($(".titlen1" + i).text().substring(0, 10));
                            $(".titlen1" + i).html($(".titlen1" + i).html() + "...");
                        }
                        if ($(".laiyuanc" + i).text().length > 5) {
                            $(".laiyuanc" + i).text($(".laiyuanc" + i).text().substring(0, 5));
                            $(".laiyuanc" + i).html($(".laiyuanc" + i).html() + "...");
                        }
                        if (data.datalist[i].picurls[0].largepic == '') {
                            $(".wdinfo_pic img").attr("src", '<?php echo @IMG_URL;?>
nopic.jpg');
                        }
                    }
                }
            });
        });

        $("#all2").click(function () {
            $("#lei2").html("");
            $.ajax({
                type: "GET",
                url: "../myinfo/myCollectionAction/id/2",
                success: function (msg) {
                    var data = JSON.parse(msg);
                    //var liNum = $(".lilie>li").index();
                    if (data.datalist == '') {
                        $("#lei2").html("<p style='padding:10px 0px 25px 20px; color:#666'>暂无信息！</p>");
                    }
                    for (var i = 0; i < data.datalist.length; i++) {
                        $("#lei2").prepend("\
                            <a href='../news/shownews/dl/2/id/" + data.datalist[i].id + "'><div class='wdinfo'><div class='wdinfo_pic left'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86'></div><div class='news_nei_text'><div class='wdinfo_titile titlen2" + i + " mycollection_title'>" + data.datalist[i].title + "</div><div class='news_date'><span class='laiyuand" + i + "'>" + data.datalist[i].origin + '</span> ' + data.datalist[i].publishtime + "</div></div></div></a><div class='clear'></div><div class='news_bottom_nei '></div><div class='clear'></div> ");
                        if ($(".titlen2" + i).text().length > 10) {
                            $(".titlen2" + i).text($(".titlen2" + i).text().substring(0, 10));
                            $(".titlen2" + i).html($(".titlen2" + i).html() + "...");
                        }
                        if ($(".laiyuand" + i).text().length > 5) {
                            $(".laiyuand" + i).text($(".laiyuand" + i).text().substring(0, 5));
                            $(".laiyuand" + i).html($(".laiyuand" + i).html() + "...");
                        }
                        if (data.datalist[i].picurls[0].largepic == '') {
                            $(".wdinfo_pic img").attr("src", '<?php echo @IMG_URL;?>
nopic.jpg');
                        }
                    }
                }
            });
        });

        $("#all14").click(function () {
            $("#lei14").html("");
            $.ajax({
                type: "GET",
                url: "../myinfo/myCollectionAction/id/14",
                success: function (msg) {
                    var data14 = JSON.parse(msg);
                    //var liNum = $(".lilie>li").index();
                    if (data14.datalist == '') {
                        $("#lei14").html("<p style='padding:10px 0px 25px 20px; color:#666'>暂无信息！</p>");
                    }


                    for (var i = 0; i < data14.datalist.length; i++) {

                        $("#lei14").prepend("\
                            <a href='../news/shownews/dl/14/id/" + data14.datalist[i].id + "'><div class='wdinfo'><div class='wdinfo_pic left'><img src='" + data14.datalist[i].picurls[0].largepic + "' width='120' height='86'></div><div class='news_nei_text'><div class='wdinfo_titile titlen14" + i + " mycollection_title'>" + data14.datalist[i].title + "</div><div class='news_date'><span class='laiyuane" + i + "'>" + data14.datalist[i].origin + '</span> ' + data14.datalist[i].publishtime + "</div></div></div></a><div class='clear'></div><div class='news_bottom_nei '></div><div class='clear'></div> ");
                        if ($(".titlen14" + i).text().length > 10) {
                            $(".titlen14" + i).text($(".titlen14" + i).text().substring(0, 10));
                            $(".titlen14" + i).html($(".titlen14" + i).html() + "...");
                        }
                        if ($(".laiyuane" + i).text().length > 5) {
                            $(".laiyuane" + i).text($(".laiyuane" + i).text().substring(0, 5));
                            $(".laiyuane" + i).html($(".laiyuane" + i).html() + "...");
                        }
                        if (data14.datalist[i].picurls[0].largepic == '') {
                            $(".wdinfo_pic img").attr("src", '<?php echo @IMG_URL;?>
nopic.jpg');
                        }
                    }
                }
            });
        });

    });
</script>


    </body>
</html>
<?php }} ?>