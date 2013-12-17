<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>艾特网络微信平台,企业微信营销首选</title>
<meta name="keywords" content="企业微信营销,微信营销案例,微信营销技巧,微信公共平台"/>
<meta name="description" content="平台是企业微信管理和营销工具,通过平台,用户可以轻松管理自己的微信各类信息,对微信公众账号进行维护、开展智能机器人、微信会员卡在线发优惠劵等活动,对微信营销实现有效监控,极大扩展潜在客户群和实现企业的运营目标!服务热线：18623556069"/>
﻿<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/style.css"/>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/index.css"/>
<!--[if lte IE 6]>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/ie6.css"/>
<![endif]-->
<script type="text/javascript">window.onerror=function(){return true;}</script>
<script type="text/javascript" src="<?php echo RES;?>/js/lang.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/config.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/page.js"></script>
<script type="text/javascript" src="<?php echo RES;?>/js/jquery.lazyload.js"></script>
<script type="text/javascript">
GoMobile('');
var searchid = 5;
</script>
</head>
<body oncontextmenu="return false" onselectstart ="return false">
<div class="topbg">
<div class="top">
<div class="toplink">
<div class="welcome">欢迎使用艾特网络微信平台!</div>
    <div class="memberinfo"  id="destoon_member">	
		<?php if($_SESSION[uid]==false): ?>你好&nbsp;&nbsp;<span class="f_red">游客</span>&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">登录</a>&nbsp;&nbsp;|&nbsp;&nbsp;
			<a href="<?php echo U('Index/login');?>">注册</a>
			<?php else: ?>
			你好,<a href="/#" hidefocus="true"  ><span style="color:red"><?php echo (session('uname')); ?></span></a>（uid:<?php echo (session('uid')); ?>）
			<a href="javascript:void(0)" onClick="Javascript:window.open('<?php echo U('Admin/Admin/logout');?>','_self')" >退出</a><?php endif; ?>	
	</div>
</div>
    <div class="logo">
        <div style="float:left"></div>
            <h1><a href="/" title="艾特网络微信平台"><img src="<?php echo RES;?>/images/logo-system.png" /></a></h1>
            <div class="navr">
        <ul id="topMenu">      
                        <li <?php if((ACTION_NAME) == ""): ?>class="menuon"<?php endif; ?>></li>     
			 <li <?php if((ACTION_NAME == 'index') and (GROUP_NAME == 'Home')): ?>class="menuon"<?php endif; ?> ><a href="/" >首页</a></li>
                <li <?php if((ACTION_NAME) == "fc"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/fc');?>">功能介绍</a></li>
                <li <?php if((ACTION_NAME) == "about"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/about');?>">关于我们</a></li>
<!--                <li <?php if((ACTION_NAME) == "price"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/price');?>">资费说明</a></li>
-->                <li <?php if((ACTION_NAME) == "common"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/common');?>">客户案例</a></li>
                <li <?php if((GROUP_NAME) == "User"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('User/Index/index');?>">管理中心</a></li>
                <li <?php if((ACTION_NAME) == "help"): ?>class="menuon"<?php endif; ?>><a href="<?php echo U('Home/Index/help');?>">帮助中心</a></li>
            
            </ul>
        </div>
        </div>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/indexbanner.css"/>
<div class="banner dbanner"></div>
<div class="main">

      
      
      

      
        
        <div class="wxgzbox">
        <div class="wxgzbox-top wxgzbor1"><h3>客户案例</h3></div>


<!--我们的用户开始-->
<div class="weixinapps"> 
<div class="weixinapps-inner clearfix">
<div class="app-box">
<ul class="clearfix">
<li class="app-item"> <a href="http://www.mobiletalkclub.com/">          
<img src="<?php echo RES;?>/images/mtc.gif" alt="MTC猛科技">
<span class="name ">MTC猛科技</span></a>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps001.gif" alt="尚品生活DIY">
<span class="name ">尚品生活DIY</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/suning.jpg" alt="苏宁电器官方">
<span class="name ">苏宁电器官方</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps002.gif" alt="生活通">
<span class="name ">生活通</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps003.gif" alt="薰衣草NE庄园">
<span class="name ">薰衣草NE庄园</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps004.gif" alt="百嘉乐量贩KTV">
<span class="name ">百嘉乐量贩KTV</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps005.gif" alt="微生活">
<span class="name ">微生活</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps007.gif" alt="DJ电音吧">
<span class="name ">DJ电音吧</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps009.gif" alt="万银贵金属">
<span class="name ">万银贵金属</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps010.gif" alt="网商成功学院">
<span class="name ">网商成功学院</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps011.gif" alt="幽默学">
<span class="name ">幽默学</span>
</li>
<!--<li class="app-item">            
<img src="http://www.wxapi.cn/index/<?php echo RES;?>/images/weixinapps/weixinapps012.gif" alt="微网购">
<span class="name ">微网购</span>
</li>-->
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps013.gif" alt="北小财">
<span class="name ">北小财</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps014.gif" alt="笑笑猪">
<span class="name ">笑笑猪</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps015.gif" alt="微台">
<span class="name ">微台</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps016.gif" alt="康辉旅行社">
<span class="name ">康辉旅行社</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps018.gif" alt="本地特产">
<span class="name ">本地特产</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps020.gif" alt="全搜索">
<span class="name ">全搜索</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps021.gif" alt="微弋阳">
<span class="name ">微弋阳</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps024.gif" alt="地方微信官方号">
<span class="name ">地方微信官方号</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps026.gif" alt="县信息平台">
<span class="name ">县信息平台</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps027.gif" alt="大发现">
<span class="name ">大发现</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps030.gif" alt="麦茜哥餐饮企业">
<span class="name ">麦茜哥餐饮企业</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps031.gif" alt="百事通">
<span class="name ">百事通</span>
</li>
<li class="app-item">            
<img src="<?php echo RES;?>/images/weixinapps032.gif" alt="生活圈">
<span class="name ">生活圈</span>
</li>
</ul>
<a href="#" class="more" style=" display:none">查看更多用户<i class="more-arrow"></i></a>
</div>
</div>
</div>
<!--我们的用户结束-->

    </div>

    
    </div>
﻿</div>
<div class="IndexFoot" style="height:120px;">
<div class="foot">
<div class="foot_page">
<a href="<?php echo C('site_url');?>">艾特网络微信平台,企业微信营销首选！</a><br/>
帮助您快速搭建属于自己的移动3G营销平台,构建自己的对话式客户群体。
</div>
    </div>
</div>

</body>
</html>