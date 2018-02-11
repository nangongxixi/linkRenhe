<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 13:36:51
         compiled from "./LinkRenhe/Home/View\Myinfo\modifyhead.html" */ ?>
<?php /*%%SmartyHeaderCode:22566587f079a1f23d0-25998064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9659216906705ab63b6f65db778797b782e0816' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\modifyhead.html',
      1 => 1490852201,
      2 => 'file',
    ),
    '7ca9fc733525c89fe8911579c8ba2e9562b6fb7d' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultBai.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22566587f079a1f23d0-25998064',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587f079a322ed',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587f079a322ed')) {function content_587f079a322ed($_smarty_tpl) {?><html>
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
    <body style="background-color:#fff">
        <?php if (empty($_SESSION['user']['userid'])){?><?php echo header("location:../login/index");?>
<?php }?>        
        

 <style type="text/css">

.btn{  
    background-color: #fff;
    border: 1px solid #cdcdcd;
    height: 40px;
    left: -77px;
    position: relative;
    
    width: 150px
} 
.file{ position:relative; top:-150px; right:-40px; height:140px; filter:alpha(opacity:0);opacity: 0;width:150px }
#localImag{margin-top: 10%}
    </style>

<div id="page1" data-role="page">
    <div id="contt" data-role="content" class="contt_padd">            
        <div class="top_lanm">
            <div class="return_img"><a href="../myinfo/perinfo"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">修改头像</div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#ffffff">
                <tbody>
                    <tr>
                        <td height="101" align="center">
                            <div id="localImag"><img id="preview" src="<?php if ($_SESSION['user']['headurl']=='null'){?><?php echo @IMG_URL;?>
defauhead.png<?php }else{ ?>http://221.10.2.222:5680/api/v1/Files?filename=<?php echo $_SESSION['user']['headurl'];?>
<?php }?>" width="150" height="140" style="display: block"></div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding-top:10px;">
                            <form action="" name="form" method="post" enctype="multipart/form-data"> 
                                
                                <input type="file" name="file" id="doc" onchange="javascript:setImagePreview();" class="file">                                
                                <input type="submit" value="提交" class="btn">
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--
                        <div class="upload_img_box">
                            <input type="file" id="uploadphoto" name="uploadfile" style="display:none;" />                    
                            <div class="imglist"></div> 
                            <div class="upimg_defau"><img src="<?php echo @IMG_URL;?>
upimg.png" onclick="uploadphoto.click()" width="80" height="80"></div> 
                            <div class="files">X</div>
                        </div>
                        <div class="clear"></div>           
                        <div class="phone_next_box"> <div class="tousReview_submit middle_center" style="display: block" id="submit"/>确定</div>  </div>
                    
            --> 
       
    </div>
</div>
<script type="text/javascript">
    //下面用于图片上传预览功能
    function setImagePreview(avalue) {
        var docObj = document.getElementById("doc");

        var imgObjPreview = document.getElementById("preview");
        if (docObj.files && docObj.files[0])
        {
            //火狐下，直接设img属性
            imgObjPreview.style.display = 'block';
            imgObjPreview.style.width = '150px';
            imgObjPreview.style.height = '140px';
            //imgObjPreview.src = docObj.files[0].getAsDataURL();

            //火狐7以上版本不能用上面的getAsDataURL()方式获取，需要一下方式
            imgObjPreview.src = window.URL.createObjectURL(docObj.files[0]);
        } else
        {
            //IE下，使用滤镜
            docObj.select();
            var imgSrc = document.selection.createRange().text;
            var localImagId = document.getElementById("localImag");
            //必须设置初始大小
            localImagId.style.width = "150px";
            localImagId.style.height = "140px";
            //图片异常的捕捉，防止用户修改后缀来伪造图片
            try {
                localImagId.style.filter = "progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)";
                localImagId.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = imgSrc;
            } catch (e)
            {
                alert("请选择图片!");
                return false;
            }
            imgObjPreview.style.display = 'none';
            document.selection.empty();
        }
        return true;
    }

</script>

    </body>
</html>
<?php }} ?>