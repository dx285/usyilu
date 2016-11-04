<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mobile extends Stourweb_Controller
{
    /*
     * 手机设置总控制器
     * */

    public function before()
    {
        parent::before();

        $sysconfig_fields = array('cfg_mobile_open', 'cfg_mobile_version', 'cfg_m_main_url', 'cfg_m_img_url', 'cfg_m_phone', 'cfg_m_icp', 'cfg_m_tongjicode', 'cfg_m_logo');
        $configinfo = Model_Sysconfig::get_configs(0, $sysconfig_fields);
        if (!isset($configinfo['cfg_mobile_version']))
        {
            $configinfo['cfg_mobile_version'] = 0;
        }

        $this->assign('config', $configinfo);
        $this->assign('parentkey', $this->params['parentkey']);
        $this->assign('itemid', $this->params['itemid']);
    }

    /*
     * 手机端配置首页
     * */
    public function action_index()
    {
        $this->display('stourtravel/mobile/index');
    }

    /*
     * 系统配置
     * */
    public function action_sys()
    {
        $this->display('stourtravel/mobile/sys');
    }

    /*
    * 手机导航配置操作部分
     * -------------------------------
     * ----------------------------
    * */
    public function action_nav()
    {
        $this->display('stourtravel/mobile/nav');
    }

    /*
   * 手机导航获取(ajax)
   * */
    public function action_ajax_getnav()
    {
        $arr = DB::select()->from('m_nav')->execute()->as_array();
        $out = array();
        foreach ($arr as $row)
        {
            $isopen = $row['m_isopen'] ? $row['m_isopen'] : 0;
            $openstatus = $isopen ? Common::getIco('show') : Common::getIco('hide');
            $issystem = $row['m_issystem'];
            $editcls = $issystem ? "readonly='true'" : '';
            $ar = array();
            $ar['navname'] = $row['m_title'] ? $row['m_title'] : $row['shortname'];
            $ar['displayorder'] = $row['m_displayorder'] == 9999 ? '' : $row['m_displayorder'];
            $ar['isopen'] = $isopen;
            $ar['ico'] = $row['m_ico'] ? $row['m_ico'] : '';
            $ar['linkurl'] = $row['m_url'] ? $row['m_url'] : $row['url'];
            $ar['openstatus'] = $openstatus;
            $ar['issystem'] = $row['m_issystem'];
            $ar['id'] = $row['id'];
            $ar['editcls'] = $editcls;
            $out[] = $ar;
        }
        echo json_encode(array('list' => $out));
    }

    /*
     * 保存手机导航
     * */
    public function action_ajax_savenav()
    {
        $model = new Model_Nav();
        $model->save_mobile_nav($_POST);
        echo json_encode(array('status' => true));
    }

    /*
     * 设置中心-主导航添加保存(ajax)
     *
     * */
    public function action_addnav()
    {
        $this->assign('webid', $this->params['webid']);
        $this->display('stourtravel/mobile/nav_add');
    }

    public function action_ajax_addnavsave()
    {
        $model = new Model_M_Nav();
        $model->m_title = Arr::get($_POST, 'shortname');
        $model->m_url = Arr::get($_POST, 'linkurl');
        $model->create();
        $out = array();
        if ($model->saved())
        {
            $out['status'] = true;
        }
        else
        {
            $out['status'] = false;
        }
        echo json_encode($out);
    }

    /*
     *删除导航
     * */
    public function  action_ajax_delnav()
    {
        $navid = Arr::get($_GET, 'id');
        $o = ORM::factory('m_nav')->where("id=$navid")->find();
        $o->delete();
        if (!$o->loaded())
        {
            $out['status'] = true;
        }
        else
        {
            $out['status'] = false;
        }
        echo json_encode($out);
    }

    /*
     * 导航ICO图标配置
     * */
    public function action_dialog_ico()
    {
        $navid = $this->params['id'];
        $info = ORM::factory('m_nav')->where("id=$navid")->find()->as_array();
        $this->assign('info', $info);
        $this->display('stourtravel/mobile/ico');
    }

    /*
     *
     * ico保存
     * */
    public function action_ajax_ico_save()
    {
        $litpic = Arr::get($_POST, 'litpic');
        $id = Arr::get($_POST, 'id');
        $flag = false;
        if ($id)
        {
            $value_arr = array('m_ico' => $litpic);
            $isupdated = DB::update('m_nav')->set($value_arr)->where('id', '=', $id)->execute();
            if ($isupdated)
                $flag = true;
        }
        echo json_encode(array('status' => $flag));
    }
}