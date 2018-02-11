<?php /* Smarty version Smarty-3.1.6, created on 2017-03-30 16:35:27
         compiled from "./LinkRenhe/Home/View\Myinfo\tousReview.html" */ ?>
<?php /*%%SmartyHeaderCode:2578058a50b2285ace7-61342827%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2bd6b358244717a90b487d7faf62339922afc112' => 
    array (
      0 => './LinkRenhe/Home/View\\Myinfo\\tousReview.html',
      1 => 1490862918,
      2 => 'file',
    ),
    '08d8e2490653c736451d13f779c2958d7a7fa5a6' => 
    array (
      0 => 'D:\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\defaultNei.html',
      1 => 1490840099,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2578058a50b2285ace7-61342827',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_58a50b22a055e',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58a50b22a055e')) {function content_58a50b22a055e($_smarty_tpl) {?><html>
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
        <div class="top_lanm details_line">
            <div class="return_img"><a href="javascript:history.go(-1);"><img src="<?php echo @IMG_URL;?>
return.png" width="100%"></a></div>
            <div class="details_title middle_center bgcolor">投诉审核</div>
        </div>
        <div class="clear"></div>       
        <div class="fenge_one"></div>
        <div class="clear"></div> 
        <div class="myjob_box">
            <div class="tousReview_content_box" >                       
                <div class="details_content_text " >
                    <ul>
                        <li class="details_content_text_title ">投诉标题：</li>
                        <li ><div class="details_content_text_con" id="biaoti"></div></li>
                    </ul>
                    <div class="clear"></div>
                    <ul>
                        <li class="details_content_text_title ">事发时间：</li>
                        <li class="details_content_text_con " id="shifasj"></li>
                    </ul>
                    <div class="clear"></div>
                    <ul>
                        <li class="details_content_text_title ">事发地址：</li>
                        <li class="details_content_text_con " id="shifadz"></li>
                    </ul>
                    <div class="clear"></div>
                    <ul>
                        <li class="details_content_text_title ">投诉内容：</li>
                        <li class="details_content_text_con ">
                            <div class="qian" id="tousulr"></div>
                            <div class='shouqi  program_xqn' style="display: none">向上收起∧</div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                    <ul>
                        <li class="details_content_text_title ">相关图片：</li>
                        <li class="details_content_text_con ">
                            <div class="details_content_text_pic ">                           
                            </div>
                        </li>
                    </ul>
                    <div class="clear"></div>
                    <ul>
                        <li class="details_content_text_title" >投诉编号：</li>
                        <li class="details_content_text_con " id="tousubh"></li>
                    </ul>
                    <div class="clear"></div>
                    <ul>
                        <li class="details_content_text_title ">投诉时间：</li>
                        <li class="details_content_text_con " id="toususj"></li>
                    </ul>                    
                </div>           
            </div>
        </div>
        <div class="clear"></div>
        <div class="fenge_one"></div>
        <div class="clear"></div>
        <div class="myjob_box myinfo_padd">
            <div class="details_title details_line tousReview_x">
                <span class="red_block left "><img src="<?php echo @IMG_URL;?>
099.png"></span>
                <div class="left">现场调查</div>
            </div> 
        </div>


        <div class="myjob_box myinfo_padd" style="display:none" id="tousuxq">
            <div class="tousReview_content_box1" >                       
                <div class="details_content_text " >
                    <ul>
                        <li class="details_content_text_title ">处理时间：</li>
                        <li ><div class="details_content_text_con" id="chulisj"></div></li>
                    </ul>
                    <div class="clear"></div>
                    <ul>
                        <li class="details_content_text_title ">是否属实：</li>
                        <li class="details_content_text_con " id="shifouss"></li>
                    </ul>
                    <div class="clear"></div>
                    <ul>
                        <li class="details_content_text_title ">相关备注：</li>
                        <li class="details_content_text_con " id="xiangguanbz"></li>
                    </ul>
                    <div class="clear"></div>              
                    <ul>
                        <li class="details_content_text_title ">相关图片：</li>
                        <li class="details_content_text_con ">
                            <div id="toustup">
                            </div>
                        </li>
                    </ul>                                  
                </div>           
            </div>
        </div>

        <div class="myjob_box myinfo_padd" style="display:none" id="tousush">
            <div class="tousreview_survey_box kuan">
                <div class="danxuan">
                    <input type="radio" id="radio-1-1" value="1" name="radio-1-set" class="regular-radio" checked /><label for="radio-1-1"></label> 属实
                    &nbsp;&nbsp;&nbsp;
                    <input type="radio" id="radio-1-2" value="0" name="radio-1-set" class="regular-radio" /><label for="radio-1-2"></label> 不属实
                </div>
                <div class="clear"></div>
                <div class="tousrevtext">
                    <textarea name="content" class="tousreview_text_box " id="textarea" placeholder="请在此填写备注…" ></textarea>                                
                </div>
                <div class="clear"></div>
                <div class="upload_img_box">
                    <input type="hidden" value="" name="imgurl" onfocus=this.blur() id="imgurl"/>
                    <input type="file" id="uploadphoto" name="uploadfile" style="display:none;" />                    
                    <div class="imglist"></div> 
                    <div class="upimg_defau"><img src="<?php echo @IMG_URL;?>
upimg.png" onclick="uploadphoto.click()" width="80" height="80"></div>                     
                </div>
            </div>
            <div class="clear"></div>           
            <div class="tousReview_submit middle_center" id="submit"/>提交</div>  
    </div>

</div>        
</div>
<script type="text/javascript">

    $('#submit').click(function () {
        var ispasss = $.trim($('input:radio:checked').val());
        var remark = $.trim($("#textarea").val());
        var picruls = $.trim($("#imgurl").val());
        var tousid = $.trim($("#tousubh").html());
        var videourl = '';
        var audiourl = '';		
		if(remark == ''){
			layer.open({
                content: '最多只能上传9张图片',
                time: 1,
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
        //请求数据
        $.ajax({
            type: "POST",
            url: "../myinfo/tousReviewAction",
            data: {
                "tousid": tousid,
                "remark": remark,
                "ispasss": ispasss,
                "picruls": picruls,
                "videourl": videourl,
                "audiourl": audiourl
            },
            success: function (msg) {               
                var data = JSON.parse(msg);
                if (data.result == 1) {
                    layer.open({
                        shadeClose: false, //默认：true，是否点击遮罩时关闭层
                        content: '<div style="text-align:center">提交成功</div>',
                        time: 2
                    });
                }
                location.href = "../myinfo/myjob";
            }
        });
    });

    //限制图片上传张数
    $(".upimg_defau").on("click", function () {
        if ($(".imglist_img").length >= 8) {
            $(this).find("img").removeAttr("onclick");
        }
        if ($(".imglist_img").length >= 9) {
            layer.open({
                content: '最多只能上传9张图片',
                time: 1,
                shadeClose: true
            });
        }
        return false;
    });
    
    //删除图片
    $(document).on("click", ".delimg", function () {
        $(this).parent().remove();
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

    //给上面区域赋值
    $(function () {
        var id = "<?php echo $_GET['id'];?>
";
        $.ajax({
            type: "GET",
            url: "../myinfo/tousDetails/id/" + id,
            success: function (msg) {
                var data = JSON.parse(msg);
                if (data.status == 8) {
                    $("#tousuxq").css("display", "block");
                } else {
                    $("#tousush").css("display", "block");
                }
                $("#biaoti").html(data.title);
                $("#toususj").html(data.operationtime);
                $("#shifadz").html(data.address);
                $("#tousulr").html(data.content);
                $("#biaoti").html(data.title);
                $("#tousubh").html(data.id);
                $("#shifasj").html(data.createtime);
                $("#chulisj").html(data.stepptime);
                if (data.ispass == 1) {
                    $("#shifouss").html("是");
                } else {
                    $("#shifouss").html("否");
                }
                $("#xiangguanbz").html(data.stepcontent);
                for (var i = 0; i <= 2; i++) {
                    $(".details_content_text_pic").prepend("<a href='" + data.picurls[i].largepic + "'><img src='" + data.picurls[i].largepic + "' width='60' height='60'></a>");
                    $("#toustup").prepend("<a href='" + data.steppicurls[i].largepic + "'><img src='" + data.steppicurls[i].largepic + "' width='60' height='60'></a>");
                }
            }
        });

        //点击显示更多
        var maxwidth = 42;//设置最多显示的字数
        var text = $(".qian").text();
        if ($(".qian").text().length > maxwidth) {
            $(".qian").text($(".qian").text().substring(0, maxwidth));
            $(".qian").html($(".qian").html() + "..." + "<div class='program_xqn '>显示全部∨</div>");
        }
        $(".qian").click(function () {
            $(this).text(text);
            $(".shouqi").show();
        });
        $(".shouqi").click(function () {
            var maxwidth = 42;//设置最多显示的字数
            var text = $(this).text();
            if ($(".qian").text().length > maxwidth) {
                $(".qian").text($(".qian").text().substring(0, maxwidth));
                $(".qian").html($(".qian").html() + "..." + "<div class='program_xqn '>显示全部∨</div>");
            }
            $(".shouqi").hide();
        });

    });


</script>

    </body>
</html>
<?php }} ?>