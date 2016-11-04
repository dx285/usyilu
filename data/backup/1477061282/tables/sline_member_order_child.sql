-- 表的结构：sline_member_order_child --
CREATE TABLE `sline_member_order_child` (
  ` id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `pid` int(11) DEFAULT NULL COMMENT '父订单ID',
  `ordersn` varchar(255) DEFAULT NULL COMMENT '子订单号',
  `suitid` int(11) DEFAULT NULL COMMENT '套餐ID',
  `title` varchar(255) DEFAULT NULL COMMENT '套餐名称',
  `dingnum` int(11) DEFAULT '0' COMMENT '预订数量',
  `peoplenum` int(11) DEFAULT '0' COMMENT '预订人数可以和dingnum一致',
  `price` float(10,2) DEFAULT '0.00' COMMENT '单价',
  `marketprice` float(10,2) DEFAULT NULL COMMENT '市场价',
  `status` tinyint(255) DEFAULT NULL COMMENT '订单状态',
  `attachinfo` text COMMENT '附加信息',
  `addtime` int(11) DEFAULT NULL COMMENT '生成时间',
  PRIMARY KEY (` id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='子订单表';-- <xjx> --

