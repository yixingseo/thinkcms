<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

	/**
	 * 管理框架页面
	 */
    public function index(){
		$this->display();
    }

    /**
     * 管理首页
     */
    public function welcome(){
    	$this->display();
    }

    /**
     * 管理登陆
     */
    public function login(){

    }

    /**
     * 编辑器
     */
    public function ueditor(){
        $data = new \Org\Util\Ueditor();
        echo $data->output();
    }

}