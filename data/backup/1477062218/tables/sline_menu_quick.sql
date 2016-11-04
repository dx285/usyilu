-- 表的结构：sline_menu_quick --
CREATE TABLE `sline_menu_quick` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID编号',
  `admin_id` int(11) NOT NULL COMMENT '管理员ID',
  `menu_id` varchar(60) NOT NULL COMMENT '菜单编号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='快捷菜单表';-- <xjx> --

