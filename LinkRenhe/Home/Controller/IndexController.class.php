<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends Controller {

    public function index() {
        $datainfo = $this->postdata();        
        $datainfocom = $datainfo['complain']['complains'][0];
        $banner=$datainfo['banners'];
        $datainfo = $datainfo['information']['informations'];        
        //$datainfo=array_slice($datainfo,0,2);        
        //show_bug($datainfocom);        
        $this->assign("banner", $banner);
        $this->assign("datainfo", $datainfo);  
        $this->assign("datainfocom", $datainfocom);
        $this->display();
    }

    //接口取值
    public function postdata() {
        //如果没登录  userid默认为0
        $sess=session("user.userid");
        if (empty($sess)) {
            $url = "api/ow/Banner/mainhomedata/0";
        } else {
            $url = "api/ow/Banner/mainhomedata/" . session("user.userid");
        }
        $dd = new \Component\getRequest();
        $cc = $dd->getData($url);
        return json_decode($cc, true);
    }

}
