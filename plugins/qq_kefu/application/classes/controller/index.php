<?php

/**
 * Class Controller_Index
 */
class Controller_Index extends Stourweb_Controller
{
    //客服配置文件
    private  $_kefu_config_file = NULL;

    private  $_conf = array();
    //初始化设置
    public function before()
    {
        $this->_kefu_config_file = BASEPATH.'/data/config.qq.kefu.php';

        $this->_init_conf();
        parent::before();
    }
    //首页
    public function action_index()
    {
        if ($this->_conf['display'] == 1 && !empty($this->_conf['templet'])) {
            $m = new Model_Qq_Kefu();
            $group = $m->get_qq();
            //全局变量获取

            $glbs = DB::select()->from('sysconfig')->where('webid','=',0)->execute()->as_array();
            $glb=array();
            foreach($glbs as $v)
            {
                $glb[$v['varname']]=$v['value'];
            }
            $this->assign('group', $group);
            $this->assign('conf', $this->_conf);
            $this->assign('Glb', $glb);
            $this->display($this->_conf['templet']);
        }
    }

    //免费客服
    public function action_ajax_add_freekefu()
    {
        $phone=$_POST['phone'];
        if(empty($phone))
        {
            echo json_encode(array('status'=>false,'msg'=>'电话号码不能为空'));
            return;
        }
        if(!preg_match('/^1[123456789]{1}\d{9}$/',$phone))
        {
            echo json_encode(array('status'=>false,'msg'=>'电话号码格式错误空'));
            return;
        }


        $curtime=time();
        $model = ORM::factory('freekefu')->where('phone','=',$phone)->and_where('status','=',0)->find();

        if($model->loaded())
        {
            if($curtime-$model->addtime<30*60)
            {
                echo json_encode(array('status'=>false,'msg'=>'你的请求过于频繁,请稍后重试'));
                return;
            }

        }
        $model->phone=$phone;
        $model->addtime=$curtime;
        $model->ip=Common::get_ip();
        $model->save();
        if($model->saved())
        {
            echo json_encode(array('status'=>true,'msg'=>'感谢你的参与，你的请求已提交成功，我们将稍后与你联系'));
        }
        else
        {
            echo json_encode(array('status'=>false,'msg'=>'提交失败,请重试'));
        }
    }
    /**
     * 初始化参数
     */
    private function _init_conf()
    {
        if(file_exists($this->_kefu_config_file))
        {
            include_once($this->_kefu_config_file);
            $this->_conf['pos'] = $pos;
            $this->_conf['posh'] = $posh;
            $this->_conf['post'] = $post;
            $this->_conf['display'] = $display;
            $this->_conf['phonenum'] = $phonenum;
            $this->_conf['templet'] = 'tpl'.$qqcl;
            $this->_conf['qqcl']=$qqcl;
        }
        else
        {
            exit();
        }
    }

 

  
}