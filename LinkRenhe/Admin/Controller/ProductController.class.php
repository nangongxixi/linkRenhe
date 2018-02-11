<?php

namespace Admin\Controller;

use Think\Controller;

class ProductController extends Controller {

    public function index() {
        //左侧菜单
        $MenuData = new \Component\MenuData();
        $productObj = new \Admin\Model\ProductModel();
        $proList = $productObj->proList();
        
        //show_bug($proList);
        
        
        
        
        $this->assign('MenuData', (array) $MenuData);
        $this->assign('proList', $proList);
        $this->display();
    }

    public function input() {
        $product = D("product");
        $id = I('get.id');
        if ($id) {
            $field = 'id,title,category,summary,content,thum_img,public_date';
            $data = $product->field($field)->where("id=%d and deleted=%d", array($id, 0))->select();
        }
        if (!empty(I('post.data'))) {
            if ($id) {
                $product->create(I('post.data'));
                $result = $product->where("id=%d and deleted=%d", array($id, 0))->save();
                if ($result) {
                    echo '<script>window.location.href="index";</script>';
                }
            } else {               
                $_POST['data']['created'] = date('Y-m-d H:i:s', time());
                $product->create(I('post.data'));
                $result = $product->add();
                if ($result) {
                    echo '<script>window.location.href="index";</script>';
                }
            }
        }
        $MenuData = new \Component\MenuData();
        $this->assign('MenuData', (array) $MenuData);
        $this->assign('data', $data[0]);
        $this->display();
    }

    public function del() {
        $productObj = new \Admin\Model\ProductModel();
        $proList = $productObj->del();
    }

}
