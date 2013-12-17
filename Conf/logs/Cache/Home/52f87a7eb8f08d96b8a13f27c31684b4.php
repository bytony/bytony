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
<div class="banner gbanner"></div>
<div class="main">
<style>

.contaier{ zoom: 1; }
.contaier:after{ content : '.'; display: block; width: 0; height: 0; visibility: hidden; line-height: 0; font-size: 0; clear: both; }
/*基础*/
body{ font-size:16px; font-family: Century Gothic, \5FAE\8F6F\96C5\9ED1,\5E7C\5706, Arial, Verdana; color: #323232; }
select,input,textarea{ outline: none; font-family: Century Gothic, \5FAE\8F6F\96C5\9ED1,\5E7C\5706, Arial, Verdana; font-size: 16px;color:#323232 }
textarea{ resize: none; overflow: auto;}
a{ text-decoration: none; color: #007DDB; }
a:hover{ text-decoration: underline; }
/*布局*/
.header{ width: 100%; height: 54px; background-color: #323232; line-height: 54px; color: #fff; position: fixed!important; position: absolute; top: 0; left: 0; z-index: 5;border-bottom:1px solid silver }
.wp{ max-width: 980px!important; width: auto!important; width: 980px; padding: 0 12px; margin: 0 auto; position:relative;}
.contaier{ padding-bottom: 18px; padding-top: 24px; background: #fff; height: auto!important; min-height: 500px; height: 500px; }

.header{ width: 100%; height: 54px; background-color: #323232; line-height: 54px; color: #fff; position: fixed!important; position: absolute; top: 0; left: 0; z-index: 5;border-bottom:1px solid silver }
.think-login,.think-register{ padding-right: 60px; border-right: 1px solid #ddd; }
.think-login,.think-register,.login-other{ margin-top: 36px; min-width: 320px; }
.think-login .head,.think-register .head,.login-other .head{ height: 36px; line-height: 36px; }
.think-login .head strong,.think-register .head strong{ font-weight: normal; font-size: 30px; vertical-align: bottom; }
.think-login .head span,.think-register .head span{ margin-left: 24px; color: #999; }
.think-login .head a,.think-register .head a{ color: #007DDB; margin-left: 6px; text-decoration: underline; }
.think-login .body,.think-register .body{ padding-top: 12px; }
.think-login,.think-register{ float: left; }
.think-form{ padding-bottom: 36px; }
.think-form .must{ font-style: normal; color: #c00; margin-right: 3px; }
.think-form th,.think-form td{ padding: 6px 0; }
.think-form th{ font-weight: normal; vertical-align: top; line-height: 32px; padding-right: 9px; text-align: left; }
.think-form .text{ height: 24px; width: 350px; line-height: 24px; padding: 3px; border: 1px solid #ccc; }
.think-form .text:focus{ box-shadow: 0 0 5px rgba(52,143,212,.6); border-color: #348FD4; }
.think-form .checkbox{ margin-right: 6px; }
.think-form .submit{ background: #348FD4; color: #fff; font-size: 16px; height: 30px; line-height: 21px; padding: 0 24px; vertical-align: middle; border: 0; cursor: pointer; }
.think-form .submit:hover{ background-color: #2F81BF; }
.think-form select{ height: 32px; padding: 3px; border: 1px solid #ccc; }
.think-form .login .text { height: 24px; width: 250px; line-height: 24px; padding: 3px; border: 1px solid #ccc; }
.think-form .login .verify { height: 24px; width: 150px; line-height: 24px; padding: 3px; border: 1px solid #ccc; }
.login-other{ float: left; padding-left: 60px; margin-left: -1px; display: inline; border-left: 1px solid #ddd; }
.login-other .head strong{ font-weight: normal; color: #999; }
</style>
<div class="abody">
        <div class="contaier wp cf">

    <div class="think-login">
        <div class="head">
            <strong>用户登录</strong>
        </div>
        <div class="body think-form ">
            <form action="<?php echo U('Users/checklogin');?>" method="post" class="login">
                <table>
                    <tbody><tr>
                        <th>用户名</th>
                        <td>
                            <input class="text" type="text" name="username">
                        </td>
                    </tr>
                    <tr>
                        <th>密　码</th>
                        <td>
                            <input class="text" type="password" name="password">
                        </td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>
                            <input class="submit" type="submit" value="登录">
                        </td>
                    </tr>
					<tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;
                            
                        </td>
                    </tr><tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;
                            
                        </td>
                    </tr>
					   <tr>
                        <th>帐号审核：</th>
                        <td>
                            QQ:<?php echo C('site_qq');?>
                        </td>
                    </tr>
                </tbody></table>
            </form>
        </div>
    </div>
    <div class="login-other">
          <div class="head">
            <strong style="font-weight: normal;font-size: 30px;vertical-align: bottom;color: #323232;">用户注册</strong>
		　</div>
        <div class="body think-form ">
            <form action="<?php echo U('Users/checkreg');?>" method="post" class="login">
                <table>
                    <tbody><tr>
                        <th>用户名</th>
                        <td>
                            <input class="text" required="" value="请输入用户名" onclick="if(this.value=='请输入用户名'){this.value=''}" onblur="if(this.value==''){this.value='请输入用户名'}" type="text" name="username">
                        </td>
                    </tr>
                    <tr>
                        <th>密　码</th>
                        <td>
                            <input class="text" type="password" name="password">
                        </td>
                    </tr>
					 <tr>
                        <th>重复密码</th>
                        <td>
                            <input class="text" type="password" name="repassword">
                        </td>
                    </tr>
					<tr>
                        <th>邮　箱</th>
                        <td>
                            <input class="text" type="text" name="email" value="请输入电子邮箱" onclick="if(this.value=='请输入电子邮箱'){this.value=''}" onblur="if(this.value==''){this.value='请输入电子邮箱'}">
                        </td>
                    </tr>
                    <tr>
                        <th>&nbsp;</th>
                        <td>
                            <input class="submit" type="submit" value="注册">
                        </td>
                    </tr>
					<tr>
                        <th>&nbsp;</th>
                        <td>&nbsp;
                            
                        </td>
                    </tr>
					   <tr>
                        <th>帐号审核：</th>
                        <td>
                            QQ:<?php echo C('site_qq');?>
                        </td>
                    </tr>
                </tbody></table>
            </form>
        </div>
    </div>
</div>
</div>
    </div>
<script type="text/javascript">try{Dd('webpage_6').className='left_menu_on';}catch(e){}</script>
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