<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Config extends ORM
{
    /**
     * 检测支付证书是否存在或证书目录
     * @param $config 系统配置
     * @param bool|false $returnCertPath 返回证书目录
     * @return array
     */
    public static function is_exists_certs($config, $returnCertPath = false)
    {
        $certsPath = array(
            //4.0
            array(
                'chinabank' => array(
                    '/thirdpay/yinlian/certs/',
                ),
                'wxpay' => array(
                    '/thirdpay/weixinpay/cert/'
                )
            ),
            //4.0PC与5.0Mobile
            array(
                'chinabank' => array(
                    //'/thirdpay/yinlian/certs/', 4.0与5.0SDK不同
                    '/payment/application/vendor/pc/chinabank/certs/'
                ),
                'wxpay' => array(
                    '/thirdpay/weixinpay/cert/',
                    '/payment/application/vendor/pc/wxpay/cert/'
                )
            ),
            //5.0
            array(
                'chinabank' => array('/payment/application/vendor/pc/chinabank/certs/'),
                'wxpay' => array('/payment/application/vendor/pc/wxpay/cert/'),
                'bill' => array('/payment/application/vendor/pc/bill/cert/'),
            )
        );
        $certs = array(
            'wxpay' => array('apiclient_cert.p12', 'apiclient_cert.pem', 'apiclient_key.pem', 'rootca.pem'),
            'chinabank' => array('zhengshu.pfx'),
            'bill' => array('public-rsa.cer'),
        );
        //根据版本选择需要检测的目录
        if ($config['cfg_pc_version'] == 0 && $config['cfg_mobile_version'] == 0)
        {
            $certsPath = $certsPath[0];
        }
        else if ($config['cfg_pc_version'] == 0 && $config['cfg_mobile_version'] == 1)
        {
            $certsPath = $certsPath[1];
        }
        else
        {
            $certsPath = $certsPath[2];
        }
        //返回上传证书目录
        if ($returnCertPath)
        {
            return $certsPath;
        }
        //遍历文件
        foreach ($certsPath as $k => $v)
        {
            $bool = false;
            foreach ($v as $sub)
            {
                if ($bool)
                {
                    break;
                }
                foreach ($certs[$k] as $filename)
                {
                    if (!file_exists(BASEPATH . $sub . $filename))
                    {
                        $bool = true;
                        break;
                    }

                }
            }
            if ($bool)
            {
                $info[$k] = false;
                continue;
            }
            else
            {
                $info[$k] = true;
            }
        }
        //返回检测结果
        return $info;
    }

    /**
     * 清除缓存
     */
    public static function clear_cache()
    {
        $dir = array(
            'qiantai' => SLINEDATA . '/tplcache',
            'zizhan' => SLINEDATA . '/dest',
            'houtai' => APPPATH . '/cache/tplcache/stourtravel',
            'shouji4' => BASEPATH . '/shouji/application/cache/tplcache/mobile',
            'shouji5' => BASEPATH . '/phone/application/cache',
            'cms5' => BASEPATH . '/v5/cache',
            'payment' => BASEPATH . '/payment/application/cache',
            'frontdesk' => BASEPATH . '/data/cache',
            'backstage' => APPPATH . '/cache'
        );
        //先删除目录下的文件：
        foreach ($dir as $k => $v)
        {
            if ($k == 'shouji5')
            {
                self::clear_shouji5_cache($v);
            }
            else
            {
                self::delDirFile($v);
            }
        }
    }

    /*
     * 清除移动版V5缓存
     */
    public static function clear_shouji5_cache($dir)
    {
        if (!file_exists($dir))
        {
            return;
        }
        $roothandler = opendir($dir);
        while ($file = readdir($roothandler))
        {
            if ($file != "." && $file != "..")
            {
                $fullpath = $dir . "/" . $file;

                if ($file == 'find' && is_dir($fullpath))
                {
                    //验证缓存
                    $findhandler = opendir($fullpath);
                    while ($findfile = readdir($findhandler))
                    {
                        if (in_array($findfile, array('.', '..')))
                        {
                            continue;
                        }
                        $findsubfile = $fullpath . '/' . $findfile;
                        if (is_file($findsubfile) && (filemtime($findsubfile) < strtotime('-1 day')))
                        {
                            unlink($findsubfile);
                        }
                    }
                    closedir($findhandler);
                }
                else if (is_dir($fullpath))
                {
                    self::delDirFile($fullpath);
                }
                else
                {
                    unlink($fullpath);
                }
            }
        }
        closedir($roothandler);
    }

    /**
     * 循环删除目录
     * @param $dir
     */
    public static function delDirFile($dir)
    {
        $dh = opendir($dir);
        while ($file = readdir($dh))
        {
            if ($file != "." && $file != "..")
            {
                $fullpath = $dir . "/" . $file;
                if (!is_dir($fullpath))
                {
                    unlink($fullpath);
                }
                else
                {
                    self::delDirFile($fullpath);
                }

            }
        }
        closedir($dh);
    }
}