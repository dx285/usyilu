-- 表的结构：sline_skin --
CREATE TABLE `sline_skin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL COMMENT '色系',
  `main_color` varchar(50) NOT NULL COMMENT '站点主背景色',
  `icon_color` varchar(50) NOT NULL COMMENT '图标颜色',
  `line_color` varchar(50) NOT NULL COMMENT '线条名称',
  `font_color` varchar(50) NOT NULL COMMENT '字体颜色',
  `font_hover_color` varchar(50) NOT NULL COMMENT '移入文字颜色',
  `nav_color` varchar(50) NOT NULL COMMENT '导航条颜色',
  `nav_hover_color` varchar(50) NOT NULL COMMENT '移入导航条颜色',
  `footer_level_color` varchar(50) NOT NULL COMMENT '底部分栏颜色',
  `usernav_color` varchar(50) NOT NULL COMMENT '自定义导航底色',
  `is_system` int(1) NOT NULL COMMENT '是否系统预设',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='思途皮肤表';-- <xjx> --

