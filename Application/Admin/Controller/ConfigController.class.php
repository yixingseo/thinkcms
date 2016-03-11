<?php 
namespace Admin\Controller;
use Think\Controller;

class ConfigController extends Controller{

	public function index(){
		$mConfig = M('Config');
		$array = $mConfig->select();
		$data = array();
		foreach ($array as $key => $row) {
			$data[$row['name']] = $row['value'];
		}
		$this->assign('data',$data);
		//var_dump($data);
		$this->display();
	}

	/**
	 * 保存
	 */
	public function save(){
		//var_dump(I('post.'));
		$data = I('post.');
		$mConfig = M('Config');
		foreach ($data as $key => $value) {
			$mConfig->value = $value;
			$mConfig->where("name='$key'")->save();
		}
		//$this->redirect('index');
		$this->success('操作成功！','index');
	}

	/**
	 * 新增模板
	 */
	public function add(){

	}

	/**
	 * 新增
	 */
	public function insert(){

	}
}


 ?>