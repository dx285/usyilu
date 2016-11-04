<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Supplier extends ORM
{
    /**
     * @function 根据ID获取供应商信息
     * @param $ids
     * @param string $fields
     * @return mixed
     */
    public static function get_supplier_info($ids,$fields='*')
    {
        $obj = DB::select($fields)->from('supplier');
        if (is_array($ids))
        {
            $rs = $obj->where('id', 'in', $ids)->execute()->as_array();
        }
        else
        {
            $rs = $obj->where('id', '=', $ids)->execute()->current();
        }
        return $rs;
    }

}