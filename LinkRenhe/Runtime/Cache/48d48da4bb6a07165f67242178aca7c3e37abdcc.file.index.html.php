<?php /* Smarty version Smarty-3.1.6, created on 2018-02-09 14:50:49
         compiled from "./LinkRenhe/Home/View\Index\index.html" */ ?>
<?php /*%%SmartyHeaderCode:723587c1caf1450a6-51167740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48d48da4bb6a07165f67242178aca7c3e37abdcc' => 
    array (
      0 => './LinkRenhe/Home/View\\Index\\index.html',
      1 => 1518159043,
      2 => 'file',
    ),
    'cba641dc9a691784a5c853a28cd0e485e77cb07f' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\default.html',
      1 => 1490840098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '723587c1caf1450a6-51167740',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587c1caf38733',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587c1caf38733')) {function content_587c1caf38733($_smarty_tpl) {?><html>
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
    <div id="contt" data-role="content" style="background:url('<?php echo @IMG_URL;?>
bg_null.jpg')">        
        <div class="big-pic">
            <div class="big-pic-in">
                <div class="pic-list" >
                    <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->value = 0;
  if ($_smarty_tpl->tpl_vars['a']->value<=1){ for ($_foo=true;$_smarty_tpl->tpl_vars['a']->value<=1; $_smarty_tpl->tpl_vars['a']->value++){
?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['a']->value]['url'];?>
" data-ajax="false"><div><img src="<?php echo $_smarty_tpl->tpl_vars['banner']->value[$_smarty_tpl->tpl_vars['a']->value]['picurl'];?>
" width="100%"></div></a>
                    <?php }} ?>                    
                </div>
                <div class="slide-dot">
                    <span class="slide-dot-cur"></span>
                    <span ></span>                                              
                </div>
            </div>
        </div>
        
        <style>
            .big-pic .pic-list {width:200%;}
            .big-pic .pic-list img {width:50%; height:220px}
        </style>
              
        <div class="clear"></div>
        <!--栏目-->        
        <div class="navgation">
            <ul>
                <li>                   
                    <a href="../news/index" rel="external" class="ui-link">
                        <div class="left"><img src="<?php echo @IMG_URL;?>
news2x.png"></div><div class="navname">最新资讯</div> 
                    </a>
                </li>
            </ul>
            <ul>                
                <li>
                    <?php if ($_SESSION['user']['userid']){?>
                    <a href="../online/index" rel="external" class="ui-link">
                        <div class="left"><img src="<?php echo @IMG_URL;?>
zxts_2x.png"></div><div class="navname">在线投诉</div> 
                    </a>
                    <?php }else{ ?>                    
                    <div class="left denglu"><img src="<?php echo @IMG_URL;?>
zxts_2x.png"></div><div class="navname">在线投诉</div>                    
                    <?php }?>
                </li>
            </ul>
            <ul>
                <li> 
                    <a href="../wxcode/wxjamp" rel="external" class="ui-link">                       
                        <div class="left"><img src="<?php echo @IMG_URL;?>
znwd_2x.png"></div>
                        <div class="navname">智能问答</div>                       
                    </a>                   
                </li>
            </ul>
        </div>

        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>

        <?php if ($_SESSION['user']['userid']&&$_smarty_tpl->tpl_vars['datainfocom']->value){?>
        <div class="myjob_box">
            <div class="tscl_img"><img src="<?php echo @IMG_URL;?>
tscl_2x.png" width="32 height="32"></div>
            <div class="tscl_text">
                <div class="tscl_title">投诉处理</div>
                <div class="tscl_date"><?php echo $_smarty_tpl->tpl_vars['datainfocom']->value['createtime'];?>
</div>
            </div>
            <div class="clear"></div>           
            <a href="../complaints/index">
                <div class="tscl_content_box">
                    <div class="tscl_content_img news_pic_left"><img src="<?php if ($_smarty_tpl->tpl_vars['datainfocom']->value['picurls'][0]['largepic']==''){?><?php echo @DEFAULTIMG_URL;?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['datainfocom']->value['picurls'][0]['largepic'];?>
<?php }?>" width="120" height="86"></div>
                    <div class="tscl_content_shu">
                        <div class="tscl_content_title">
                            <?php if ($_smarty_tpl->tpl_vars['datainfocom']->value['status']==1){?>待处理<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['datainfocom']->value['status']==2){?>待审核<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['datainfocom']->value['status']==3){?>处理中<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['datainfocom']->value['status']==4){?>待评价<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['datainfocom']->value['status']==5){?>已评价<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['datainfocom']->value['status']==6){?>取消投诉<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['datainfocom']->value['status']==7){?>网格化管理员待处理<?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['datainfocom']->value['status']==8){?>网格化管理员已处理<?php }?>
                            
                        </div>
                        <div class="tscl_content_date"><?php if (strlen($_smarty_tpl->tpl_vars['datainfocom']->value['title'])>12){?><?php echo mb_substr($_smarty_tpl->tpl_vars['datainfocom']->value['title'],0,12,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['datainfocom']->value['title'];?>
<?php }?><br><?php echo $_smarty_tpl->tpl_vars['datainfocom']->value['operationtime'];?>
</div>
                    </div>
                </div>
            </a>            
            <div class="clear"></div>
            <a href="../complaints/index"><div class="middle_center"><div class="index_more">查看更多</div></div></a>            
        </div>        
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <?php }?>        
        <!--最新资讯-->
        <div class="myjob_box"> 
            <div class="tscl_box">
                <div class="tscl_img"><img src="<?php echo @IMG_URL;?>
zxzc_2x.png" width="32 height="32"></div>
                <div class="tscl_text">
                    <div class="tscl_title">最新资讯</div>
                    <div class="tscl_date"><?php echo $_smarty_tpl->tpl_vars['datainfo']->value[0]['publishtime'];?>
</div>
                </div>
            </div>
            <div class="clear"></div>
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datainfo']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?> 
            <?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1){?>           
            <a href="../news/shownews/dl/1/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">        
                <div class="tscl_title news_title"><?php if (mb_strlen($_smarty_tpl->tpl_vars['v']->value['title'])>1116){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['title'],0,1116,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<?php }?>  </div>
                <div class="clear"></div>
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->value = 0;
  if ($_smarty_tpl->tpl_vars['a']->value<=2){ for ($_foo=true;$_smarty_tpl->tpl_vars['a']->value<=2; $_smarty_tpl->tpl_vars['a']->value++){
?>                                                      
                    <li class="left <?php if ($_smarty_tpl->tpl_vars['a']->value==2){?>news_pic_right<?php }else{ ?>news_pic_left<?php }?> bgcolor"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurls'][$_smarty_tpl->tpl_vars['a']->value]['largepic'];?>
" width='120' height="86"></li>                   
                    <?php }} ?>
                </ul>
            </a>
            <div class="clear"></div>                
            <div class="news_date_box">
                <div class="news_date"><?php if (mb_strlen($_smarty_tpl->tpl_vars['v']->value['origin'])>20000){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['origin'],0,20000,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['origin'];?>
<?php }?> <?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],5,2);?>
.<?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],8,2);?>
 <?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],11,2);?>
:<?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],14,2);?>
</div>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['k']->value+1<count($_smarty_tpl->tpl_vars['datainfo']->value)){?>
                <div class="clear"></div>
                <div class="news_bottom_nei"></div>        
                <div class="clear"></div>
            <?php }?>
            <?php }else{ ?>                 
            <a href="../news/shownews/dl/1/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" style="margin:20px 0px; display: block">
                <div class="left news_pic_left"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['picurls'][0]['largepic'];?>
" width="120" height="86"></div>
                <div class="news_nei_text">
                    <div class="wdinfo_titile mycollection_title">
                        <?php if (strlen($_smarty_tpl->tpl_vars['v']->value['title'])>1111){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['title'],0,11111,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
<?php }?>                       

                    </div>
                    <div class="news_date"><?php if (mb_strlen($_smarty_tpl->tpl_vars['v']->value['origin'])>1110){?><?php echo mb_substr($_smarty_tpl->tpl_vars['v']->value['origin'],0,1110,'utf-8');?>
…<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['v']->value['origin'];?>
<?php }?> <span style="float:right"><?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],5,2);?>
.<?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],8,2);?>
 <?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],11,2);?>
:<?php echo substr($_smarty_tpl->tpl_vars['v']->value['publishtime'],14,2);?>
</span></div>
                </div> 
            </a>
            
            <?php if ($_smarty_tpl->tpl_vars['k']->value+1<count($_smarty_tpl->tpl_vars['datainfo']->value)){?>
                <div class="clear"></div>
                <div class="news_bottom_nei"></div>        
                <div class="clear"></div>
            <?php }?>
            
            <?php }?>
            <?php } ?>              
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
    </div>
</div>
<script>
    $(".denglu").click(function () {
        layer.open({
            btn: ['登录', '取消'],
            shadeClose: false, //默认：true，是否点击遮罩时关闭层                
            yes: function () {
                location.href = "../login/index";
            },
            content: '要想查看更多，必须先登录'
        });
    });
</script>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        
    </body>
</html>
<?php }} ?>