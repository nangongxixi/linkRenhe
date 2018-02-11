<?php

namespace Component;

class MenuData {

    public function __construct() {
        $this->codeConfig['menu'] = array(
            'product' => array(
                'name' => '产品中心',
                'sub' => array(
                    'index' => array(
                        'name' => '产品列表',
                    ),
                    'input' => array(
                        'name' => '添加/编辑产品',
                        'showName' => '添加/编辑产品',
                    ),
                )
            ),
            'news' => array(
                'name' => '新闻管理',
                'sub' => array(
                    'index' => array(
                        'name' => '新闻列表',
                    ),
                    'input' => array(
                        'name' => '添加新闻',
                        'showName' => '添加新闻',
                    ),
                )
            ),
            'employ' => array(
                'name' => '招聘管理',
                'sub' => array(
                    'index' => array(
                        'name' => '招聘列表',
                    ),
                    'input' => array(
                        'name' => '招聘添加/编辑',
                        'showName' => '招聘添加',
                    ),
                )
            ),
            'index' => array(
                'name' => '管理员管理',
                'sub' => array(
                    'index' => array(
                        'name' => '人员列表',
                    ),
                    'input' => array(
                        'name' => '人员添加/编辑',
                        'showName' => '人员添加',
                    ),
                )
            ),
        );
        /*
          $this->codeConfig['paging'] = array(
          'common' => array(
          'default' => array('value' => 10, 'name' => '10件'),
          array('value' => 20, 'name' => '20件'),
          array('value' => 50, 'name' => '50件'),
          array('value' => 999, 'name' => '所有'),
          ),
          );
         */
        $this->codeConfig['product_category'] = array(
            1 => array('value' => 1, 'name' => '西服'),
            2 => array('value' => 2, 'name' => '裙子'),
            3 => array('value' => 3, 'name' => '裤子'),
            4 => array('value' => 4, 'name' => '工装'),
        );
    }

}
