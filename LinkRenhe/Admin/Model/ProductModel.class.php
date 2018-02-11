<?php

namespace Admin\Model;

use Think\Model;

class ProductModel extends Model {

    public $productTbn = "tb_product";

    function proList() {
        $product = D('product');
        //务必注意有无空格的问题
        $_SESSION['search'] = [
            'title' => [' like \'%', $_GET['title'], '%\''],
            'log_describe' => [' like \'%', $_GET['descript'], '%\''],
            'created' => ['>= \'', $_GET['start_time'], '\''],
            'created ' => ['<= \'', $_GET['end_time'], '\''],
            'category' => ['=', $_GET['category'], '']
        ];
        //show_bug($_SESSION);
        foreach ($_SESSION['search'] as $k => $v) {
            if (!empty($v[1])) {
                $condition .= ' and ' . $k . $v[0] . $v[1] . $v[2];
            }
        }
        //分页
        //$conditionPage = 'deleted=0' . $condition;
        //$total = $product->where($conditionPage)->count();
        //echo $product->_sql().'<br>';
        //$per = 7;
        $page = new \Component\Page($total, $per);
        $sql = " select * from {$this->productTbn} where deleted=0 $condition order by id desc";
        //echo $product->_sql(); 
        $info = $product->query($sql);
        //$pagelist = $page->fpage();
        //$infoData = ['info' => $info, 'pagelist' => $pagelist];
        return $info;
    }
    
    function input(){
        
    }

    function del() {
        $product = D('product');
        $product->where(array('id' => $_GET['id']))->data('deleted=1')->save();
    }

}
