-- 表的结构：sline_role_right --
CREATE TABLE `sline_role_right` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `roleid` int(11) DEFAULT NULL COMMENT '角色id',
  `menuid` int(11) DEFAULT NULL COMMENT '菜单id',
  `right` tinyint(1) DEFAULT NULL COMMENT '权限/是否有权限查看菜单',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='角色权限表';-- <xjx> --

