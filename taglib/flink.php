<?php
/**
 * Created by Phpstorm.
 * User: netman
 * Date: 15-9-23
 * Time: 上午10:43
 * Desc: 底部导航获取标签
 */

class Taglib_Flink {

    /*
     * 获取友情链接
     * @param 参数
     * @return array

   */
    public static function query($params)
    {
        $default=array(
            'flag'=>'',
            'offset'=>0,
            'row'=>30,
            'typeid'=>0
        );
        $params=array_merge($default,$params);
        extract($params);
        $webid = $GLOBALS['sys_webid'];
		$typeid = empty($typeid) ? 0 : $typeid;
        if($typeid >= 0)
        {
            $where= " and FIND_IN_SET($typeid,address) " ;
        }
        //$where= !empty($typeid) ? " and FIND_IN_SET($typeid,address) " : '';
        if($flag=="all") //全部
        {
            $sql="SELECT sitename AS title,siteurl AS url FROM `sline_yqlj` WHERE  webid='$webid' {$where} ORDER BY IFNULL(`displayorder`,9999) ASC LIMIT {$offset},{$row}";
        }
        else //按栏目读取
        {
            $sql ="SELECT sitename AS title,siteurl AS url FROM `sline_yqlj` ";
            $sql.="WHERE 1 {$where} ";
            $sql.="ORDER BY IFNULL(`displayorder`,9999) ASC LIMIT {$offset},{$row}";
        }
        $ar = DB::query(1,$sql)->execute()->as_array();


        return $ar;
    }



} 