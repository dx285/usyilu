<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Index extends Stourweb_Controller{

    private  $_cache_key = '';
    public function before()
    {
        parent::before();
        //检查缓存
        $this->_cache_key = Common::get_current_url();
        $html = Common::cache('get', $this->_cache_key);
        $genpage = intval(Arr::get($_GET, 'genpage'));
        if (!empty($html) && empty($genpage))
        {
            echo $html;
            exit;
        }
    }

    //首页
    public function action_index()
    {
        //seo信息
        $seoinfo = array(
            'seotitle' => $GLOBALS['cfg_indextitle'],
            'keyword' => $GLOBALS['cfg_keywords'],
            'description' => $GLOBALS['cfg_description']
        );

        //获取栏目名称与开启状态
        $channel = Model_Nav::get_all_channel_info_mobile();
        $this->assign('channel',$channel);
        $this->assign('seoinfo',$seoinfo);
        $this->display('index','index');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }
}