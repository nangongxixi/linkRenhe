<?php

namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index() {
        $Admin = D('admin');
        if ($_SESSION['user']['is_default'] == 0) {
            $condition = 'id=' . $_SESSION['user']['id'] . ' and deleted = 0';
        } else {
            $condition = 'deleted = 0';
        }
        //左侧菜单
        $MenuData = new \Component\MenuData();
        $page = new \Component\Page($total, $per);
        $total = $Admin->where($condition)->count();
        $per = 2;
        $page = new \Component\Page($total, $per);
        $userInfo = $Admin->where($condition)->limit($page->limit)->select();
        $pagelist = $page->fpage();
        $this->assign('userInfo', $userInfo);
        $this->assign('MenuData', (array) $MenuData);
        $this->assign('pagelist', $pagelist);
        $this->display();
    }

}
