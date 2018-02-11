<?php

namespace Home\Model;

use Think\Model;

class OnlineModel extends Model {

    //投诉须知
    function OnlineInfoAction() {
        $url = "api/wx/Tidings/WXAgreementComModel/";
        //echo $url.'<br>';exit;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getData($url);
        //show_bug($newsSearList);exit;
        echo $newsSearList;
    }

    //提交投诉
    function OnlineAction() {
        $data = explode(",", I("post.picurls"));
        for ($i = 0; $i <= count($data); $i++) {
            $datanew .= substr(strstr($data[$i], 'd/'), 1, 14);
        }
        $_POST['picurls'] = ltrim($datanew, "/");
        foreach ($_POST as $key => $value) {
            $_POST[$key] = urlencode($value);
        }
        $_POST['userid'] = (int) I("post.userid");
        $_POST['type'] = (int) I("post.type");
        $data = urldecode(json_encode($_POST));
        $url = "api/wx/Complain/Add";
        $getRequest = new \Component\postRequest();
        $rstCategory = $getRequest->getDataJiang($url, $data);
        echo $rstCategory;
    }

    //上传图片
    function OnlineAgainstAction() {
        $imgurl = rtrim(I("post.imgurl"), "/");
        $data = array(
            "userid" => session("user.userid"),
            "title" => I("post.title"),
            "operationtime" => I("post.operationtime"),
            "address" => I("post.address"),
            "area" => I("post.area"),
            "content" => I("post.content"),
            "position" => '',
            "picurls" => $imgurl,
            'type' => 2
        );
        $data = str_replace("\\/", "/", json_encode($data, JSON_UNESCAPED_UNICODE)); //禁止转义“/”
        $url = "api/wx/Complain/Add";
        $getRequest = new \Component\postRequest();
        $rstCategory = $getRequest->getDataJiang($url, $data);
        $rstCategory = json_decode($rstCategory, true);
        //show_bug($rstCategory);
        //if ($rstCategory['result'] == 1) {            
        //    echo "<script>alert('提交成功！');location.href='../complaints/index';</script>";
           
        //}
    }

}
