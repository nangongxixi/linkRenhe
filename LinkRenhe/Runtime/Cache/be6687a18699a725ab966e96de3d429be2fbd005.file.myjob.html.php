<?php /* Smarty version Smarty-3.1.6, created on 2018-02-11 09:10:25
         compiled from "./LinkRenhe/Home/View\Myinfo\myjob.html" */ ?>
<?php /*%%SmartyHeaderCode:215315886b53866e624-32094792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be6687a18699a725ab966e96de3d429be2fbd005' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\myjob.html',
      1 => 1490955123,
      2 => 'file',
    ),
    'd87d1ed3ff78e70b598806f3c3e6afac92d9b891' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\feigebg.html',
      1 => 1490873794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '215315886b53866e624-32094792',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5886b5387dc02',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5886b5387dc02')) {function content_5886b5387dc02($_smarty_tpl) {?><html>
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
    <div id="contt" data-role="content" class="contt_padd">            
        <div class="top_lanm details_line">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">我的工作</div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
        <div id="navtabb">
            <ul class="title" >
                <li class="active"  id="nav0">全部</li>
                <li class="bgcolor" id="nav1">待审核</li>
                <li class="bgcolor" id="nav2">已审核</li>               
            </ul>          
            <ul>                
                <li>
                    <div class="content">
                        <div id="lei0" class="myjob_box" style="margin-bottom:5%"></div> 
                        <div class="lists"></div>
                    </div>                    
                </li>
                <li style="display:none">                                     
                    <div id="lei1" class="myjob_box" style="margin-bottom:5%"></div> 
                </li>
                <li style="display:none">                                    
                    <div id="lei2" class="myjob_box" style="margin-bottom:5%"></div> 
                </li>               
            </ul>
        </div>
    </div>
</div>
<script>
    $(function () {
        //已读未读
        $(document).on("click", ".myjobinfo", function () {
            var id = $(this).attr("msgid");
            $.ajax({
                type: "GET",
                url: "../myinfo/updatareadAction/id/" + id,
                success: function (msg) {
                    var data = JSON.parse(msg);
                    if (data.count == 0) {
                        $("#lei0").html("<p style='padding:10px 0px 25px 20px; color:#666'>暂无信息！</p>");
                    }
                }
            });
        });
        //默认显示
        $(".dropload-down").remove();
        var page = 0;
        $('.content').dropload({
            scrollArea: window,
            loadDownFn: function (me) {
                page++;
                // 拼接HTML
                var result = '';
                $.ajax({
                    type: "POST",
                    url: "../myinfo/myjobAction",
                    data: {
                        "id": 0,                       
                        "page": page
                    },
                    success: function (msg) { 
                        $(".feigcs_reddian").remove();
                        var msg = msg.replace(/\\n/gm, "<br>"); //把'\n'正则替换成'<br>'
                        var data = JSON.parse(msg);
                        if (data.count == 0) {
                            $("#lei0").html("<p style='padding:10px 0px 25px 20px; color:#666'>暂无信息！</p>");
                        }
                        var arrLen = data.datalist.length;
                        if (arrLen > 0) {
                            for (var i = 0; i < arrLen; i++) {
                                if (data.datalist[i].picurls != '') {
                                    var imgsrc = data.datalist[i].picurls[0].largepic;
                                    if (data.datalist[i].picurls[0].largepic == 'http://renheapp.sczmgk.com:5680/api/v1/Files?filename= ') {
                                        var imgsrc = "<?php echo @IMG_URL;?>
nopic.jpg";
                                    }
                                } else {
                                    var imgsrc = "<?php echo @IMG_URL;?>
nopic.jpg";
                                }
                                if (data.datalist[i].status == 7) {
                                    status = '待审核';
                                }else{
                                    status = '已处理';
                                }                              
                                result += '<a href="../myinfo/tousReview?id=' + data.datalist[i].id + '"><div class="kuan myjobinfo" msgid="' + data.datalist[i].msgid + '"><div class="wdinfo_pic left" isread='+data.datalist[i].isread+'><img src="' + imgsrc + '" width="55" height="55"></div><div class="myjob_text_box left"><div class="wdinfo_titile">' + data.datalist[i].title + '</div><div class="wdinfo_text">' + data.datalist[i].publishtime + '</div></div><div class="myjob_status right">' + status + '</div></div></a></div><div class="clear"></div><div class="news_nei_bottom"></div><div class="clear"></div>';                                
                            }
                        } else {
                            // 锁定
                            me.lock();
                            // 无数据
                            me.noData();
                        }
                        // 为了测试，延迟1秒加载
                        setTimeout(function () {
                            // 插入数据到页面，放到最后面
                            $("#lei0").append(result);
                            $(".wdinfo_pic[isread='0']").prepend('<div class="feigcs_reddian"></div>');
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



        $("#nav0").click(function () {
            $("#lei0").html("");
            $(".dropload-down").remove();
             var page = 0;
            $('.content').dropload({
                scrollArea: window,
                loadDownFn: function (me) {
                    page++;
                    // 拼接HTML
                    var result = '';
                    $.ajax({
                        type: "POST",
                        url: "../myinfo/myjobAction",
                        data: {
                            "id": 0,                       
                            "page": page
                        },
                        success: function (msg) { 
                            $(".feigcs_reddian").remove();
                            var msg = msg.replace(/\\n/gm, "<br>"); //把'\n'正则替换成'<br>'
                            var data = JSON.parse(msg);
                            if (data.count == 0) {
                                $("#lei0").html("<p style='padding:10px 0px 25px 20px; color:#666'>暂无信息！</p>");
                            }
                            var arrLen = data.datalist.length;
                            if (arrLen > 0) {
                                for (var i = 0; i < arrLen; i++) {
                                    if (data.datalist[i].picurls != '') {
                                        var imgsrc = data.datalist[i].picurls[0].largepic;
                                        if (data.datalist[i].picurls[0].largepic == 'http://renheapp.sczmgk.com:5680/api/v1/Files?filename= ') {
                                            var imgsrc = "<?php echo @IMG_URL;?>
nopic.jpg";
                                        }
                                    } else {
                                        var imgsrc = "<?php echo @IMG_URL;?>
nopic.jpg";
                                    }
                                    if (data.datalist[i].status == 7) {
                                        status = '待审核';
                                    }else{
                                        status = '已处理';
                                    }                              
                                    result += '<a href="../myinfo/tousReview?id=' + data.datalist[i].id + '"><div class="kuan myjobinfo" msgid="' + data.datalist[i].msgid + '"><div class="wdinfo_pic left" isread='+data.datalist[i].isread+'><img src="' + imgsrc + '" width="55" height="55"></div><div class="myjob_text_box left"><div class="wdinfo_titile">' + data.datalist[i].title + '</div><div class="wdinfo_text">' + data.datalist[i].publishtime + '</div></div><div class="myjob_status right">' + status + '</div></div></a></div><div class="clear"></div><div class="news_nei_bottom"></div><div class="clear"></div>';                                
                                }
                            } else {
                                // 锁定
                                me.lock();
                                // 无数据
                                me.noData();
                            }
                            // 为了测试，延迟1秒加载
                            setTimeout(function () {
                                // 插入数据到页面，放到最后面
                                $("#lei0").append(result);
                                $(".wdinfo_pic[isread='0']").prepend('<div class="feigcs_reddian"></div>');
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

        $("#nav1").click(function () {
            $("#lei1").html("");
            $(".dropload-down").remove();
             var page = 0;
            $('.content').dropload({
                scrollArea: window,
                loadDownFn: function (me) {
                    page++;
                    // 拼接HTML
                    var result = '';
                    $.ajax({
                        type: "POST",
                        url: "../myinfo/myjobAction",
                        data: {
                            "id": 1,                       
                            "page": page
                        },
                        success: function (msg) { 
                            $(".feigcs_reddian").remove();
                            var msg = msg.replace(/\\n/gm, "<br>"); //把'\n'正则替换成'<br>'
                            var data = JSON.parse(msg);
                            if (data.count == 0) {
                                $("#lei1").html("<p style='padding:10px 0px 25px 20px; color:#666'>暂无信息！</p>");
                            }
                            var arrLen = data.datalist.length;
                            if (arrLen > 0) {
                                for (var i = 0; i < arrLen; i++) {
                                    if (data.datalist[i].picurls != '') {
                                        var imgsrc = data.datalist[i].picurls[0].largepic;
                                        if (data.datalist[i].picurls[0].largepic == 'http://renheapp.sczmgk.com:5680/api/v1/Files?filename= ') {
                                            var imgsrc = "<?php echo @IMG_URL;?>
nopic.jpg";
                                        }
                                    } else {
                                        var imgsrc = "<?php echo @IMG_URL;?>
nopic.jpg";
                                    }
                                    if (data.datalist[i].status == 7) {
                                        status = '待审核';
                                    }else{
                                        status = '已处理';
                                    }                              
                                    result += '<a href="../myinfo/tousReview?id=' + data.datalist[i].id + '"><div class="kuan myjobinfo" msgid="' + data.datalist[i].msgid + '"><div class="wdinfo_pic left" isread='+data.datalist[i].isread+'><img src="' + imgsrc + '" width="55" height="55"></div><div class="myjob_text_box left"><div class="wdinfo_titile">' + data.datalist[i].title + '</div><div class="wdinfo_text">' + data.datalist[i].publishtime + '</div></div><div class="myjob_status right">' + status + '</div></div></a></div><div class="clear"></div><div class="news_nei_bottom"></div><div class="clear"></div>';                                
                                }
                            } else {
                                // 锁定
                                me.lock();
                                // 无数据
                                me.noData();
                            }
                            // 为了测试，延迟1秒加载
                            setTimeout(function () {
                                // 插入数据到页面，放到最后面
                                $("#lei1").append(result);
                                $(".wdinfo_pic[isread='0']").prepend('<div class="feigcs_reddian"></div>');
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

        $("#nav2").click(function () {
            $("#lei2").html("");
            $(".dropload-down").remove();
             var page = 0;
            $('.content').dropload({
                scrollArea: window,
                loadDownFn: function (me) {
                    page++;
                    // 拼接HTML
                    var result = '';
                    $.ajax({
                        type: "POST",
                        url: "../myinfo/myjobAction",
                        data: {
                            "id": 2,                       
                            "page": page
                        },
                        success: function (msg) { 
                            $(".feigcs_reddian").remove();
                            var msg = msg.replace(/\\n/gm, "<br>"); //把'\n'正则替换成'<br>'
                            var data = JSON.parse(msg);
                            if (data.count == 0) {
                                $("#lei2").html("<p style='padding:10px 0px 25px 20px; color:#666'>暂无信息！</p>");
                            }
                            var arrLen = data.datalist.length;
                            if (arrLen > 0) {
                                for (var i = 0; i < arrLen; i++) {
                                    if (data.datalist[i].picurls != '') {
                                        var imgsrc = data.datalist[i].picurls[0].largepic;
                                        if (data.datalist[i].picurls[0].largepic == 'http://renheapp.sczmgk.com:5680/api/v1/Files?filename= ') {
                                            var imgsrc = "<?php echo @IMG_URL;?>
nopic.jpg";
                                        }
                                    } else {
                                        var imgsrc = "<?php echo @IMG_URL;?>
nopic.jpg";
                                    }
                                    if (data.datalist[i].status == 7) {
                                        status = '待审核';
                                    }else{
                                        status = '已处理';
                                    }                              
                                    result += '<a href="../myinfo/tousReview?id=' + data.datalist[i].id + '"><div class="kuan myjobinfo" msgid="' + data.datalist[i].msgid + '"><div class="wdinfo_pic left" isread='+data.datalist[i].isread+'><img src="' + imgsrc + '" width="55" height="55"></div><div class="myjob_text_box left"><div class="wdinfo_titile">' + data.datalist[i].title + '</div><div class="wdinfo_text">' + data.datalist[i].publishtime + '</div></div><div class="myjob_status right">' + status + '</div></div></a></div><div class="clear"></div><div class="news_nei_bottom"></div><div class="clear"></div>';                                
                                }
                            } else {
                                // 锁定
                                me.lock();
                                // 无数据
                                me.noData();
                            }
                            // 为了测试，延迟1秒加载
                            setTimeout(function () {
                                // 插入数据到页面，放到最后面
                                $("#lei2").append(result);
                                $(".wdinfo_pic[isread='0']").prepend('<div class="feigcs_reddian"></div>');
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

    $("#navtabb .title li").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
        var index = $(this).index();
        var li = $(this).parent().next().children();
        $(li[index]).show().siblings().hide();
    });

</script>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        
    </body>
</html>
<?php }} ?>