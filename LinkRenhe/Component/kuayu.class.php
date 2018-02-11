<?php

namespace Component;
class kuayu {

    public function ret() {
        $url="http://192.168.0.188:8720/api/ow/Banner/mainhomedata/".session("user.userid");
        $loginObj = new \Component\getRequest();
        $datainfo = $loginObj->getData($url);
        return $datainfo;
        //print_r($datainfo);
    }

}
