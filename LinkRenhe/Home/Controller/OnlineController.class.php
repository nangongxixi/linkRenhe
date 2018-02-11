<?php

namespace Home\Controller;

use Think\Controller;

class OnlineController extends Controller {    
    
    public function index() {       
        $this->display();
    } 
    
    //投诉须知
    public function OnlineInfoAction() {
        $loginObj = new \Home\Model\OnlineModel();
        $loginObj->OnlineInfoAction();
    }
    
    //提交投诉
    public function OnlineAction() {
        $loginObj = new \Home\Model\OnlineModel();
        $loginObj->OnlineAction();
    }     
     
    
//    public function OnlineAgainst() {       
//        $this->display();
//    } 
    
    
    public function OnlineAgainst() {        
        $loginObj = new \Home\Model\OnlineModel();
        $jsonData = $loginObj->OnlineAgainstAction();
        $this->display();
    }
    
    
    
    
}
