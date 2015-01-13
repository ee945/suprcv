-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-01-12 15:53:36
-- 服务器版本： 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cv`
--

-- --------------------------------------------------------

--
-- 表的结构 `cv_access`
--

CREATE TABLE IF NOT EXISTS `cv_access` (
  `accid` bigint(20) NOT NULL AUTO_INCREMENT,
  `acc_code` varchar(255) DEFAULT NULL,
  `acc_status` int(11) DEFAULT NULL,
  `acc_remark` text,
  `cvid` bigint(20) DEFAULT NULL,
  `userid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`accid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_accesslog`
--

CREATE TABLE IF NOT EXISTS `cv_accesslog` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `acc_time` datetime DEFAULT NULL,
  `acc_ip` varchar(128) DEFAULT NULL,
  `acc_agent` varchar(255) DEFAULT NULL,
  `cvid` bigint(20) DEFAULT NULL,
  `accid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_basic_info`
--

CREATE TABLE IF NOT EXISTS `cv_basic_info` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `info_title` varchar(50) DEFAULT NULL,
  `info_content` varchar(50) DEFAULT NULL,
  `info_order` int(11) DEFAULT NULL,
  `cvid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_edu`
--

CREATE TABLE IF NOT EXISTS `cv_edu` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `edu_school` varchar(50) DEFAULT NULL,
  `edu_major` varchar(50) DEFAULT NULL,
  `edu_start` varchar(10) DEFAULT NULL,
  `edu_end` varchar(10) DEFAULT NULL,
  `edu_descp` text,
  `cvid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_main`
--

CREATE TABLE IF NOT EXISTS `cv_main` (
  `cvid` bigint(20) NOT NULL AUTO_INCREMENT,
  `cv_name` varchar(50) DEFAULT NULL,
  `cv_user_name` varchar(50) DEFAULT NULL,
  `cv_user_title` varchar(50) DEFAULT NULL,
  `cv_user_sex` varchar(50) DEFAULT NULL,
  `cv_user_birth` date DEFAULT NULL,
  `cv_user_mail` varchar(100) DEFAULT NULL,
  `cv_descp` text,
  `cv_user_photo` varchar(255) DEFAULT NULL,
  `cv_map` text,
  `cv_contact` text,
  `cv_remark` text,
  `cv_lang` varchar(50) DEFAULT NULL,
  `userid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`cvid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_message`
--

CREATE TABLE IF NOT EXISTS `cv_message` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `msg_uname` varchar(50) DEFAULT NULL,
  `msg_email` varchar(100) DEFAULT NULL,
  `msg_subject` varchar(255) DEFAULT NULL,
  `msg_content` text,
  `msg_time` datetime DEFAULT NULL,
  `msg_ip` varchar(128) DEFAULT NULL,
  `accid` bigint(20) DEFAULT NULL,
  `cvid` bigint(20) DEFAULT NULL,
  `userid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_portfolio`
--

CREATE TABLE IF NOT EXISTS `cv_portfolio` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `pflo_name` varchar(50) DEFAULT NULL,
  `pflo_title` varchar(50) DEFAULT NULL,
  `pflo_descp` text,
  `pflo_imgurl` varchar(255) DEFAULT NULL,
  `pflo_link` varchar(255) DEFAULT NULL,
  `pflo_group` varchar(50) DEFAULT NULL,
  `cvid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_refer`
--

CREATE TABLE IF NOT EXISTS `cv_refer` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `ref_name` varchar(50) DEFAULT NULL,
  `ref_title` varchar(50) DEFAULT NULL,
  `ref_descp` text,
  `ref_icon` varchar(50) DEFAULT NULL,
  `cvid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_service`
--

CREATE TABLE IF NOT EXISTS `cv_service` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `serv_name` varchar(50) DEFAULT NULL,
  `serv_descp` text,
  `serv_icon` varchar(50) DEFAULT NULL,
  `cvid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_skill`
--

CREATE TABLE IF NOT EXISTS `cv_skill` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `skill_name` varchar(50) DEFAULT NULL,
  `skill_value` int(11) DEFAULT NULL,
  `skill_descp` text,
  `skill_order` int(11) DEFAULT NULL,
  `skill_group` varchar(50) DEFAULT NULL,
  `cvid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_social`
--

CREATE TABLE IF NOT EXISTS `cv_social` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `soc_name` varchar(50) DEFAULT NULL,
  `soc_title` varchar(50) DEFAULT NULL,
  `soc_link` varchar(255) DEFAULT NULL,
  `soc_icon` varchar(50) DEFAULT NULL,
  `cvid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_user`
--

CREATE TABLE IF NOT EXISTS `cv_user` (
  `userid` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `user_passwd` varchar(255) DEFAULT NULL,
  `user_nick` varchar(50) DEFAULT NULL,
  `user_level` int(11) DEFAULT NULL,
  `user_remark` text,
  `reg_time` datetime DEFAULT NULL,
  `last_time` datetime DEFAULT NULL,
  `last_ip` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `cv_work`
--

CREATE TABLE IF NOT EXISTS `cv_work` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `work_company` varchar(50) DEFAULT NULL,
  `work_title` varchar(50) DEFAULT NULL,
  `work_start` varchar(10) DEFAULT NULL,
  `work_end` varchar(10) DEFAULT NULL,
  `work_descp` text,
  `cvid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
