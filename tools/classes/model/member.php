<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 会员管理
 * Class Member
 */
class Model_Member extends ORM
{
    protected $_primary_key = 'mid';

    /**
     * @function 根据mid获取会员信息
     * @param $memberid
     * @return mixed
     */
    public static function get_member_info($memberid)
    {
        $result = DB::select()->from('member')->where('mid', '=', $memberid)->execute()->current();
        return $result;
    }

    /**
     * @function 获取默认会员头像
     * @return string
     */
    public static function member_nopic()
    {
        return $GLOBALS['cfg_public_url'] . 'images/member_nopic.png';
    }

    /**
     * @function 获取会员等级信息
     * @param $memberId
     * @param array $param
     * @return array|string
     */
    public static function member_rank($memberId, $param = array())
    {
        $grade = array('current' => 1);

        $rank = self::member_grade();

        if(!empty($memberId)) {

            $member = DB::select('jifen')->from('member')->where("mid='{$memberId}'")->execute()->current();
            foreach ($rank as $k => $v) {
                $grade['current'] = ++$k;
                if ($member['jifen'] >= $v['begin'] && $member['jifen'] <= $v['end']) {
                    break;
                }
            }
        }
        else
         {
                $grade_id = $param['vr_grade'];
                foreach($rank as $key=>$g)
                {
                    if($grade_id == $g['id'])
                    {
                        $grade = $g;
                        $grade['current'] = $key+1;
                        break;
                    }
                }
         }

        //组合返回数据
        if (isset($param['return']))
        {
            switch ($param['return'])
            {
                case 'current':
                    $data = 'Lv.' . $grade['current'];
                    break;
                case 'rankname':
                    $data = $rank[$grade['current'] - 1]['name'];
                    break;
                default:
                    $data = array('grade' => $rank, 'jifen' => $member['jifen'], 'current' => $grade['current'], 'total' => count($rank));
            }
        }
        return $data;
    }

    /**
     * @function 会员等级规则
     * @return mixed
     */
    public static function member_grade()
    {
        static $grade = null;
        if (is_null($grade))
        {
            $grade = DB::select()->from('member_grade')->order_by('begin', 'asc')->execute()->as_array();
        }
        return $grade;
    }

    ///************************ PC端开始   **********************////


    /**
     * @function 新增注册用户
     * @param $data
     * @return object|string
     * @throws Kohana_Exception
     */
    public static function register($data)
    {
        //数据验证
        //检查账号
        $user = isset($data['mobile']) ? $data['mobile'] : $data['email'];
        $user = self::member_find($user);
        if (!empty($user))
        {
            return __('error_member_exists');
        }
        //添加
        $result = DB::insert('member', array_keys($data))->values(array_values($data))->execute();
        return $result[1] > 0 ? $result : __('error_member_insert');
    }

    /**
     * @function 登录
     * @param $loginname
     * @param $loginpwd
     * @param $hasencode 密码是否已加密
     */
    public static function login($loginname, $loginpwd, $hasencode)
    {

        $user = self::member_find($loginname, $loginpwd, $hasencode);
        if ($user)
        {
            $serectkey = Common::authcode($user['mid'] . '||' . $user['pwd'], '');
            //写登陆信息
            self::write_cookie('st_username', $user['nickname']);
            self::write_cookie('st_userid', $user['mid']);
            self::write_cookie('st_secret', $serectkey);
            self::save_login_time($user['mid']);

        }
        return $user;
    }

    /**
     * @function 退出登录
     */
    public static function login_out()
    {

        Cookie::delete('st_username');
        Cookie::delete('st_userid');
        Cookie::delete('st_secret');
    }

    /**
     * @function 保存登录时间
     * @param $mid
     */
    public static function save_login_time($mid)
    {
        $m = ORM::factory('member', $mid);
        $now = time();
        //登陆送积分
        if (date('Ymd', $m->logintime) < date('Ymd', $now))
        {
            Model_Member_Jifen::refund_login($mid);
        }
        $m->logintime = $now;
        $m->save();

    }


    /**
     * @function 查找用户
     * @param $user
     * @param null $pwd
     * @param string $hasencode
     * @return mixed
     */
    public static function member_find($user, $pwd = null, $hasencode = '')
    {
        $userType = strpos($user, '@') ? 'email' : 'mobile';
        if (!is_null($pwd))
        {
            $pwd = $hasencode ? $pwd : md5($pwd);
        }
        $obj = DB::select()->from('member')->where($userType, '=', $user);
        if ($pwd)
        {
            $obj = $obj->and_where('pwd', '=', $pwd);
        }
        $result = $obj->execute()->current();
        return $result;
    }

    /**
     * @function 根据会员id获取用户信息
     * @param $mid
     * @return array
     */
    public static function get_member_byid($mid)
    {
        if ($mid)
        {
            $memberinfo = DB::select()->from('member')->where('mid', '=', $mid)->execute()->current();
            if (empty($memberinfo['mid']))
            {
                return array();
            }
            $memberinfo['last_logintime'] = Common::mydate('Y-m-d', $memberinfo['logintime']);
            $memberinfo['litpic'] = !empty($memberinfo['litpic']) ? $memberinfo['litpic'] : Common::member_nopic();
            //第三方登陆
            $third = DB::select()->from('member_third')->where("mid={$mid}")->execute()->as_array();
            $memberinfo['third'] = Model_Member_Third::thirdData($third);
            return $memberinfo;
        }

    }

    /**
     * @function 积分处理
     * @param $mid
     * @param $jifen 积分
     * @param int $type 1：使用 2：获取
     * @return object
     */
    public static function operate_jifen($mid, $jifen, $type = 1)
    {
        if (empty($jifen))
        {
            return;
        }
        $jifen = $type == 1 ? -$jifen : $jifen;
        $sql = "UPDATE sline_member SET jifen=jifen+({$jifen}) ";
        $sql .= "WHERE mid={$mid}";
        $row = DB::query(Database::UPDATE, $sql)->execute();
        return $row;
    }

    /**
     * @function 写cookie
     * @param $key
     * @param $value
     */
    public static function write_cookie($key, $value)
    {
        Cookie::set($key, $value, 7600);
    }


    /**
     * @function 判断会员是否存在
     * @param $loginname
     * @return bool
     */
    public static function check_member_exist($loginname)
    {
        if (strpos($loginname, '@'))
        {
            $where = "email='{$loginname}'";
        }
        else
        {
            $where = "mobile='{$loginname}'";
        }
        $result = DB::select()->from('member')->where($where)->execute()->as_array();
        $flag = false;
        if (!empty($result))
        {
            $flag = true;
        }
        return $flag;
    }

    /**
     * @function 检测是否登录
     * @return array
     * @throws Kohana_Exception
     */
    public static function check_login()
    {
        $user = array();
        $secret = Cookie::get('st_secret');
        if (!empty($secret))
        {
            $info = explode('||', Common::authcode($secret));
            if (isset($info[0]) && $info[1])
            {
                $mid = Common::remove_xss($info[0]);
                $upwd = Common::remove_xss($info[1]);

                $model = ORM::factory('member')->where("mid='{$mid}' and pwd='{$upwd}'")->find();
                if (isset($model->mid))
                {
                    $user = $model->as_array();
                }


            }
        }
        return $user;
    }
    ///************************ PC端结束   *********************///

    ///*******************手机端开始  **********************///

    /**
     * @param 写入session
     * @param $member 会员详细信息
     * @param $user 登录账号手机或邮箱
     */
    public static function write_session($member, $user = null)
    {
        //登录送积分
        Model_Member::operate_jifen($member['mid'], $GLOBALS['cfg_login_jifen'], 2);
        Product::add_jifen_log($member['mid'], "登录赠送积分：{$GLOBALS['cfg_login_jifen']}分", $GLOBALS['cfg_login_jifen'], 2);
        if (is_null($user))
        {
            $user = empty($member['email']) ? $member['mobile'] : $member['email'];
        }
        //昵称
        if (empty($member['nickname']) && !empty($user))
        {
            $member['nickname'] = substr_replace($user, '****', floor(strlen($user) / 2) - 2, 4);
        }
        //没有会员图片
        if (empty($member['litpic']))
        {
            $member['litpic'] = Common::member_nopic();
        }
        //登录信息写入seesion
        Common::session('member', array('mid' => $member['mid'], 'nickname' => $member['nickname'], 'litpic' => $member['litpic']));
        self::write_member_cookie($member);
    }

    public static function write_member_cookie($user)
    {

        if ($user)
        {
            //写登陆信息
            self::write_cookie('st_username', $user['nickname']);
            self::write_cookie('st_userid', $user['mid']);
            self::save_login_time($user['mid']);

        }
        return $user;
    }

    ///*******************手机端结束  **********************///


    ///********************后台开始    **********************///
    /*
     * 检查是否存在相同数据
     * */
    public static function checkExist($field, $value, $mid = '')
    {
        $flag = 'true';

        $query = DB::select('mid')->from('member')->where($field, '=', $value);
        // $model = ORM::factory('member')->where($field,'=',$value);
        if (!empty($mid))
        {
            $query->and_where('mid', '!=', $mid);
        }
        else
        {

        }
        $result = $query->execute()->current();
        if ($result['mid'])
        {
            $flag = 'false';
        }
        return $flag;
    }

    //获取消费总额
    public static function get_consume_amount($mid)
    {
        $orderList = DB::query(Database::SELECT, "select * from sline_member_order where memberid='$mid' and (status=2 or status=5)")->execute()->as_array();
        $amount = 0;
        foreach ($orderList as $row)
        {
            $amount += Model_Member_Order::get_payed_amount($row);
        }
        return $amount;
    }


    ///********************后台结束   **********************///


}