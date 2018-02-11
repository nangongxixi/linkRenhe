<?php /* Smarty version Smarty-3.1.6, created on 2018-02-09 14:47:41
         compiled from "./LinkRenhe/Home/View\News\index.html" */ ?>
<?php /*%%SmartyHeaderCode:21527587c1d8184f984-72314824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bcdedb6e9bd9a0cbbe5e75681be3d67f63b1509' => 
    array (
      0 => './LinkRenhe/Home/View\\News\\index.html',
      1 => 1518063134,
      2 => 'file',
    ),
    'ef314ec334968dbc63f0d4130f43b0096a63720a' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultJamp.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21527587c1d8184f984-72314824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587c1d81ad811',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c1d81ad811')) {function content_587c1d81ad811($_smarty_tpl) {?>
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
        
<!--新闻切换start-->
<link type="text/css" rel="stylesheet" href="<?php echo @IMG_URL;?>
newsimg/css/style.css" />

<script type="text/javascript" src="<?php echo @IMG_URL;?>
newsimg/js/touchslider.js"></script>
<script type="text/javascript" src="<?php echo @IMG_URL;?>
newsimg/js/touchslider.js"></script>

<!--新闻切换end-->
<div id="page1" data-role="page">
    <div id="contt" data-role="content" class="contt_padd"> 
        <div class="top_lanm">
            <div class="return_img">
                <?php if (null!==@user){?>
                <a href="../index/index"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a>                                
                <?php }else{ ?>
                <a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a>    
                <?php }?>
            </div>
            <div class="details_title middle_center bgcolor" id="newstitle">最新资讯</div>
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div> 
        <div class="sear_box">
            <input type="text" value="" placeholder="请输入关键字…" class="sear" id="sear"/>
            <!--<a href="#"><div class="sear_fd"><img src="<?php echo @IMG_URL;?>
sear.png" height="16" width="16"></div></a>-->
        </div>
        <div class="clear"></div>


        <div class="hdp-box">
            <div class="title_gun"><?php echo $_smarty_tpl->tpl_vars['banner']->value[0]['title'];?>
</div>
            <div id="slider" class="swipe">
                <ul class="piclist">                    
                    <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->value = 0;
  if ($_smarty_tpl->tpl_vars['a']->value<=count($_smarty_tpl->tpl_vars['banner']->value)-1){ for ($_foo=true;$_smarty_tpl->tpl_vars['a']->value<=count($_smarty_tpl->tpl_vars['banner']->value)-1; $_smarty_tpl->tpl_vars['a']->value++){
?>
                    <li><p><?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['a']->value]['title'];?>
</p><a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['a']->value]['url'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['a']->value]['picurls'][0]['largepic'];?>
"></a></li>
                    <?php }} ?>
                </ul>
            </div>
            <div class="count">
                <b class="bi">1</b>/<b class="bcount"></b>
            </div>
        </div>


        <div class="clear"></div>
        <div id="lei1">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['newsNameList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['name']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['name']['iteration']++;
?>
            <div class="myjob_box">
                <div class="news_lanm_box">
                    <div class="left"><img src="<?php echo @IMG_URL;?>
newsico<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['name']['iteration'];?>
.png" height="20"> </div>
                    <div class="news_lanm_title left"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</div>
                    <a href="../news/newslist/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
/page/1">
                        <div class="news_lanm_more right">
                            <div class="news_lanm_gengd left">更多</div>
                            <div class="news_lanm_img left"><img src="<?php echo @IMG_URL;?>
more.png"></div>
                        </div>
                    </a>            
                </div>                
                <?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['datalist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value){
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?>
                <?php if ($_smarty_tpl->tpl_vars['vv']->value['type']==1){?>           
                <div class="middle_center">
                    <div class="news_lanm_content_img">
                        <a href="../news/shownews/dl/<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
">
                            <div class="tscl_title news_title"><?php if (mb_strlen($_smarty_tpl->tpl_vars['vv']->value['title'])>1116){?><?php echo mb_substr($_smarty_tpl->tpl_vars['vv']->value['title'],0,1116,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
<?php }?></div>
                            <ul>                        
                                <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->value = 0;
  if ($_smarty_tpl->tpl_vars['a']->value<=2){ for ($_foo=true;$_smarty_tpl->tpl_vars['a']->value<=2; $_smarty_tpl->tpl_vars['a']->value++){
?>                                                      
                                <li class="left <?php if ($_smarty_tpl->tpl_vars['a']->value==2){?>news_pic_right<?php }else{ ?>news_pic_left<?php }?> bgcolor"><img src="<?php if ($_smarty_tpl->tpl_vars['vv']->value['picurls'][$_smarty_tpl->tpl_vars['a']->value]['largepic']==''){?><?php echo @DEFAULTIMG_URL;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['vv']->value['picurls'][$_smarty_tpl->tpl_vars['a']->value]['largepic'];?>
<?php }?>" width='120' height="86"></li> 
                                <?php }} ?>
                            </ul>
                            <div class="clear"></div>
                            <div class="news_date_box">
                                <div class="news_date"><?php if (mb_strlen($_smarty_tpl->tpl_vars['vv']->value['origin'])>2110){?><?php echo mb_substr($_smarty_tpl->tpl_vars['vv']->value['origin'],0,2110,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['vv']->value['origin'];?>
<?php }?> <?php echo substr($_smarty_tpl->tpl_vars['vv']->value['publishtime'],5,2);?>
.<?php echo substr($_smarty_tpl->tpl_vars['vv']->value['publishtime'],8,2);?>
 <?php echo substr($_smarty_tpl->tpl_vars['vv']->value['publishtime'],11,2);?>
:<?php echo substr($_smarty_tpl->tpl_vars['vv']->value['publishtime'],14,2);?>
</div>
                            </div>
                        </a>
                    </div>            
                </div>
                <?php if ($_smarty_tpl->tpl_vars['kk']->value+1<count($_smarty_tpl->tpl_vars['v']->value['datalist'])){?>
                <div class="clear"></div>
                <div class="news_bottom_nei"></div>        
                <div class="clear"></div>
                <?php }?>
                <?php }else{ ?>

                <a href="../news/shownews/dl/<?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
/id/<?php echo $_smarty_tpl->tpl_vars['vv']->value['id'];?>
" style="margin:20px 0px; display: block">
                    <div class="wdinfo_pic left"><img src="<?php if ($_smarty_tpl->tpl_vars['vv']->value['picurls'][0]['largepic']==''){?><?php echo @DEFAULTIMG_URL;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['vv']->value['picurls'][0]['largepic'];?>
<?php }?>" width="120" height="86"></div>
                    <div class="news_nei_text">
                        <div class="wdinfo_titile mycollection_title"><?php if (strlen($_smarty_tpl->tpl_vars['vv']->value['title'])>1111){?><?php echo mb_substr($_smarty_tpl->tpl_vars['vv']->value['title'],0,1111,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['vv']->value['title'];?>
<?php }?></div>
                        <div class="news_date">
                            <?php if (mb_strlen($_smarty_tpl->tpl_vars['vv']->value['origin'])>10){?><?php echo mb_substr($_smarty_tpl->tpl_vars['vv']->value['origin'],0,10,'utf-8');?>
… &nbsp;<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['vv']->value['origin'];?>
<?php }?>
                            <span style="float: right"><?php echo substr($_smarty_tpl->tpl_vars['vv']->value['publishtime'],5,2);?>
.<?php echo substr($_smarty_tpl->tpl_vars['vv']->value['publishtime'],8,2);?>
 <?php echo substr($_smarty_tpl->tpl_vars['vv']->value['publishtime'],11,2);?>
:<?php echo substr($_smarty_tpl->tpl_vars['vv']->value['publishtime'],14,2);?>
</span>
                        </div>
                    </div>
                </a>
                <?php if ($_smarty_tpl->tpl_vars['kk']->value+1<count($_smarty_tpl->tpl_vars['v']->value['datalist'])){?>
                <div class="clear"></div>
                <div class="news_bottom_nei"></div>        
                <div class="clear"></div>
                <?php }?>

                <?php }?>        
                <?php } ?>
            </div>
            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['name']['iteration']!=3){?>        
            <div class="clear"></div>
            <div class="fenge_one"></div>
            <div class="clear"></div>
            <?php }else{ ?>        
            <div class="clear"></div>
            <div class="only_line"></div>        
            <div class="clear"></div>
            <?php }?>
            <?php } ?>
        </div>

    </div>
</div>



<script type="text/javascript">
    $(function () {
        var num = $('#slider').find('li').size();
        $('.bcount').text(num);
        $('.b_btn').click(function () {
            $(this).toggleClass('b_btn_active');
            $('.intro').toggle();
        });
    });

    var tt = new TouchSlider({id: 'slider', 'auto': '0', fx: 'ease-out', direction: 'left', speed: 600, timeout: 5000, 'before': function (index) {
            var es = document.getElementById('slider').getElementsByTagName('li');
            var it = $(es[index]).index() + 1;
            $('.bi').text(it);
            var tx = $(es[index]).find('p').text();
            $('.title_gun').text(tx);
        }});



    $("#sear").focus(function () {
        location.href = "../news/newsSearResult";
    });
    $(function () {
        $.ajax({
            type: "POST",
            url: "../news/newsNameList"
        });
    });


</script>


    </body>
</html>
<?php }} ?>