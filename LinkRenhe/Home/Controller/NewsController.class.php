<?php

namespace Home\Controller;

use Think\Controller;

class NewsController extends Controller {

    public function index() {       
        $newsNameList = $this->newsNameList();        
        //unset($arr[2]); 
        foreach($newsNameList['datalist'] as $k=>$v){
            if(empty($v['datalist'])){
               unset($newsNameList['datalist'][0]); 
            }            
        }        
        //show_bug($newsNameList['datalist']);      
        $this->assign('newsNameList', $newsNameList['datalist']);       
        $this->assign("banner", $newsNameList['hotlist']);        
        $this->display();
    }

    //新闻栏目名称
    public function newsNameList() {
        $loginObj = new \Home\Model\NewsModel();
        $CategoryData = $loginObj->newsCategoryList(); //获取新闻栏目列表             
        $CategoryList = json_decode($CategoryData, true);
        return $CategoryList;
    }

    //滑屏加载
    public function test() {
        $loginObj = new \Home\Model\NewsModel();
        $newsList = $loginObj->newsList(); //获取新闻栏目列表
        $newsList = json_decode($newsList, true);
        //show_bug($newsList);
        $this->assign('newsList', $newsList);
        $this->display();
    }
    public function testAction() {
        $loginObj = new \Home\Model\NewsModel();
        $newsList = $loginObj->newsList(); //获取新闻栏目列表       
        echo $newsList;
    }


    //新闻搜索
    public function newsSearList() {
        $loginObj = new \Home\Model\NewsModel();
        $loginObj->newsSearList(); //获取新闻栏目列表
        //$this->assign('newsSearList', $newsSearList);
        //$this->display();
    }
    
    
    //加载更多搜索结果
    public function newsScrollResult() {
        $loginObj = new \Home\Model\NewsModel();
        $loginObj->newsScrollResult(); //获取新闻栏目列表
        //$this->assign('newsSearList', $newsSearList);
        //$this->display();
    }
    
    
    //显示默认页面
    public function newsSearResult() {
        $this->display();
    }

    //新闻列表页
    public function newsList() {
        //echo 55;exit;
        $loginObj = new \Home\Model\NewsModel();
        $newsList = $loginObj->newsList(); //获取新闻栏目列表
        $newsList = json_decode($newsList, true);
        //show_bug($newsList);
        $this->assign('newsList', $newsList);
        $this->display();
    }

    //新闻详情
    public function showNews() {
        $loginObj = new \Home\Model\NewsModel();
        $showNews = $loginObj->showNews(); //获取新闻栏目列表
        $showNews = json_decode($showNews, true);
        $img = explode (  '/' ,$showNews['contenturls']);        
        //show_bug($img);
        $this->assign('showNews', $showNews);
        $this->assign('imgsrc', $img);
        $this->display();
    }

    //加入收藏
    public function addCollect() {
        $loginObj = new \Home\Model\NewsModel();
        $showNews = $loginObj->addCollect(); //获取新闻栏目列表
        $showNews = json_decode($showNews, true);        
        echo substr($showNews['result'], -1);
    }
    
    //取消收藏
    public function cancelCollect() {
        $loginObj = new \Home\Model\NewsModel();
        $showNews = $loginObj->cancelCollect(); //获取新闻栏目列表
        $showNews = json_decode($showNews, true);        
        echo substr($showNews['result'], -1);
    }

    //接口取值
    public function postdata() {
        //如果没登录  userid默认为0
        $sess = session("user.userid");
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
