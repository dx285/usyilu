<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_AppApi extends ORM
{
    //产品编号
    private $_pcode;
    //授权域名
    private $_domain;
    //会员ID
    private $_memberId;
    //应用商城接口
    const APPURL = 'http://www.stourweb.com/api/app/get_list';
    //应用类型接口
    const APPTYPEURL = 'http://www.stourweb.com/api/app/get_type';
    //标签接口
    const TAGURL = 'http://www.stourweb.com/api/app/get_tag';
    //应用详情接口
    const INFOURL = 'http://www.stourweb.com/api/app/get_info';
    //我的应用
    const MYAPPURL = 'http://www.stourweb.com/api/app/get_my_app';
    //购买接口
    const APPBUY = 'http://www.stourweb.com/api/app/buy_app';
    //app状态
    public static $APPSTATUSLIST = array("0" => "未安装", "1" => "已安装", "2" => "禁止升级", "3" => "公测更新", "4" => "正式更新", "5" => "已是最新");

    public function __construct()
    {
        $SerialNumber = '';
        include(Kohana::find_file('data', 'license'));
        $code = Model_Upgrade3::get_core_system_part();
        $this->_pcode = $code['pcode'];
        $this->_memberId = $SerialNumber;
        $this->_domain = $_SERVER['HTTP_HOST'];
    }

    public function get_app_tag_list()
    {
        //产品编号
        $common['pcode'] = $this->_pcode;
        return json_decode($this->curl_post_data(self::TAGURL, true, $common));
    }

    public function get_app_type_list()
    {
        //产品编号
        $common['pcode'] = $this->_pcode;
        return json_decode($this->curl_post_data(self::APPTYPEURL, true, $common));
    }

    public function get_app_list(array $conditions)
    {
        //产品编号
        $conditions['pcode'] = $this->_pcode;
        //会员ID
        $conditions['memberId'] = $this->_memberId;
        //域名
        $conditions['domain'] = $this->_domain;
        //获取数据
        return json_decode($this->curl_post_data(self::APPURL, true, $conditions));
    }

    //购买应用
    public function app_buy($number)
    {
        $params = array();
        //产品编号
        $params['pcode'] = $this->_pcode;
        //会员ID
        $params['memberId'] = $this->_memberId;
        //应用编号
        $params['number'] = $number;
        //域名
        $params['domain'] = $this->_domain;

        return json_decode($this->curl_post_data(self::APPBUY, true, $params));
    }

    //应用详情
    public function get_app_info($number)
    {
        $params = array();
        $params['number'] = $number;
        $params['pcode'] = $this->_pcode;
        $params['memberId'] = $this->_memberId;
        $params['domain'] = $this->_domain;
        return json_decode($this->curl_post_data(self::INFOURL, true, $params));
    }

    //我的应用
    public function get_my_app_list(array $conditions)
    {
        $conditions['pcode'] = $this->_pcode;
        $conditions['memberId'] = $this->_memberId;
        $conditions['domain'] = $this->_domain;
        return json_decode($this->curl_post_data(self::MYAPPURL, true, $conditions));
    }

    public function setup_app_install_data(array $app_install_task)
    {
        list($insertId, $rows) = DB::insert('app', array('number','productcode'))->values(array($app_install_task["app_number"],$app_install_task['upgrade_code']))->execute();
        return $insertId;
    }

    public function unsetup_app_install_data($system_part_code)
    {
        DB::delete('app')->where("id={$system_part_code}")->execute();
    }

    public function app_install_data()
    {
        return DB::select()->from('app')->execute()->as_array();
    }

    /**
     * 判断指定pcode的应用是否已经安装
     * @param $dir
     * @return array
     */
    public function is_app_installed($code_number)
    {
        $result = DB::select()->from('app')->where("productcode='{$code_number}' or number='{$code_number}'")->execute()->as_array();
        return !empty($result);
    }

    /**
     * 格式化数据
     * @param $data
     * @return mixed
     */
    public function app_data_format(array $app_data, $is_check_upgrade = false)
    {
        $app_installed_result = $this->app_install_data();

        $result = array();
        $upgrade_check_params = array();
        foreach ($app_data as $app_data_item)
        {
            $app = (array)$app_data_item;
            $app['id'] = $app['number'];
            $app['appStatus'] = 0;
            if ($app['isBuy'] === 1)
            {
                foreach ($app_installed_result as $app_installed_item)
                {
                    if (strtolower($app['number']) == strtolower($app_installed_item['number']))
                    {
                        $app['id'] = $app_installed_item['id'];
                        $app['appStatus'] = 1;
                        if ($app_installed_item["is_upgrade"] == 0)
                        {
                            $app['appStatus'] = 2;
                        } else
                        {
                            $upgrade_check_params[] = $app["id"];
                        }

                        break;
                    }
                }

            }

            array_push($result, $app);
        }

        if (count($upgrade_check_params) > 0 && $is_check_upgrade)
        {
            $upgrade_check_result = Model_Upgrade3::check_system_part_update($upgrade_check_params);
            foreach ($result as &$app)
            {
                foreach ($upgrade_check_result as $upgrade_check_result_key => $upgrade_check_result_value)
                {
                    if (strtolower($app["id"]) == strtolower($upgrade_check_result_key))
                    {
                        if (is_array($upgrade_check_result_value))
                        {
                            if (count($upgrade_check_result_value) > 0)
                            {
                                if ($upgrade_check_result_value[count($upgrade_check_result_value) - 1]["Status"] == 1)
                                    $app['appStatus'] = 4;
                                else
                                    $app['appStatus'] = 3;
                            } else
                            {
                                $app['appStatus'] = 5;
                            }

                        }

                        break;
                    }
                }
            }
        }

        foreach ($result as &$app)
        {
            $app["appStatusName"] = self::$APPSTATUSLIST[$app['appStatus']];
        }
        return $result;
    }

    /**
     * 获取远程数据
     * @param $url
     * @param bool|true $isPost
     * @param null $data
     * @return mixed
     */
    private function curl_post_data($url, $isPost = false, $data = null)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        if ($isPost)
        {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

}