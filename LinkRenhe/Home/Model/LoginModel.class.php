<?php

namespace Home\Model;

use Think\Model;

class LoginModel extends Model {

    //帐号密码登录  
    function accountLogin() {
        $data = array_keys($_GET)[0];
        if ($data) {
            $url = 'api/ow/Consumers/LoginInfoWX/' . $data;
            $postRequest = new \Component\getRequest();
            $rst = $postRequest->getData($url);
            return $rst;
        }
    }

    //发送验证码
    //1.注册、修改手机号，2.修改密码，重置密码，登陆 
    //除了修改手机号穿真实userid，其他都传0 
    function sendcode() {
        $contro = I("get.controller");
        if ($contro == 'modifyPhone') {
            $data = I("get.phoneyz") . '/1/' . session("user.userid");
        } else {
            $data = I("get.phoneyz") . '/2/0';
        }        
        if ($contro == 'regist') {
            $data = I("get.phoneyz") . '/1/0';
        }
        //echo $data;
        //exit;
        //$data=I("get.phoneyz").'/2/'.session("user.userid");
        $url = 'api/ow/Consumers/GetPhoneVerificationCodeWX/' . $data;
        //echo $url; exit;
        $postRequest = new \Component\getRequest();
        $rst = $postRequest->getData($url);
        //$rst = json_decode($postRequest->getData($url), true);            
        //show_bug($rst);
        echo $rst;
    }

    //验证验证码
    function checkcode() {
        $url = $this->url . 'api/ow/Consumers/ValidateWX/' . I("get.phoneyz") . '/' . I("get.vircode");
        $getRequest = new \Component\getRequest();
        $rst = $getRequest->getData($url);
        echo $rst;
    }

    //验证验证码登录
    function codeEnter() {
        $data = array_keys($_GET)[0];
        $phone = strstr($data, '/', true);
        $url = $this->url . 'api/ow/Consumers/ValidateLoginWX/' . $data;
        $getRequest = new \Component\postRequest();
        $rst = $getRequest->getData($url);
        return $rst;
    }

    //注册协议
    function registInfoAction() {
        $url = "api/wx/Tidings/WXAgreementResModel/";
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);
        echo $newsSearList;
    }

    //提交注册信息
    function submitInfo() {
        foreach ($_POST as $key => $value) {
            $_POST[$key] = urlencode($value);
        }       
        $_POST['isagree']=(int)$_POST['isagree'];        
        $data = urldecode(json_encode($_POST));        
        //echo $data;        
        $url = 'api/ow/Consumers/AddWX';
        //echo $url; exit;  
        $getRequest = new \Component\postRequest();
        $rst = $getRequest->getData($url,$data);
        echo $rst;
    }

}
