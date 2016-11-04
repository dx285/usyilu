<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Member_Order
 * 订单管理
 */
class Controller_Member_Order extends Stourweb_Controller
{
    /**
     * 订单管理前置操作
     */
    public function before()
    {
        parent::before();
        $this->member = Common::session('member');
        $order_query_token = Common::session('order_query_token', null);
        if (empty($this->member) && empty($order_query_token))
        {
            Common::message(array('message' => __('unlogin'), 'jumpUrl' => $this->cmsurl . 'member/login'));
        }

    }

    /**
     * 订单列表
     */
    public function action_list()
    {
        //没有登录
        if (empty($this->member['mid']))
        {
            exit;
        }
        $row = $this->get_list();
        $this->assign('title', '订单中心');
        $this->assign('data', $row);
        $this->display('member/order_list');

    }

    /**
     * 获取订单列表
     * @return mixed
     */
    private function get_list()
    {
        $row = Model_Member_Order::order_list_mobile($this->member['mid']);
        $row = self::get_data_initialization($row);
        return $row;
    }

    /**
     * 订单列表 查看更多
     */
    public function action_ajax_order_more()
    {
        $page = Common::remove_xss(intval($_GET['page']));
        $page = $page < 1 ? 1 : $page;
        $param['type'] = Common::remove_xss(intval($_GET['type']));
        if (isset($_GET['isquery']))
        {
            $param['isquery'] = Common::remove_xss($_GET['isquery']);
        }
        $row = Model_Member_Order::order_list_mobile($this->member['mid'], $page, $param);
        $row = self::get_data_initialization($row);
        echo(Product::list_search_format($row, $page));
    }

    /**
     * 订单列表数据处理
     * @param $data
     * @return mixed
     */
    private function get_data_initialization($data)
    {
        foreach ($data as &$v)
        {
            $info = Model_Member_Order::info($v['ordersn']);
            //订单详情
            $v['url'] = Common::get_web_url($v['webid']) . "/member/order/show?id={$v['id']}";
            //支付url
            $v['payurl'] = Common::get_main_host() . "/payment/?ordersn={$v['ordersn']}";
            //评论url
            $v['commenturl'] = Common::get_web_url($v['webid']) . "/member/comment/index?id={$v['id']}";
            //产品缩略图
            $v['litpic'] = Common::img($v['litpic'], 150, 90);
            //下单时间
            $v['addtime'] = date('Y-m-d H:i', $v['addtime']);

            $v['statusname'] = Model_Member_Order::get_status_name($v['status']);
            //分割订单产品名称
            $tempArr = array_filter(preg_split('`[\(\)]`', $v['productname']));
            $v['subname'] = count($tempArr) > 1 ? $tempArr[count($tempArr) - 1] : '';
            $v['productname'] = str_replace("({$v['subname']})", '', $v['productname']);
            //全额支付
            $v['price'] = $info['total'];//$v['price'] * $v['dingnum'] + $v['childprice'] * $v['childnum'] + $v['oldprice'] * $v['oldnum'];

            if(St_Functions::is_normal_app_install('coupon'))
            {

                $couponinfo = Model_Coupon::order_view($v['ordersn']);
                if($couponinfo['cmoney'])
                {
                    $v['price'] -= $couponinfo['cmoney'];
                }
            }

            //支付方式
            switch ($v['paytype'])
            {
                case '1':
                    $v['paytype'] = '全款支付';
                    break;
                case '2':
                    $v['paytype'] = '定金支付';
                    $v['price'] = ($v['dingnum'] + $v['childnum'] + $v['oldnum']) * $v['dingjin'];
                    break;
                default:
                    $v['paytype'] = '线下支付';
                    break;
            }
            //1元积分兑换
            $v['exchange'] = $GLOBALS['cfg_exchange_jifen'];
        }
        return $data;
    }

    /**
     * 订单详情
     */
    public function action_show()
    {
        $id = Common::remove_xss($_GET['id']);
        $row = Model_Member_Order::get_order_detail($id,$this->member['mid']);
        if(empty($row)){
            $this->request->redirect(Kohana::$base_url.'pub/404');
        }
        $row = Model_Member_Order::order_info($row['ordersn'],$this->member['mid']);
        //分割订单产品名称
        $tempArr = array_filter(preg_split('`[\(\)]`', $row['productname']));
        $row['subname'] = count($tempArr) > 1 ? $tempArr[count($tempArr) - 1] : '';
        $row['productname'] = str_replace("({$row['subname']})", '', $row['productname']);


        $num = array();
        if ($row['dingnum'] > 0)
        {
            array_push($num, "成人{$row['dingnum']}个");
        }
        if ($row['childnum'] > 0)
        {
            array_push($num, "小孩{$row['childnum']}个");
        }
        if ($row['oldnum'] > 0)
        {
            array_push($num, "老人{$row['oldnum']}个");
        }
        $row['num'] = implode('，', $num);
        //评论
        $comment = Model_Comment::get_comment($row['id']);
        if (!empty($comment))
        {
            $comment['score'] = ($comment['level'] * 20) . '%';
        }

        $row['payurl'] = Common::get_main_host() . "/payment/?ordersn={$row['ordersn']}";

			//封面图
			$model = ORM::factory('model',$row['typeid']);
			$table = $model->maintable;
			 if($table)
            {
                $info = ORM::factory($table,$row['productautoid'])->as_array();
                $out = $info;
				$row['litpic'] = Common::img($out['litpic']);
            }
		
        $this->assign('info', $row);
        $this->assign('comment', $comment);
        $this->assign('member', $this->member);
        $this->display('member/order_show');
    }
}