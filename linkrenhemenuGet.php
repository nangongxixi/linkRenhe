<?php
//生成自定义菜单
$appid = "wx658d726cf98b9588";
$appsecret = "bc7fcd085199359de3a8abd4059187fb";
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";
//get请求生成accesstoken
$access_token = gettoken($url);
echo 生成accessToken成功：$access_token.'<hr>';

$jsonmenu = '{
    "button": [
        {
            "name": "最新资讯", 
            "sub_button": [
                {
                    "type": "view", 
                    "name": "新闻动态", 
                    "url": "http://renhewx.sczmgk.com:9788/index.php/Home/news/newslist/id/1/page/1"
                }, 
                {
                    "type": "view", 
                    "name": "政策公告", 
                    "url": "http://renhewx.sczmgk.com:9788/index.php/Home/news/newslist/id/2/page/1"
                }, 
                {
                    "type": "view", 
                    "name": "办事指南", 
                    "url": "http://renhewx.sczmgk.com:9788/index.php/Home/news/newslist/id/5/page/1"
                }
            ]
        }, 
        {
            "type": "view", 
            "name": "我要投诉", 
            "url": "http://renhewx.sczmgk.com:9788/index.php/Home/Online/index"
        }, 
        {
            "name": "我的", 
            "sub_button": [
                {
                    "type": "view", 
                    "name": "个人中心", 
                    "url": "http://renhewx.sczmgk.com:9788/index.php/Home/myinfo/index"
                }, 
                {
                    "type": "view", 
                    "name": "进入微官网", 
                    "url": "http://renhewx.sczmgk.com:9788/index.php/Home/index/index"
                }, 
                {
                    "type": "view", 
                    "name": "APP下载", 
                    "url": "http://renhewx.sczmgk.com:9788/index.php/Home/Wxcode/index"
                }
            ]
        }
    ]
}';

$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=" . $access_token;

//post请求生成菜单
$result = https_request($url, $jsonmenu);

function https_request($url, $data = null) {
    $ch = curl_init($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);    
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);  
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);  
	$data = curl_exec($ch);
	curl_close($ch);		
	print_r($data);
	
}

function gettoken($url){	
	666666	
}

