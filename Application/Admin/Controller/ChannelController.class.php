<?php 
namespace Admin\Controller;
use Think\Controller;

class ChannelController extends Controller{

  public function index(){
    $mChannel = M('Channel');
    $data = $mChannel->select();
    $this->assign('data',$data);
    $this->display();
  }
  
}