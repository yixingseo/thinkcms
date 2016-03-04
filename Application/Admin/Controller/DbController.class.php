<?php 
namespace Admin\Controller;
use Think\Controller;

class DbController extends Controller{

	public function index(){
		$path = C('DB_BACKUP');		
		$array = array();		
		$mydir = dir(realpath($path));
		while($file = $mydir->read()){
			if($file!="." && $file!=".."){
				$array[] = array('name'=>$file,'size'=>filesize($path . '/' . $file));
			}
		}
		$this->assign('data',$array);
		$this->display();        
	}

	/**
	 * 备份数据库
	 */
	public function backup(){
		$db = new \Org\Util\Db(C('DB_HOST'),C('DB_USER'),C('DB_PWD'),C('DB_NAME'),'utf8');
		$db->backup();
		$this->success('操作成功','index');
	}

	/**
	 * 删除备份数据
	 */
	public function del($file){		
		$file = './_backup/'.$file;
		//var_dump(is_file('./_backup/'.$file));
	    if(is_file($file)) {
	      unlink($file); 
	      $this->redirect('Db/Index');
	    }    
	}

	/**
	 * 恢复数据库
	 */
	public function import($file){
		$file = './_backup/'.$file;
		if(is_file($file)){
			$db = new \Org\Util\Db(C('DB_HOST'),C('DB_USER'),C('DB_PWD'),C('DB_NAME'),'utf8');
			$db->restore(realpath($data));
		}
		$this->success('操作成功','index');
	}
}

 ?>