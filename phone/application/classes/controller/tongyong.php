<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Tongyong
 * 通用控制器
 */
class Controller_Tongyong extends Stourweb_Controller
{
    protected $typeid = 0;   //产品类型
    protected $pinyin = 0;

    public function before()
    {
        parent::before();
        $channelname = Model_Nav::get_channel_name_mobile($this->typeid);
        $this->assign('typeid', $this->typeid);
        $this->assign('pinyin', $this->pinyin);
        $this->assign('channelname', $channelname);
    }

    /**
     * 首页
     */
    public function action_index()
    {
        $this->request->redirect($this->pinyin . '/list');
    }

    public function action_list()
    {
        $seoinfo = Model_Nav::get_channel_seo_mobile($this->typeid);
        $keyword = $_GET['keyword'];
        $destpy = $this->request->param('destpy');
        $sorttype = $this->request->param('sorttype');
        $attrid = $this->request->param('attrid');
        $page = $this->request->param('p');
        $destname = '目的地';
        $destid = 0;

        if (!empty($destpy))
        {
            $destInfo = DB::select()->from('destinations')->where('pinyin', '=', $destpy)->execute()->current();
            if ($destInfo['id'])
            {
                $destid = $destInfo['id'];
                $destname = $destInfo['kindname'];
            }
        }

        //获取seo信息
        // $seo = Model_Model::search_seo($destpy);
        $seo = array(); //需要修改seo信息
        $this->assign('seoinfo', $seo);
        $this->assign('destpy', Common::remove_xss($destpy));
        $this->assign('destname', $destname);
        $this->assign('destid', $destid);
        $this->assign('sorttype', $sorttype);
        $this->assign('attrid', $attrid);
        $this->assign('page', $page);
        $this->assign('seoinfo', $seoinfo);
        $this->assign('keyword', $keyword);
        $this->assign('typeid', $this->typeid);
        $this->display('tongyong/index','kz_list');
    }

    /**
     * 详细页
     */
    public function action_show()
    {
        $aid = $this->request->param('aid');
        $webid = Arr::get($_GET, 'webid');
        $webid = $webid ? $webid : 0;
        $aid = $this->request->param('aid');
        $info = Model_Tongyong::detail($aid, $this->typeid, $webid);

        //seo
        $seoInfo = Product::seo($info);
        //产品图片
        $info['piclist'] = Product::pic_list($info['piclist']);
        //属性列表
        $info['attrlist'] = Model_Tongyong::product_attr($info['attrid'], $this->typeid);
        //最低价
        $info['price'] = Model_Tongyong::get_minprice($info['id'], array('info' => $info));
        //市场价
        $info['sellprice'] = Model_Tongyong::get_min_sellprice($info['id']);
        //满意度
        $info['score'] = St_Functions::get_satisfy($this->typeid,$info['id'],$info['satisfyscore']);
        $info['satisfyscore'] = St_Functions::get_satisfy($this->typeid,$info['id'],$info['satisfyscore']);
        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->typeid);
        //销售数量
        $info['sellnum'] = Model_Member_Order::get_sell_num($info['id'], $this->typeid);
        //产品编号
        $info['series'] = Product::product_number($info['id'], $this->typeid);
        //产品图标
        $info['iconlist'] = Product::get_ico_list($info['iconlist']);

        $info['content'] = Product::strip_style($info['content']);
        //支付方式

        //扩展字段信息
        $extend_info = Model_Tongyong::extend($info['id'], $this->typeid);
        $minsuit = $this->getMinSuit($info['id']);

        $this->assign('minsuit', $minsuit);
        $this->assign('seoinfo', $seoInfo);
        $this->assign('info', $info);
        $this->assign('extendinfo', $extend_info);
        $this->display('tongyong/show','kz_show');
    }

    /**
     * 预订
     */
    public function action_book()
    {
        $userinfo = Common::session('member');
        //要求预订前必须登陆
        if (!empty($GLOBALS['cfg_login_order']) && empty($userinfo['mid']))
        {
            $this->request->redirect(Common::get_main_host() . '/phone/member/login?redirecturl=' . urlencode(Common::get_current_url()));
        }
        $id = intval($this->params['id']);
        $model = ORM::factory('model_archive', $id);
        if (!$model->loaded())
            exit('产品ID不存在');

        $suitArr = ORM::factory('model_suit')->where('productid', '=', $id)->get_all();
        foreach ($suitArr as &$v)
        {
            $v['dingjin'] = Currency_Tool::price($v['dingjin']);
            $v['sellprice'] = Currency_Tool::price($v['sellprice']);
            $ticket = DB::select('day', 'price')->from('model_suit_price')->where('suitid' . '=' . $v['id'])->and_where('productid', '=', $v['productid'])->and_where('day', '>=', strtotime(date('Y-m-d')))->and_where('number', '!=', 0)->order_by('day', 'asc')->execute()->current();
            $v['startTime'] = !empty($ticket) ? $ticket['day'] : time();
            $v['ourprice'] = Model_Tongyong::get_minprice($v['productid'], $v['id']);
        }

        $info = $model->as_array();
        $info['price'] = Model_Tongyong::get_minprice($info['id'], array('info' => $info));
        $this->assign('userinfo', $userinfo);
        $this->assign('suits', $suitArr);
        $this->assign('info', $info);
        $this->display('tongyong/book');
    }

    public function action_ajax_more()
    {
        $page = $_POST['page'];
        $typeid = $_POST['typeid'];
        $attrid = $_POST['attrid'];
        $destpy = $_POST['destpy'];
        $sorttype = $_POST['sorttype'];
        $keyword = $_POST['keyword'];
        $page = empty($page) ? 1 : $page;
        $pagesize = 10;
        $offset = $pagesize * ($page - 1);

        $where = ' WHERE a.ishidden=0 and a.typeid=' . $typeid . ' ';

        if (!empty($destpy))
        {
            $destid = DB::select('id')->from('destinations')->where('pinyin', '=', $destpy)->execute()->get('id');
        }

        //排序
        $orderBy = "";
        if (!empty($sorttype))
        {
            if ($sorttype == 1)//价格升序
            {
                $orderBy = "  --a.price ASC,";
            }
            else if ($sorttype == 2) //价格降序
            {
                $orderBy = "  --a.price DESC,";
            }
            else if ($sorttype == 3) //销量降序
            {
                $orderBy = " a.shownum DESC,";
            }
            else if ($sorttype == 4)//推荐
            {
                $orderBy = " a.shownum DESC,";
            }
        }

        //关键词
        if (!empty($keyword))
        {
            $where .= " AND a.title like '%$keyword%' ";
        }
        //按属性
        if (!empty($attrid))
        {
            $where .= Product::get_attr_where($attrid);
        }
        if (!empty($destid))
        {
            $where .= " AND FIND_IN_SET($destid,a.kindlist) ";
        }
        //如果选择了目的地
        if (!empty($destid))
        {
            $sql = "SELECT a.* FROM `sline_model_archive` a ";
            $sql .= "LEFT JOIN `sline_kindorderlist` b ";
            $sql .= "ON (a.id=b.aid AND b.typeid=$typeid AND b.classid=$destid)";
            $sql .= $where;
            $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy}a.modtime DESC,a.addtime DESC ";

        }
        else
        {
            $sql = "SELECT a.* FROM `sline_model_archive` a ";
            $sql .= "LEFT JOIN `sline_allorderlist` b ";
            $sql .= "ON (a.id=b.aid AND b.typeid=$typeid )";
            $sql .= $where;
            $sql .= "ORDER BY IFNULL(b.displayorder,9999) ASC,{$orderBy}a.modtime DESC,a.addtime DESC ";

        }

        //计算总数
        $totalSql = "SELECT count(*) as num " . strchr($sql, " FROM");
        $totalSql = str_replace(strchr($totalSql, "ORDER BY"), '', $totalSql);//去掉order by

        $totalNum = DB::query(Database::SELECT, $totalSql)->execute()->get('num');
        $hasmore = $totalNum > $pagesize * $page ? true : false;

        $sql .= "LIMIT {$offset},{$pagesize}";

        $arr = DB::query(1, $sql)->execute()->as_array();

        $model_info = ORM::factory('model', $typeid);
        foreach ($arr as &$v)
        {
            $v['commentnum'] = Model_Comment::get_comment_num($v['id'], $typeid); //评论次数
            $v['sellnum'] = Model_Member_Order::get_sell_num($v['id'], $typeid); //销售数量
            $v['score'] = $v['satisfyscore'] . '%';
            $v['price'] = Model_Tongyong::get_minprice($v['id'], array('info' => $v));//最低价
            $v['attrlist'] = Model_Model_Attr::get_attr_list($v['attrid'], $typeid);//属性列表.
            $v['url'] = Common::get_web_url($v['webid']) . "/{$model_info->pinyin}/show_{$v['aid']}.html";
            $v['iconlist'] = Product::get_ico_list($v['iconlist']);
            $v['litpic'] = Common::img($v['litpic'], 100, 68);
        }
        $out = array(
            'total' => $totalNum,
            'list' => $arr,
            'hasmore' => $hasmore
        );
        echo json_encode($out);
    }

    public function action_create()
    {
        //套餐id
        $refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $this->cmsurl;

        $suitid = Arr::get($_POST, 'suitid');
        //联系人
        $linkman = Arr::get($_POST, 'linkman');
        //手机号
        $linktel = Arr::get($_POST, 'linktel');
        $linkidcard = Arr::get($_POST, 'linkidcard');
        //备注信息
        $remark = Arr::get($_POST, 'remark');
        //产品id
        $id = Arr::get($_POST, 'productid');
        //使用时间
        $usedate = Arr::get($_POST, 'usedate');
        //预订数量
        $dingnum = Arr::get($_POST, 'dingnum');

        //验证部分

        $validataion = Validation::factory($_POST);

        $validataion->rule('linktel', 'not_empty');

        $validataion->rule('linktel', 'phone');

        $validataion->rule('linkman', 'not_empty');


        if (!$validataion->check())

        {

            $error = $validataion->errors();

            $keys = array_keys($validataion->errors());

            Common::message(array('message' => __("error_{$keys[0]}_{$error[$keys[0]][0]}"), 'jumpUrl' => $refer_url));

        }


        $info = ORM::factory('model_archive')->where("id=$id")->find()->as_array();

        $suitArr = ORM::factory('model_suit')
            ->where("id=:suitid")
            ->param(':suitid', $suitid)
            ->find()
            ->as_array();

        $suitArr['dingjin'] = Currency_Tool::price($suitArr['dingjin']);
        $suitArr['ourprice'] = Currency_Tool::price($suitArr['ourprice']);


        $price_info =  DB::select()->from('model_suit_price')
            ->and_where('suitid','=',$suitid)
            ->and_where('day','=',strtotime($usedate))->execute()->current();


        if(!Model_Tongyong::check_storage(0,$dingnum,$suitid,$usedate))
        {
            exit('storage is not enough!');
        }

        if ($suitArr['paytype'] == '3')//这里补充一个当为二次确认时,修改订单为未处理状态.
        {
            $info['status'] = 0;

        }
        else

        {

            $info['status'] = 1;

        }

        $info['name'] = $info['title'] . "({$suitArr['suitname']})";

        $info['paytype'] = $suitArr['paytype'];

        $info['dingjin'] = doubleval($suitArr['dingjin']);

        $info['jifentprice'] = intval($suitArr['jifentprice']);

        $info['jifenbook'] = intval($suitArr['jifenbook']);

        $info['jifencomment'] = intval($suitArr['jifencomment']);

        $info['ourprice'] = doubleval($price_info['price']);

        $info['childprice'] = 0;

        $info['usedate'] = $usedate;

        $ordersn = Product::get_ordersn($this->typeid);

        $arr = array(

            'ordersn' => $ordersn,

            'webid' => 0,

            'typeid' => $this->typeid,

            'productautoid' => $id,

            'productaid' => $info['aid'],

            'productname' => $info['name'],

            'litpic' => $info['litpic'],

            'price' => $info['ourprice'],

            'childprice' => $info['childprice'],

            'jifentprice' => $info['jifentprice'],

            'jifenbook' => $info['jifenbook'],

            'jifencomment' => $info['jifencomment'],

            'paytype' => $info['paytype'],

            'dingjin' => $info['dingjin'],

            'usedate' => $info['usedate'],

            'departdate' => '',

            'addtime' => time(),

            'memberid' => null,

            'dingnum' => $dingnum,

            'childnum' => 0,

            'oldprice' => 0,

            'oldnum' => 0,

            'linkman' => $linkman,

            'linktel' => $linktel,

            'linkidcard' => $linkidcard,

            'suitid' => $suitid,

            'remark' => $remark,

            'status' => $info['status'] ? $info['status'] : 0,

            'usejifen' => $_POST['usejifen'] != 0 ? 1 : 0 //积分抵现

        );




        /*--------------------------------------------------------------优惠券信息------------------------------------------------------------*/
        //优惠券判断
        $croleid = intval(Arr::get($_POST, 'couponid'));
        if($croleid)
        {
            $cid = DB::select('cid')->from('member_coupon')->where("id=$croleid")->execute()->current();
            $totalprice = Model_Coupon::get_order_totalprice($arr);
            $ischeck =  Model_Coupon::check_samount($croleid,$totalprice,1,$info['id']);
            if($ischeck['status']==1)
            {
                Model_Coupon::add_coupon_order($cid,$ordersn,$totalprice,$ischeck,$croleid); //添加订单优惠券信息
            }
            else
            {
                exit('coupon  verification failed!');//优惠券不满足条件
            }
        }
        /*-----------------------------------------------------------------优惠券信息--------------------------------------*/


        //添加订单

        if (ST_Product::add_order($arr,'Model_Model_Archive',$arr))
        {
            $orderInfo = Model_Member_Order::get_order_by_ordersn($ordersn);
            Model_Member_Order::add_tourer($orderInfo['id'], $_POST);
            //如果是立即支付则执行支付操作,否则跳转到产品详情页面
            if ($info['status'] == 1)
            {
                $html = Common::payment_from(array('ordersn' => $ordersn));
                if ($html)
                {
                    echo $html;
                }
            }
            else
            {
                $url = Common::get_web_url($info['webid']) . '/pub/paystatus/?sign=13';
                $this->request->redirect($url);
            }

        }
    }

    public function getMinSuit($id)
    {
        $suitModel = ORM::factory('model_suit')->where('productid', '=', $id)->order_by('ourprice', 'asc')->find();
        if (!$suitModel->loaded())
            return null;
        return $suitModel->as_array();
    }

    /**
     * 当前产品的套餐价格
     */
    public function action_ajax_current_suit()
    {
        $suitid = Arr::get($_GET, 'suitid');
        $use_date = Arr::get($_GET, 'usedate');
        $productid = Arr::get($_GET, 'productid');
        $list = Model_Tongyong::current_suit_price($productid, $suitid, $use_date);
        //$bool=empty($list)?false:true;
        if (empty($list))
        {
            $data = array('result' => false);
        }
        else
        {
            $data = array('result' => true, 'price' => $list['price']);
        }
        echo json_encode($data);
    }
}