-- 表的结构：sline_menu_new --
CREATE TABLE `sline_menu_new` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID编号',
  `pid` int(11) NOT NULL,
  `level` tinyint(4) DEFAULT '1' COMMENT '节点深度',
  `typeid` int(11) DEFAULT NULL COMMENT '分类ID*（即model_id）',
  `title` varchar(60) DEFAULT NULL COMMENT '菜单名称',
  `directory` varchar(60) DEFAULT NULL COMMENT '目录名称',
  `controller` varchar(60) DEFAULT NULL COMMENT '控制器',
  `method` varchar(60) DEFAULT NULL COMMENT '方法',
  `datainfo` varchar(20) DEFAULT NULL COMMENT '产品数据信息（1、订单 2、咨询 3、评论）',
  `isshow` tinyint(1) DEFAULT '1' COMMENT '菜单显示',
  `displayorder` int(11) unsigned DEFAULT '9999' COMMENT '菜单排序',
  `extparams` varchar(255) DEFAULT NULL COMMENT 'extlink:1外部链接地址，extlink:0标准扩展参数',
  `extlink` tinyint(1) DEFAULT '0' COMMENT '外部链接',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8 COMMENT='后台菜单信息表';-- <xjx> --

