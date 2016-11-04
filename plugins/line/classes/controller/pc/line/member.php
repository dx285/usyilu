<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Pc_Line_member extends Stourweb_Controller
{
    /*
     * 线路订单总控制器
     * */

    private $_typeid = 1;
    private $_mid = '';

    public function before()
    {
        parent::before();
        //检查缓存
        $this->refer_url = $_SERVER['HTTP_REFERER'] ? $_SERVER['HTTP_REFERER'] : $GLOBALS['cfg_cmsurl'];
        $this->assign('backurl', $this->refer_url);
        $user = Model_Member::check_login();
        if (!empty($user['mid']))
        {
            $this->_mid = $user['mid'];
        }
        else
        {
            $this->request->redirect('member/login');
        }
        $this->assign('mid', $this->_mid);
        $this->assign('typeid',$this->_typeid);
    }
    public function action_orderlist()
    {

        $pageSize = 10;
        $orderType = $_GET['ordertype'];
        $orderType = $orderType ? $orderType : 'all';
        $page = intval($_GET['p']);
        $route_array = array(
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'ordertype' => $orderType,
        );

        $out = Model_Member_Order::order_list($this->_typeid, $this->_mid, $orderType, $page,$pageSize);

        $pager = Pagination::factory(
            array(
                'current_page' => array('source' => 'query_string', 'key' => 'p'),
                'view' => 'default/pagination/search',
                'total_items' => $out['total'],
                'items_per_page' => $pageSize,
                'first_page_in_url' => false,
            )
        );
        //配置访问地址 当前控制器方法
        $pager->route_params($route_array);
        $this->assign('pageinfo', $pager);
        $this->assign('list', $out['list']);
        $this->assign('ordertype', $orderType);
        $this->display('line/member/orderlist');

    }
    public function action_orderview()
    {
        $orderSn = Arr::get($_GET, 'ordersn');
        $info = Model_Member_Order::order_info($orderSn,$this->_mid);
        $model= ORM::factory('model',$info['typeid']);
        if(!$model->loaded())
            exit('paramaters error');

        $moduleinfo = $model->as_array();
        //当前版块是否是系统版块.
        $issystem =$moduleinfo['issystem'];



        $this->assign('info', $info);
        $this->assign('issystem', $issystem);
        $this->display('line/member/orderview');
    }
    //取消订单
    public function action_ajax_order_cancel()
    {
        $flag = 0;
        $orderId = Common::remove_xss(Arr::get($_GET, 'orderid'));
        $m = ORM::factory('member_order')->where("memberid={$this->_mid} and id={$orderId} and status < 2")->find();
        if ($m->loaded())
        {
            $orgstatus = $m->status;
            $m->status = 3;//取消订单
            $m->where("memberid={$this->_mid}");
            $m->update();
            if ($m->saved())
            {
                Model_Member_Order::back_order_status_changed($orgstatus,$m->as_array(),"Model_Line");
                $flag = 1;
            }
        }
        echo json_encode(array('status' => $flag));
    }
}