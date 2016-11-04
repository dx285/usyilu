<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Hotel_Order extends Stourweb_Controller
{
    private $_typeid = 2;
    /*
     * 订单总控制器
     *
     */
    public function before()
    {
        parent::before();
        $this->assign('typeid',$this->_typeid);
        $action = $this->request->action();

        //这里需要补权限的判断功能

    }
    /*
     * 酒店订单列表
     * */
    public function action_index()
    {
        $action = $this->params['action'];
        $webid = Arr::get($_GET, 'webid');
        //订单模板
        $channelname = Model_Model::get_module_name($this->_typeid);

        if (empty($action))  //显示列表
        {
            $status_json_arr=array();
            foreach(Model_Member_Order::$order_status as $k=>$v)
            {
                $status_json_arr[]=array('status'=>$k,'name'=>$v);
            }
            $this->assign('paysources', Model_Member_Order::get_pay_source());
            $this->assign('statusnames', $status_json_arr);
            $this->assign('position', $channelname . '订单');
            $this->assign('channelname', $channelname);
            $this->display('admin/hotel/order/list');
        }
        else if ($action == 'read')    //读取列表
        {
            $start = Arr::get($_GET, 'start');
            $limit = Arr::get($_GET, 'limit');
            $keyword = Arr::get($_GET, 'keyword');
            $status = $_GET['status'];
            $paysource = $_GET['paysource'];
            //查询数组
            $params = array(
               'start' => $start,
                'limit' => $limit,
                'keyword' => $keyword,
                'status' => $status,
                'paysource' => $paysource,
                'typeid'   => $this->_typeid
            );
            $result = Model_Member_Order::back_order_list($params);
            echo json_encode($result);
        }
        else if ($action == 'save')   //保存字段
        {

        }
        else if ($action == 'delete') //删除某个记录
        {
            $rawdata = file_get_contents('php://input');
            $data = json_decode($rawdata);
            $id = $data->id;

            if (is_numeric($id)) //
            {
                $order = Model_Member_Order::get_order_detail($id);
                //订单处理中/等待付款的订单返库存
                if($order['status'] < 3)
                {
                    $dingnum = intval($order['dingnum']) + intval($order['childnum']) + intval($order['oldnum']);
                    Model_Hotel::storage($order['suitid'],$dingnum,$order);
                }
                Model_Member_Order::order_delete($id);
            }
        }
        else if ($action == 'update')//更新某个字段
        {
            $id = Arr::get($_POST, 'id');
            $field = Arr::get($_POST, 'field');
            $val = Arr::get($_POST, 'val');
            $params = array(
                'orderid' => $id,
                'field' => $field,
                'value' => $val,
                'product_model' => 'Model_Hotel'
            );
            $status = Model_Member_Order::back_order_update_field($params);
            if($status)
            {
                echo 'ok';
                exit();
            }
            else
            {
                echo 'no';
                exit();
            }


        }
    }

    /*
     * 查看订单信息
     * */
    public function action_view()
    {
        $id = $this->params['id'];//订单id.
        $type = $this->params['type'];//订单类型
        $typeid = $this->_typeid;
        $model = ORM::factory('member_order')->where('id', '=', $id)->find();
        $info = $model->as_array();
        if ($model->loaded())
        {
                $model->viewstatus = 1;
                $model->save();
        }
        $info = Model_Member_Order::order_info($info['ordersn']);

        //游客信息
        $tourer = Model_Member_Order_Tourer::get_tourer_by_orderid($info['id']);
        if (!empty($tourer)) $this->assign('tourer', $tourer);


        $this->assign('info', $info);
        $this->assign('typeid', $typeid);
        $this->assign('orderstatus', Model_Member_Order::$order_status);
        $this->display('admin/hotel/order/view');
    }

    /*
     * 保存
     * */
    public function action_ajax_save()
    {

        $id = Arr::get($_POST, 'id');
        $type = Arr::get($_POST, 'type');

        $status = false;
        $model = ORM::factory('member_order', $id);
        $model->price = Arr::get($_POST, 'price');
        $model->childprice = $_POST['childprice'];
        $model->oldprice = $_POST['oldprice'];
        $model->remark = $_POST['remark'];
        $oldstatus = $model->status;//原来状态.
        $product_model = 'Model_Hotel';

        $model->status = Arr::get($_POST, 'status');
        if ($model->status == "2" && isset($model->eticketno) && $model->eticketno == "")
        {
            $model->eticketno = Common::get_eticketno();
        }
        $model->update();


        if ($model->saved())
        {
           $order = DB::select()->from('member_order')->where('id','=',$id)->execute()->current();
           $status = Model_Member_Order::back_order_status_changed($oldstatus,$order,$product_model);


        }
        echo json_encode(array('status' => $status));
    }
    /*
     * 订单统计数据查看
     * */
    public function action_dataview()
    {
        $year = date('Y');
        $this->assign('thisyear', $year);
        $this->assign('typeid', $this->_typeid);
        $this->display('admin/hotel/order/data_view');
    }
    /*
     * 异步获取相关统计数据
     * */
    public function action_ajax_sell_info()
    {
        $out = array();
        $typeid = $this->_typeid;

        //今日销售
        $time_arr = St_Functions::back_get_time_range(1);
        $out['today'] = Model_Member_Order::back_caculate_price_by_timerange($time_arr, $typeid);

        //昨日销售
        $time_arr = St_Functions::back_get_time_range(2);
        $out['last'] = Model_Member_Order::back_caculate_price_by_timerange($time_arr, $typeid);

        //本周销售
        $time_arr = St_Functions::back_get_time_range(3);;
        $out['thisweek'] = Model_Member_Order::back_caculate_price_by_timerange($time_arr, $typeid);

        //本月销售
        $time_arr = St_Functions::back_get_time_range(5);
        $out['thismonth'] = Model_Member_Order::back_caculate_price_by_timerange($time_arr, $typeid);

        //全部销售额
        $out['total'] = Model_Member_Order::back_caculate_price_by_timerange(0, $typeid);
        echo json_encode($out);
    }

    //按年进行统计
    public function action_ajax_year_tj()
    {
        $year = $this->params['year'];
        $typeid = $this->_typeid;
        $current_year = date('Y');
        if ($current_year < $year) exit();
        for ($i = 1; $i <= 12; $i++)
        {
            $starttime = date('Y-m-d', mktime(0, 0, 0, $i, 1, $year));//开始时间

            $endtime = strtotime("$starttime +1 month -1 day");//结束时间
            $timearr = array(strtotime($starttime), $endtime);

            $out[$i] = Model_Member_Order::back_order_price_year($timearr, $typeid);
        }
        echo json_encode($out);

    }

    /*
     * 生成excel页面
     * */
    public function action_excel()
    {
        $this->assign('typeid', $this->params['typeid']);
        $this->assign('statusnames', Model_Member_Order::$order_status);
        $this->display('stourtravel/order/excel');
    }

    public function action_genexcel()
    {

        $typeid = $this->_typeid;
        $timetype = $this->params['timetype'];
        $starttime = strtotime(Arr::get($_GET, 'starttime'));
        $endtime = strtotime(Arr::get($_GET, 'endtime'));
        $status = $_GET['status'];
        switch ($timetype)
        {
            case 1:
                $time_arr = St_Functions::back_get_time_range(1);
                break;
            case 2:
                $time_arr = St_Functions::back_get_time_range(2);
                break;
            case 3:
                $time_arr = St_Functions::back_get_time_range(3);
                break;
            case 5:
                $time_arr = St_Functions::back_get_time_range(5);
                break;
            case 6:
                $time_arr = array($starttime, $endtime);
                break;
        }
        $excel = Model_Member_Order::back_order_excel($time_arr,$typeid,$status);

        $filename = date('Ymdhis');
        header('Pragma:public');
        header('Expires:0');
        header('Content-Type:charset=utf-8');
        header('Cache-Control:must-revalidate,post-check=0,pre-check=0');
        header('Content-Type:application/force-download');
        header('Content-Type:application/vnd.ms-excel');
        header('Content-Type:application/octet-stream');
        header('Content-Type:application/download');
        header('Content-Disposition:attachment;filename=' . $filename . ".xls");
        header('Content-Transfer-Encoding:binary');

        //define("FILETYPE","xls");
        //header("Content-type:application/vnd.ms-excel");
        //header('Content-type: charset=GBK');
        //header('Pragma: no-cache');
        //header('Expires: 0');
        //header("Content-Disposition:filename=".$info['name'].".xls");
        //$str = iconv("UTF-8//IGNORE","GBK//IGNORE",$str);
        if (empty($arr))
        {
            echo iconv('utf-8', 'gbk', $excel);
        }
        else
        {
            echo $excel;
        }
        exit();
    }



    public function action_ajax_sell_tj()
    {
        $out = array();
        $typeid = $this->_typeid;
        //今日销售
        $time_arr = St_Functions::back_get_time_range(1);
        $out['today'] = Model_Member_Order::back_caculate_info_by_timerange($time_arr, $typeid);

        //昨日销售
        $time_arr =St_Functions::back_get_time_range(2);
        $out['last'] = Model_Member_Order::back_caculate_info_by_timerange($time_arr, $typeid);

        //本周销售
        $time_arr =St_Functions::back_get_time_range(3);
        $out['thisweek'] = Model_Member_Order::back_caculate_info_by_timerange($time_arr, $typeid);

        //本月销售
        $time_arr =St_Functions::back_get_time_range(5);
        $out['thismonth'] = Model_Member_Order::back_caculate_info_by_timerange($time_arr, $typeid);

        echo json_encode($out);

    }






}