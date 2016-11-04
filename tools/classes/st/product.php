<?php defined('SYSPATH') or die('No direct script access.');


/**
 * 产品通用管理
 * Class product
 */
class St_Product
{
    /**
     * @function 获取产品详情
     * @param $typeid
     * @param $productid
     * @return array
     */
    public static function get_product_info($typeid, $productid)
    {
        $out = array();
        if ($typeid)
        {

            $model = ORM::factory('model', $typeid);
            $table = $model->maintable;
            $pinyin = $model->pinyin;
            if ($table)
            {
                if (!class_exists('Model_' . $table))
                {
                    return $out;
                }
                $info = ORM::factory($table, $productid)->as_array();
                $py = empty($model->correct) ? $pinyin : $model->correct;
                $url = St_Functions::get_web_url($info['webid']) . "/{$py}/show_{$info['aid']}.html";
                $info['url'] = $url;
                $out = $info;
            }
        }
        return $out;
    }

    /**
     * @function 写入订单
     * @param $arr
     * @param $productModel
     * @return bool|int
     */
    public static function add_order($arr, $productModel, $params)
    {
        $flag = 0;
        $model = ORM::factory('member_order');
        if (is_array($arr))
        {

            $db = Database::instance();
            $db->begin();
            try
            {
                //减存
                $dingnum = intval($arr['dingnum']) + intval($arr['childnum']) + intval($arr['oldnum']);
                $bool = call_user_func(array($productModel, 'storage'), $arr['suitid'], '-' . $dingnum, $params);
                if (!$bool)
                {
                    throw new Exception('order_inventoryShortage');
                }
                //添加供应商信息
                $arr['supplierlist'] = self::get_product_supplier($arr['typeid'], $arr['productautoid']);
                if ($arr['paytype'] == '3')//这里补充一个当为二次确认时,修改订单为未处理状态.
                {
                    $arr['status'] = 0;
                }
                if (empty($arr['memberid']))
                {
                    $member_id = Cookie::get('st_userid');
                    $arr['memberid'] = $member_id ? $member_id : self::auto_reg($arr['linktel']);
                }
                foreach ($arr as $k => $v)
                {
                    $model->$k = $v;
                }
                $model->save();
                if (!$model->saved())
                {
                    //回滚库存
                    call_user_func(array($productModel, 'storage'), $arr['suitid'], $dingnum, $params);
                    throw new Exception('order_writeFailure');
                }
                $db->commit();
            } catch (Exception $e)
            {
                $db->rollback();
                Request::$current->redirect('error/tips?msg=' . $e->getMessage());
            }
            //扣除积分
            if ($arr['usejifen'] && $arr['needjifen'])
            {
                Model_Member_Jifen::deduct($arr['ordersn']);
            }

            //订单监控
            $detectresult = Model_Member_Order::detect($arr['ordersn']);
         //   var_dump($detectresult);exit;
            if ($detectresult !== true)
            {

                return false;
            }

            //用户通知信息
            if ($arr['paytype'] == '3')
            {
                St_SMSService::send_product_order_msg(NoticeCommon::PRODUCT_ORDER_UNPROCESSING_MSGTAG, $arr);
                St_EmailService::send_product_order_email(NoticeCommon::PRODUCT_ORDER_UNPROCESSING_MSGTAG, $arr);
            }
            else
            {
                St_SMSService::send_product_order_msg(NoticeCommon::PRODUCT_ORDER_PROCESSING_MSGTAG, $arr);
                St_EmailService::send_product_order_email(NoticeCommon::PRODUCT_ORDER_PROCESSING_MSGTAG, $arr);
            }

            //返回状态
            $flag = 1;
        }
        return $flag;
    }

    /**
     * @function 获取产品的供应商
     * @param $typeid
     * @param $productautoid
     * @return string
     */
    public static function get_product_supplier($typeid, $productautoid)
    {
        $supplierlist = '';
        $sql = "SELECT * FROM `sline_model` WHERE id=$typeid";
        $modelrow = DB::query(1, $sql)->execute()->current();
        if ($modelrow != null)
        {
            $cksql = "show columns from `sline_{$modelrow['maintable']}` like 'supplierlist'";
            $chrow = DB::query(1, $cksql)->execute()->current();
            if (count($chrow) > 0)
                $s = "SELECT supplierlist FROM sline_{$modelrow['maintable']} where id=$productautoid";
            $productsupplier = DB::query(1, $s)->execute()->current();;
            if ($productsupplier != null)
            {
                $supplierlist = $productsupplier['supplierlist'];
            }
        }
        return $supplierlist;
    }

    /**
     * @function 根据手机号自动注册账号
     * @param $mobile
     * @return int|mixed
     */
    public static function auto_reg($mobile)
    {
        $out = 0;
        $sql = "SELECT mid FROM `sline_member` WHERE mobile='$mobile'";
        $row = DB::query(1, $sql)->execute()->as_array();
        if (!empty($row[0]['mid']))
        {
            $out = $row[0]['mid'];
        }
        else
        {
            $pwd = md5($mobile);
            $jointime = time();
            $joinip = St_Functions::get_ip();
            $jifen = empty($GLOBALS['cfg_reg_jifen']) ? 0 : $GLOBALS['cfg_reg_jifen'];//网上注册赠送积分
            $nickname = substr($mobile, 0, 5) . '***';
            $m = ORM::factory('member');
            $member = array(
                'nickname' => $nickname,
                'pwd' => $pwd,
                'jointime' => $jointime,
                'email' => '',
                'mobile' => $mobile,
                'joinip' => $joinip,
                'jifen' => $jifen
            );
            foreach ($member as $key => $value)
            {
                $m->$key = $value;
            }
            $m->save();
            if ($m->saved())
            {
                $out = $m->mid;
                St_SMSService::send_member_msg($mobile, NoticeCommon::MEMBER_REG_MSGTAG, $mobile, $mobile,'');
            }
        }
        return $out;
    }

    /**
     * @function 获取短信内容模板
     * @param $typeid
     * @param int $num
     * @param string $msgtype
     * @return mixed
     */
    public static function get_define_msg($typeid, $num = 0, $msgtype = '')
    {
        $msgtype = empty($msgtype) ? self::get_msg_type($typeid, $num) : $msgtype;
        $sql = "SELECT * FROM `sline_sms_msg` WHERE msgtype='{$msgtype}'";
        $row = DB::query(1, $sql)->execute()->as_array();
        return $row[0];
    }

    /**
     * @function 根据typeid获取短信模板类型
     * @param $typeid
     * @param $num
     * @return string
     */
    public static function get_msg_type($typeid, $num)
    {
        $sql = "select pinyin,correct,maintable from sline_model where id={$typeid}";
        $arr = DB::query(Database::SELECT, $sql)->execute()->as_array();

        $msgtype = 'reg';
        if (count($arr) > 0)
        {
            if ($arr[0]['maintable'] == "model_archive")
                $msgtype = "tongyong_order_msg" . $num;
            else
                $msgtype = $arr[0]['pinyin'] . '_order_msg' . $num;
        }
        return $msgtype;
    }

    /**
     * @function 发送短信
     * @param $phone
     * @param $prefix
     * @param $content
     * @return mixed|string
     */
    public static function send_msg($phone, $prefix, $content)
    {
        if (!$prefix)
        {
            $prefix = $GLOBALS['cfg_webname'];
        }
        $status = St_SMSService::send_msg($phone, $prefix, $content);
        $status = json_decode($status);
        return $status;
    }

    /**
     * @function 获取页面配置
     * @param $pagename
     * @return Array|bool
     * @throws Kohana_Exception
     */
    public static function get_template_list($pagename)
    {
        $model = ORM::factory('page')->where('pagename', '=', $pagename)->find();
        if (!$model->loaded())
        {
            return false;
        }
        $id = $model->id;
        $list = ORM::factory('page_config')->where('pageid', '=', $id)->get_all();
        return $list;
    }

    /**
     * @function 获取或解析产品编号
     * @param $number 产品id或编号
     * @param $typeid
     * @param $decode
     * @return string|array
     */
    public static function product_series($number,$typeid,$decode=false)
    {
        $typeid = (string)$typeid;
        $number = (string)$number;
        if($decode)
        {
            $len = intval($number[0]);
            $typeid = substr($number,1,$len);
            $id = substr($number,1+$len);
            $id = $id?$id:$number;
            return array('typeid'=>$typeid,'id'=>$id);
        }
        else
        {
            $len = strlen($typeid);
            return $len.$typeid.$number;
        }
    }

    /**
     * @function 为订单添加消费码
     * @param $ordersn
     */
    public static function add_eticketno($ordersn)
    {

        $org_eticketno = DB::select('eticketno')->from('member_order')->where('ordersn', '=', "{$ordersn}")->execute()->get('eticketno');
        if(!empty($org_eticketno))
        {
            return null;
        }
        $eticketno = self::get_eticketno();
        $result = DB::update('member_order')->where('ordersn', '=', "{$ordersn}")->set(array('eticketno' => $eticketno))->execute();
        if($result)
        {
            return $eticketno;
        }
        else
        {
            return null;
        }
    }

    /**
     * @function 获取消费码
     * @return string
     */
    public static function get_eticketno()
    {

        $eticketno = "";

        while (true)
        {
            $eticketno = substr(self::get_random_number(9), 1, 8);

            $check_sql = "SELECT id FROM `sline_member_order` WHERE eticketno='{$eticketno}'";
            $row = DB::query(1, $check_sql)->execute()->as_array();

            if (count($row) <= 0)
                break;
            sleep(1);
        }
        return $eticketno;
    }

    /**
     * @function 生成随机数
     * @param int $length
     * @return int
     */
    public static function get_random_number($length = 4)
    {
        $min = pow(10, ($length - 1));
        $max = pow(10, $length) - 1;
        return mt_rand($min, $max);
    }

    /**
     * @param $year
     * @param $month
     * @param $suitid
     * @param $typeid
     * @param $startdate
     * @return array
     * @desc 获取产品套餐报价
     */
    public static function get_suit_price($year, $month, $suitid, $typeid, $startdate = '')
    {
        $priceTable = array(
            '1' => 'line_suit_price',
            '2' => 'hotel_room_price',
            '3' => 'car_suit_price',
            '5' => 'spot_ticket_price'
        );
        $field = $typeid == 5 ? 'ticketid' : 'suitid';
        $start = !empty($startdate) ? strtotime($startdate) : strtotime("$year-$month-1");
        $end = strtotime("$year-$month-31");
        $table = $priceTable[$typeid];
        $arr = ORM::factory($table)
            ->where("{$field}=$suitid")
            ->and_where('day', '>=', $start)
            ->and_where('day', '<=', $end)
            ->and_where('number', '!=', 0)
            ->get_all();

        $price = array();
        foreach ($arr as $row)
        {
            if ($row)
            {

                $day = $row['day'];
                $price[$day]['date'] = Common::mydate('Y-m-d', $row['day']);
                $price[$day]['basicprice'] = isset($row['adultbasicprice']) ? $row['adultbasicprice'] : $row['basicprice'];
                $price[$day]['basicprice'] = Currency_Tool::price($price[$day]['basicprice']);
                $price[$day]['profit'] = isset($row['adultprofit']) ? $row['adultprofit'] : $row['profit'];
                $price[$day]['profit'] = Currency_Tool::price($price[$day]['profit']);
                $price[$day]['price'] = isset($row['adultprice']) ? $row['adultprice'] : $row['price'];
                $price[$day]['price'] = Currency_Tool::price($price[$day]['price']);
                $price[$day]['child_basicprice'] = isset($row['childbasicprice']) ? $row['childbasicprice'] : 0;
                $price[$day]['child_basicprice'] = Currency_Tool::price($price[$day]['child_basicprice']);

                $price[$day]['child_profit'] = isset($row['childprofit']) ? $row['childprofit'] : 0;
                $price[$day]['child_profit'] = Currency_Tool::price($price[$day]['child_profit']);

                $price[$day]['child_price'] = isset($row['childprice']) ? $row['childprice'] : 0;
                $price[$day]['child_price'] = Currency_Tool::price($price[$day]['child_price']);


                $price[$day]['old_basicprice'] = isset($row['oldbasicprice']) ? $row['oldbasicprice'] : 0;
                $price[$day]['old_basicprice'] = Currency_Tool::price($price[$day]['old_basicprice']);

                $price[$day]['old_profit'] = isset($row['oldprofit']) ? $row['oldprofit'] : 0;
                $price[$day]['old_profit'] = Currency_Tool::price($price[$day]['old_profit']);
                $price[$day]['old_price'] = isset($row['oldprice']) ? $row['oldprice'] : 0;
                $price[$day]['old_price'] = Currency_Tool::price($price[$day]['old_price']);

                $price[$day]['suitid'] = $suitid;
                $price[$day]['number'] = $row['number'];//库存
                $price[$day]['description'] = $row['description'];//描述

            }


        }
        return $price;
    }

    /*
  * 生成订单编号
  * */
    public static function get_ordersn($kind)
    {
        /* 选择一个随机的方案 */
        return $kind . substr(time(), -5) . substr(microtime(), 2, 5) . sprintf('%02d', rand(0, 99));
    }

}