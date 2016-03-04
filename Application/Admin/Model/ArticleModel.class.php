<?php 
namespace Admin\Model;
use Think\Model;

class ArticleModel extends Model{

	//自动验证
    protected $_validate = array(
        array('title','require','标题不能为空'),
        );

    // 定义自动完成
    protected $_auto = array(
        array('addtime','time',1,'function'),
        );
}

 ?>