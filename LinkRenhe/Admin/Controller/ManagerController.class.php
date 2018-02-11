<?php

namespace Admin\Controller;

use Think\Controller;

class ManagerController extends Controller {

    function login() {
        $user = new \Model\AdminModel();
        if (!empty($_POST)) {
            //只要有输入就要保存，以便实现输入的持久性
            session('user', ['account' => $_POST['account'],
                'password' => $_POST['password']
            ]);
            if (!$user->create()) {
                $errors = $user->getError();
            } else {
                $rst = $user->checkNamePwd($_POST['account'], $_POST['password']);
                if (!$rst) {
                    $errors['password'] = '* 用户名或密码错误';
                } else {
                    session('user', ['id' => $rst['id'],
                        'name' => $rst['name'],
                        'account' => $rst['account'],
                        'password' => $rst['password'],
                        'created' => $rst['created'],
                        'is_default' => $rst['is_default'],
                        'deleted' => $rst['deleted']
                    ]);
                    $this->redirect("Index/index");
                }
            }
        }
        $this->assign('session', session());
        $this->assign('errors', $errors);
        $this->display();
    }

    //退出系统
    function logout() {
        session(null);
        $this->redirect("Manager/login");
    }

}
