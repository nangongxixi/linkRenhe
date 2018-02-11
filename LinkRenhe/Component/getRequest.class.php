<?php

namespace Component;

use Think\Model;

class getRequest extends Model {

    //private $url_default = "http://182.150.59.18:9644/";
    private $url_default = "http://221.10.2.222:5680/";
    private $url_jiang = "http://221.10.2.222:5680/";//蒋真容的接口
    //private $url_default = "http://192.168.0.187:8088/";
    //private $url_jiang = "http://192.168.0.187:8088/";//蒋真容的接口

    public function getData($url) {
       //echo $this->url_default . $url;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url_default . $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
    
    public function getDataJiang($url) {
       //echo $this->url_jiang . $url;exit;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url_jiang . $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0); 
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}
