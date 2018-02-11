<?php /* Smarty version Smarty-3.1.6, created on 2017-01-19 10:18:13
         compiled from "./LinkRenhe/Home/View\Wxcode\index.html" */ ?>
<?php /*%%SmartyHeaderCode:19725587d8cd7bcc209-30776978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d129e2fed7b6b0ed06d0f4b9eda0180dfeef522' => 
    array (
      0 => './LinkRenhe/Home/View\\Wxcode\\index.html',
      1 => 1484791798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19725587d8cd7bcc209-30776978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_587d8cd7c4600',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_587d8cd7c4600')) {function content_587d8cd7c4600($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
        <meta name="keywords" content="APP下载【仁和信访】" />
        <meta name="description" content="APP下载【仁和信访】"/>
        <title>"微信APP下载【仁和信访】"</title>
        <link type="text/css" rel="stylesheet" href="<?php echo @CSS_URL;?>
/app_style.css" />
        <script type="text/javascript" src="<?php echo @JS_URL;?>
/jquery-1.8.3.min.js"></script>
        
        <script type="text/javascript">
            browser = {
                versions: function () {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {//移动终端浏览器版本信息
                        trident: u.indexOf('Trident') > -1, //IE内核
                        presto: u.indexOf('Presto') > -1, //opera内核
                        webKit: u.indexOf('AppleWebKit') > -1, //苹果、谷歌内核
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1, //火狐内核
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/), //是否为移动终端
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1, //android终端或者uc浏览器
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1, //是否为iPhone或者QQHD浏览器
                        iPad: u.indexOf('iPad') > -1, //是否iPad
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/), //ios终端
                        webApp: u.indexOf('Safari') == -1 //是否web应该程序，没有头部与底部
                    };
                }(),
                language: (navigator.browserLanguage || navigator.language).toLowerCase()
            };
            function isWeiXin() {
                var ua = window.navigator.userAgent.toLowerCase();
                if (ua.match(/MicroMessenger/i) == 'micromessenger') {
                    return true;
                } else {
                    return false;
                }
            }
            function android_apkdownload() {
                if (isWeiXin()) {
                    $("#a_android_load").attr("href") == '#';
                    alert("请点击右上角的【…】，选择【在浏览器打开】进行下载");
                } else {
                    $("#a_android_load").attr("href", "http://sj.qq.com/myapp/detail.htm?apkName=com.sczmgk.linkrenhe");
                }
            }
            function iphone_apkdownload() {
                if (isWeiXin()) {
                    $("#a_iphone_load").attr("href") == '#';
                    alert("请点击右上角的【…】，选择【在浏览器打开】进行下载");
                } else {
                    $("#a_iphone_load").attr("href", "http://sj.qq.com/myapp/detail.htm?apkName=com.sczmgk.linkrenhe");
                }
            }
        </script>
        
    </head>
    <body >
        <div class="head">
            <div class="logo"><img src="<?php echo @IMG_URL;?>
wxcode/body.png"></div>            
            <div class="phone_box">
                <div class="phone_left"><a id="a_android_load" onclick="android_apkdownload();"><img src="<?php echo @IMG_URL;?>
wxcode/Android.png"></a></div>
                <div class="phone_right"><a id="a_iphone_load" onclick="iphone_apkdownload();"><img src="<?php echo @IMG_URL;?>
wxcode/iPhone.png"></a></div>
            </div> 
        </div>
    </body>
</html>
<?php }} ?>