<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Destination extends Stourweb_Controller
{

    private $typeid = 12;
    private $_cache_key = '';

    public function before()
    {
        parent::before();
        //检查缓存
        $this->_cache_key = Common::get_current_url();
        $genpage = intval(Arr::get($_GET, 'genpage'));
        $html = Common::cache('get', $this->_cache_key);
        if (!empty($html) && empty($genpage))
        {
            echo $html;
            exit;
        }
        $channelname = Model_Nav::get_channel_name($this->typeid);
        $this->assign('typeid', $this->typeid);
        $this->assign('channelname', $channelname);

    }

    //首页
    public function action_index()
    {
        $seoinfo = Model_Nav::get_channel_seo($this->typeid);
        $this->assign('seoinfo', $seoinfo);

        $templet = Product::get_use_templet('dest_index');
        $templet = $templet ? $templet : 'destination/index';
        $this->display($templet);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);

    }

    //搜索目的地
    public function action_search()
    {
        $destname = Arr::get($_GET, 'destname');

        $info = DB::select('pinyin')->from('destinations')->where('kindname','=',$destname)->execute()->current();
        if (!empty($info['pinyin']))
        {
            $url = $GLOBALS['cfg_basehost'] . '/' . $info['pinyin'] . '/';
        }
        else
        {
            $url = $this->request->referrer();
        }
        $this->request->redirect($url);
    }

    public function action_main()
    {
        $channel = Model_Nav::get_all_channel_info();
        $this->assign('channel', $channel);
        //参数处理
        $destpy = $this->request->param('pinyin');
        $destinfo = Model_Destinations::get_dest_bypinyin($destpy);
        //获取seo信息
        $seo = Model_Destinations::search_seo($destpy, 0);
        $this->assign('seoinfo', $seo);
        $this->assign('info', $destinfo);
        if (!empty($destinfo))
        {
            $templet = $destinfo['templet'];
            if (strpos($templet, 'usertpl') == false)
            {
                $templet = 'destination/main';
            }

            $this->display($templet);

        }
        else
        {
            $this->request->redirect("error/404");
        }
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }


    //酒店首页按目的地拼音获取目的地
    public function action_ajax_dest_by_pinyin()
    {
        $keyword = Common::js_unescape(Arr::get($_GET, 'keyword'));
        $typeid = Arr::get($_GET, 'typeid');
        $str = Model_Destinations::match_pinyin($keyword, $typeid);
        echo $str;
    }


}