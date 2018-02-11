<?php /*%%SmartyHeaderCode:177715877409271dce3-30147968%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0c3ca813cdc82b15b9783553c074358b1fea4a' => 
    array (
      0 => './LinkRenhe/Home/View\\News\\newslist.html',
      1 => 1484270214,
      2 => 'file',
    ),
    '433c4f0ca31e2586bef63d1c5c407cbc03822c95' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\loadmore.html',
      1 => 1483081420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177715877409271dce3-30147968',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58782a9c361aa',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58782a9c361aa')) {function content_58782a9c361aa($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <title>pull to refresh</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="keywords" content="仁和信访" />
        <meta name="description" content="仁和信访"/>
        <title>"仁和信访"</title>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">   
        <link rel="stylesheet" href="/./Public/Home/css/loadmore/pullToRefresh.css"/>
        <link type="text/css" rel="stylesheet" href="/./Public/Home/css/style.css" />
        <script src="/./Public/Home/js/loadmore/iscroll.js"></script>
        <script src="/./Public/Home/js/loadmore/pullToRefresh.js"></script>
        <script type="text/javascript" src="/./Public/Home/js/jquery-2.1.0.min.js"></script>
        
        <style type="text/css" media="all">
            body, html {
                padding: 0;
                margin: 0;
                height: 100%;
                font-family: Arial, Microsoft YaHei;
                color: #111;
            }
            .scroller li {
                height:86px;
                border-bottom: 1px solid #eee;
                background-color: #fff;
                font-size: 14px;
                padding:3.5% 0;
                width:640px
            }
            .pullDownLabel img {
                width: 13px;
                height: 13px;
                margin-top: -1px;
                vertical-align: -2px;
                margin-right: 5px;
            }
            #wrapper ul li img{width:120px; float:left;  margin-left:10px;}
            .game-info{text-align:left; float:left; margin-left:10px; width:210px; overflow:hidden; height:80px; position: relative}
            .game-info h1{font-size:16px; margin-bottom:8px; color:#333; font-weight: normal}
            .game-info_p{font-size:12px; color:#B6B6B6;line-height: 100%;position: absolute;bottom:0}           
            #wrapper ul li button{position:absolute; right:20px; margin-top:10px; background-color:#F8CD0C; border:0; color:#fff; font-family:Microsoft YaHei; padding:5px 14px; border-radius:3px;}
        </style>
        
    </head>
    <body >        
        
<!--must content ul li,or shoupi-->
<div id="page1" data-role="page">
    <div id="contt" data-role="content"> 
        <div class="top_lanm">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="/./Public/Home/img/return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor" id="newstitle">新闻动态</div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div> 
        <div class="sear_box" >
            <input type="text" value=""  placeholder="请输入关键字…" class="sear" id="sear"/>
            <!--<a href="#"><div class="sear_fd"><img src="/./Public/Home/img/sear.png" height="16" width="16"></div></a>-->            
        </div> 
        <div style="display: none" id="idval">2</div>
        <div class="clear"></div> 
        <div id="wrapper">
            <ul>
                                <li>                    
                    <a href="../news/shownews?id=25">
                        <img src="http://192.168.0.187:8088/api/v1/Files?filename=7c15d495-9d1e-4f5a-8436-895507ef348b" width="120" height="86">
                        <div class="game-info">
                            <h1>放松放松</h1>
                            <div class="game-info_p">发送 12.28 15:33</div>
                        </div>
                    </a>
                    <!-- <button>下载</button>-->
                </li>
                                <li>                    
                    <a href="../news/shownews?id=24">
                        <img src="http://192.168.0.187:8088/api/v1/Files?filename=949b6006-dcc6-4e76-ae74-abaa2c73c25a" width="120" height="86">
                        <div class="game-info">
                            <h1>发顺丰发送</h1>
                            <div class="game-info_p">事发 12.28 15:32</div>
                        </div>
                    </a>
                    <!-- <button>下载</button>-->
                </li>
                                <li>                    
                    <a href="../news/shownews?id=23">
                        <img src="http://192.168.0.187:8088/api/v1/Files?filename=8cd9aa73-fb1f-4051-aa37-8d19f23a0e8b" width="120" height="86">
                        <div class="game-info">
                            <h1>爽肤水</h1>
                            <div class="game-info_p">发送 12.28 15:11</div>
                        </div>
                    </a>
                    <!-- <button>下载</button>-->
                </li>
                                <li>                    
                    <a href="../news/shownews?id=20">
                        <img src="http://192.168.0.187:8088/api/v1/Files?filename=ff02a176-1822-46e7-b408-9b843933c8be" width="120" height="86">
                        <div class="game-info">
                            <h1>发顺丰</h1>
                            <div class="game-info_p">发送 12.28 15:07</div>
                        </div>
                    </a>
                    <!-- <button>下载</button>-->
                </li>
                                <li>                    
                    <a href="../news/shownews?id=13">
                        <img src="http://192.168.0.187:8088/api/v1/Files?filename=496c336f-a7cb-4c81-8efc-8707730d67d3" width="120" height="86">
                        <div class="game-info">
                            <h1>欺骗时间和自己的另一种方式…</h1>
                            <div class="game-info_p">的的 12.20 19:31</div>
                        </div>
                    </a>
                    <!-- <button>下载</button>-->
                </li>
                                
            </ul>
        </div>       
    </div>
</div>

<script>

    refresher.init({
        id: "wrapper", //<------------------------------------------------------------------------------------┐
        pullDownAction: Refresh,
        pullUpAction: Load
    });
    function Refresh() {
        setTimeout(function () {	// <-- Simulate network congestion, remove setTimeout from production!
            //var el, li, i;
            //el = document.querySelector("#wrapper ul");
            //这里写你的刷新代码				
            //document.getElementById("wrapper").querySelector(".pullDownIcon").style.display = "none";
            //document.getElementById("wrapper").querySelector(".pullDownLabel").innerHTML = "<img src='/public/Home/css/loadmore/ok.png'/>刷新成功";
            setTimeout(function () {
                wrapper.refresh();
                //document.getElementById("wrapper").querySelector(".pullDownLabel").innerHTML = "";
            }, 1000);//模拟qq下拉刷新显示成功效果
            /****remember to refresh after  action completed！ ---yourId.refresh(); ----| ****/
        }, 1000);
    }    
    
    var page = 2;
    function Load() {        
        setTimeout(function () {// <-- Simulate network congestion, remove setTimeout from production!
            var el, li, i, id;            
            el = document.querySelector("#wrapper ul");
            id = document.querySelector("#idval").innerHTML;            
            $.ajax({                
                type: "GET",
                url: "../../../../testAction/page/"+page+"/id/"+id,
                success: function (msg) {
                    var data = JSON.parse(msg); 
                    //alert(data.datalist);                    
                    if (!data.datalist) {                        
                        //alert($(".pullUpLabel").html(""));
                        //$(".pullUpLabel").html("");
                        $(".pullUpLabel").html("没有更多了…");                      
                        //page = $("$smarty.get.page");
                    }
                    for (i = 0; i < data.datalist.length; i++) {
                        li = document.createElement('li');
                        li.innerHTML = "<a href='../news/shownews?id=" + data.datalist[i].id + "'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86'><div class='game-info'><h1>" + data.datalist[i].title + "</h1><div class='game-info_p'>" + data.datalist[i].origin + ' ' + data.datalist[i].publishtime + "</div></div></a>";
                        el.appendChild(li, el.childNodes[0]);
                    }
                    wrapper.refresh();
                    page += 1;
                }
            });
        }, 2000);
    }
</script>


    </body>
</html>
<?php }} ?>