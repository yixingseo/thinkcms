<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
    	$this->assign('title','企业网站管理系统');    	
       	$this->display();
    }

    //article
    public function article(){

    	$this->display();
    }
}