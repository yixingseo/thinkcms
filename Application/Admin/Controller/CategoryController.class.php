<?php 
namespace Admin\Controller;
use Think\Controller;

class CategoryController extends Controller{

	public function index(){		
		$this->assign('list',$this->getTree());		
		$this->display();
	}


	/**
	 * 添加模板
	 */
	public function add($parent=0){
		$data = M('category');		
		if($parent > 0){
			$parentCategory = $data->find($parent);					
		}else{
			$parentCategory['id'] = 0;
			$parentCategory['pid'] = 0;
		}
		$this->assign('category',$parentCategory);
		$array = $data->select();
		$array = $this->getTree($array);
		$this->assign('tree',$array);
		$this->display();		
	}

	/**
	 * 添加
	 */
	public function insert(){	
		$category = D('category');
		if($category->create())
		$article = D("category");
		if ($article->create()){
			if($article->add()){
				$this->success('操作成功！','index');
			}else{
				$this->error('操作失败!');
			}		     
		}else{
		     $this->error($article->getError());
		}
	}

	/**
	 * 修改模板
	 */
	public function edit($id=0){		
		$category = M('category');
		$this->assign('category',$category->find($id));		

		$array = $category->select();
		$array = $this->getTree($array);
		$this->assign('tree',$array);

		$this->display();
	}

	/**
	 * 修改
	 */
	public function update(){
		$category = M('category');
		
	}


	/**
	 * 删除
	 */
	public function delete(){

	}


	/**
	 * 无限分类
	 */
	public $tree = array();
	public function getTree($array=array(),$pid=0,$deep){
		if(!$array){
			$array = M('category')->select();
		}
		foreach ($array as $key => $row) {
			if($row['parent'] == $pid){
				$row['tag'] = $this->getTag($deep);
				$this->tree[] = $row;
				$this->getTree($array,$row['id'],$deep+1);
			}
		}
		return $this->tree;				
	}

	/**
	 * 计算层级
	 */
	public function getTag($deep){
		if($deep == 0)
			//return "┠ ";		
			return "";
		$str = "┈";
		for ($i=0; $i < $deep; $i++) { 
			$str .= $str;
		}
		return "└".$str;
	}


}

 ?>