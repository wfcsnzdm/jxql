-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015-03-09 18:12:31
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
