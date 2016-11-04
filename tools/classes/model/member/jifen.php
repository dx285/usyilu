<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 积分管理
 * Class Jifen
 */
class Model_Member_Jifen
{
    private static $_table = 'member_jifen_log';
    CONST JFUSE = 1;//积分使用
    CONST JFGET = 2;//积分获取

    /**
     * @function 送积分操作
     * @param $orderid
     */
    public static function refund($orderid)
    {

        $row = DB::select()->from('member_order')->where('id', '=', $orderid)->execute()->current();
        if (isset($row))
        {
            $memberid = $row['memberid'];
            $jifenbook = intval($row['jifenbook']);

            $sql = "UPDATE `sline_member` SET jifen=jifen+{$jifenbook} WHERE mid='$memberid'";
            $flag = DB::query(Database::UPDATE, $sql)->execute();
            if ($flag)
            {

                $content = "预订{$row['productname']}获得{$jifenbook}积分";
                self::add_jifen_log($memberid, $content, $jifenbook, self::JFGET);
            }

        }

    }

    /**
     * @function 登陆送积分
     * @param $mid
     */
    public static function refund_login($mid)
    {
        if ($GLOBALS['cfg_login_jifen'] > 0)
        {
            $sql = "UPDATE `sline_member` SET jifen=jifen+{$GLOBALS['cfg_login_jifen']} WHERE mid={$mid}";
            $flag = DB::query(Database::UPDATE, $sql)->execute();
            if ($flag)
            {
                $content = "登陆获得{$GLOBALS['cfg_login_jifen']}积分";
                self::add_jifen_log($mid, $content, $GLOBALS['cfg_login_jifen'], self::JFGET);
            }
        }
    }

    /**
     * @function 扣除积分
     * @param $ordersn
     */
    public static function deduct($ordersn)
    {

        $row = DB::select()->from('member_order')->where('ordersn', '=', $ordersn)->execute()->current();
        if ($row)
        {
            $memberid = $row['memberid'];
            $needjifen = intval($row['needjifen']);
            $sql = "UPDATE `sline_member` SET jifen=jifen-{$needjifen} WHERE mid='$memberid'";
            $flag = DB::query(Database::UPDATE, $sql)->execute();
            if ($flag)
            {
                $content = "预订{$row['productname']}积分抵现，使用{$needjifen}积分";
                self::add_jifen_log($memberid, $content, $needjifen, self::JFUSE);
            }
        }
    }

    /**
     * @function 积分日志操作函数
     * @param $memberid
     * @param $content
     * @param $jifen
     * @param $type
     * @return mixed
     */
    public static function add_jifen_log($memberid, $content, $jifen, $type)
    {
        $addtime = time();
        $insert_arr = array(
            'memberid' => $memberid,
            'content' => $content,
            'jifen' => $jifen,
            'type' => $type,
            'addtime' => $addtime
        );
        return DB::insert(self::$_table, array_keys($insert_arr))->values(array_values($insert_arr))->execute();
    }

}

