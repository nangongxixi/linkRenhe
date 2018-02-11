<?php

namespace Home\Model;

use Think\Model;

class NewsModel extends Model {
   
    //新闻栏目
    function newsCategoryList() {
      
        if(null !== session("user.userid")){
            $data=session("user.userid");            
        }else{
            $data=0;
        }       
        $url="api/wx/News/ListAllByType/".$data;
        $getRequest = new \Component\getRequest();
        $rstCategory = $getRequest->getDataJiang($url);
        return $rstCategory;        
    }
    
    //新闻搜索  userid/page/keyword
    function newsSearList() {
        $typeid = I("post.typeid");
        //echo $typeid.'<br>pp';
        if($typeid=='null'){
           $typeid = 0;          
        }else{
           $typeid = I("post.typeid"); 
        }
        if(null!==session("user.userid")){
            $data = session("user.userid").','.I("post.page").','.$typeid.','.I("post.keyword");
        }else{
            $data = '0,'.','.I("post.page").','.$typeid.','.I("post.keyword");
        }
        //echo $data;
        $data = base64_encode($data);
        $data= str_replace('/',"_",$data);
        $data= str_replace('+',"-",$data);
        $url="api/wx/News/Search/".$data;
        //echo $url.'<br>';exit;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getDataJiang($url);        
        //show_bug($newsSearList);exit;
        echo $newsSearList;
    }
    
    
    //新闻搜索  userid/page/keyword
    function newsScrollResult() { 
        if(null!==session("user.userid")){
            $data = session("user.userid").','.I("get.page").','.session("newsSear");
        }else{
            $data = '0,'.','.I("get.page").','.session("newsSear");
        }        
        //echo $data;
        $data = base64_encode($data);
        $data= str_replace('/',"_",$data);
        $data= str_replace('+',"-",$data);
        $url="api/wx/News/Search/".$data;
        //echo $url.'<br>';exit;
        $getRequest = new \Component\getRequest();
        $newsSearList = $getRequest->getDataJiang($url); 
        //$newsSearList = json_decode($newsSearList,true);
        //return $newsSearList;
        //show_bug($newsSearList);exit;
        echo $newsSearList;
    }
    
    
    //新闻列表
    function newsList() { 
        if(empty(session("user.userid"))){         
            $data='0/'.I("get.id").'/'.I("get.page");                       
        }else{           
            $data=session("user.userid").'/'.I("get.id").'/'.I("get.page");                        
        }
        $url="api/wx/News/ListByType/".$data;        
        //echo $url;exit;        
        $getRequest = new \Component\getRequest();
        $rstNewsList = $getRequest->getDataJiang($url);
        return $rstNewsList;        
    }
    
    //新闻详情
    function showNews() {        
        if(null !== session("user.userid")){
            $data=I("get.id").'/'.session("user.userid"); 
            session("news.newsid",I("get.id"));
        }else{
            $data=I("get.id").'/0';
        }
        $url="api/wx/News/".$data;        
        $getRequest = new \Component\getRequest();
        $rstNewsList = $getRequest->getDataJiang($url);
        return $rstNewsList;        
    }
    
    //加入收藏
    function addCollect() { 
        $data=session("user.userid").'/'.I("get.newid");
        $url="api/wx/News/Collect/".$data;        
        //echo $url;exit;
        $getRequest = new \Component\getRequest();
        $rstNewsList = $getRequest->getDataJiang($url);        
        return $rstNewsList;        
    }
    
    //取消收藏
    function cancelCollect() { 
        $data=session("user.userid").'/'.I("get.newid");
        $url="api/wx/News/DeleteCollect/".$data;        
        //echo $url;exit;
        $getRequest = new \Component\getRequest();
        $rstNewsList = $getRequest->getDataJiang($url);        
        return $rstNewsList;        
    }
    

}
