<?php
function strExists($haystack, $needle)
{
    return !(strpos($haystack, $needle) === FALSE);
}
class IndexAction extends BaseAction
{
    private $tpl; //微信公共帐号信息
    private $info; //分类信息
    private $wecha_id;
    private $copyright;
    public $company;
    public $token;
    
    public function _initialize()
    {
        parent::_initialize();
        $agent = $_SERVER['HTTP_USER_AGENT'];
       // if (!strpos($agent, "MicroMessenger")) {
      //     echo '此功能只能在微信浏览器中使用';
    //       exit;
     //   }
        $this->token     = $this->_get('token', 'trim');
        $this->wecha_id  = $this->_get('wecha_id', 'trim');
        $where['token']  = $this->token;
        $tpl             = D('Wxuser')->where($where)->find();
        $tpl['color_id'] = 0;
        $info            = M('Classify')->where(array(
            'token' => $this->_get('token'),
            'status' => 1
        ))->order('sorts ASC')->select();
        
        $info            = $this->convertLinks($info); //加外链等信息
        $gid             = D('Users')->field('gid')->find($tpl['uid']);
        $copy            = D('user_group')->field('iscopyright')->find($gid['gid']); //查询用户所属组
        $this->copyright = $copy['iscopyright'];
        $this->info      = $info;
        $this->tpl       = $tpl;
        $company_db      = M('company');
        $this->company   = $company_db->where(array(
            'token' => $this->token,
            'isbranch' => 0
        ))->find();
        $this->assign('wecha_id',$this->wecha_id);
        $this->assign('company', $this->company);
        $this->assign('token', $this->token);
    }
    
    public function classify()
    {
        $this->assign('info', $this->info);
        $this->display($this->tpl['tpltypename']);
    }
    
    public function index()
    {
        $where['token'] = $this->_get('token', 'trim');
        $flash          = M('Flash')->where($where)->select();
        $count          = count($flash);
        $this->assign('flash', $flash);
        $this->assign('info', $this->info);
        $this->assign('num', $count);
        $this->assign('tpl', $this->tpl);
        $this->assign('copyright', $this->copyright);
        $db             = D('Img');
        $res = $db->where($where)->select();
        $this->assign('res', $res);
        $this->display($this->tpl['tpltypename']);

    }
    
    public function lists()
    {
        $where['token'] = $this->_get('token', 'trim');
        $db             = D('Img');
        if ($_GET['p'] == false) {
            $page = 1;
        } else {
            $page = $_GET['p'];
        }
        $where['classid'] = $this->_get('classid', 'intval');
        $count            = $db->where($where)->count();
        $pagecount        = ceil($count / 20);
        if ($page > $count) {
            $page = $pagecount;
        }
        if ($page >= 1) {
            $p = ($page - 1) * 20;
        }
        if ($p == false) {
            $p = 0;
        }
        $res = $db->where($where)->limit("{$p},20")->select();
        $res = $this->convertLinks($res);
        $this->assign('page', $pagecount);
        $this->assign('p', $page);
        $this->assign('info', $this->info);
        $this->assign('tpl', $this->tpl);
        $this->assign('res', $res);
        $this->assign('copyright', $this->copyright);
        $this->display($this->tpl['tpllistname']);
    }

    public function lists2()
    {
        $where['token'] = $this->_get('token','trim');
        $db             = D('Thirdimg');
        if ($_GET['p'] == false) {
            $page = 1;
        } else {
            $page = $_GET['p'];
        }
        $where['imgid'] = $this->_get('imgid', 'intval');
        $count            = $db->where($where)->count();
        $pagecount        = ceil($count / 20);
        if ($page > $count) {
            $page = $pagecount;
        }
        if ($page >= 1) {
            $p = ($page - 1) * 20;
        }
        if ($p == false) {
            $p = 0;
        }
        $res = $db->where($where)->limit("{$p},20")->select();
        $rese = $this->convertLinks($res);
        $this->assign('page', $pagecount);
        $this->assign('p', $page);
        $db             = D('Img');
        $info = $db->where($where)->select();
        $this->assign('info', $info);
        $this->assign('tpl', $this->tpl);
        $this->assign('res', $res);
        $this->assign('copyright', $this->copyright);
        $this->display($this->tpl['tpllist2name']);
    }
    
    public function content()
    {   
        $where['token'] = $this->_get('token', 'trim');

        $db             = M('Thirdimg');
        $where['imgid']    = $this->_get('id', 'intval');
        $res            = $db->where($where)->find();
        $where['id']    = array(
            'neq',
            (int) $_GET['id']
        );
        $lists          = $db->where($where)->limit(5)->order('uptatetime')->select();
        
      /*  echo $db->getLastSql();//输出最后一次SQL*/
        $this->assign('info', $this->info); //分类信息
        $this->assign('lists', $lists); //列表信息
        $this->assign('res', $res); //内容详情;
        $this->assign('tpl', $this->tpl); //微信帐号信息
        $this->assign('copyright', $this->copyright); //版权是否显示
        $this->display($this->tpl['tplcontentname']);
    }
    
    public function flash()
    {
        $where['token'] = $this->_get('token', 'trim');
        $flash          = M('Flash')->where($where)->select();
        $count          = count($flash);
        $this->assign('flash', $flash);
        $this->assign('info', $this->info);
        $this->assign('num', $count);
        $this->display('ty_index');
    }
    /**
     * 获取链接
     *
     * @param unknown_type $url
     * @return unknown
     */
    public function getLink($url)
    {
        $urlArr       = explode(' ', $url);
        $urlInfoCount = count($urlArr);
        if ($urlInfoCount > 1) {
            $itemid = intval($urlArr[1]);
        }
        //会员卡 刮刮卡 团购 商城 大转盘 优惠券 订餐 商家订单
        if (strExists($url, '刮刮卡')) {
            $link = '/index.php?g=Wap&m=Guajiang&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if ($itemid) {
                $link .= '&id=' . $itemid;
            }
        } elseif (strExists($url, '大转盘')) {
            $link = '/index.php?g=Wap&m=Lottery&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if ($itemid) {
                $link .= '&id=' . $itemid;
            }
        } elseif (strExists($url, '优惠券')) {
            $link = '/index.php?g=Wap&m=Coupon&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            if ($itemid) {
                $link .= '&id=' . $itemid;
            }
        } elseif (strExists($url, '商家订单')) {
            if ($itemid) {
                $link = $link = '/index.php?g=Wap&m=Host&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id . '&hid=' . $itemid;
            } else {
                $link = '/index.php?g=Wap&m=Host&a=Detail&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
            }
        } elseif (strExists($url, '会员卡')) {
             $card = M('member_card_create')->where(array('token' => $this->token,'wecha_id' => $this->wecha_id))->find();
           if ($card == false) {$link = '/index.php?g=Wap&m=Card&a=get_card&token=' . $this->token . '&wecha_id=' . $this->wecha_id;} 
           else {$link = '/index.php?g=Wap&m=Card&a=vip&token=' . $this->token . '&wecha_id=' . $this->wecha_id;}
        } elseif (strExists($url, '商城')) {
            $link = '/index.php?g=Wap&m=Product&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } elseif (strExists($url, '订餐')) {
            $link = '/index.php?g=Wap&m=Product&a=dining&dining=1&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } elseif (strExists($url, '团购')) {
            $link = '/index.php?g=Wap&m=Groupon&a=grouponIndex&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
        } else {
            $link = $url;
        }
        return $link;
    }
    public function convertLinks($arr)
    {
        $i = 0;
        foreach ($arr as $a) {
            if ($a['url']) {
                $arr[$i]['url'] = $this->getLink($a['url']);
            }
            $i++;

        }
        return $arr;
    }

    /*public function convertUrl($array)
    {
        $j = 0;
        foreach ($array as $b) {
                if($b['name'] === '刮刮卡')){
                     $array[$i]['url'] = 'http://wx.wozongla.net/index.php?g=Wap&m=Guajiang&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
                     if ($itemid) {
                        $array[$i]['url'] .= '&id=' . $itemid;
                     }
                }elseif($b['name'] === '大转盘')){
                     $array[$i]['url'] = 'http://wx.wozongla.net/index.php?g=Wap&m=Lottery&a=index&token=' . $this->token . '&wecha_id=' . $this->wecha_id;
                     if ($itemid) {
                        $array[$i]['url'] .= '&id=' . $itemid;
                     }
                }

            $j++;
        }
        return $array;
    }*/
/*    function random_str($length){
    //生成一个包含 大写英文字母, 小写英文字母, 数字 的数组
        $arr = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
        $str = '';
        $arr_len = count($arr);
        for ($i = 0; $i < $length; $i++){
            $rand = mt_rand(0, $arr_len-1);
            $str.=$arr[$rand];
        }
         return $str;
    }*/

   
}
?>