<?php /* Smarty version Smarty-3.1.6, created on 2018-02-08 15:45:28
         compiled from "./LinkRenhe/Home/View\News\newsSearResult.html" */ ?>
<?php /*%%SmartyHeaderCode:7035587d914d42e255-72668867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47a07ffc26b7355a06d49a415a0f26c089e5578e' => 
    array (
      0 => './LinkRenhe/Home/View\\News\\newsSearResult.html',
      1 => 1490956054,
      2 => 'file',
    ),
    'd87d1ed3ff78e70b598806f3c3e6afac92d9b891' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\feigebg.html',
      1 => 1490873794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7035587d914d42e255-72668867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d914d55ed5',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d914d55ed5')) {function content_587d914d55ed5($_smarty_tpl) {?><html>
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
        <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
dropload.css" />
        <script type="text/javascript" src="<?php echo @JS_URL;?>
zepto.min.js"></script>
        <script type="text/javascript" src="<?php echo @JS_URL;?>
dropload.min.js"></script>	
        <script type="text/javascript" src="<?php echo @JS_URL;?>
layer.js"></script>        
    </head>
    <body >        
        


<style>
    .content{       
        margin: 0 auto       
    }
    .content .item{
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align:center;
        -webkit-box-align:center;
        box-align:center;
        -webkit-align-items:center;
        align-items:center;
        padding:3.125%;
        border-bottom: 1px solid #ddd;
        color: #333;
        text-decoration: none;
    }
    .content .item img{
        display: block;
        width: 40px;
        height: 40px;
        border:1px solid #ddd;
    }
    .content .item h3{
        display: block;
        -webkit-box-flex: 1;
        -webkit-flex: 1;
        -ms-flex: 1;
        flex: 1;
        width: 100%;
        max-height: 40px;
        overflow: hidden;
        line-height: 20px;
        margin: 0 10px;
        font-size: 1.2rem;
    }
    .content .item .date{
        display: block;
        height: 20px;
        line-height: 20px;
        color: #999;
    }
    .opacity{
        -webkit-animation: opacity 0.3s linear;
        animation: opacity 0.3s linear;
    }
    @-webkit-keyframes opacity {
        0% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    }
    @keyframes opacity {
        0% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    }
</style>

<div id="page1" data-role="page">
    <div id="contt" data-role="content">  
        <div class="top_lanm">
            <div class="return_img">                
                <a href="javascript:window.location.href = document.referrer;"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a>
            </div>
            <div class="details_title middle_center bgcolor" id="newstitle">新闻搜索</div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div> 
        <div class="sear_box">
            <input type="text" value="" placeholder="搜索…" class="sear" id="sear"/>
            <a href="#"><div class="sear_fd"><img src="<?php echo @IMG_URL;?>
sear.png" height="16" width="16" id="searImg"></div></a>
        </div>
        <div class="clear"></div>
        <div class="myjob_box">            
            <div class="content">
                <div id="wrapper"></div> 
                <div class="lists"></div>
            </div>            
        </div>
        <div class="clear"></div>
        <ul>
            <div id="lei1">
                <div class="nosear middle_center"><img src="<?php echo @IMG_URL;?>
nosear.png"></div>
            </div>        
        </ul>
    </div>
</div>



<script type="text/javascript">
    $(function () {
        $(".sear_fd").toggleClass("sear_fd_mov");
        $(".sear").toggleClass("sear_mov");
        $("#lei1").css("display", "none");
        $("#sear").focus();
        $(".myjob_box").css("background-color", "#f1f1f1");
        //拉数据
        //页数 
        $("#searImg").on("click", function () {
            $(".myjob_box").css("background-color", "#fff");
            $("#wrapper").html("");
            $(".dropload-down").remove();
            var keyword = $("#sear").val();
            var typeid = sessionStorage.getItem("typeid");
            //alert(typeid);
            var page = 0;
            $('.content').dropload({
                scrollArea: window,
                loadDownFn: function (me) {
                    page++;
                    // 拼接HTML
                    var result = '';
                    $.ajax({
                        type: "POST",
                        url: "../news/newsSearList",
                        data: {
                            "keyword": keyword,
                            "typeid": typeid,
                            "page": page
                        },
                        success: function (msg) {
                            var msg = msg.replace(/\\n/gm, "<br>"); //把'\n'正则替换成'<br>'
                            var data = JSON.parse(msg);
                            /*
                             if (data.datalist == '') {
                             $("#wrapper").html("");
                             $("#wrapper").prepend("<div style='color:#666;text-align:center; line-height:300%'>暂无搜索结果</div>");
                             }
                             */
                            var arrLen = data.datalist.length;
                            if (arrLen > 0) {
                                for (var i = 0; i < arrLen; i++) {
                                    result += '<a href="../news/shownews?id=' + data.datalist[i].id + '&dl=' + data.datalist[i].modeltype + '" style="margin:20px 0px; display: block"><div class="wdinfo_pic left"><img src="' + data.datalist[i].picurls[0].largepic + '" width="120" height="86"></div><div class="news_nei_text"><div class="wdinfo_titile mycollection_title">' + data.datalist[i].title + '</div><div class="news_date">' + data.datalist[i].publishtime + '</div></div></a><div class="clear"></div><div class="news_bottom_nei"></div></a><div class="clear"></div>';
                                }
                                ;
                            } else {
                                // 锁定
                                me.lock();
                                // 无数据
                                me.noData();
                            }
                            // 为了测试，延迟1秒加载
                            setTimeout(function () {
                                // 插入数据到页面，放到最后面
                                $("#wrapper").append(result);
                                // 每次数据插入，必须重置
                                me.resetload();
                            }, 1000);
                        },
                        error: function (xhr, type) {
                            alert('Ajax error!');
                            // 即使加载出错，也得重置
                            me.resetload();
                        }
                    });
                }
            });
        });
    });
    $('#sear').keypress(function (event) {
        var keyword = $("#sear").val();
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if (keycode == '13') {
            $.ajax({
                type: "GET",
                url: "../news/newsSearList/keyword/" + keyword,
                success: function (msg) {
                    //alert(msg);
                    $("#newstitle").html("搜索结果");
                    //$(".sear_box").hide();
                    $("#wrapper").css("display", "block");
                    //$("#wrapper>ul>li").addClass("myjob_box");
                    var data = JSON.parse(msg);
                    if (data.datalist == '') {
                        $("#wrapper ul").html("");
                        $("#wrapper ul").prepend("<li><div style='color:#666;text-align:center; line-height:300%'>暂无搜索结果</div></li>");
                    }
                    for (var i = 0; i < data.datalist.length; i++) {
                        $("#wrapper ul").prepend('<li><a href="../news/shownews?id=' + data.datalist[i].id + '"><img src="' + data.datalist[i].picurls[0].largepic + '" width="120" height="86"><div class="game-info"><h1>' + data.datalist[i].title + '</h1><div class="game-info_p">' + data.datalist[i].origin + ' ' + data.datalist[i].publishtime + '</div></div></a></li>');
                        if ($(".titlen00" + i).text().length > 10) {
                            $(".titlen00" + i).text($(".titlen00" + i).text().substring(0, 10));
                            $(".titlen00" + i).html($(".titlen00" + i).html() + "...");
                        }
                        if ($(".laiyuanb" + i).text().length > 5) {
                            $(".laiyuanb" + i).text($(".laiyuanb" + i).text().substring(0, 5));
                            $(".laiyuanb" + i).html($(".laiyuanb" + i).html() + "...");
                        }
                        if (data.datalist[i].picurls[0].largepic == '') {
                            $(".wdinfo_pic img").attr("src", '{$smarty.const.IMG_URL}nopic.jpg');
                        }
                    }
                }
            });
        }
    });


</script>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        
    </body>
</html>
<?php }} ?>