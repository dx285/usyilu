<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Model_Archive extends ORM {
    /**
     * @function 库存操作函数,当$dingnum为正数是为加库存,当$dingnum为负数时为减库存
     * @param $suitid
     * @param $dingnum
     * @param $day
     * @return bool|object
     */
    public static function storage($suitid, $dingnum, $order_arr)
    {
        $day = strtotime($order_arr['usedate']);
        $org_number = DB::select('number')->from('model_suit_price')
            ->where('day', '=', $day)
            ->and_where('suitid', '=', $suitid)
            ->execute()
            ->get('number');
        if ($org_number == -1)
        {
            return true;
        }
        if (intval($dingnum) < 0)
        {
            //如果库存小于需求库存量,则直接返回减库存失败
            if ($org_number < abs($dingnum))
            {
                return false;
            }
        }
        $update_arr = array(
            'number' => DB::expr("number + $dingnum")
        );
        $query = DB::update('model_suit_price')
            ->set($update_arr)
            ->where('suitid', '=', $suitid)
            ->and_where('number', '<>', -1)
            ->and_where('day', '=', $day);

        return $query->execute();

    }

}