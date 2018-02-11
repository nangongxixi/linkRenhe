<?php

namespace Home\Model;

use Think\Model;

class MyinfoModel extends Model {

    //我的消息列表（已读）
    function wdInfoAction() {
        $data = session("user.userid");
        $url = 'api/wx/Tidings/consumersid/' . $data;
        $postRequest = new \Component\getRequest();
        $rst = $postRequest->getData($url);
        echo $rst;
    }

    //未读条数
    function wdInfowdAction() {
        $data = session("user.userid");
        $url = 'api/WX/Tidings/NoreadCount/' . $data;
        $postRequest = new \Component\getRequest();
        $rst = $postRequest->getData($url);
        echo $rst;
    }

    //更新未读状态
    function updatareadAction() {
        $data = I("get.id");
        $url = 'api/wx/Tidings/UpdateReader/' . $data;      
        $postRequest = new \Component\getRequest();
        $postRequest->getData($url);
       
    }

    //我的消息详情
    function wdInfoxqAction() {
        $data = I("get.id");
        if (empty($data)) {
            $data = 6;
        }
        $url = 'api/WX/Tidings/GetModelMessageWX/' . $data;
        $postRequest = new \Component\getRequest();
        $rst = $postRequest->getData($url);
        echo $rst;
    }

    //我的工作 userid/page/status(0,全部)
    function myjobAction() {        
        $data = session("user.userid") . '/'.I("post.page").'/' . I("post.id");
        $url = 'api/wx/Consumers/Complain/ListWX/' . $data;
        //echo $url;exit;
        $postRequest = new \Component\getRequest();
        $rst = $postRequest->getData($url);
        //show_bug($rst); exit; 
        echo $rst;
    }

    //投诉审核
    function tousReviewAction() {
        $imgurl = rtrim(I("post.picruls"), "/");     
        $data = [
            "userid" => session("user.userid"),
            "id" =>  I("post.tousid"),
            "remark" => I("post.remark"),
            "ispassed" => (int)I("post.ispasss"),
            "picurls"=>$imgurl,
            "videourl" => I("post.videourl"),
            "audiourl" => I("post.audiourl")
        ];
        $data = str_replace("\\/", "/", json_encode($data, JSON_UNESCAPED_UNICODE)); //禁止转义“/”       
        //echo $data;
        $url = 'api/ow/Consumers/ComplianAuditWX';        
        $postRequest = new \Component\postRequest();
        $rst = $postRequest->getData($url, $data);
        echo $rst;      
    }

    //审核详情
    function tousDetails() {
        $url = 'api/ow/Consumers/GetStepModelWX/' . I("get.id");
        $postRequest = new \Component\getRequest();
        $jsonData = $postRequest->getDataJiang($url);
        echo $jsonData;
    }

    //修改密码  
    function modpwd() {
        $url = 'api/ow/Consumers/UpdatePasswordWX/' . session("user.userid") . '/' . I("get.oldpwd") . '/' . I("get.newpwd");
        $postRequest = new \Component\getRequest();
        $rst = $postRequest->getData($url);
        if ($rst == 0) {
            session(null);
        }
        echo $rst;
    }

    //忘记密码  
    function resetpwd() {
        $url = 'api/ow/Consumers/UpdatePasswordThreeWX/' . session("user.userid") . '/' . I("get.surepwd");
        $postRequest = new \Component\getRequest();
        $rst = $postRequest->getData($url);
        if ($rst == 0) {
            session(null);
        }
        echo $rst;
    }

    //修改手机号前的密码比对
    function biduimima() {
        $data = session("user.userid") . '/' . I("get.pwd");
        $url = 'api/ow/Consumers/UpdatePasswordFirstWX/' . $data;
        $getRequest = new \Component\getRequest();
        $rst = $getRequest->getData($url);
        echo $rst;
    }

    //修改手机号
    function modyphone() {
        $url = 'api/ow/Consumers/PhonePcWX/' . I("get.phoneyz") . '/' . session("user.userid");
        $postRequest = new \Component\getRequest();
        $rst = $postRequest->getData($url);
        if (1 == $rst) {
            session(null);
        }
        echo $rst;
    }

    //修改地址
    function modyaddress() {
        $data = session("user.userid") . ',' . I("get.address");
        //echo $data;
        $data = base64_encode($data);
        $data = str_replace('/', "_", $data);
        $data = str_replace('+', "-", $data);
        $url = 'api/ow/Consumers/UpdateAddressWX/' . $data;
        //echo $url;exit;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);
        //show_bug($newsSearList);exit;        
        if (0 == $newsSearList) {
            session("user.address", I("get.address"));
        }
        echo $newsSearList;
    }
    
    //修改邮箱
    function modymailbox() {
        $data = session("user.userid") . '/' . I("get.mailbox");   
        $url = 'api/ow/Consumers/UpdateMailboxWX/' . $data;
        //echo $url;exit;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);
        //show_bug($newsSearList);exit;        
        if (0 == $newsSearList) {
            session("user.mailbox", I("get.mailbox"));
        }
        echo $newsSearList;
    }

    //我的收藏
    function myCollection() {
        $data = session("user.userid") . '/1/' . I("get.id");
        $url = 'api/wx/News/CollectList/' . $data;
        $postRequest = new \Component\getRequest();
        $jsonData = $postRequest->getDataJiang($url);
        echo $jsonData;
    }

    //我的收藏新闻搜索  userid/page/keyword
    function mycollNewsSearList() {
        $data = session("user.userid") . ',1,' . I("get.keyword");
        $data = base64_encode($data);
        $data = str_replace('/', "_", $data);
        $data = str_replace('+', "-", $data);
        $url = "api/wx/News/Search/CollectList/" . $data;
        //echo $url.'<br>';exit;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getDataJiang($url);
        //show_bug($newsSearList);exit;
        echo $newsSearList;
    }

    //上传头像
    function updateHead() {
        $getRequest = new \Component\postRequest();
        $url = 'api/wx/Files?filetypekey=W3siZGVzYyI6ICIiLCJtb2R1bGUiOjEwMDMsInJlbGF0ZWlkIjowLCJyZW1hcmsiOiAiIiwic2l6ZSI6ICIiLCAidGltZSI6ICIifV0=';
		
        if (isset($_FILES["file"]["tmp_name"]) && empty(($_FILES["file"]["tmp_name"]))) {
            echo "<script>alert('请选择图片并且大小不超过500kb！');</script>";
        }
        $returnval = move_uploaded_file($_FILES["file"]["tmp_name"], "Public/upload/" . $_FILES["file"]["name"]);
        if ($returnval == 1) {
            $path = "Public/upload/" . $_FILES["file"]["name"];
        }
        $newsSearList = $getRequest->updatepic($url, $path);
        $headurl = $newsSearList[0]; //头像
        //拿到返回值，重新请求接口写进数据库
        $urll = 'api/ow/Consumers/UpdateConsumersWX';
        $dataa['userid'] = session("user.userid");
        $dataa['headurl'] = $headurl;
        $dataa['address'] = session("user.address");
        $dataa['sex'] = session("user.sex");
        $dataa['nickname'] = session("user.nickname");
        $dataa['easemobsaccount'] = session("user.easemobsaccount");
        $dataa['easemobspassword'] = session("user.easemobspassword");
        $dataa = json_encode($dataa);
        $newsSearListt = $getRequest->getData($urll, $dataa); //重新请求新的接口
        $jsondata = json_decode($newsSearListt, true);
        if ($headurl != null) {
            session("user.headurl", $headurl);
            echo "<script>alert('修改成功，点【确定】返回查看');location.href='../myinfo/index';</script>";
        }
    }

}
