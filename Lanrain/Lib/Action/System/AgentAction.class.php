<?php
class AgentAction extends BackAction{
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

			$data=D('agent_info');
			$data2=D('agent');
			$agentinfo['site_url']=$_POST['agenturl'];
		 	if($data->add($_POST)&&($data2->add($agentinfo))){
		 	$this->success('操作成功',U('Agent/index',array('pid'=>6,'level'=>3)));
			 }else{
			$this->success('操作失败',U('Agent/index',array('pid'=>6,'level'=>3)));
		}
	}

}