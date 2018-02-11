<?php

namespace Component;

use Think\Model;

class postRequest extends Model {

    private $url_default = "http://221.10.2.222:5680/";
    private $url_jiang = "http://221.10.2.222:5680/";
    //private $url_default = "http://192.168.0.187:8088/";
    //private $url_jiang = "http://192.168.0.187:8088/";//蒋真容的接口

    public function getData($url, $data = '') {     
        $header = array(
            'X-AjaxPro-Method:ShowList',
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: ' . strlen($data));
        $ch = curl_init(); //初始化curl
        curl_setopt($ch, CURLOPT_URL, $this->url_default . $url); //抓取指定网页
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1); //post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        curl_close($ch);        
        return $result;
    }

    public function getDataJiang($url, $data = '') {
        $header = array(
            'X-AjaxPro-Method:ShowList',
            'Content-Type: application/json; charset=utf-8',
            'Content-Length: ' . strlen($data));
        $ch = curl_init(); //初始化curl
        curl_setopt($ch, CURLOPT_URL, $this->url_jiang . $url); //抓取指定网页
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //要求结果为字符串且输出到屏幕上
        curl_setopt($ch, CURLOPT_POST, 1); //post提交方式
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        curl_close($ch);       
        return $result;
    }

    public function updatepic($url, $path) {
        $data = array(
            'filepath' => new \CURLFile(realpath($path))
        );
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url_default . $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_VERBOSE, 0);
        $a = curl_exec($ch);
        $bb = json_decode($a, true);
        curl_close($ch);
        return $bb['datalist'];
    }

}
