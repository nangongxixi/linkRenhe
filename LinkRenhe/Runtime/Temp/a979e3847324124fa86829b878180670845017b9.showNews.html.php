<?php /*%%SmartyHeaderCode:56805877406f2820b3-46852895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a979e3847324124fa86829b878180670845017b9' => 
    array (
      0 => './LinkRenhe/Home/View\\News\\showNews.html',
      1 => 1484126882,
      2 => 'file',
    ),
    '41f95adb5947cca4cb069155c1c658a77c2a148b' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultJamp.html',
      1 => 1483075932,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56805877406f2820b3-46852895',
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5877406f4c81c',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5877406f4c81c')) {function content_5877406f4c81c($_smarty_tpl) {?><html>
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
        <meta name="keywords" content="仁和信访" />
        <meta name="description" content="仁和信访"/>
        <title>"仁和信访"</title>
        <link type="text/css" rel="stylesheet" href="/./Public/Home/css/style.css" />
        <link type="text/css" rel="stylesheet" href="/./Public/Home/css/bottom.css" />     
        <script type="text/javascript" src="/./Public/Home/js/jquery1.4.2.min.js"></script>
        <script type="text/javascript" src="/./Public/Home/js/banner.js"></script>       

        <script type="text/javascript" src="/./Public/Home/js/jquery-2.1.0.min.js"></script>
        <link rel="stylesheet" href="/./Public/Home/css/layer.css" />
        <script type="text/javascript" src="/./Public/Home/js/fastclick.js"></script>
        <script type="text/javascript" src="/./Public/Home/js/layer.js"></script>
        <!--图片上传-->
        <script type='text/javascript' src='/./Public/lib/js/upload_js/jquery-2.0.3.min.js'></script>
        <script type='text/javascript' src='/./Public/lib/js/upload_js/LocalResizeIMG.js'></script>
        <script type='text/javascript' src='/./Public/lib/js/upload_js/patch/mobileBUGFix.mini.js'></script>
        <!--时间选择-->
        <script type='text/javascript' src='/./Public/lib/js/timechoose.js'></script>
        <link rel="stylesheet" href="/./Public/Home/css/timechoose.css" />       
        
    </head>
    <body >
        
<div id="page1" data-role="page">
    <div id="contt" data-role="content" class="contt_padd"> 
        <div class="top_lanm">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="/./Public/Home/img/return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">
                内容详情                                                                
            </div>
            <div class="share right">
                <div class="collection_ico left"><img src="/./Public/Home/img/nocollection.png" height="20" id='collen'></div>
                <div class="left"><img src="/./Public/Home/img/share.png" height="20" class="share_code"></div>
            </div>
        </div>
        <div class="clear"></div> 
        <div class="news_lanm_content_line"></div>
        <div class="clear"></div>        
        <div class="myjob_box"> 
            <div class="news_lanm_content_title"></div> 
            <div class="clear"></div>
            <div class="shownews_date">
                 . :
            </div>
            <div class="news_content_text"><br></div>
        </div>        
    </div>
</div>
<div class="bshare-custom">
    <a title="分享到QQ空间" class="bshare-qzone"></a>
    <a title="分享到新浪微博" class="bshare-sinaminiblog">        
    </a><a title="分享到人人网" class="bshare-renren"></a>
    <a title="分享到腾讯微博" class="bshare-qqmb"></a>
    <a title="分享到网易微博" class="bshare-neteasemb"></a>
    <a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a>
    <span class="BSHARE_COUNT bshare-share-count">0</span>
</div>
<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script>
<script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
<script>
    $("#collen").on("click", function () {
        var userid = "";
        var newid = "";
        if (userid == '') {
            layer.open({
                content: '登录后才可以操作',
                time: 2,
                shadeClose: true
            });
        } else {
            $.ajax({
                type: "GET",
                url: "../../../../../news/addCollect/newid/" + newid,
                success: function (msg) {
                    //alert(msg);
                    if (msg == 1) {
                        layer.open({
                            content: '添加收藏成功',
                            time: 2,
                            shadeClose: true
                        });
                        $("#collen").attr("src", "/./Public/Home/img/collection.png");
                    } else {                        
                        //alert(newid);                        
                        $.ajax({
                            type: "GET",
                            url: "../../../../../news/cancelCollect/newid/" + newid,
                            success: function (msg) {
                                if (msg == 1) {
                                    layer.open({
                                        content: '取消收藏成功',
                                        time: 2,
                                        shadeClose: true
                                    });
                                    $("#collen").attr("src", "/./Public/Home/img/nocollection.png");
                                }
                            }
                        });
                    }

                }
            });



        }




    });
    $(function () {
        $.ajax({
            type: "POST",
            url: "../../../../../news/showNews"
        });
    });


    $(".share_code").click(function () {
        $(".bshare-custom").toggle();
    });
</script>



    </body>
</html>
<?php }} ?>