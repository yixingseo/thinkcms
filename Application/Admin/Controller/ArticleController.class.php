<?php 
namespace Admin\Controller;
use Think\Controller;

class ArticleController extends Controller{

	public function index(){		

		//绑定分类下拉菜单
		$cat = new CategoryController();
		$array = $cat->getTree();
		//var_dump($array);
		$this->assign('tree',$array);

		//绑定内容分页列表
		$article = M('article');
		import('ORG.Util.Page');		
		$map = array();
		$keywords = I('get.keywords');
		$parent = I('get.parent');
		$att = I('get.att');

		if($keywords){
			$map['title'] = array('like','%'.$keywords.'%');				
		}
		if($parent)	{
			$map['parent'] = $parent;
		}
		if($att){

		}

		//$sql = $article->where($map)->buildSql();
		//var_dump($sql);

	    $count	= $article->where($map)->count();
	    $Page = new \Page($count,20);
	    $show = $Page->show();

	    $list = $article->where($map)->limit($Page->firstRow.','.$Page->listRows)->select();
	    $this->assign('list',$list);
	    $this->assign('page',$show);
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
		
		$article = M('article');				
	    $this->assign('article',$article->find($id));	    
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
	public function del($id=0){
		$article = M('article');
		$article->delete($id);
		$this->redirect('index');
	}

}

 ?>