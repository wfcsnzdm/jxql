-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015-03-09 17:52:22
-- 服务器版本: 5.5.41-0ubuntu0.14.04.1
-- PHP 版本: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `jxql`
--

-- --------------------------------------------------------

--
-- 表的结构 `administrator`
--

CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `administrator`
--

INSERT INTO `administrator` (`id`, `user_id`, `password`) VALUES
(1, '123', '520aa'),
(2, '00008', '12345'),
(3, '0008', '00');

-- --------------------------------------------------------

--
-- 表的结构 `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `department_id` int(225) NOT NULL,
  `department_name` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

--
-- 转存表中的数据 `info`
--

INSERT INTO `info` (`id`, `department_id`, `department_name`) VALUES
(1, 1, '江西青联'),
(2, 2, '界别工作委员会'),
(3, 4, '主任'),
(4, 6, '副主任'),
(5, 7, '秘书长'),
(6, 8, '副秘书长'),
(7, 9, '科技'),
(8, 10, '教育'),
(9, 11, '政法'),
(10, 12, '公务员'),
(11, 13, '新闻出版'),
(12, 14, '卫生'),
(13, 15, '企业'),
(14, 16, '文体'),
(15, 17, '民族宗教'),
(16, 18, '工交商贸'),
(17, 19, '经管金融'),
(18, 20, '农林牧渔'),
(19, 52, '青少年工作者'),
(20, 5, '地市青联'),
(21, 23, '南昌'),
(22, 24, '九江'),
(23, 25, '景德镇'),
(24, 26, '萍乡'),
(25, 27, '鹰潭'),
(26, 28, '赣州'),
(27, 29, '吉安'),
(28, 30, '上饶'),
(29, 31, '新余'),
(30, 32, '宜春'),
(31, 33, '抚州'),
(32, 34, '市青联主席'),
(33, 35, '市青联秘书长'),
(34, 36, '特邀/港澳台侨-驻外联络处'),
(35, 37, '北京'),
(36, 38, '上海'),
(37, 39, '广东'),
(38, 40, '天津'),
(39, 41, '江苏'),
(40, 42, '福建'),
(41, 43, '香港'),
(42, 44, '澳门'),
(43, 45, '解放军'),
(44, 46, '属地-会员团体'),
(45, 47, '会员团体'),
(46, 48, '省国资委'),
(47, 49, '省属高校'),
(48, 50, '省直机关'),
(49, 51, '省直属单位'),
(50, 53, '主席团'),
(51, 54, '名誉主席'),
(52, 55, '主席'),
(53, 56, '副主席'),
(54, 57, '省青联秘书处'),
(55, 94, '常委'),
(56, 102, '青少年工作者'),
(57, 115, '特邀及解放军'),
(58, 114, '民族宗教'),
(59, 113, '新闻出版'),
(60, 112, '卫生'),
(61, 111, '文体'),
(62, 110, '公务员'),
(63, 109, '政法'),
(64, 108, '工交商贸'),
(65, 107, '企业'),
(66, 106, '经管金融'),
(67, 105, '农林牧渔'),
(68, 104, '教育'),
(69, 103, '科技'),
(70, 116, '港澳台侨');

-- --------------------------------------------------------

--
-- 表的结构 `jioning`
--

CREATE TABLE IF NOT EXISTS `jioning` (
  `r_id` int(225) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `management`
--

CREATE TABLE IF NOT EXISTS `management` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `department_id` int(225) NOT NULL,
  `user_name` varchar(225) NOT NULL,
  `administrator` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `management`
--

INSERT INTO `management` (`id`, `department_id`, `user_name`, `administrator`) VALUES
(1, 1, '叶思哲', '00008'),
(2, 1, '叶思哲', '00008'),
(5, 1, 'admin', '00008'),
(8, 2, 'admin', '00008'),
(9, 57, '叶思哲', '00008'),
(10, 57, '叶思哲', '00008'),
(11, 57, '叶思哲', '00008'),
(12, 102, '叶思哲', '00008'),
(13, 102, '叶思哲', '00008');

-- --------------------------------------------------------

--
-- 表的结构 `release`
--

CREATE TABLE IF NOT EXISTS `release` (
  `id` int(225) NOT NULL AUTO_INCREMENT,
  `theme` varchar(225) NOT NULL,
  `content` varchar(225) NOT NULL,
  `department` varchar(225) NOT NULL,
  `time` int(225) NOT NULL,
  `publishers` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `release`
--

INSERT INTO `release` (`id`, `theme`, `content`, `department`, `time`, `publishers`) VALUES
(1, '测试啊', '这是一个测试', '江西青联', 1422559883, 'sdasd'),
(2, '测试啊2', '这是一个测试2', '江西青联', 1422560277, ''),
(3, 'zhende', 'zhende ', '界别工作委员会', 1425712143, ''),
(4, 'dsa d', 'dsa ', '界别工作委员会', 1425712259, '00008'),
(5, '测试一下', '  真的是测试', '界别工作委员会', 1425714604, '00008');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
