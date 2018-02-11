<?php /* Smarty version Smarty-3.1.6, created on 2017-01-24 17:11:21
         compiled from "./LinkRenhe/Home/View\Complaints\evaluation.html" */ ?>
<?php /*%%SmartyHeaderCode:318965881b097eddfe6-76243499%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa748009ed18ea46cf4fcf4b33f19958f742bff4' => 
    array (
      0 => './LinkRenhe/Home/View\\Complaints\\evaluation.html',
      1 => 1485247393,
      2 => 'file',
    ),
    'e688c14c08d64f53c4ce800e86995ea5d945a210' => 
    array (
      0 => 'E:\\Apache24\\htdocs\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1484704308,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '318965881b097eddfe6-76243499',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5881b0980cc6e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5881b0980cc6e')) {function content_5881b0980cc6e($_smarty_tpl) {?>
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
        <?php if (empty($_SESSION['user']['userid'])){?><?php echo header("location:../login/index");?>
<?php }?>        
        
<script type="text/javascript" src="<?php echo @JS_URL;?>
jquery.js"></script>
<script type="text/javascript" src="<?php echo @JS_URL;?>
rating_simple.js"></script>
<link href="<?php echo @CSS_URL;?>
rating_simple.css" rel="stylesheet" type="text/css">
<div id="page1" data-role="page">
    <div id="contt" data-role="content" class="contt_padd"> 
        <div class="top_lanm">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center ">发表评价</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="huised">       
            <div class="tscl_content_box kuan baise_aera evalua_border" >                       
                <div class="details_content_text" >                    
                    <textarea name="content" class="evalua_text_box " id="textarea" placeholder="请在此填写您对本次处理结果的评价…"></textarea>
                </div>
            </div> 
            <div class="clear"></div>
            <div class="mycollection_line"></div>
            <div class="clear"></div>
            <div class="baise_aera" style="padding-bottom: 8%; height:0.5%">        
                <div class="star_tit ">服务打分</div>
                <div class="star_st ">
                    <input name="my_input" value="5" id="rating_simple1" type="text" style="display: none" class="">                 
                </div>
            </div>
            <div class="clear"></div>            
            <div class="phone_next_box ">
                <div class="iphone_next_text">发表评价</div>                
            </div>            
        </div>
        <div class="clear"></div>
        <div class="only_line"></div>        
        <div class="clear"></div>
    </div>      
</div>

<SCRIPT type="text/javascript">

    $(function () {
        $("#rating_simple1").webwidget_rating_simple({
            rating_star_length: '5',
            rating_initial_value: '5',
            rating_function_name: '', //this is function name for click
            directory: '<?php echo @IMG_URL;?>
'
        });
    });

    $('.iphone_next_text').click(function () {
        var userid = "<?php echo $_SESSION['user']['userid'];?>
";
        var content = $("#textarea").val();
        var id = "<?php echo $_GET['id'];?>
";
        var score = $("#rating_simple1").val();

        if (content.length < 10) {
            layer.open({
                content: '请输入不少于10个字的评价信息',
                time: 2
            });
        } else {
            $.ajax({
                type: "POST",
                url: "../../../Complaints/ComplaintsevaluationAction",
                data: {
                    "userid": userid,
                    "content": content,
                    "id": id,
                    "score": score
                },
                success: function (msg) {
                    //alert(msg);
                    var data = JSON.parse(msg);
                    if (data.result == 1) {
                        layer.open({
                            content: '<div style="text-align:left">评价成功，你还可以在投诉处理中查看投诉详情</div>',
                            time: 2,
                            success:function(){
                               location.href = "../../../Complaints/index"; 
                            }
                        });
                       
                    }
                }
            });
        }



    });

    /* function textdown(e) {
     textevent = e;
     if (textevent.keyCode == 8) {
     return;
     }
     if (document.getElementById('textarea').value.length >= 20) {
     alert("最多输入20个字");
     if (!document.all) {
     textevent.preventDefault();
     } else {
     textevent.returnValue = false;
     }
     }
     }
     function textup() {
     var s = document.getElementById('textarea').value;
     //判断ID为text的文本区域字数是否超过100个 
     if (s.length > 20) {
     document.getElementById('textarea').value = s.substring(0, 20);
     }
     }
     */
</SCRIPT> 




    </body>
</html>
<?php }} ?>