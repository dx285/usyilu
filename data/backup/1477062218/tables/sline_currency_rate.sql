-- 表的结构：sline_currency_rate --
CREATE TABLE `sline_currency_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currencycode1` char(20) DEFAULT NULL,
  `currencycode2` char(20) DEFAULT NULL,
  `ratio1` float(255,4) DEFAULT '1.0000',
  `ratio2` float(255,4) DEFAULT '1.0000',
  PRIMARY KEY (`id`),
  UNIQUE KEY `code_union_unique` (`currencycode1`,`currencycode2`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='汇率比率';-- <xjx> --

