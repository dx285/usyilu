<?php defined('SYSPATH') or die('No direct script access.');
require_once TOOLS_COMMON . 'functions.php';

/**
 * 邮件与短信通知发送公共类.
 * User: Administrator
 * Date: 16-6-17
 * Time: 下午4:49
 */
class NoticeCommon
{
    const MEMBER_REG_MSGTAG = "reg";
    const MEMBER_REG_CODE_MSGTAG = "reg_msgcode";
    const MEMBER_FINDPWD_CODE_MSGTAG = "reg_findpwd";

    const PRODUCT_ORDER_UNPROCESSING_MSGTAG = "order_msg1";
    const PRODUCT_ORDER_PROCESSING_MSGTAG = "order_msg2";
    const PRODUCT_ORDER_PAYSUCCESS_MSGTAG = "order_msg3";
    const PRODUCT_ORDER_CANCEL_MSGTAG = "order_msg4";


    public static function create_product_order_msgtype($product_order_msgtag, $model_pinyin)
    {
        $result = array();

        $msgtypelist = array();
        $msgtypelist["会员"] = "{$model_pinyin}_{$product_order_msgtag}";
        $msgtypelist["供应商"] = "supplier_{$model_pinyin}_{$product_order_msgtag}";
        $msgtypelist["管理员"] = "administrator_{$model_pinyin}_{$product_order_msgtag}";

        if(self::PRODUCT_ORDER_UNPROCESSING_MSGTAG == $product_order_msgtag)
            $result['订单未处理'] = $msgtypelist;
        if(self::PRODUCT_ORDER_PROCESSING_MSGTAG == $product_order_msgtag)
            $result['订单处理中'] = $msgtypelist;
        if(self::PRODUCT_ORDER_PAYSUCCESS_MSGTAG == $product_order_msgtag)
            $result['订单付款成功'] = $msgtypelist;
        if(self::PRODUCT_ORDER_CANCEL_MSGTAG == $product_order_msgtag)
            $result['订单取消'] = $msgtypelist;

        return $result;
    }

    public static function create_member_msgtype()
    {
        $result = array();

        $result["会员注册成功"] = self::MEMBER_REG_MSGTAG;
        $result["会员注册验证码"] = self::MEMBER_REG_CODE_MSGTAG;
        $result["会员找回密码验证码"] = self::MEMBER_FINDPWD_CODE_MSGTAG;

        return $result;
    }

    public static function get_system_model($typeid)
    {
        $sql = "select * from sline_model where id='{$typeid}'";
        $model_arr = DB::query(Database::SELECT, $sql)->execute()->as_array();
        if (count($model_arr) <= 0)
        {
            return false;
        }

        $model_info = $model_arr[0];
        if (empty($model_info['id']) || empty($model_info['pinyin']))
        {
            return false;
        }
        return $model_info;
    }

    public static function summary_price_number($orderinfo)
    {
        $result = array(
            'totalNumber' => 0,
            'totalPrice' => 0,
            'numberDescript' => '',
            'priceDescript' => ''
        );

        if (is_array($orderinfo))
        {
            //如果typeid为2,则要计算预订开始与结束日期的总价
            if ($orderinfo['typeid'] == 2)
            {
                $dingnum = $orderinfo['dingnum'];
                $suitid = $orderinfo['suitid'];
                $startdate = $orderinfo['usedate'];
                $leavedate = $orderinfo['departdate'];
                $totalprice = self::suit_range_price($suitid, $startdate, $leavedate);
                $result['numberDescript'] = $dingnum;
                $result['totalPrice'] = $totalprice * $dingnum;

            } else
            {

                $totalPrice = $orderinfo['price'] * $orderinfo['dingnum'] + $orderinfo['childnum'] * $orderinfo['childprice'] + $orderinfo['oldnum'] * $orderinfo['oldprice'];
                $result['totalPrice'] = $totalPrice;
                $totalNumber = $orderinfo['dingnum'] + $orderinfo['childnum'] + $orderinfo['oldnum'];
                $result['totalNumber'] = $totalNumber;

                $priceDescript = '';
                $numberDescript = '';
                if (!empty($orderinfo['dingnum']))
                {
                    $priceDescript = $priceDescript . $orderinfo['price'] . '(成)';
                    $numberDescript = $numberDescript . $orderinfo['dingnum'] . '(成)';
                }
                if (!empty($orderinfo['childnum']))
                {
                    $priceDescript = $priceDescript . $orderinfo['childprice'] . '(小)';
                    $numberDescript = $numberDescript . $orderinfo['childnum'] . '(小)';
                }
                if (!empty($orderinfo['oldnum']))
                {
                    $priceDescript = $priceDescript . $orderinfo['oldprice'] . '(老)';
                    $numberDescript = $numberDescript . $orderinfo['oldnum'] . '(老)';
                }
                $result['priceDescript'] = $priceDescript;
                $result['numberDescript'] = $numberDescript;


            }

        }
        return $result;
    }

    /*
    *获取套餐日期范围内价格总和.
    * */
    public static function suit_range_price($suitid, $sdate, $edate)
    {
        $startdate = $sdate;
        $sdate = strtotime($sdate);
        $flag = is_null($edate);
        $edate = !$flag ? strtotime($edate) : strtotime("$startdate +1 day");;


        $sql = "SELECT price FROM`sline_hotel_room_price` ";
        $sql .= "WHERE suitid='$suitid' AND day>=$sdate AND day<$edate";
        $ar = DB::query(1, $sql)->execute()->as_array();
        $price = 0;
        foreach ($ar as $row)
        {
            $row['price'] = Currency_Tool::price($row['price']);
            $price += $row['price'];
        }
        return $price;
    }

} 