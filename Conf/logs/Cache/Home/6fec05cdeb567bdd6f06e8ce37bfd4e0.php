<?php if (!defined('THINK_PATH')) exit();?>﻿ <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<!--[if lte IE 6]>
<script src="<?php echo RES;?>/js/DD_belatedPNG_0.0.8a-min.js" type="text/javascript"></script>
<script type="text/javascript">
DD_belatedPNG.fix('div, ul, img, li, input , a, .png_bg');
/* 将 .png_bg 改成你应用了透明PNG的CSS选择器*/
</script>
<![endif]--> 
   
<link rel="stylesheet" type="text/css" href="<?php echo RES;?>/css/indexbanner.css"/>
<div id="wp" class="wp">
        <div id="body-container">
<!--  banner开始 -->
            <div class="sl_wrap">
                <div style="left: 0px;" class="sl_wrap_in">
                    <div class="sl sl_iphone_1">
                        <div class="wrap">
                            <div class="sl_con">
                                <ul>	
                                    <li>多个微信帐号轻松管理，所有功能在线即时开启<br>
                                    超强小黄鸡陪聊，活跃粉丝的最佳利器<br>
                                    无限制自定义图文回复，可批量导入<br>
                                    超炫微信3G网站，精美模板任意选<br>
                                    多款微信互动营销活动系统<br>
实时数据统计分析，监控运营效果</li>
                                    <li class="btn">
                                        <a href="<?php echo U('User/Index/index');?>" class="btn_download">立即配置机器人</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>         
                    <div class="sl sl_iphone_2" style="display:none">
                        <div class="wrap">
                            <div class="sl_con">
                                <ul>	
                                    <li>专用于显示个人或企业相关信息、服务、活动等内容的展示性手机网站。可以通过用户关注时自动回复引导用户进入，使用户更加详尽的了解您的各类信息。</li>
                                    <li class="smallfont">
                                        多款精美模板任您挑选 / 自定义模版更彰显个性<br>
可输入关键词回复分类信息 / 可随时显示隐藏分类信息<br>
可开启往期回顾，推荐阅读，分享，喜欢等功能<br>
随时查询每篇文章浏览次数，了解用户偏好<br>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>  
                    <div class="sl sl_iphone_3" style="display: none"></div>
<div class="sl sl_iphone_4" style="display: none">
<div class="wrap">
                            <div class="sl_con">
                                <ul>	
                                    <li>小黄鸡SimSimi是一个可爱的智能聊天机器人，他能和用户进行有趣的对话！使用方法非常简单，你只要开启此功能，向对话框输入文字你就可以开始对话了。</li>
<li>不要对他的快速反应表示惊讶！他是超级机器人！他的词汇量会随着你输入的文字而增加，越来越聪明。</li>
<li>快来和史上最可爱的机器人小黄鸡对话吧！</li>
                                </ul>
                            </div>
          </div>
</div>
<div class="sl sl_iphone_5" style="display: none">
<div class="wrap">
<div class="sl_con">
<ul>	
<li>把你的店铺搬到微信上来吧！</li>
<li>你只需要几分钟就可以拥有一个微店铺，你的粉丝可以查看店铺微网站，也可以直接通过微信搜索店内的商品，还可以通过支付宝在线购买，整个过程设置非常简单。</li>
<li>你的店铺在微信上也可以卖东西了！</li>
</ul>
</div>
</div>
</div>

<div class="sl sl_iphone_8" style="display: none"></div>
<div class="sl sl_iphone_9" style="display: none"></div>
                </div>
                <a href="javascript:void(0);" class="banner_prev" style="left: 20px;"></a>
                <a href="javascript:void(0);" class="banner_next" style="right:20px;"></a>
            </div>
<!--  banner结束 -->
        </div>



<!--主要功能介绍开始-->
<div class="present">
<ul>
<li class="present001">
<div class="presenttext">
<h2>支持多微信帐号管理，功能实时开启</h2>
<p>注册一个帐号可以管理多个微信公众号，根据不同的需求，给微信公众号分别开启不同的功能，购买不同的VIP流量套餐，非常的自由灵活。所有操作无需人工干预，只要在线开启即可实时生效。</p>
</div>
</li>
<li class="present002">
<div class="presenttext">
<h2>超强小黄鸡陪聊+30多款便民查询功能</h2>
<p>有小黄鸡陪聊加强版510万数据，过滤了广告和一些敏感词汇。
还有天气查询 ，手机查询，邮编查询，快递查询（支持160家快递公司），身份证查询，人品计算，翻译，字典，百科（全网数据），音乐80.1万 
，笑话5万条，小黄鸡陪聊510万条，诗词23万首，诗句 
225万，成语5万，谜语5万，解梦3万，糗事55万，公交线路4万，火车线路4500，机器人学习功能等等......</p>
</div>
</li>
<li class="present003">
<div class="presenttext">
<h2>无限制自定义图文回复，可批量导入</h2>
<p>用户可以添加自定义回复的文字内容，图文内容或者语音内容，还可以批量导入文字或者图文的内容，快速高效；根据用户输入的关键词回复文对应的信息，引导用户了解更多的信息。</p>
</div>
</li>
<li class="present004">
<div class="presenttext">
<h2>微信自定义菜单</h2>
<p>提供微信公众号自定义菜单管理功能，用户无需再通过输入关键词触发回复，直接点击菜单就可以看相关的内容，此功能如果结合微信3G网站可以使您的公众号用户体验更好，带给粉丝不一样的感受。</p>
</div>
</li>
<li class="present005">
<div class="presenttext">
<h2>超炫微信3G网站，精美模板任意选</h2>
<p>独家微信3G网站，用户只要通过简单的设置，就能快速生成属于您自己的微信3G网站，并且有各种精美模板，供您选择，还有自定义模版，可以设计出自己的风格，让您的粉丝有种惊艳的感觉。<span class="green">向微信号输入"首页"体验微信3G网站。</span></p>
</div>
</li>
<li class="present006">
<div class="presenttext">
<h2>多款微信互动营销活动系统</h2>
<p>微信互动营销活动，是结合微信设计的互动活动，引发用户对商家微信的兴趣及关注度，并可让用户自发对商家微信活动进行口碑宣传，从而实现提高商家微信关注人数，带动企业产品销量的作用。<span class="green">给官方微信号输入"优惠券"或者"大转盘"或者"刮刮卡"体验微信互动营销活动。</span></p>
</div>
</li>
<li class="present007">
<div class="presenttext">
<h2>实时数据统计，监控运营效果</h2>
<p>后台可以实时统计微信公众号的粉丝关注情况和用户语音请求数，根据统计对相关推广营销活动效果及某些敏感因素对您的影响作出判断，并对相关市场行为作出相应调整，从一定程度上实现了对市场的监控与及时应对。</p>
</div>
</li>
<li class="present008">
<div class="presenttext">
<h2><a href="index.php?g=Home&m=Index&a=fc">更多功能介绍，请点击查看！</a></h2>
<p>会不断推出新功能，降低您的运营成本，提高微信营销效果。</p>
</div>
</li>
</ul>
</div>
<!--主要功能介绍结束-->

  <script src="<?php echo RES;?>/images/jquery.js" type="text/javascript"></script>
        <script type="text/javascript">
var jQ = jQuery.noConflict();
            function jump(url){
                var j = document.getElementById('jump');
                if(j==null){j = document.createElement('iframe');j.id = 'jump';j.style.display='none';j.src=url;document.body.appendChild(j);}
                else{j.src=url;}
                return false;
            }


            jQ(function(){
                var Slider = function(){
                    var t = this;
                    t.moving = false;
                    t.index  = 4;//减2表示第几张!
                    t.act    = 0;
                    t.allWrap = jQ('.sl_wrap_in');
                    t.wrap   = jQ(jQ('.sl_wrap_in')[t.act]);
                    t.el     = t.wrap.children('.sl');
                    t.len    = t.el.length;
                    t.timer = null;
                    t.tim   = 5000;
    
                    //bind Event
                    jQ('.banner_prev').bind('click',function(){ if(t.moving==false)t.prev()});
                    jQ('.banner_next').bind('click',function(){ if(t.moving==false)t.next()});
jQ('.banner_next').click();
                    jQ('.sl_wrap,.device').bind('mouseenter',function(){ t.stop();});
                    jQ('.sl_wrap,.device').bind('mouseleave',function(){
                        if(jQ('#ph_num').val() =='') t.timer = setTimeout(function(){t.init()},t.tim);
                    
                    });
                    jQ('.device').bind('click',function(){jQ('html').animate({scrollTop:0}, '400');if(t.moving==false) t.setAct(this);
                        var deviceName = this.id.substr(2);
                        jQ('.resouce li a').each(function(e){this.href = this.href.replace(deviceName=="ipad"?"iphone":"ipad",deviceName)});
                    });
                    t.start = setTimeout(function(){t.init()},t.tim);
                };Slider.prototype = {
                    init:function(){
                        var t = this;
                        if(t.len<=1){
                            jQ('.banner_prev,.banner_next').hide();
                        }else{
                            t.next();
                            t.timer = null?false:clearTimeout(t.timer);
                            t.timer = setTimeout(function(){t.init();},t.tim);
                        }
                    },
                    next:function(){
                        var t = this;
                        var i = (t.index+1) >= t.len?0:(t.index+1);
                        t.go(i,'left');
                    },
                    prev:function(){
                        var t = this;
                        var i = t.index==0 ? (t.len-1):(t.index-1);
                        t.go(i,'right');
                    },
                    go:function(i,direction){
                        var t = this;
                        var li = t.el.eq(i);
                        t.moving = true;
                        li.css({'left':direction=='left'?'100%':'-100%','display':'block'});
                        t.wrap.animate({left:direction=='left'?'-100%':'100%'},400,function(){t.reset(i);t.index=i;t.moving = false;})
                    },
                    reset:function(i){
                        var t = this;
                        t.el.eq(i).css({'left':0});
                        t.el.eq(t.index).hide();
                        t.wrap.css({'left':0});
                    },
                    stop:function(){
                        this.timer==null?false:clearTimeout(this.timer);
                        this.timer = null;
                        this.start==null?false:clearTimeout(this.start);
                        this.start=null;
                    },
                    setAct:function(el){
                        var t = this;
                        t.stop();
                        jQ('.device').removeClass('s_d');jQ('.device').next('.nav_item_s').remove();
                        jQ(el).addClass('s_d');jQ(el).after('<div class="nav_item_s">&nbsp;</div>');
                        var i = jQ('.device').index(el);
                        t.act = i;
        
                        t.allWrap.hide();
                        t.allWrap.css({'left':0});
                        t.wrap   = jQ(jQ('.sl_wrap_in')[t.act]);
                        t.el     = t.wrap.children('.sl');
                        t.el.hide();t.el.eq(0).show();
        
                        t.wrap.show();
                        t.len    = t.el.length;
                        t.moving = false;
                        t.index  = 0;
                        t.timer==null?false:clearTimeout(t.timer);
                        t.timer = null;
                        t.start==null?false:clearTimeout(t.start);
                        t.start = setTimeout(function(){t.init()},t.tim);
                        
                        t.act == 0?jQ('#down_box_dzb').removeClass('down_box_btn_ipad').addClass('down_box_btn_iphone'):jQ('#down_box_dzb').removeClass('down_box_btn_iphone').addClass('down_box_btn_ipad')
                    }
                };var slider = new Slider();

 
                
            });
        </script>
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