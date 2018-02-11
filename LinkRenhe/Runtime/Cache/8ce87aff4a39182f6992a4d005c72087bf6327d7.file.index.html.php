<?php /* Smarty version Smarty-3.1.6, created on 2018-02-09 16:03:27
         compiled from "./LinkRenhe/Home/View\Complaints\index.html" */ ?>
<?php /*%%SmartyHeaderCode:29142587d80d6b926f9-89939784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ce87aff4a39182f6992a4d005c72087bf6327d7' => 
    array (
      0 => './LinkRenhe/Home/View\\Complaints\\index.html',
      1 => 1518163394,
      2 => 'file',
    ),
    'cba641dc9a691784a5c853a28cd0e485e77cb07f' => 
    array (
      0 => 'C:\\Program Files\\phpStudy\\WWW\\LinkRenhe\\LinkRenhe\\Home\\View\\Common\\default.html',
      1 => 1490840098,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29142587d80d6b926f9-89939784',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d80d6d79ef',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d80d6d79ef')) {function content_587d80d6d79ef($_smarty_tpl) {?><html>
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
    <div id="contt" data-role="content">
        <a href="#" data-ajax="false"><img src="<?php echo @IMG_URL;?>
tscl.png" width="100%"></a>
        <div id="navtab">
            <ul class="title" >
                <li class="active"  id="nav0" type="0">全部</li>
                <li class="bgcolor" id="nav1" type="1">待处理</li>
                <li class="bgcolor" id="nav2" type="2">处理中</li>
                <li class="bgcolor" id="nav3" type="3">待评价</li>
            </ul>          
            <ul>                
                <li><div id="lei0"></div></li>
                <li style="display:none"><div id="lei1"></div></li>
                <li style="display:none"><div id="lei2"></div></li>
                <li style="display:none"><div id="lei3"></div></li>                
            </ul>
            <div class="clear"></div>
            <div class="tscl_only_line"></div>        
            <div class="clear"></div>
        </div>
    </div>        
</div>

<script type="text/javascript">
    $(function () {
        var bianh = 0;
        $.ajax({
            type: "POST",
            url: "../Complaints/ComplaintsAction/id/" + bianh,
            success: function (msg) {

                //alert(msg);

                var data = JSON.parse(msg);
                console.log(data);
                var newStatus;
                if (data.result == 0) {
                    $("#lei" + bianh).html("<p style='padding:25px 0px; text-align:center; color:#666'>暂无信息！</p>");
                    $(".tscl_only_line").removeClass();//删除为空时的底部线条
                }
                data.datalist = data.datalist.reverse();
                $.each(data.datalist, function (i) {
                    if (data.datalist[i].picurls == null) {
                        var picurls = [];//定义一个一维数组
                        picurls.push(["largepic"]);//一维数组中放入一个一维数组，picurls成为二维数组
                        data.datalist[i].picurls = picurls;
                    }
                    if (data.datalist[i].status == 1) {
                        newStatus = "待处理";
                    }
                    if (data.datalist[i].status == 2) {
                        newStatus = "待审核";
                    }
                    if (data.datalist[i].status == 3) {
                        newStatus = "处理中";
                    }
                    if (data.datalist[i].status == 4) {
                        newStatus = "已处理";
                    }
                    if (data.datalist[i].status == 5) {
                        newStatus = "已评价";
                    }
                    if (data.datalist[i].status == 6) {
                        newStatus = "取消投诉";
                    }
                    if (data.datalist[i].status == 7) {
                        newStatus = "网格化管理员待处理";
                    }
                    if (data.datalist[i].status == 8) {
                        newStatus = "网格化管理员已处理";
                    }
                    if (data.datalist[i].status == 9) {
                        newStatus = "预审失败";
                    }
                    if (data.datalist[i].status == 1 || data.datalist[i].status == 2 || data.datalist[i].status == 3 || data.datalist[i].status == 7) {
                        $("#lei" + bianh).prepend("<div class='myjob_box'><div class='tscl_content_box'><div class='tscl_content_img'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86' id='yanze" + i + "'></div><div class='tscl_content_shu'><div class='tscl_content_title'>" + newStatus + "</div><div class='tscl_content_date'>" + data.datalist[i].title + "<br>" + data.datalist[i].createtime + "</div></div></div><div class='clear'></div><div class='middle_center navtab_button_box'><div class='navtab_button right'><div class='xq' onclick='tiaoz(" + i + "," + data.datalist[i].id + "," + data.datalist[i].status + ")'>详情</div></div><a href='../complaints/cancelcomplaint/id/" + data.datalist[i].id + "' class='navtab_button right'>取消投诉</a></div></div><div class='clear'></div><div class='fenge_one'></div><div class='clear'></div>");
                    } else if (data.datalist[i].status == 4) {
                        $("#lei" + bianh).prepend("<div class='myjob_box'><div class='tscl_content_box'><div class='tscl_content_img'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86' id='yanze" + i + "'></div><div class='tscl_content_shu'><div class='tscl_content_title'>" + newStatus + "</div><div class='tscl_content_date'>" + data.datalist[i].title + "<br>" + data.datalist[i].createtime + "</div></div></div><div class='clear'></div><div class='middle_center navtab_button_box'><div class='navtab_button right'><div class='xq' onclick='tiaoz(" + i + "," + data.datalist[i].id + "," + data.datalist[i].status + ")'>详情</div></div><a href='../complaints/evaluation/id/" + data.datalist[i].id + "' class='navtab_button right'><div class='pjx'>评价</div></a></div></div><div class='clear'></div><div class='fenge_one'></div><div class='clear'></div>");
                    } else if (data.datalist[i].status == 5) {
                        $("#lei" + bianh).prepend("<div class='myjob_box'><div class='tscl_content_box'><div class='tscl_content_img'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86' id='yanze" + i + "'></div><div class='tscl_content_shu'><div class='tscl_content_title'>" + newStatus + "</div><div class='tscl_content_date'>" + data.datalist[i].title + "<br>" + data.datalist[i].createtime + "</div></div></div><div class='clear'></div><div class='middle_center navtab_button_box'><div class='navtab_button right'><div class='xq' onclick='tiaoz(" + i + "," + data.datalist[i].id + "," + data.datalist[i].status + ")'>详情</div></div><div class='navtab_button right delcomp' onclick='test(this.id)' id='" + data.datalist[i].id + "'>删除投诉</div></div></div><div class='clear'></div><div class='fenge_one'></div><div class='clear'></div>");
                    } else {
                        $("#lei" + bianh).prepend("<div class='myjob_box'><div class='tscl_content_box'><div class='tscl_content_img'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86' id='yanze" + i + "'></div><div class='tscl_content_shu'><div class='tscl_content_title'>" + newStatus + "</div><div class='tscl_content_date'>" + data.datalist[i].title + "<br>" + data.datalist[i].createtime + "</div></div></div><div class='clear'></div><div class='middle_center navtab_button_box'><div class='navtab_button right'><div class='xq' onclick='tiaoz(" + i + "," + data.datalist[i].id + "," + data.datalist[i].status + ")'>详情</div></div><div class='navtab_button right delcomp' onclick='test(this.id)' id='" + data.datalist[i].id + "'>删除投诉</div></div></div><div class='clear'></div><div class='fenge_one'></div><div class='clear'></div>");
                    }
                    //默认图片
                    if ($("#yanze" + i).attr("src") == "undefined") {
                        $("#yanze" + i).attr("src", "/public/home/img/nopic.jpg");
                    }
                    //删除最后一个双划线
                    if (data.datalist.length - 1 == i) {
                        $(".fenge_one:last").removeClass();
                    }
                });
            }
        });
    });

    for (var j = 0; j <= 3; j++) {
        $("#nav" + j).click(function () {
            var bianh = $(this).attr("type");
            $("#lei" + bianh).html('');
            $.ajax({
                type: "POST",
                url: "../Complaints/ComplaintsAction/id/" + bianh,
                success: function (msg) {
                    var data = JSON.parse(msg);
                    var newStatus;
                    if (data.result == 0) {
                        $("#lei" + bianh).html("<p style='padding:25px 0px; text-align:center; color:#666'>暂无信息！</p>");
                        $(".tscl_only_line").removeClass();//删除为空时的底部线条
                    }
                    data.datalist = data.datalist.reverse();
                    $.each(data.datalist, function (i) {
                        if (data.datalist[i].picurls == null) {
                            var arr = [];
                            var json = new Object();
                            json = {"largepic": "/public/home/img/nopic.jpg"};
                            arr[0] = json;
                            data.datalist[i].picurls = arr;
                        }
                        if (data.datalist[i].status == 1) {
                            newStatus = "待处理";
                        }
                        if (data.datalist[i].status == 2) {
                            newStatus = "待审核";
                        }
                        if (data.datalist[i].status == 3) {
                            newStatus = "处理中";
                        }
                        if (data.datalist[i].status == 4) {
                            newStatus = "已处理";
                        }
                        if (data.datalist[i].status == 5) {
                            newStatus = "已评价";
                        }
                        if (data.datalist[i].status == 6) {
                            newStatus = "取消投诉";
                        }
                        if (data.datalist[i].status == 7) {
                            newStatus = "网格化管理员待处理";
                        }
                        if (data.datalist[i].status == 8) {
                            newStatus = "网格化管理员已处理";
                        }
                        if (data.datalist[i].status == 9) {
                        newStatus = "预审失败";
                    }
                        if (data.datalist[i].status == 1 || data.datalist[i].status == 2 || data.datalist[i].status == 3 || data.datalist[i].status == 7) {
                            $("#lei" + bianh).prepend("<div class='myjob_box'><div class='tscl_content_box'><div class='tscl_content_img'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86' id='yanze" + i + "'></div><div class='tscl_content_shu'><div class='tscl_content_title'>" + newStatus + "</div><div class='tscl_content_date'>" + data.datalist[i].title + "<br>" + data.datalist[i].createtime + "</div></div></div><div class='clear'></div><div class='middle_center navtab_button_box'><div class='navtab_button right'><div class='xq' onclick='tiaoz(" + i + "," + data.datalist[i].id + "," + data.datalist[i].status + ")'>详情</div></div><a href='../complaints/cancelcomplaint/id/" + data.datalist[i].id + "' class='navtab_button right'>取消投诉</a></div></div><div class='clear'></div><div class='fenge_one'></div><div class='clear'></div>");
                        } else if (data.datalist[i].status == 4) {
                            $("#lei" + bianh).prepend("<div class='myjob_box'><div class='tscl_content_box'><div class='tscl_content_img'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86' id='yanze" + i + "'></div><div class='tscl_content_shu'><div class='tscl_content_title'>" + newStatus + "</div><div class='tscl_content_date'>" + data.datalist[i].title + "<br>" + data.datalist[i].createtime + "</div></div></div><div class='clear'></div><div class='middle_center navtab_button_box'><div class='navtab_button right'><div class='xq' onclick='tiaoz(" + i + "," + data.datalist[i].id + "," + data.datalist[i].status + ")'>详情</div></div><a href='../complaints/evaluation/id/" + data.datalist[i].id + "' class='navtab_button right'><div class='pjx'>评价</div></a></div></div><div class='clear'></div><div class='fenge_one'></div><div class='clear'></div>");
                        } else if (data.datalist[i].status == 5) {
                            $("#lei" + bianh).prepend("<div class='myjob_box'><div class='tscl_content_box'><div class='tscl_content_img'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86' id='yanze" + i + "'></div><div class='tscl_content_shu'><div class='tscl_content_title'>" + newStatus + "</div><div class='tscl_content_date'>" + data.datalist[i].title + "<br>" + data.datalist[i].createtime + "</div></div></div><div class='clear'></div><div class='middle_center navtab_button_box'><div class='navtab_button right'><div class='xq' onclick='tiaoz(" + i + "," + data.datalist[i].id + "," + data.datalist[i].status + ")'>详情</div></div><div class='navtab_button right'><div class='pjx'>已评价</div></div></div></div><div class='clear'></div><div class='fenge_one'></div><div class='clear'></div>");
                        } else {
                            $("#lei" + bianh).prepend("<div class='myjob_box'><div class='tscl_content_box'><div class='tscl_content_img'><img src='" + data.datalist[i].picurls[0].largepic + "' width='120' height='86' id='yanze" + i + "'></div><div class='tscl_content_shu'><div class='tscl_content_title'>" + newStatus + "</div><div class='tscl_content_date'>" + data.datalist[i].title + "<br>" + data.datalist[i].createtime + "</div></div></div><div class='clear'></div><div class='middle_center navtab_button_box'><div class='navtab_button right'><div class='xq' onclick='tiaoz(" + i + "," + data.datalist[i].id + "," + data.datalist[i].status + ")'>详情</div></div><div class='navtab_button right delcomp' onclick='test(this.id)' id='" + data.datalist[i].id + "'>删除投诉</div></div></div><div class='clear'></div><div class='fenge_one'></div><div class='clear'></div>");
                        }
                        //默认图片                       
                        if ($("#yanze" + i).attr("src") == "undefined") {
                            $("#yanze" + i).attr("src", "{$smarty.const.IMG_URL}nopic.jpg");
                        }

                        //删除最后一个双划线
                        if (data.datalist.length - 1 == i) {
                            $(".fenge_one:last").removeClass();
                        }
                    });

                }
            });
        });
    }

    $("#navtab .title li").click(function () {
        $(this).addClass("active").siblings().removeClass("active");
        var index = $(this).index();
        var li = $(this).parent().next().children();
        $(li[index]).show().siblings().hide();
    });
    function test(id) {
        $.ajax({
            type: "GET",
            url: "../Complaints/delcomAction/id/" + id,
            success: function (msg) {
                var data = JSON.parse(msg);
                if (data.result == 1) {
					layer.open({
						content: '您确定要删除吗？',
						btn: ['确定', '取消'],
						shadeClose: false, //默认：true，是否点击遮罩时关闭层
						yes: function () {
							$.ajax({
								type: "GET",
								url: "../Complaints/delcomAction/id/" + id,
								success: function (msg) {
									var data = JSON.parse(msg);
									if (data.result == '1') {
										layer.open({
											content: '操作成功',
											time: 2,
											shadeClose: true,
											end: function () {
												location.href = "../Complaints/index";
											}
										});
									}
								}
							});
						}
					});                   
                } else {
                    layer.open({
                        shadeClose: false, //默认：true，是否点击遮罩时关闭层
                        content: '<div style="text-align:center">删除失败</div>',
                        time: 2,
                        success: function () {
                            location.href = "../Complaints/index";
                        }
                    });
                }
            }
        });
    }

    function tiaoz(i, id, statusid) {
        if (statusid == 3 || statusid == 4 || statusid == 5 || statusid == 8) {
                    location.href = "../complaints/details/id/" + id;
                } else {
                    location.href = "../complaints/details/id/" + id;
					//location.href = "../complaints/detailsDes/id/" + id;
                }
        
        
        /*
        layer.open({
            content: '<div style="text-align:center">相关处理意见会通过电话通知，请耐心等待！</div>',
            btn: ['确定'],
            yes: function () {
                if (statusid == 3 || statusid == 4 || statusid == 5 || statusid == 8) {
                    location.href = "../complaints/details/id/" + id;
                } else {
                    location.href = "../complaints/detailsDes/id/" + id;
                }

            }
        });
        */
    }
</script>


        <?php echo $_smarty_tpl->getSubTemplate ("../Common/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
        
    </body>
</html>
<?php }} ?>