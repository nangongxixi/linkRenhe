<?php

namespace Home\Model;

use Think\Model;

class ComplaintsModel extends Model {
   
    //投诉列表
    function ComplaintsList() {
        $data = session("user.userid") . '/1/' . I("get.id") ;        
        $url = 'api/wx/Complain/List/' . $data;
        //echo $url; exit;
        $postRequest = new \Component\getRequest();
        $jsonData = $postRequest->getDataJiang($url);        
        echo $jsonData;
    }
    
    //投诉详情
    function ComplaintsDetails() {        
        $url = 'api/wx/Complain/Model/'.I("get.id");
        $postRequest = new \Component\getRequest();
        $jsonData = $postRequest->getDataJiang($url);        
        echo $jsonData;
    }    
    
    //取消投诉  http://192.168.0.187:8088/api/wx/Complain/Cancel/83/48/2/gfdgfd
    function CancelComplaints() {
        $_POST['userid']=(int)I("post.userid");
        $_POST['id']=I("post.id");
        foreach ($_POST as $key => $value) {
            $_POST[$key] = urlencode($value);
        }
        $data = urldecode(json_encode($_POST));
        $url = 'api/wx/Complain/Cancel';       
        $postRequest = new \Component\postRequest();
        $jsonData = $postRequest->getDataJiang($url,$data); 
        echo $jsonData;
    }    
    
    //评价投诉 http://192.168.0.187:8088/api/wx/Complain/Cancel/83/49/fdasfdsf/4
    function Complaintsevaluation() { 
        
        // echo $_POST['id'];
        
        foreach ($_POST as $key => $value) {
            $_POST[$key] = urlencode($value);
        }
        $_POST['userid']=(int)$_POST['userid'];
        $_POST['id']=$_POST['id'];
        $_POST['score']=(int)$_POST['score'];
        
        $data = urldecode(json_encode($_POST));
        
        //echo $data;
        
        $url = 'api/wx/Complain/Comment';
        
        //echo $url;
        $postRequest = new \Component\postRequest();
        $jsonData = $postRequest->getDataJiang($url,$data); 
        echo $jsonData;
    }
    
    //删除投诉
    function delcomAction() {       
        $url="api/wx/Complain/Delete";
        $_POST['id']=I("get.id");        
        $data = urldecode(json_encode($_POST));       
        $postRequest = new \Component\postRequest();
        $jsonData = $postRequest->getDataJiang($url,$data); 
        echo $jsonData;
    }
    
    //获取投诉的时间轴信息 http://192.168.0.187:8088/api/wx/Complain/StepList/83/52
    function ComplaintsTimeline() {     
        $data = session("user.userid") . '/'.I("get.id");        
        $url = 'api/wx/Complain/StepList/' . $data;
        $postRequest = new \Component\getRequest();
        $jsonData = $postRequest->getDataJiang($url);        
        echo $jsonData;
    }
    
    //获取处理意见
    function Complaintsopinion() {     
        $data = session("user.userid") . '/'.I("get.id");        
        $url = 'api/wx/complain/step/model/' . $data;        
        //echo $url;        
        $postRequest = new \Component\getRequest();
        $jsonData = $postRequest->getDataJiang($url);        
        echo $jsonData;
    }
    
    //我的评价信息
    function evaluaInfoAction() {
        $url = 'api/wx/Complain/Comment/Detail/' . I("get.id");
        //echo $url; exit;
        $postRequest = new \Component\getRequest();
        $jsonData = $postRequest->getDataJiang($url);        
        echo $jsonData;
    }
    
    
    
    
    
}
