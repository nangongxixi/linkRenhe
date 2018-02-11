<?php

namespace Home\Controller;

use Think\Controller;

class MyinfoController extends Controller {

    public function index() {
        $this->display();
    }

    //个人信息
    public function perInfo() {
       // show_bug($_SESSION['user']);
        $this->display();
    }

    public function phone() {
        $this->display();
    }

    public function modifyPhone() {
        //show_bug(session("user"));
        $this->display();
    }

    //修改个人信息 -》电话号码
    public function dlpwdAction() {
        //输入密码与数据库密码比对
        $loginObj = new \Home\Model\MyinfoModel();
        $returnData = $loginObj->biduimima();
    }

    public function modyphoneAction() {
        // show_bug(session("user"));exit;        
        $loginObj = new \Home\Model\MyinfoModel();
        $jsonData = $loginObj->modyphone();
    }

    public function mailbox() {
        $this->display();
    }
    //修改邮箱
    public function modymailbox() {
        //show_bug(session("user"));exit;        
        $loginObj = new \Home\Model\MyinfoModel();
        $loginObj->modymailbox();
    }
    
    public function address() {
        $this->display();
    }

    //修改地址
    public function modyaddress() {
        //show_bug(session("user"));exit;        
        $loginObj = new \Home\Model\MyinfoModel();
        $loginObj->modyaddress();
    }

    //我的消息
    public function wdInfo() {
        $this->display();
    }

    //我的消息列表(全部)
    public function wdInfoAction() {
        $loginObj = new \Home\Model\MyinfoModel();
        $jsonData = $loginObj->wdInfoAction();
    }

    //未读条数
    public function wdInfowdAction() {
        $loginObj = new \Home\Model\MyinfoModel();
        $jsonData = $loginObj->wdInfowdAction();
    }

    //修改未读状态
    public function updatareadAction() {
        $loginObj = new \Home\Model\MyinfoModel();
        $jsonData = $loginObj->updatareadAction();
    }

    //消息详情
    public function wdInfoxqAction() {
        $loginObj = new \Home\Model\MyinfoModel();
        $jsonData = $loginObj->wdInfoxqAction();
    }
    
    //审核详情
    public function tousDetails() {
        $loginObj = new \Home\Model\MyinfoModel();
        $jsonData = $loginObj->tousDetails();
    }

    public function systemInfo() {
        $this->display();
    }

    //我的收藏
    public function myCollection() {
        $this->display();
    }

    //搜索我的收藏
    public function mycollNewsSearList() {
        $loginObj = new \Home\Model\MyinfoModel();
        $loginObj->mycollNewsSearList();
    }

    public function myCollectionAction() {
        $loginObj = new \Home\Model\MyinfoModel();
        $loginObj->myCollection();
    }

    public function myJob() {
        $this->display();
    }

    //我的工作 userid/page/status(0,全部)
    public function tousReviewAction() {
        $loginObj = new \Home\Model\MyinfoModel();
        $loginObj->tousReviewAction();
    }

    public function myjobAction() {
        $loginObj = new \Home\Model\MyinfoModel();
        $jsonData = $loginObj->myjobAction();
    }

    public function tousReview() {
        $this->display();
    }

    public function about() {
        $this->display();
    }

    //修改密码
    public function modifypwd() {
        $this->display();
    }
    
    //修改头像
    public function modifyHead() {
        $loginObj = new \Home\Model\MyinfoModel();
        $jsonData = $loginObj->updateHead();
        $this->display();
    }
    
    public function modifyPwdAction() {
        $loginObj = new \Home\Model\MyinfoModel();
        $jsonData = $loginObj->modpwd();
    }

    public function forgetPwdSur() {
        $this->display();
    }

    public function forgetPwd() {
        $this->display();
    }

    public function forgetPwdAction() {
        $loginObj = new \Home\Model\MyinfoModel();
        $jsonData = $loginObj->resetpwd();
    }

}
