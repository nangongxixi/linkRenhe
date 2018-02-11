<?php /* Smarty version Smarty-3.1.6, created on 2017-02-24 10:07:31
         compiled from "./LinkRenhe/Home/View\Online\onlineagainst.html" */ ?>
<?php /*%%SmartyHeaderCode:1333358af9563235ae7-15280601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f43bd66a9c01dc5071aefb716a02a0ed998967' => 
    array (
      0 => './LinkRenhe/Home/View\\Online\\onlineagainst.html',
      1 => 1487902001,
      2 => 'file',
    ),
    '08d8e2490653c736451d13f779c2958d7a7fa5a6' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1487897774,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1333358af9563235ae7-15280601',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58af9563571da',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58af9563571da')) {function content_58af9563571da($_smarty_tpl) {?>
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
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">在线投诉</div>
            <div class="clear"></div>
            <div class="online_history"><a href="../complaints/index"><img src="<?php echo @IMG_URL;?>
history.png" height="27"></a></div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box">
            <form action="" name="form" method="post" enctype="multipart/form-data">            
            <table width="100%" border="0" cellspacing="0" cellpadding="0" style="background:#ffffff">
                <tbody>                    
                    <tr>
                        <td>
                            <div class="myinfo_lanm kuan">                
                                <div class="phone_title left">投诉标题：</div>           
                                <div class="phone_modify_box left online_box"><input type="text" value="" placeholder="投诉事件的标题" class="phone_input del0" id="titile"/>
                                </div>                 
                                <div class="yanz0" style="display: none" id="del0"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="only_line"></div>
                            <div class="clear"></div>
                        </td>                        
                    </tr>
                    <tr>
                        <td>
                            <div class="myinfo_lanm kuan">
                                <div class="phone_title left">事发时间：</div>           
                                <div class="phone_modify_box left online_box"><input type="text" value="" placeholder="请选择事发时间" class="phone_input del1" id="scroller" />                          
                                </div> 
                                <div class="myinfo_jiant right myinfo_jiant1"><img src="<?php echo @IMG_URL;?>
jt.png"></div>

                                <div class="yanz1" style="display: none" id="del1"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="only_line"></div> 
                        </td>                        
                    </tr>
                    <tr>
                        <td>
                            <div class="myinfo_lanm kuan">                
                                <div class="phone_title left">事发区域：</div>           
                                <div class="phone_modify_box left online_box"><input type="text" value="仁和区" onfocus=this.blur() placeholder="请输入事发区域" class="phone_input del2" id="area"/>
                                </div>
                                <div class="yanz2" style="display: none" id="del2"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="only_line"></div>        
                            <div class="clear"></div> 
                        </td>                        
                    </tr>
                    <tr>
                        <td> 
                            <div class="myinfo_lanm kuan">                
                                <div class="phone_title left">详细地址：</div>           
                                <div class="phone_modify_box left online_box"><input type="text" value="" placeholder="不必重复填写省市区信息" class="phone_input del3" id="address"/>                           
                                </div>               
                                <div class="yanz3" style="display: none" id="del3"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="only_line"></div>        
                            <div class="clear"></div> 

                        </td> </tr>
                    <tr>
                        <td>
                            <div class="myinfo_lanm kuan online_border">                
                                <div class="phone_title left">投诉内容：</div>           
                                <div class="online_box left online_box_pad ">
                                    <textarea name="content" class="online_text_box phone_input del4" id="textarea" placeholder="请填写事件的具体内容…"></textarea>                                
                                </div>
                                <div class="yanz4" style="display: none" id="del4"><img src="<?php echo @IMG_URL;?>
del.png" class="delinput"></div>
                                <div class="clear"></div>
                                <div class="mycollection_line" style="margin-bottom: 15px"></div>
                                <div class="clear"></div>

                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td height="101" align="center">
                            <div id="localImag"><img id="preview" src="<?php echo @IMG_URL;?>
defauhead.png" width="150" height="140" style="display: block"></div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding-top:10px;">                            
                            <input type="file" name="file" id="doc" onchange="javascript:setImagePreview();" class="file">                                
                            <input type="submit" value="提交" class="tousReview_submit middle_center btn" style="display: block" id="submit">                            
                        </td>
                    </tr>
                </tbody>
            </table>
                </form>
        </div> 

    </div>
</div>
<script type="text/javascript">

    //删除输入
    $(".yanz0").click(function () {
        $(".del0").val('');
    });
    $(".yanz1").click(function () {
        $(".del1").val('');
    });
    $(".yanz2").click(function () {
        $(".del2").val('');
    });
    $(".yanz3").click(function () {
        $(".del3").val('');
    });
    $(".yanz4").click(function () {
        $(".del4").val('');
    });

    $("#titile").keyup(function () {
        var titile = $("#titile").val();
        if (titile != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#scroller").keyup(function () {
        var scroller = $("#scroller").val();
        if (scroller != '') {
            $("#del1").css("display", "block");
        } else {
            $("#del1").css("display", "none");
        }
    });
    $("#area").keyup(function () {
        var area = $("#area").val();
        if (area != '') {
            $("#del2").css("display", "block");
        } else {
            $("#del2").css("display", "none");
        }
    });
    $("#address").keyup(function () {
        var address = $("#address").val();
        if (address != '') {
            $("#del3").css("display", "block");
        } else {
            $("#del3").css("display", "none");
        }
    });
    $("#textarea").keyup(function () {
        var textarea = $("#textarea").val();
        if (textarea != '') {
            $("#del4").css("display", "block");
        } else {
            $("#del4").css("display", "none");
        }
    });

    $("#del0").click(function () {
        var titile = $("#titile").val();
        if (titile != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#del1").click(function () {
        var scroller = $("#scroller").val();
        if (scroller != '') {
            $("#del1").css("display", "block");
        } else {
            $("#del1").css("display", "none");
        }
    });
    $("#del2").click(function () {
        var area = $("#area").val();
        if (area != '') {
            $("#del2").css("display", "block");
        } else {
            $("#del2").css("display", "none");
        }
    });
    $("#del3").click(function () {
        var address = $("#address").val();
        if (address != '') {
            $("#del3").css("display", "block");
        } else {
            $("#del3").css("display", "none");
        }
    });
    $("#del4").click(function () {
        var textarea = $("#textarea").val();
        if (textarea != '') {
            $("#del4").css("display", "block");
        } else {
            $("#del4").css("display", "none");
        }
    });


    $("#submit").click(function () {
        var userid = "<?php echo $_SESSION['user']['userid'];?>
";
        var titile = $("#titile").val();        
        var area = $("#area").val();
        var position = '';
        var address = $("#address").val();
        var textarea = $("#textarea").val();
        var imglist = $(".imglist>img").length;
        var piclist = '';
        var operationtime = $("#scroller").val();//事发时间
        var type = 2;

        //非空验证        
        if (titile == '') {
            layer.open({
                content: '标题不能为空',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (scroller == '') {
            layer.open({
                content: '请选择时间',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (area == '') {
            layer.open({
                content: '区域不能为空',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (address == '') {
            layer.open({
                content: '地址不能为空',
                time: 2,
                shadeClose: true
            });
            return false;
        }
        if (textarea == '') {
            layer.open({
                content: '内容不能为空',
                time: 2,
                shadeClose: true
            });
            return false;
        }


        $(".imglist_img").each(function ()
        {
            piclist += ',' + $(this).attr("src");
        });
        $.ajax({
            type: "POST",
            url: "../Online/onlineagainst",
            data: {
                "userid": userid,
                "title": titile,
                "area": area,
                "position": "",
                "address": address,
                "content": textarea,
                "picurls": piclist,
                "operationtime": operationtime,
                "type": type
            },
            //data: '*title*' + titile + '*scroller*' + scroller + '*area*' + area + '*address*' + address + '*textarea*' + textarea + '*piclist*' + piclist,
            success: function (msg) {
                //alert(msg);
                var data = JSON.parse(msg);
                if (data.result == 1) {
                    layer.open({
                        btn: ['确定'],
                        content: '您的投诉已提交，我们会电话通知您的受理情况！',
                        shadeClose: true, //默认：true，是否点击遮罩时关闭层                
                        yes: function () {
                            location.href = "../Complaints/index";
                        }
                    });
                } else {
                    layer.open({
                        shadeClose: false, //默认：true，是否点击遮罩时关闭层
                        content: '<div style="text-align:center">请检查您的填写</div>',
                        time: 2
                    });
                }

            }
        });
    });
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
                alert("您上传的图片格式不正确，请重新选择!");
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