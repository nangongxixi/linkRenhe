<?php

namespace Model;

use Think\Model;

class AdminModel extends Model {
    
    protected $patchValidate = true;
    protected $_validate = array(
        //验证字段1,验证规则,错误提示,[验证条件,附加规则,验证时间]),
        //验证用户名,require必须填写项目
        array('account','require','* 用户名必填'),
        array('password', 'require', '* 密码必填'),
        //array('password','checkNamePwd','* 用户名或密码错误',1,'callback'),
        //array('mg_pwd', '/^(?=.{6,16})(?=.*[a-z])(?=.*[0-9])[0-9a-z]*$/', '* 必须6位以上且同时包含字母和数字'),
        //array('mg_tel', '/^((0\d{2,3}-\d{7,8})|(1[34578]\d{9}))$/', '* 手机号码格式错误'),
        //array('mg_role_id', 'require', '* 必须选择角色'),       
    );

    //制作一个方法对用户名和密码进行校验
    function checkNamePwd($account, $pwd) {       
        $info = $this->getByAccount($account);
        if ($info != null ) {            
            if ($info['password'] != md5($pwd) || $info['deleted'] != 0 ) {                
                return false;
            } else {
                return $info;
            }
        } else {
            return false;
        }
    }

}
