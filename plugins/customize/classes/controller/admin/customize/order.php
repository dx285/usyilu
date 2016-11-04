<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin_Customize_Order extends Stourweb_Controller
{
    private $_typeid = 14;
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
     * 订单列表
     * */
    public function action_index()
    {
        $action = $this->params['action'];
        if (empty($action))  //显示列表
        {
            $this->assign('statusnames', Model_Member_Order::getStatusNamesJs());
            $this->display('admin/customize/order/list');
        }
        else if ($action == 'read')    //读取列表
        {
            $start = Arr::get($_GET, 'start');
            $limit = Arr::get($_GET, 'limit');
            $keyword = Arr::get($_GET, 'keyword');

            $order = 'order by a.addtime desc';

            if (!empty($keyword))
            {
                $w = " where ( a.contactname like '%{$keyword}%' or a.phone like '%{$keyword}%')";
            }


            $sql = "select a.*  from sline_customize as a $w $order limit $start,$limit";
            //echo $sql;


            $totalcount_arr = DB::query(Database::SELECT, "select count(*) as num from sline_customize a $w ")->execute()->as_array();
            $list = DB::query(Database::SELECT, $sql)->execute()->as_array();
            $new_list = array();
            foreach ($list as $k => $v)
            {
                $v['addtime'] = Common::myDate('Y-m-d H:i:s', $v['addtime']);
                $v['starttime'] = Common::myDate('Y-m-d', $v['starttime']);
                $new_list[] = $v;
            }
            $result['total'] = $totalcount_arr[0]['num'];
            $result['lists'] = $new_list;
            $result['success'] = true;

            echo json_encode($result);
        }

        else if ($action == 'delete') //删除某个记录
        {
            $rawdata = file_get_contents('php://input');
            $data = json_decode($rawdata);
            $id = $data->id;

            if (is_numeric($id)) //
            {
                $model = ORM::factory('customize', $id);
                $model->delete();
            }
        }
        else if ($action == 'update')//更新某个字段
        {
            $id = Arr::get($_POST, 'id');
            $field = Arr::get($_POST, 'field');
            $val = Arr::get($_POST, 'val');

            if (is_numeric($id))
            {
                $model = ORM::factory('customize')->where('id', '=', $id)->find();

            }

            if ($model->id)
            {
                $model->$field = $val;

                $model->update();
                if ($model->saved())
                    echo 'ok';
                else
                    echo 'no';
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
        $model = ORM::factory('customize')->where('id', '=', $id)->find();
        $info = $model->as_array();
        if ($model->loaded())
        {
                $model->viewstatus = 1;
                $model->save();
        }
        //游客信息


        $this->assign('info', $info);
        $this->assign('typeid', $typeid);
        $this->assign('orderstatus', Model_Member_Order::$order_status);
        $this->display('admin/customize/order/view');
    }
    /*
     * 保存
     * */
    public function action_ajax_save()
    {

        $id = Arr::get($_POST, 'id');
        $type = Arr::get($_POST, 'type');

        $status = true;
        $model = ORM::factory('customize', $id);
        $model->status = Arr::get($_POST, 'status');
        if ($model->status == "2" && isset($model->eticketno) && $model->eticketno == "")
        {
            $model->eticketno = Common::get_eticketno();
        }
        $model->update();
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
        $this->display('admin/customize/order/data_view');
    }
}