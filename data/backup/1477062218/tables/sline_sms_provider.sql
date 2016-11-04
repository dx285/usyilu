-- 表的结构：sline_sms_provider --
CREATE TABLE `sline_sms_provider` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL COMMENT '短信供应商名称',
  `config_url` varchar(1000) NOT NULL COMMENT '短信接口配置地址',
  `execute_file` varchar(1000) NOT NULL COMMENT '短信发送功能实现程序文件',
  `execute_classname` varchar(1000) NOT NULL COMMENT '短信发送功能实现程序类名',
  `isopen` int(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否开启',
  `exdata` longtext COMMENT '短信接口配置扩展数据',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='短信信息配置表';-- <xjx> --

