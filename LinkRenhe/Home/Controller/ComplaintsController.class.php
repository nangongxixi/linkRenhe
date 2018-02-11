<?php

namespace Home\Controller;

use Think\Controller;

class ComplaintsController extends Controller {

    public function index() {
        $this->display();
    }

    public function auto() {
        $Yan = M('Yan');
        $data = $Yan->where('status=1')->order('id desc')->limit(10)->select();
        $this->assign('list', $data);
        $this->assign('title', 'PHP学习笔记');
        $this->display('Index/auto');
    }

    public function getauto() {
        $Yan = M('Yan');
        $page = intval($_GET['page']);  //获取请求的页数
        $start = $page * 10;
        $data = $Yan->where('status=1')->field('content,time')->order('id desc')->limit($start, 10)->select();
        echo json_encode($data);  //转换为json数据输出
    }

    //投诉列表
    public function ComplaintsAction() {
        $loginObj = new \Home\Model\ComplaintsModel();
        $loginObj->ComplaintsList();
    }

    //投诉详情
    public function ComplaintsDetailsAction() {
        //echo 5566;
        $loginObj = new \Home\Model\ComplaintsModel();
        $loginObj->ComplaintsDetails();
    }

    //取消投诉
    public function CancelComplaintsAction() {
        $loginObj = new \Home\Model\ComplaintsModel();
        $loginObj->CancelComplaints();
    }

    //评价投诉
    public function ComplaintsevaluationAction() {
        $loginObj = new \Home\Model\ComplaintsModel();
        $loginObj->Complaintsevaluation();
    }
    
    //删除投诉
    public function delcomAction() {
        $loginObj = new \Home\Model\ComplaintsModel();
        $loginObj->delcomAction();
    }

    //获取投诉的时间轴信息
    public function ComplaintsTimelineAction() {
        $loginObj = new \Home\Model\ComplaintsModel();
        $loginObj->ComplaintsTimeline();
    }

    //获取处理意见
    public function ComplaintsopinionAction() {
        $loginObj = new \Home\Model\ComplaintsModel();
        $loginObj->Complaintsopinion();
    }

    //获取评价信息
    public function evaluaInfoAction() {
        $loginObj = new \Home\Model\ComplaintsModel();
        $loginObj->evaluaInfoAction();
    }

    public function evaluaInfo() {
        $this->display();
    }

    public function details() {
        $this->display();
    }

    public function detailsDes() {
        $this->display();
    }

    public function opinions() {
        $this->display();
    }

    public function chuliyijian() {
        $this->display();
    }
    
    
    public function evaluation() {
        $this->display();
    }

    //取消投诉
    public function cancelComplaint() {
        $this->display();
    }

}
