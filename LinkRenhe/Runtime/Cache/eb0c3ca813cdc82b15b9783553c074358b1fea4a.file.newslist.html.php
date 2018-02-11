<?php /* Smarty version Smarty-3.1.6, created on 2018-02-11 11:29:05
         compiled from "./LinkRenhe/Home/View\News\newslist.html" */ ?>
<?php /*%%SmartyHeaderCode:16988587d80265088f3-77664438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb0c3ca813cdc82b15b9783553c074358b1fea4a' => 
    array (
      0 => './LinkRenhe/Home/View\\News\\newslist.html',
      1 => 1518161529,
      2 => 'file',
    ),
    '08fdf5b9a8d333cff3dad8ecc9a62ee1f8e0d360' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\loadmore.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16988587d80265088f3-77664438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d80266762f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d80266762f')) {function content_587d80266762f($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>       
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
        <meta name="keywords" content="仁和信访" />
        <meta name="description" content="仁和信访"/>
        <title>"仁和信访"</title>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">   
        <link rel="stylesheet" href="<?php echo @CSS_URL;?>
loadmore/pullToRefresh.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
style.css" />
        <script src="<?php echo @JS_URL;?>
loadmore/iscroll.js"></script>
        <script src="<?php echo @JS_URL;?>
loadmore/pullToRefresh.js"></script>
        <script type="text/javascript" src="<?php echo @JS_URL;?>
jquery-2.1.0.min.js"></script>
        
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
            <div class="return_img"><a href="../../../../../news/index"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor" id="newstitle">
                <?php if ($_GET['id']==1){?>新闻动态<?php }?>
                <?php if ($_GET['id']==2){?>政策公告<?php }?>
                <?php if ($_GET['id']==4){?>办事咨询<?php }?>
                <?php if ($_GET['id']==5){?>办事指南<?php }?>
            </div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div> 
        <div class="sear_box" >
            <input type="text" value=""  placeholder="请输入关键字…" class="sear" id="sear"/>
            <!--<a href="#"><div class="sear_fd"><img src="<?php echo @IMG_URL;?>
sear.png" height="16" width="16"></div></a>-->            
        </div> 
        <div style="display: none" id="idval"><?php echo $_GET['id'];?>
</div>
        <div class="clear"></div> 
        <div id="wrapper">
            <ul>
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newsList']->value['datalist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                <li>                    
                    <a href="../../../../../news/shownews/dl/<?php echo $_GET['id'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                        <img src="<?php if ($_smarty_tpl->tpl_vars['v']->value['picurls'][0]['largepic']==''){?><?php echo @DEFAULTIMG_URL;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['picurls'][0]['largepic'];?>
<?php }?>" width="120" height="86">
                        <div class="game-info">
                            <h1 class="mycollection_title"><?php if (mb_strlen($_smarty_tpl->tpl_vars['v']->value['title'])>1116){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['title'],0,1116,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<?php }?></h1>
                            <div class="news_date">
                                <?php if (mb_strlen($_smarty_tpl->tpl_vars['v']->value['origin'])>10){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['origin'],0,10,'utf-8');?>
… &nbsp;<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['origin'];?>
<?php }?>
                                <span style="float: right"><?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],5,2);?>
.<?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],8,2);?>
 <?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],11,2);?>
:<?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],14,2);?>
</span>
                            </div>
                        </div>
                    </a>
                    <!-- <button>下载</button>-->
                </li>
                <?php } ?>                
            </ul>
        </div>       
    </div>
</div>

<script>
    
     $("#sear").focus(function(){
        location.href="../../../../../news/newsSearResult";
    });

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
                        if(data.datalist[i].origin.length>10){
                            var origin=data.datalist[i].origin.substr(0, 10)+'…';
                        }else{
                            var origin=data.datalist[i].origin;
                        }

                        var crtime = data.datalist[i].publishtime.substring(5,16).replace('-','.');



                        li.innerHTML = "<a href='../../../../../news/shownews/dl/"+ id +"/id/" + data.datalist[i].id + "'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86'><div class='game-info'><h1>" + data.datalist[i].title + "</h1><div class='news_date'>" +  origin  + '<span style="float:right">' + crtime + "</span></div></div></a>";
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