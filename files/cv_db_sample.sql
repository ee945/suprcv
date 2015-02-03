-- phpMyAdmin SQL Dump
-- version 4.1.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2015-01-12 15:49:20
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cv_access`
--

INSERT INTO `cv_access` (`accid`, `acc_code`, `acc_status`, `acc_remark`, `cvid`, `userid`) VALUES
(1, 'SAMPLE', 1, 'this is sample access code for everyone', 1, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cv_basic_info`
--

INSERT INTO `cv_basic_info` (`id`, `info_title`, `info_content`, `info_order`, `cvid`) VALUES
(1, 'address', '121 King St, Melbourne VIC', 1, 1),
(2, 'phone', '012-3456-7890', 2, 1),
(3, 'website', 'www.themeforest.net', 3, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cv_edu`
--

INSERT INTO `cv_edu` (`id`, `edu_school`, `edu_major`, `edu_start`, `edu_end`, `edu_descp`, `cvid`) VALUES
(1, 'Academy of Art University', 'Web Design & New Media', '2001', '2004', 'Academy of Art University''s School of Web Design & New Media is the intersection between traditional design and new technologies.', 1),
(2, 'IT Technical Institute', 'Information technology', '2005', '2008', 'Information technology (IT) workers can be found in many types of organizations. According to the U.S. Department of Labor, "In the modern workplace, it is imperative that Information Technology (IT) works both effectively and reliably', 1),
(3, 'Web Design School', 'Web Design', '2009', '2012', 'This is Photoshop''s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cv_main`
--

INSERT INTO `cv_main` (`cvid`, `cv_name`, `cv_user_name`, `cv_user_title`, `cv_user_sex`, `cv_user_birth`, `cv_user_mail`, `cv_descp`, `cv_user_photo`, `cv_map`, `cv_contact`, `cv_remark`, `cv_lang`, `userid`) VALUES
(1, 'sample', 'Robb Armstrong', 'Designer and Front-end Developer', 'male', '1976-09-06', 'info@yourdomain.com', 'I have ten years experience as a web/interface designer. I have a love of clean, elegant styling, and I have lots of experience in the production of CSS and (X)HTML for modern websites. I have a reasonable grasp of using JavaScript frameworks, specifically jQuery.', 'profile-avatar.png', NULL, 'This is Photoshop''s version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.<ul><li><i class="fa fa-home"></i> lorem ipsum street</li><li><i class="fa fa-phone"></i> +399 (500) 321 9548</li><li><i class="fa fa-envelope"></i> info@domain.com</li></ul>', 'The sample vcard: Robb Armstrong', 'en', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `cv_portfolio`
--

INSERT INTO `cv_portfolio` (`id`, `pflo_name`, `pflo_title`, `pflo_descp`, `pflo_imgurl`, `pflo_link`, `pflo_group`, `cvid`) VALUES
(1, 'Cool App Design', 'branding, logo', 'Example 1', '1.jpg', 'http://localhost/cv/resources/media/1/portfolio/1-big.jpg', 'Web Design', 1),
(2, 'Cool App Design', 'branding, logo', 'Sample 2', '2.jpg', 'https://www.youtube.com/watch?v=L9szn1QQfas', 'Illustration', 1),
(3, 'Cool App Design', 'branding, logo', 'i''m Number 3', '3.jpg', 'http://vimeo.com/71071717', 'Web Design', 1),
(4, 'Cool App Design', 'branding, logo', 'Example 4', '4.jpg', 'http://localhost/cv/resources/media/1/portfolio/1-big.jpg', 'iOS App UI', 1),
(5, 'Cool App Design', 'branding, logo', 'Sample 5', '5.jpg', 'http://localhost/cv/resources/media/1/portfolio/1-big.jpg', 'iOS App UI', 1),
(6, 'Cool App Design', 'branding, logo', 'Lorem ipsum 6', '6.jpg', 'http://localhost/cv/resources/media/1/portfolio/1-big.jpg', 'Illustration', 1),
(7, 'Cool App Design', 'branding, logo', 'Example 7', '7.jpg', 'http://localhost/cv/resources/media/1/portfolio/1-big.jpg', 'Web Design', 1),
(8, 'Cool App Design', 'branding, logo', 'Sample 8', '8.jpg', 'http://localhost/cv/resources/media/1/portfolio/1-big.jpg', 'iOS App UI', 1),
(9, 'Cool App Design', 'branding, logo', 'Project 9', '9.jpg', 'http://localhost/cv/resources/media/1/portfolio/1-big.jpg', 'Web Design', 1),
(10, 'Cool App Design', 'branding, logo', 'Example 10', '10.jpg', 'http://localhost/cv/resources/media/1/portfolio/1-big.jpg', 'Illustration', 1),
(11, 'Cool App Design', 'branding, logo', 'Item 11', '11.jpg', 'http://localhost/cv/resources/media/1/portfolio/1-big.jpg', 'App Icons', 1),
(12, 'Cool App Design', 'branding, logo', 'Sample 12', '12.jpg', 'http://localhost/cv/resources/media/1/portfolio/1-big.jpg', 'iOS App UI', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `cv_service`
--

INSERT INTO `cv_service` (`id`, `serv_name`, `serv_descp`, `serv_icon`, `cvid`) VALUES
(1, 'Design', NULL, 'fa fa-cloud', 1),
(2, 'Coding', NULL, 'fa fa-smile-o', 1),
(3, 'Responsive', NULL, 'fa fa-desktop', 1),
(4, 'Planing', NULL, 'fa fa-text-width', 1),
(5, 'Wordpress', NULL, 'fa fa-comment', 1),
(6, 'Photography', NULL, 'fa fa-picture-o', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `cv_skill`
--

INSERT INTO `cv_skill` (`id`, `skill_name`, `skill_value`, `skill_descp`, `skill_order`, `skill_group`, `cvid`) VALUES
(1, 'Wordpress Development', 71, NULL, 1, 'Skills', 1),
(2, 'Photoshop', 85, NULL, 2, 'Skills', 1),
(3, 'HTML5/CSS3', 76, NULL, 3, 'Skills', 1),
(4, 'Ruby on Rails', 53, NULL, 4, 'Skills', 1),
(5, 'Social Marketing', 69, NULL, 5, 'Skills', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `cv_social`
--

INSERT INTO `cv_social` (`id`, `soc_name`, `soc_title`, `soc_link`, `soc_icon`, `cvid`) VALUES
(1, 'facebook', NULL, '#', 'fa fa-facebook', 1),
(2, 'twitter', NULL, '#', 'fa fa-twitter', 1),
(3, 'dribbble', NULL, '#', 'fa fa-dribbble', 1),
(4, 'pinterest', NULL, '#', 'fa fa-pinterest', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `cv_user`
--

INSERT INTO `cv_user` (`userid`, `user_name`, `user_passwd`, `user_nick`, `user_level`, `user_remark`, `reg_time`, `last_time`, `last_ip`) VALUES
(1, 'admin', 'aa18a0b424b87c282189c7c895e25220', 'admin', 1, 'The First User: admin', '2015-01-12 19:45:00', '2015-01-12 19:45:00', '127.0.0.1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cv_work`
--

INSERT INTO `cv_work` (`id`, `work_company`, `work_title`, `work_start`, `work_end`, `work_descp`, `cvid`) VALUES
(1, 'Graphic River', 'Designer', '2001', '2004', 'This is Photoshop''s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.', 1),
(2, 'Video Hive', 'Designer', '2005', '2008', 'This is Photoshop''s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit.', 1),
(3, 'Themeforest', 'Designer', '2009', '2014', 'This is Photoshop''s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
