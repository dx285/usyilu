-- 表的结构：sline_app --
CREATE TABLE `sline_app` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '应用编号',
  `number` varchar(50) NOT NULL COMMENT '产品序列号',
  `productcode` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1' COMMENT '是否启用',
  `is_upgrade` tinyint(1) DEFAULT '1' COMMENT '应用是否启用升级',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='应用安装信息表\r\n';-- <xjx> --

