<?php
class SiteAction extends BackAction{
	public function _initialize() {
        parent::_initialize();  //RBAC 验证接口初始化
    }
	
	public function index(){
		$this->display();
	}
	public function email(){
		$this->display();
	}	
	public function alipay(){
		$this->display();
	}
	public function safe(){
		$this->display();
	}
	public function upfile(){
		$this->display();
	}
	public function insert(){

			$data=D('agent');
			$where = array('site_url'=>$this->_post('site_url'));
			$check = $data->where($where)->find();
			if($check==false) $this->error('非法操作');
		 	if($data->where($where)->save($_POST)){
		 	$this->success('操作成功',U('Site/index',array('pid'=>6,'level'=>3)));
			 }else{
			$this->success('操作失败',U('Site/index',array('pid'=>6,'level'=>3)));
		}
	}

}