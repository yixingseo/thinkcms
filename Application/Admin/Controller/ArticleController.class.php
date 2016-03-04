<?php 
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends Controller{

	public function index(){
		
		$article = M('article');        
        $this->assign('list',$article->select());
		$this->assign('empty','<td>未找到数据!</td>');
		$this->display();

	}


	/**
	 * 添加模板
	 */
	public function add(){
		$this->display();
	}

	/**
	 * 添加
	 */
	public function insert(){		
		$article = D("article");
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
		$data = M('article');		
	    $this->assign('data',$data->find($id));	    
		$this->display();
	}

	/**
	 * 修改
	 */
	public function update(){
		$article = D('article');
		if($article->create()){			
			$result = $article->save();
			if($result){
				$this->success('操作成功！','index');
			}else{
				$this->error($article->getError());
			}

		}else{
			//未通过
			$this->error($article->getError());
		}
	}


	/**
	 * 删除
	 */
	public function delete(){

	}

}

 ?>