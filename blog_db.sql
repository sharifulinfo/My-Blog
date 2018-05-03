-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2018 at 07:39 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog_db`
--
CREATE DATABASE IF NOT EXISTS `blog_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog_db`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bg`
--

CREATE TABLE IF NOT EXISTS `tbl_bg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bg_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `cat_name`) VALUES
(1, 'Java'),
(2, 'Php'),
(3, 'CSS'),
(4, 'HTML'),
(5, 'Education'),
(8, 'C#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(150) NOT NULL,
  `lastname` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `messagebody` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `firstname`, `lastname`, `email`, `messagebody`, `status`, `date`) VALUES
(7, 'Nazmul', 'Hussain', 'csenazmul96@gmail.com', 'Tji kir korishnk kahu laun.a Tji kir korishnk kahu laun.a Tji kir korishnk kahu laun.a Tji kir korishnk kahu laun.a Tji kir korishnk kahu laun.a Tji kir korishnk kahu laun.a Tji kir korishnk kahu laun.a Tji kir korishnk kahu laun.a Tji kir korishnk kahu laun.a Tji kir korishnk kahu laun.a', 0, '2017-08-15 16:44:08'),
(11, 'Shariful', 'Islam', 'shariful.info56@gmail.com', 'orgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We', 0, '2017-08-15 17:58:42'),
(12, 'Rofiq', 'Khan', 'rofiq@gmail.com', 'orgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We', 0, '2017-08-15 17:59:44'),
(13, 'Hamid', 'Kumer', 'kumer@gmail.com', 'orgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We', 1, '2017-08-15 18:00:01'),
(14, 'Shariful', 'Islam', 'SHfula@gmail.com', 'asdfh \r\naf asfh lakdf a#a f\r\nasf asdfhiasfd\r\nasdf iasfdasdfasd\r\nfa\r\nsdfa\r\nsdfasldfh aposdifuh paisodufh apidfohadsfhaiusdhfiaushdfoiasuhdfoiuahsdfiuahsdfoihasoidufhaiushdfasdf', 0, '2017-09-07 04:19:15'),
(15, 'Shariful', 'Islam', 'SHfula@gmail.com', 'asdfh \r\naf asfh lakdf a#a f\r\nasf asdfhiasfd\r\nasdf iasfdasdfasd\r\nfa\r\nsdfa\r\nsdfasldfh aposdifuh paisodufh apidfohadsfhaiusdhfiaushdfoiasuhdfoiuahsdfiuahsdfoihasoidufhaiushdfasdf', 1, '2017-09-07 04:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_copyright`
--

CREATE TABLE IF NOT EXISTS `tbl_copyright` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `copy_text` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_copyright`
--

INSERT INTO `tbl_copyright` (`id`, `copy_text`) VALUES
(1, 'Copyright Right Reserve CPSIt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logo`
--

CREATE TABLE IF NOT EXISTS `tbl_logo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `slogan` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_logo`
--

INSERT INTO `tbl_logo` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'My Website title', 'We care your code..', 'logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE IF NOT EXISTS `tbl_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(255) NOT NULL,
  `page_body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `page_name`, `page_body`) VALUES
(4, 'DMCA', '<p><span>We learning<em><strong> DMCA</strong></em> prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java...</span></p>\r\n<p><span>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java...</span><span>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java...</span></p>\r\n<p><span>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java...</span></p>'),
(5, 'Protfolio', '<p><span>We learning <em><strong>Protfollio</strong></em> prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java...</span></p>\r\n<p><span>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java...</span></p>\r\n<p>&nbsp;</p>\r\n<p><span>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java...</span>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java...</p>'),
(6, 'About Us', '<p>About us..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE IF NOT EXISTS `tbl_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `tags` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `meta_des` varchar(255) NOT NULL,
  `userid` int(25) NOT NULL,
  `publish` varchar(8) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `meta_des`, `userid`, `publish`) VALUES
(5, 2, 'PHP Programming', '<p>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.</p>\r\n<p>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We PHP Here prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.</p>\r\n<p>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.</p>', '16fd240537.png', 'Saiful Islam', 'PHP Code', '2017-08-14 07:36:56', 'FOR PHP Codding here..', 1, '1'),
(8, 2, 'PHP Learning', '<p>We learning phpprorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.</p>\r\n<p>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We PHP Here prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.</p>\r\n<p>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.</p>', '0e963f7e9e.png', 'Saiful Islam', 'PHP , PHP Tutorial , PHP Codding', '2017-08-14 18:21:06', 'FOR PHP Codding here..also the esey code', 1, '0'),
(9, 1, 'Java Programming', '<p>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.</p>\r\n<p>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We PHP Here prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.</p>\r\n<p>We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.</p>', '481a5b34ed.png', 'Nazmul Hasan', 'Java,Code', '2017-08-14 18:21:35', 'FOR Java  Codding here..', 0, '0'),
(11, 1, 'à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¶à¦¿à¦–à¦¬', '<p><span style="font-size: large;">à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤</span></p>\r\n<p><span style="font-size: large;">à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤</span></p>\r\n<p><span style="font-size: large;">à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤</span></p>\r\n<p><span style="font-size: large;">à¦œà¦¾à¦­à¦¾ à¦à¦•à¦Ÿà¦¾ à¦œà¦°à§à¦°à¦¿ à¦²à§à¦¯à¦¾à¦™à§à¦—à§à§Ÿà§‡à¦œà¥¤ à¦†à¦œ à¦†à¦®à¦¿ à¦†à¦ªà¦¨à¦¾à¦¦à§‡à¦° à¦¶à¦¿à¦–à¦¾à¦¬ à¦•à¦¿à¦­à¦¾à¦¬à§‡ à¦œà¦¾à¦­à¦¾ à¦¨à¦¿à§Ÿà§‡ à¦•à¦¾à¦œ à¦•à¦°à¦¬à§‡à¦¨ à¥¤</span></p>\r\n<p><span style="font-size: large;">à¦¡à¦¾à¦‰à¦¨à¦²à§‹à¦¡ à¦²à¦¿à¦‚à¦•</span></p>', '331752b7fb.png', 'à¦¶à¦¾à¦°à¦¿à¦«à§à¦² à¦‡à¦¸à¦²à¦¾à¦®', 'à¦œà¦¾à¦­à¦¾', '2017-08-14 18:29:20', 'The Java here...', 0, '0'),
(12, 1, 'Java Learning Here', '<p>Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.</p>\r\n<p>Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.Here is Java code to go.</p>', '2bfc39894e.png', 'shariful islam', 'Java , Code , Fremwork,', '2017-08-15 18:44:45', 'Here is Java code to go.', 14, '0'),
(13, 1, 'Tumi keno', '<p>fasdf a;sdf a;lks f;aosdf ;aosdifj ;oasdj saod f;oasdj f;aosdhf ;aosd faosdj faos f;klasdhf ;kalsdfh l;askdfh ;asdkl ;lasdfj ;lasdfj ;alsdfkj ;lasdkfj ;aklsdf ;asdfh ;lkas f;sadjf;la f;okahs df;koasdhf ;ashd f;asdfasefda asdf as asdf asdf adsf asd</p>', 'f2de07d8b6.jpg', 'admin', 'Java', '2017-09-07 14:53:13', 'Java Programming', 1, '0'),
(14, 8, 'Ki re Ki khobor', '<p>asfdasd gamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java...</p>', 'ebbe93ac34.jpg', 'Nazmul', 'c Programming', '2017-09-07 14:55:02', 'c Programming', 14, '1'),
(15, 2, 'Try Korsi', '<p>Pari r pari na rning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming. We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We learning Java prorgamming.We</p>', '442e14e831.png', 'admin', 'Php ', '2017-09-08 18:28:33', 'Programming.. PHP', 1, '1'),
(16, 5, 'Clinical Service', '<p>Surjer Hashi Clinic is the most one of the Health Service Provider in Bangladesh. It''s increasing day by day. Al most 50 years is the foundation of SHC clinic.</p>\r\n<p>The above picture is taken from SHC Nirala. Where the Counsellor Maloti Mandal provide a service on her customers.</p>\r\n<p>The Picture captured by Shariful islam..</p>\r\n<p>Thanks.</p>', 'cb64383820.jpg', 'editor', 'Service, Education', '2018-02-12 09:38:35', 'Surjer Hashi Clinic is the most one of the Health Service Provider in Bangladesh. It''s increasing day by day. Al most 50 years is the foundation of SHC clinic. ', 17, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE IF NOT EXISTS `tbl_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slide_img` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `slide_img`) VALUES
(13, 'Aowesome Bangladesh Picture will be go here..', '750bca28d3.jpg'),
(14, 'Green Slider will be go here...', '287fd8186f.jpg'),
(15, 'Colorful Slider will be go here...', 'c761f0b100.jpg'),
(16, 'My Favarate Location will be go here...', 'ba8e39619d.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE IF NOT EXISTS `tbl_social` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fb` varchar(200) NOT NULL,
  `tw` varchar(200) NOT NULL,
  `li` varchar(200) NOT NULL,
  `gp` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `fb`, `tw`, `li`, `gp`) VALUES
(1, 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.linkedIn.com', 'http://www.googleplus.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theme`
--

CREATE TABLE IF NOT EXISTS `tbl_theme` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theme` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_theme`
--

INSERT INTO `tbl_theme` (`id`, `theme`) VALUES
(1, 'default');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `role` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `email`, `details`, `role`) VALUES
(1, 'SHARIFUL ISLAM', 'admin', 'd5ca85ffabd786e280c0d92913e1bbe0', 'shariful.info55@gmail.com', '<p>Hi there, I am Shariful Islam..</p>', '0'),
(14, '', 'Nazmul', '827ccb0eea8a706c4c34a16891f84e7b', '', '', '1'),
(15, '', 'Robi', 'caf1a3dfb505ffed0d024130f58c5cfa', '', '', '2'),
(16, '', 'amin', '8ea53cae0f83a7fd9bba35fec44a03eb', 'amin@gmail.com', '', '1'),
(17, 'Kamrul Islam', 'editor', '202cb962ac59075b964b07152d234b70', 'editor@gmail.com', '', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
