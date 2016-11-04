<?php defined('SYSPATH') or die('No direct script access.');
class Controller_Pc_Article extends Stourweb_Controller{
    /*
     * 攻略总控制器
     * */

    private $typeid = 4;
    private $_cache_key = '';
    public function before()
    {
        parent::before();
        //检查缓存
        $this->_cache_key = Common::get_current_url();
        $html = Common::cache('get',$this->_cache_key);
        $genpage = intval(Arr::get($_GET,'genpage'));
        if(!empty($html) && empty($genpage))
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
        $templet = Product::get_use_templet('article_index');
        $templet = $templet ? $templet : 'article/index';
        $this->display($templet);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);
    }
    //详细页
    public function action_show()
    {
        $aid = intval($this->request->param('aid'));
        $info = Model_Article::detail_aid($aid);
        if (!$info)
        {
            $this->request->redirect('error/404');
        }
        //seo
        $seoInfo = Product::seo($info);

        //属性列表
        $info['attrlist'] = Model_Article::attr($info['attrid']);
        //点评数
        $info['commentnum'] = Model_Comment::get_comment_num($info['id'], $this->typeid);
        //产品图标
        $info['iconlist'] = Product::get_ico_list($info['iconlist']);
        //上一条,下一条
        $info['prev'] = Model_Article::get_prev_next('prev',$info['id']);
        $info['next'] = Model_Article::get_prev_next('next',$info['id']);
        //目的地上级
        if($info['finaldestid']>0)
        {
            $predest = Product::get_predest($info['finaldestid']);
            $this->assign('predest',$predest);
            $this->assign('destid',$info['finaldestid']);
        }
        //用户信息
        $userInfo = Product::get_login_user_info();

        //扩展字段信息
        $extend_info = Model_Article::extend($info['id']);
        $this->assign('seoinfo', $seoInfo);
        $this->assign('info', $info);
        $this->assign('userinfo',$userInfo);
        $this->assign('extendinfo',$extend_info);


        $templet = Product::get_use_templet('article_show');
        $templet = $templet ? $templet : 'article/show';
        $this->display($templet);
        Product::update_click_rate($info['aid'], $this->typeid);

        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);

    }

    //列表页
    public function action_list()
    {
        //参数值获取
        $destPy = $this->request->param('destpy');
        $sign = $this->request->param('sign');
        $attrId = $this->request->param('attrid');
        $p = intval($this->request->param('p'));
        $attrId = !empty($attrId) ? $attrId : 0;
        $sorttype = $this->request->param('sorttype');
        $sorttype = empty($sorttype)?0:$sorttype;
        $destPy = $destPy ? $destPy : 'all';
        $pagesize = 10;
        $keyword = Common::remove_xss(Arr::get($_GET,'keyword'));


        $route_array = array(
            'controller' => $this->request->controller(),
            'action' => $this->request->action(),
            'destpy' => $destPy,
            'sorttype' =>$sorttype,
            'attrid' => $attrId,
        );
        //$start_time=microtime(true); //获取程序开始执行的时间

        $out = Model_Article::search_result($route_array,$keyword,$p,$pagesize);
        $pager = Pagination::factory(
            array(

                'current_page' => array('source' => 'route', 'key' => 'p'),
                'view'=>'default/pagination/search',
                'total_items' => $out['total'],
                'items_per_page' => $pagesize,
                'first_page_in_url' => false,
            )
        );
        //配置访问地址 当前控制器方法

        $pager->route_params($route_array);
        $destId = $destPy=='all' ? 0 : DB::select('id')->from('destinations')->where('pinyin','=',$destPy)->execute()->get('id');
        $destId = $destId ? $destId : 0;
        //目的地信息
        $destInfo = array();
        $preDest = array();
        if($destId)
        {
            //$destInfo = ORM::factory('destinations',$destId)->as_array();
            $destInfo = Model_Article::get_dest_info($destId);
            if($p > 1)
            {
                $destInfo['seotitle'] = '第'.$p.'页_'.$destInfo['seotitle'];
            }
            $preDest = Model_Destinations::get_prev_dest($destId);
        }

        $seo_params = array(
            'destpy' => $destPy,
            'attrid' => $attrId,
            'p'=>$p,
            'keyword'=>$keyword
        );
        $chooseitem = Model_Article::get_selected_item($route_array);
        $searchTitle = Model_Article::gen_seotitle($seo_params);
        $this->assign('destid',$destId);
        $this->assign('destinfo',$destInfo);
        $this->assign('predest',$preDest);
        $this->assign('list',$out['list']);
        $this->assign('chooseitem',$chooseitem);
        $this->assign('searchtitle',$searchTitle);
        $this->assign('param',$route_array);
        $this->assign('currentpage',$p);
        $this->assign('pageinfo',$pager);
        $templet = Product::get_use_templet('article_list');
        $templet = $templet ? $templet : 'article/list';
        $this->display($templet);
        //缓存内容
        $content = $this->response->body();
        Common::cache('set',$this->_cache_key,$content);
    }


    public function action_ajax_add_comment()
    {
        if(!$this->request->is_ajax())exit();
        $checkcode = Arr::get($_POST,'checkcode');
        $articleid =intval(Arr::get($_POST,'articleid'));

        $content = Common::remove_xss(Arr::get($_POST,'content'));
        $typeid = intval(Arr::get($_POST,'typeid'));
        $dockid = intval(Arr::get($_POST,'dockid'));

        $checkcode=strtolower($checkcode);
        if(!Captcha::valid($checkcode))
        {
            echo 1; //验证码错误
            exit;
        }
        $memberId = Cookie::get('st_userid') ?  Cookie::get('st_userid') :  '0';
        $m = ORM::factory('comment');
        $m->articleid = $articleid;
        $m->content = $content;
        $m->typeid = $typeid;
        $m->memberid = $memberId;
        $m->dockid = $dockid;
        $m->addtime = time();
        $m->save();
        if($m->saved())
        {
            echo 3;
            exit;
        }
    }










}