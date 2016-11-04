<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Class Controller_Hotel
 * @desc 酒店总控制器
 */
class Controller_Mobile_Article extends Stourweb_Controller
{
    private $_typeid = 4;   //产品类型
    private $_cache_key = '';

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

        $channelname = Model_Nav::get_channel_name_mobile($this->_typeid);
        $this->assign('typeid',$this->_typeid);
        $this->assign('channelname',$channelname);
    }

    /**
     * 酒店首页
     */
    public function action_index()
    {
         $seoinfo = Model_Nav::get_channel_seo_mobile($this->_typeid);
         $this->assign('seoinfo',$seoinfo);
         $this->display('../mobile/article/index','article_index');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    /**
     * 详细页
     */
    public function action_show()
    {
        $aid = intval($this->request->param('aid'));
        //子站内容显示
        if(isset($_GET['webid']))
        {
            $GLOBALS['sys_webid'] =intval(Arr::get($_GET,'webid'));
        }
        $row = Model_Article::get_article_details($GLOBALS['sys_webid'], $aid);
        //点击率加一
        Product::update_click_rate($aid, $this->_typeid);
        if(count($row) <= 0)
        {
            Common::head404();
        }

        $row = Model_Article::get_article_attachinfo($row);
        $row = $row[0];

        $seoinfo = Product::seo($row);

        $this->assign('seoinfo',$seoinfo);
        $this->assign('info',$row);
        $this->display('../mobile/article/show','article_show');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    /**
     * 搜索结果
     */
    public function action_list()
    {
        //参数处理
        $paras = explode('-', $this->request->param('params'));
        $dest = $paras[0];
        $sorttype = empty($paras[1]) ? "0" : $paras[1];
        $attrid = empty($paras[2]) ? "0" : $paras[2];
        $keyword = Common::remove_xss($_GET["keyword"]);

        $destinfo = Model_Destinations::get_dest_bypinyin($dest);
        $destId = empty($destinfo["id"]) ? "0" : $destinfo["id"];
        $destname =$dest!='all' ? DB::select('kindname')->from('destinations')->where('pinyin','=',$dest)->execute()->get('kindname') : '目的地';

        $page =intval(Arr::get($_GET, 'page'));
        $page = $page < 1 ? 1 : $page;

        //获取seo信息
        $seo = Model_Destinations::search_seo($dest, $this->_typeid);
        $this->assign('seoinfo', $seo);
        $this->assign('destid', $destId);
        $this->assign('destname',$destname);
        $this->assign('sorttype', $sorttype);
        $this->assign('attrid', $attrid);
        $this->assign('keyword', $keyword);
        $this->assign('page', $page);

        $this->display('../mobile/article/list','article_list');
        //缓存内容
        $content = $this->response->body();
        Common::cache('set', $this->_cache_key, $content);
    }

    /**
     * 搜索页
     */
    public function action_search()
    {
        $this->display('../mobile/article/search');
    }

    /**
     * @return string|void
     */
    public function action_ajax_article_order()
    {
        if(!$this->request->is_ajax())return '';
        $offset =  intval(Arr::get($_GET,'offset'));
        $count =  intval(Arr::get($_GET,'count'));
        $havepic =  intval(Arr::get($_GET,'havepic'));

        $rows = Model_Article::get_article_order($offset, $count, $havepic);
        if(count($rows) <= 0)
        {
            echo json_encode(false);
            return false;
        }
        $rows = Model_Article::get_article_attachinfo($rows);

        foreach($rows as &$row)
        {
            $row['litpic'] = Common::img($row['litpic'],616,419);
            $row['summary'] = Common::cutstr_html($row['summary'], 100);
        }

        echo json_encode(array('list'=>$rows));
    }

    /**
     * ajax请求 加载更多
     * @param string $pagesize
     * @return string|void
     */
    public function action_ajax_article_more($pagesize = '10')
    {
        if (!$this->request->is_ajax()) return '';
        $page = intval(Arr::get($_GET, 'page'));
        $offset = (intval($page) - 1) * $pagesize;
        $destid = intval(Arr::get($_GET, 'destid'));
        $sorttype =intval(Arr::get($_GET, 'sorttype'));
        $attrid = Arr::get($_GET, 'attrid');
        $keyword =Arr::get($_GET, 'keyword');

        $rows = Model_Article::search_article($destid, $attrid, $keyword, $offset, $pagesize, false, $sorttype);

        if (count($rows) <= 0)
        {
            echo json_encode(false);
            return false;
        }
        $data = Model_Article::get_article_attachinfo($rows);

        foreach ($data as &$v)
        {
            $v['litpic'] = Common::img($v['litpic'],100,68);
            $v['summary'] = Common::cutstr_html($v['summary'], 30);
        }

        echo Product::list_search_format($data, $page);
    }
}