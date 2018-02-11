<?php /* Smarty version Smarty-3.1.6, created on 2017-03-31 09:45:32
         compiled from "./LinkRenhe/Home/View\Online\onlineAgainst.html" */ ?>
<?php /*%%SmartyHeaderCode:21858587da2094341a0-62326719%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '411d32daa31a6591132ae3194a86d9208114fdd8' => 
    array (
      0 => './LinkRenhe/Home/View\\Online\\onlineAgainst.html',
      1 => 1490869428,
      2 => 'file',
    ),
    '08d8e2490653c736451d13f779c2958d7a7fa5a6' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21858587da2094341a0-62326719',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587da20961b9a',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587da20961b9a')) {function content_587da20961b9a($_smarty_tpl) {?><html>
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
                                    <div class="phone_modify_box left online_box"><input type="text" name="title" value="" placeholder="投诉事件的标题" class="phone_input del0" id="titile"/>
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
                                    <div class="phone_modify_box left online_box"><input type="text" name="operationtime" value="" placeholder="请选择事发时间" class="phone_input del1" id="scroller" />                          
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
                                    <div class="phone_modify_box left online_box"><input type="text" value="仁和区" name="area" onfocus=this.blur() placeholder="请输入事发区域" class="phone_input del2" id="area"/>
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
                                    <div class="phone_modify_box left online_box"><input type="text" value="" name="address" placeholder="不必重复填写省市区信息" class="phone_input del3" id="address"/>                           
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
                            <td align="center" style="padding-top:10px;">
                                <div class="myinfo_lanm kuan online_border">
                                    <div class="clear"></div>
                                    <div class="upload_img_box">
                                        <input type="hidden" value="" name="imgurl" onfocus=this.blur() id="imgurl"/>
                                        <input type="file" id="uploadphoto" name="uploadfile" style="display:none;" />                    
                                        <div class="imglist"></div> 
                                        <div class="upimg_defau"><img src="<?php echo @IMG_URL;?>
upimg.png" onclick="uploadphoto.click()" width="80" height="80"></div>                     
                                    </div>
                                </div>
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
        var titile = $.trim($("#titile").val());
        if (titile != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#scroller").keyup(function () {
        var scroller = $.trim($("#scroller").val());
        if (scroller != '') {
            $("#del1").css("display", "block");
        } else {
            $("#del1").css("display", "none");
        }
    });
    $("#area").keyup(function () {
        var area = $.trim($("#area").val());
        if (area != '') {
            $("#del2").css("display", "block");
        } else {
            $("#del2").css("display", "none");
        }
    });
    $("#address").keyup(function () {
        var address = $.trim($("#address").val());
        if (address != '') {
            $("#del3").css("display", "block");
        } else {
            $("#del3").css("display", "none");
        }
    });
    $("#textarea").keyup(function () {
        var textarea = $.trim($("#textarea").val());
        if (textarea != '') {
            $("#del4").css("display", "block");
        } else {
            $("#del4").css("display", "none");
        }
    });
    $("#del0").click(function () {
        var titile = $.trim($("#titile").val());
        if (titile != '') {
            $("#del0").css("display", "block");
        } else {
            $("#del0").css("display", "none");
        }
    });
    $("#del1").click(function () {
        var scroller = $.trim($("#scroller").val());
        if (scroller != '') {
            $("#del1").css("display", "block");
        } else {
            $("#del1").css("display", "none");
        }
    });
    $("#del2").click(function () {
        var area = $.trim($("#area").val());
        if (area != '') {
            $("#del2").css("display", "block");
        } else {
            $("#del2").css("display", "none");
        }
    });
    $("#del3").click(function () {
        var address = $.trim($("#address").val());
        if (address != '') {
            $("#del3").css("display", "block");
        } else {
            $("#del3").css("display", "none");
        }
    });
    $("#del4").click(function () {
        var textarea = $.trim($("#textarea").val());
        if (textarea != '') {
            $("#del4").css("display", "block");
        } else {
            $("#del4").css("display", "none");
        }
    });
    //蒋获取的图片列表赋值给一个隐藏域
    $("#submit").click(function () {
		var userid = "<?php echo $_SESSION['user']['userid'];?>
";
        var titile = $.trim($("#titile").val());
        var area = $.trim($("#area").val());
        var position = '';
        var address = $.trim($("#address").val());
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
        if (operationtime == '') {
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
        
        //把上传的图片列表拼接成一个字符串赋值给一个隐藏域
        var imglist = "";
        for (var i = 0; i < $(".imglist_img ").length; i++) {
            imglist += $(".imglist_img ").eq(i).attr("imgurl") + '/';
        }
        $("#imgurl").val(imglist);		
		$.ajax({
            type: "POST",
            url: "../Online/OnlineAction",
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

    //限制图片上传张数
    $(".upimg_defau").on("click", function () {
        if ($(".imglist_img").length >= 4) {
            $(this).find("img").removeAttr("onclick");                        
        }
        if ($(".imglist_img").length >= 5) {
            layer.open({
                content: '最多只能上传5张图片',
                time: 1,
                shadeClose: true
            });
        }
        return false;
    });

    //图片上传
    $('#uploadphoto').localResizeIMG({
        width: 400,
        quality: 1,
        success: function (result) {
            var submitData = {
                base64_string: result.clearBase64,
            };
            $.ajax({
                type: "POST",
                url: "<?php echo @LIB_URL;?>
upload.php",
                data: submitData,
                dataType: "json",
                success: function (data) {
                    if (0 == data.status) {
                        return false;
                    } else {
                        var attstr = '<div class="delimgdiv"><img width="80" height="80" class="imglist_img" imgurl="' + data.url + '" src="' + 'http://221.10.2.222:5680/api/v1/Files?filename=' + data.url + '"><div onclick="" class="delimg" rel="' + data.url + '"><img src="<?php echo @IMG_URL;?>
del_upimg.png" width="100%"></div></div>';
                        $(".imglist").append(attstr);
                        return false;
                    }
                },
                complete: function (XMLHttpRequest, textStatus) {
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) { //上传失败 
                    alert(' 请检查您的图片大小和格式');
                }
            });
        }
    });

    $(function () {
        $(document).on("click", ".delimg", function () {
            $(this).parent().remove();
        });
    });

	
    //时间选择器
    $("#scroller").mobiscroll().date();
    var currYear = (new Date()).getFullYear();	
    //初始化日期控件
    var opt = {
        preset: 'date', //日期，可选：date\datetime\time\tree_list\image_text\select
        theme: 'default', //皮肤样式，可选：default\android\android-ics light\android-ics\ios\jqm\sense-ui\wp light\wp
        display: 'modal', //显示方式 ，可选：modal\inline\bubble\top\bottom
        mode: 'scroller', //日期选择模式，可选：scroller\clickpick\mixed
        lang: 'zh',
        dateFormat: 'yyyy-mm-dd', // 日期格式
        setText: '确定', //确认按钮名称
        cancelText: '取消', //取消按钮名籍我
        dateOrder: 'yyyymmdd', //面板中日期排列格式
        dayText: '日', monthText: '月', yearText: '年', //面板中年月日文字
        showNow: false,
        nowText: "今",
        //startYear: currYear, //开始年份  
        endYear: currYear, //结束年份  		
        //endYear:2099 //结束年份
    };
	$("#scroller").mobiscroll(opt);

	
	
	
    //
</script>

    </body>
</html>
<?php }} ?>