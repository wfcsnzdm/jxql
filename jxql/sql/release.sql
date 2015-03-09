-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015-03-09 18:12:35
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
