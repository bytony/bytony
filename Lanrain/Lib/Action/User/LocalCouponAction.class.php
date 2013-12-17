<?php
class LocalCouponAction extends UserAction{
/*	public function index(){
	//dump(session('token'));
		if(session('gid')==1){
			$this->error('vip0无法使用抽奖活动,请充值后再使用',U('User/Function/index'));
		}
		$user=M('Users')->field('gid,activitynum')->where(array('id'=>session('uid')))->find();
		$group=M('User_group')->where(array('id'=>$user['gid']))->find();
		$this->assign('group',$group);
		$this->assign('activitynum',$user['activitynum']);
		$list=M('Lottery')->where(array('token'=>session('token'),'type'=>3))->select();
		//echo M('Lottery')->getLastSql();
		$this->assign('count',M('Lottery')->where(array('token'=>session('token'),'type'=>3))->count());
		$this->assign('list',$list);
		$this->display();
	
	}*/
	public function index(){
		$token     = session('token');
		$where     = array('token'=>$token);
		/*echo $this->_get('token');*/
		$list=M('LocalCoupon')->where($where)->select();
		/*echo M('LocalCoupon')->getLastSql();*/
		$this->assign('count',M('LocalCoupon')->where($where)->count());
		/*echo M('LocalCoupon')->getLastSql();*/
		$this->assign('list',$list);
		$this->display();
	
	}
/*	public function sn(){
		if(session('gid')==1){
			$this->error('vip0无法使用抽奖活动,请充值后再使用',U('User/Function/index'));
		}
		$id=$this->_get('id');
		$data=M('Lottery')->where(array('token'=>session('token'),'id'=>$id,'type'=>3))->find();
		$record=M('Lottery_record')->where('token="'.session('token').'" and lid='.$id.' and sn!=""')->select();
		$recordcount=M('Lottery_record')->where('token="'.session('token').'" and lid='.$id.' and sn!=""')->count();
		$datacount=$data['fistnums']+$data['secondnums']+$data['thirdnums'];
		$this->assign('datacount',$datacount);
		$this->assign('recordcount',$recordcount);
		$this->assign('record',$record);
	
		$this->display();
	
	
	}*/
	public function insert(){

		$data                 = D('LocalCoupon');
		//$where                = array('token'=>session('token'));
		$_POST['starttime']=strtotime($this->_post('starttime'));
		$_POST['endtime']=strtotime($this->_post('endtime'));
		$_POST['residue']=$_POST['couponnum'];
		$_POST['token']       = session('token');
		$pat = "/<(\/?)(script|i?frame|style|html|body|title|font|strong|span|div|marquee|link|meta|\?|\%)([^>]*?)>/isU";
		$_POST['info'] = preg_replace($pat,"",$_POST['info']);
		if($_POST['endtime'] < $_POST['starttime']){
				$this->error('结束时间不能小于开始时间');
		}else{
			if($id=$data->add($_POST)){
				$data1['pid']=$id;
				$data1['module']='LocalCoupon';
				$data1['token']=session('token');
				$data1['keyword']=$this->_post('keyword');
				M('Keyword')->add($data1);
				$this->success('添加成功',U('LocalCoupon/index',array('token'=>session('token'))));
			}
		}
	/*	$data->add($_POST);
		echo $data->getLastSql();*/
		/*if($data->save($_POST)){
			$this->success('添加成功',U('LocalCoupon/index',array('token'=>session('token'))));
		}else{
			$this->error('添加失败'，U('LocalCoupon/index',array('token'=>session('token'))));
				
		}*/
	}
	public function add(){
		/*if(session('gid')==1){
			$this->error('vip0无法使用优惠券管理,请充值后再使用',U('User/Function/index'));
		}*/
		if(IS_POST){
			$data=D('LocalCoupon');
			$_POST['stattime']=strtotime($this->_post('stattime'));
			$_POST['endtime']=strtotime($this->_post('endtime'));
			$_POST['token']=session('token');
			if($_POST['endtime'] < $_POST['starttime']){
				$this->error('结束时间不能小于开始时间');
			}
			
		}else{
			$this->display();
		}
	}
	public function del(){
		$id=$this->_get('id');
		$where=array('id'=>$id,'token'=>session('token'));
		$data=M('LocalCoupon');
		$check=$data->where($where)->find();
		if($check==false)$this->error('非法操作');
		$back=$data->where($wehre)->delete();
		if($back && M('Keyword')->where(array('pid'=>$id,'token'=>session('token'),'module'=>'LocalCoupon'))->delete()){
			//M('Keyword')->where(array('pid'=>$id,'token'=>session('token'),'module'=>'LocalCoupon'))->delete())
			$this->success('删除成功');
		}else{
			$this->error('操作失败');
		}
	
	}
	public function edit(){
		if(IS_POST){
			$data=D('LocalCoupon');
			$_POST['id']=$this->_post('id');
			$_POST['token']=session('token');
			$_POST['starttime']=strtotime($_POST['starttime']);
			$_POST['endtime']=strtotime($_POST['endtime']);
			if($_POST['endtime'] < $_POST['starttime']){
				$this->error('结束时间不能小于开始时间');
			}else{
				$where=array('id'=>$_POST['id'],'token'=>$_POST['token']);
				$check=$data->where($where)->find();
			//	echo $data->getLastSql();
				if($check==false)$this->error('非法操作');
				if($data->where($where)->save($_POST)){
			//		echo $data->getLastSql();
					$data1['pid']=$_POST['id'];
					$data1['module']='LocalCoupon';
					$data1['token']=session('token');
					$da['keyword']=$_POST['keyword'];
					M('Keyword')->where($data1)->save($da);
					$this->success('添加成功',U('LocalCoupon/index',array('token'=>session('token'))));
				}else{
					$this->error('操作失败');
				}
	
			}

		}else{
			$id=$this->_get('id');
			$where=array('id'=>$id,'token'=>session('token'));
			$data=M('LocalCoupon');
			$check=$data->where($where)->find();
			if($check==false)$this->error('非法操作');
			$list=$data->where($where)->find();		
			$this->assign('list',$list);
			//dump($_POST);
			$this->display('edit');
		}
	
	}
	/*public function setinc(){
		if(session('gid')==1){
			$this->error('vip0无法开启活动,请充值后再使用',U('User/Function/index'));
		}
		$id=$this->_get('id');
		$where=array('id'=>$id,'token'=>session('token'));
		$check=M('Lottery')->where($where)->find();
		if($check==false)$this->error('非法操作');
		$user=M('Users')->field('gid,activitynum')->where(array('id'=>session('uid')))->find();
		$group=M('User_group')->where(array('id'=>$user['gid']))->find();
		
		if($user['activitynum']>=$group['activitynum']){
			$this->error('您的免费活动创建数已经全部使用完,请充值后再使用',U('Home/Index/price'));
		}
		$data=M('Lottery')->where($where)->setInc('status');
		if($data!=false){
			$this->success('恭喜你,活动已经开始');
		}else{
			$this->error('服务器繁忙,请稍候再试');
		}

	}
	public function setdes(){
		$id=$this->_get('id');
		$where=array('id'=>$id,'token'=>session('token'));
		$check=M('Lottery')->where($where)->find();
		if($check==false)$this->error('非法操作');
		$data=M('Lottery')->where($where)->setDec('status');
		if($data!=false){
			$this->success('活动已经结束');
		}else{
			$this->error('服务器繁忙,请稍候再试');
		}
	
	}
	public function edit(){
		if(IS_POST){
			$data=D('Lottery');
			$_POST['id']=$this->_get('id');
			$_POST['token']=session('token');
			$_POST['statdate']=strtotime($_POST['statdate']);
			$_POST['enddate']=strtotime($_POST['enddate']);
			if($_POST['enddate'] < $_POST['statdate']){
				$this->error('结束时间不能小于开始时间');
			}else{
				$where=array('id'=>$_POST['id'],'token'=>$_POST['token'],'type'=>3);
				$check=$data->where($where)->find();
				if($check==false)$this->error('非法操作');
					if($data->where($where)->save($_POST)){
						$data1['pid']=$_POST['id'];
						$data1['module']='Lottery';
						$data1['token']=session('token');
						$da['keyword']=$_POST['keyword'];
						M('Keyword')->where($data1)->save($da);
						$this->success('修改成功',U('Coupon/index',array('token'=>session('token'))));
					}else{
						$this->error('操作失败');
					}
				
			}

			
		}else{
			$id=$this->_get('id');
			$where=array('id'=>$id,'token'=>session('token'));
			$data=M('Lottery');
			$check=$data->where($where)->find();
			if($check==false)$this->error('非法操作');
			$lottery=$data->where($where)->find();		
			$this->assign('vo',$lottery);
			//dump($_POST);
			$this->display('add');
		}
	
	}
	
	public function sendprize(){
		$id=$this->_get('id');
		$where=array('id'=>$id,'token'=>session('token'));
		$data['sendtime'] = time();
		$data['sendstutas'] = 1;
		$back = M('Lottery_record')->where($where)->save($data);
		if($back==true){
			$this->success('成功发优惠券');
		}else{
			$this->error('操作失败');
		}
	}
	
	public function sendnull(){
		$id=$this->_get('id');
		$where=array('id'=>$id,'token'=>session('token'));
		$data['sendtime'] = '';
		$data['sendstutas'] = 0;
		$back = M('Lottery_record')->where($where)->save($data);
		if($back==true){
			$this->success('已经取消');
		}else{
			$this->error('操作失败');
		}
	}*/
}


?>