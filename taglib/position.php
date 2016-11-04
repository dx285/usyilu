<?php

class Taglib_Position
{
    private $_conf = array();
    private $_column_url = '';

    //最终目的地
    public function nav($parma)
    {
        //var_dump($parma);
        //首页
        $this->_index();
        //栏目
        if (isset($parma['typeid']))
        {
            $this->_column($parma['typeid']);
        }
        //最终目的地
        if (isset($parma['finaldestid']))
        {
            $this->_final_dest($parma['finaldestid']);
        }
        //当前页标题
        if (isset($parma['currentpagetitle']))
        {
            $this->_conf[] = $parma['currentpagetitle'];
        }
        //搜索
        if (isset($parma['searchtitle']) && $parma['searchtitle'])
        {
            $this->_conf[] = sprintf("<span>%s相关搜索结果<span>", Common::remove_xss($parma['searchtitle']));
        }
        echo $this->_render();
    }

    /**
     * @function 首页地址
     * @return $this
     */
    private function _index()
    {
        global $sys_webid;
        if (!$sys_webid > 0)
        {
            //主站
            $obj = DB::select('weburl')->from('weblist')->where('webid', '=', 0)->order_by('id', 'asc');
        }
        else
        {
            //子站
            $obj = DB::select()->from('destinations')->where('id', '=', $sys_webid);
        }
        $result = $obj->execute()->current();
        $this->_conf[] = sprintf('<a href="%s" target="_blank">%s</a>', $result['weburl'], '首页');
        return $this;
    }

    /**
     * @function 当前栏目
     * @return $this
     */
    private function _column($typeid)
    {
        $result = DB::select()->from('model')->where('id', '=', $typeid)->execute()->current();
        if ($result)
        {
            $this->_column_url = $result['correct'] ? $result['correct'] : $result['pinyin'];
            $this->_conf[] = sprintf('<a href="/%s/" target="_blank">%s</a>', $this->_column_url, $result['modulename']);
        }
        return $this;
    }

    /**
     * 最终目的地
     * @param $finaldestid
     * @return $this
     */
    private function _final_dest($finaldestid)
    {
        $final_dest_array = array();
        while (true)
        {
            $result = DB::select('pinyin', 'kindname', 'pid')->from('destinations')->where('id', '=', $finaldestid)->execute()->current();
            if ($result)
            {
                $final_dest_array[] = sprintf('<a href="/%s/%s/" target="_blank">%s</a>', $this->_column_url, $result['pinyin'], $result['kindname']);
                $finaldestid = $result['pid'];
            }
            else
            {
                break;
            }
        }
        $final_dest_array = array_reverse($final_dest_array);
        foreach ($final_dest_array as $v)
        {
            $this->_conf[] = $v;
        }
        return $this;
    }

    /**
     * @function 组合导航
     * @return string
     */
    private function _render()
    {
        return implode('>', $this->_conf);
    }
}