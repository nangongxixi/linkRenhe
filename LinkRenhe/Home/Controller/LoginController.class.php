<?php

namespace Home\Controller;

use Think\Controller;

header("Access-Control-Allow-Origin: * ");

class LoginController extends Controller {

    public function index() {
        $this->display();
    }

    //帐号密码登录
    public function loginEnter() {
        $loginObj = new \Home\Model\LoginModel();
        $jsonData = $loginObj->accountLogin();
        $jsonData = json_decode($jsonData, true);
        if (isset($jsonData['error']['msg'])) {
            echo $jsonData['error']['msg'];
        } else {
            $sess = session('user', ['userid' => $jsonData['userid'],
                'consumersname' => $jsonData['consumersname'],
                'nickname' => $jsonData['nickname'],
                'sex' => $jsonData['sex'],
                'phone' => $jsonData['phone'],
                'idcard' => $jsonData['idcard'],
                'address' => $jsonData['address'],
                'headurl' => $jsonData['headurl'],
                'consumerstype' => $jsonData['consumerstype'],
                'idcard' => $jsonData['idcard'],
                'password' => $jsonData['password'],
                'easemobsaccount' => $_POST['easemobsaccount'],
                'mailbox' => $_POST['mailbox']
            ]);
            if (!empty(session('user.userid'))) {
                echo 'success';
            }
        }
    }

    //验证验证码登录
    public function VricodeEnter() {
        $loginObj = new \Home\Model\LoginModel();
        $jsonData = $loginObj->codeEnter();
        $jsonData = json_decode($jsonData, true);
        if (!isset($jsonData['userid'])) {
            echo $jsonData;
        } else {
            session('user', ['userid' => $jsonData['userid'],
                'consumersname' => $jsonData['consumersname'],
                'nickname' => $jsonData['nickname'],
                'sex' => $jsonData['sex'],
                'phone' => $jsonData['phone'],
                'idcard' => $jsonData['idcard'],
                'address' => $jsonData['address'],
                'headurl' => $jsonData['headurl'],
                'consumerstype' => $jsonData['consumerstype'],
                'idcard' => $jsonData['idcard'],
                'password' => $jsonData['password'],
                'easemobsaccount' => $_POST['easemobsaccount'],
                'mailbox' => $_POST['mailbox']
            ]);
            if (!empty(session('user.userid'))) {
                echo 'success';
            }
        }
    }

    //验证验证码
    public function Vricode() {
        $loginObj = new \Home\Model\LoginModel();
        $jsonData = $loginObj->checkcode();
        $jsonData = json_decode($jsonData, true);
    }

    public function regist() {
        $text = I('post.tijiao');
        if ($text == '提交') {
            $loginObj = new \Home\Model\LoginModel();
            $phone = $loginObj->regist();
            if ($phone) {
                $this->redirect("login/registagre");
            }
        } else {
            $this->display();
        }
    }

    public function registAgre() {
        $this->display();
    }

    public function agreement() {
        $this->display();
    }

    //退出登录
    function logout() {
        session(null);
        $this->redirect("index/index");
    }

    //发送验证码
    public function sendVricode() {
        $loginObj = new \Home\Model\LoginModel();
        $loginObj->sendcode();
    }

    //验证验证码
    public function checkVricode() {
        session('user.registphone', I("get.phoneyz"));
        //show_bug(session("user.registphone"));exit;
        $loginObj = new \Home\Model\LoginModel();
        $rst = $loginObj->checkcode();
    }
    
    //注册协议
    public function registInfoAction() {
        $loginObj = new \Home\Model\LoginModel();
        $loginObj->registInfoAction();
    }

    //提交注册信息
    public function submitRegist() {
        $loginObj = new \Home\Model\LoginModel();
        $loginObj->submitInfo();
    }

}
