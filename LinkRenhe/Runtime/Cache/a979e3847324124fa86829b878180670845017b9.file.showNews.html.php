<?php /* Smarty version Smarty-3.1.6, created on 2018-02-08 15:40:31
         compiled from "./LinkRenhe/Home/View\News\showNews.html" */ ?>
<?php /*%%SmartyHeaderCode:22156587c1df5cfbb76-11051303%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a979e3847324124fa86829b878180670845017b9' => 
    array (
      0 => './LinkRenhe/Home/View\\News\\showNews.html',
      1 => 1490956837,
      2 => 'file',
    ),
    'ef314ec334968dbc63f0d4130f43b0096a63720a' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultJamp.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22156587c1df5cfbb76-11051303',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587c1df5e6957',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c1df5e6957')) {function content_587c1df5e6957($_smarty_tpl) {?>
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
        
<div id="page1" data-role="page">
    <div id="contt" data-role="content" class="contt_padd"> 
        <div class="top_lanm">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">			
                <?php if ($_GET['dl']==0){?>内容详情<?php }?>
                <?php if ($_GET['dl']==1){?>新闻动态<?php }?>
                <?php if ($_GET['dl']==2){?>政策公告<?php }?>
                <?php if ($_GET['dl']==3){?>办事指南<?php }?>                
            </div>
            <div class="share right">
                <div class="collection_ico left"><img src="<?php if ($_smarty_tpl->tpl_vars['showNews']->value['iscllect']==0){?><?php echo @IMG_URL;?>
nocollection.png<?php }else{ ?><?php echo @IMG_URL;?>
collection.png<?php }?>" height="20" id='collen'></div>
                <div class="left"><img src="<?php echo @IMG_URL;?>
share.png" height="20" class="share_code"></div>
            </div>
        </div>
        <div class="clear"></div> 
        <div class="news_lanm_content_line"></div>
        <div class="clear"></div>        
        <div class="myjob_box"> 
            <div class="news_lanm_content_title"><?php echo $_smarty_tpl->tpl_vars['showNews']->value['title'];?>
</div> 
            <div class="clear"></div>
            <div class="shownews_date">
                <?php echo $_smarty_tpl->tpl_vars['showNews']->value['origin'];?>
 <?php echo substr($_smarty_tpl->tpl_vars['showNews']->value['publishtime'],5,2);?>
.<?php echo substr($_smarty_tpl->tpl_vars['showNews']->value['publishtime'],8,2);?>
 <?php echo substr($_smarty_tpl->tpl_vars['showNews']->value['publishtime'],11,2);?>
:<?php echo substr($_smarty_tpl->tpl_vars['showNews']->value['publishtime'],14,2);?>

            </div>
            <div class="news_content_text">
                <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['imgsrc']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
?>
                    <img src="http://renheapp.sczmgk.com:5680/api/v1/Files?filename=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
" width="400">
                <?php } ?>
                <?php echo $_smarty_tpl->tpl_vars['showNews']->value['content'];?>
<br></div>
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
        var userid = "<?php echo $_SESSION['user']['userid'];?>
";
        var newid = "<?php echo $_GET['id'];?>
";
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
                        $("#collen").attr("src", "<?php echo @IMG_URL;?>
collection.png");
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
                                    $("#collen").attr("src", "<?php echo @IMG_URL;?>
nocollection.png");
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
            url: "../../../../../news/showNews",
            success:function(){
                $(".news_content_text img").attr("height","");
            }
        });
    });


    $(".share_code").click(function () {
        $(".bshare-custom").toggle();
    });
</script>



    </body>
</html>
<?php }} ?>