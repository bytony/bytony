<?php
class LocalCouponAction extends BaseAction{
	public function index(){
		$agent = $_SERVER['HTTP_USER_AGENT']; 
		if(!strpos($agent,"MicroMessenger")) {
			echo '此功能只能在微信浏览器中使用';exit;
		}
		$token		= $this->_get('token');
		$id 		= $this->_get('id');
		//0.判断是否有该用户记录,没有则记录		
/*		$redata		= M('LocalCoupon_record');
		$where 		= array('token'=>$token,'wecha_id'=>$wecha_id,'lid'=>$id);
		$record 	= $redata->where($where)->find();		
		if($record == Null){
			$redata->add($where);
			$record = $redata->where($where)->find();
		}*/
		$LocalCoupon 	= M('LocalCoupon')->where(array('id'=>$id,'token'=>$token))->find();
		//var_dump($LocalCoupon);
		//0. 判断优惠券是否领完了 
		if($LocalCoupon['residuenum'] == 0){		  	
		   $data['msg'] = "您来晚了,优惠券已经被领完了.";
			 
		}else{
					 
			if ($LocalCoupon['endtime'] < time()) { //过期
				 $data['msg'] = 	"该活动已经结束，敬请期待下次活动."	 
			}/*else{
				//2.活动还没过期,接着是否领过了
				if ($record['isLocalCoupon'] == 1) {
					 $data['end'] = 3;
					 $data['msg'] = "您已经领取过优惠券了";
					 $data['wxname']=$record['wecha_name'];	
					 $data['sn']  = $record['sn'];	
					 $data['myprize'] 	= $record['prize'];	 
				}else{ 
					
					//是否已经够次数
					if ($record['usenums'] >= $LocalCoupon['canrqnums'] ) {
						$data['prizetype'] = 4; //啥都没了
					  	$data['zjl']	  = 0;
						$data['usenums']  = $record['usenums'];
					  	$data['winprize']	   = "抽奖次数已经达到";
						//exit;	
					}else{
						//3.没有领过,次数没达到,开始随机发放优惠券
						M('LocalCoupon_record')->where(array('id'=>$record['id']))->setInc('usenums');
						$record = M('LocalCoupon_record')->where(array('id'=>$record['id']))->find();
						//排除没有设置的优惠券
						//奖品数 != 已经领取该奖品数 => 还有奖品
						if ($LocalCoupon['thirdlucknums'] != $LocalCoupon['thirdnums']) {
							if(!empty($LocalCoupon['third'])){
								$data['prizetype'] = 3;
								$data['winprize']	   = $LocalCoupon['third'];
								$data['zjl']	   = 1;
								$data['sncode'] = uniqid();
								M('LocalCoupon')->where(array('id'=>$id))->setInc('thirdlucknums');
							}else{
								$data['prizetype']= 4; //啥都没了
								$data['zjl']	  = 0;
								$data['winprize'] = "这次真不走运.";
							}
							
						}elseif ($LocalCoupon['secondlucknums'] != $LocalCoupon['secondnums']) {
							if(!empty($LocalCoupon['second'])){
								$data['prizetype'] = 2; 
								$data['winprize']  = $LocalCoupon['second'];
								$data['zjl']	   = 1;
								$data['sncode']    = uniqid();
								M('LocalCoupon')->where(array('id'=>$id))->setInc('secondlucknums');
							}else{
								$data['prizetype'] = 4; //啥都没了
								$data['zjl']	  = 0;
								$data['winprize']	   = "这次真不走运.";
							}
							
						}elseif ($LocalCoupon['fistlucknums']  != $LocalCoupon['fistnums']){
							if(!empty($LocalCoupon['fist'])){
								$data['prizetype'] = 1; 
								$data['sncode'] = uniqid();
								$data['winprize']	   = $LocalCoupon['fist'];
								$data['zjl']	   = 1;
								M('LocalCoupon')->where(array('id'=>$id))->setInc('fistlucknums');
							}else{
								$data['prizetype'] = 4; //啥都没了
								$data['zjl']	  = 0;
								$data['winprize']	   = "这次真不走运.";
							}
							
						}else{
							$data['prizetype'] = 4; //啥都没了
							$data['zjl']	   = 0;
							$data['winprize']	   = "真心木有了,下次来早点吧";
						}		  	
				  	 
				   }//以上没领过
				}//在没达到次数 
			}*/
			
		} 
	
		$data['token'] 		= $token;
		$data['name']	    = $LocalCoupon['name'];
		$data['imgurl'] 	= $LocalCoupon['imgurl'];
		$data['couponnum'] 	= $LocalCoupon['couponnum'];
		$data['residuenum'] = $LocalCoupon['residuenum'];
		$data['tel'] 		= $LocalCoupon['tel'];
		$data['address']	= $LocalCoupon['address'];
		$data['thirdnums'] 	= $LocalCoupon['thirdnums'];	
		$data['info']		= $LocalCoupon['info'];
		$data['starttime']	= $LocalCoupon['starttime'];
		$data['endtime']	= $LocalCoupon['endtime'];		
		$this->assign('localcoupon',$data);
		//var_dump($data);exit();
		$this->display();
	}
	
	//领取优惠券
	public function getCoupon(){
		$where['token']         = $this->_get('token');
		$where['id']			= $this->_get('id');
		$db            			= M('LocalCoupon');
        $localcoupon            = $db->where($where)->find();
        $couponnum 				= substr(md5(time().rand(10000,99999)),rand(0,24),8);
        $data['residuenum']     = $localcoupon['residuenum'] - 1;
        $data['id']             = $localcoupon['id'];
        /*echo $conpon['fistnums'];*/
        if($db->save($data)){
        	$this->assign('couponnum',$couponnum);
        	$this->display('index');
        }; 
	}
}
	
?>