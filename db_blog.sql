-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2018 at 09:53 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_blog`
--
CREATE DATABASE IF NOT EXISTS `db_blog` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_blog`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'Java'),
(2, 'PHP'),
(3, 'html'),
(4, 'C#'),
(8, 'Jomla'),
(9, 'Helath'),
(10, 'PSD');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `fname`, `lname`, `email`, `body`, `status`, `date`) VALUES
(8, 'Nazmul ', 'Hossain', 'csenazmul96@gmail.com', 'Hello world						\r\n					', 0, '2017-09-02 10:54:04'),
(11, 'nazmul', 'hasan', 'imran@gmail.com', 'sdfsd sdfsd sdf sdf sdf sdf dsf sdf 						\r\n					', 0, '2017-09-02 10:58:10'),
(15, 'Miraz ', 'khan', 'miraz@gmail.com', 'Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.				', 1, '2017-09-03 03:27:11'),
(16, 'Miraz ', 'khan', 'miraz@gmail.com', 'Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.				', 1, '2017-09-03 03:27:51'),
(18, 'Miraz ', 'khan', 'miraz@gmail.com', 'Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.				', 0, '2017-09-03 03:28:57'),
(19, 'Miraz ', 'khan', 'miraz@gmail.com', 'Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.				', 1, '2017-09-03 03:29:13'),
(20, 'Nazmul', 'hasan', 'sanazmul5@gmail.com', 'Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.\r\nClass aptent taciti sociosq rtorque conubia inceptos himaeos.\r\nEum fuisset vol\r\n					', 0, '2017-09-03 03:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE IF NOT EXISTS `tbl_footer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `note` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `note`) VALUES
(1, 'Copyright Training with live project.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE IF NOT EXISTS `tbl_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `name`, `body`) VALUES
(1, 'About Us', '<p><a href="http://www.faceboo.com" target="_blank"><span>About Us Page</span></a></p>\r\n<p><span>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.</span><br /><span>Class aptent taciti sociosq rtorque conubia inceptos himaeos.</span><br /><span>Eum fuisset volumus no, an pri libris nonumes</span></p>\r\n<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>\r\n<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>\r\n<p><span><br /></span></p>'),
(2, ' Privacy ', '<p><span>Privacy Policy</span></p>\r\n<p><span>Policy Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.</span><br /><span>Class aptent taciti sociosq rtorque conubia inceptos himaeos.</span><br /><span>Eum fuisset volumus no, an pri libris nonumes,&nbsp;</span></p>\r\n<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>\r\n<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>\r\n<p><span><br /></span></p>'),
(5, 'Sports', '<p><span>Sports Page</span></p>\r\n<p><span>&nbsp; ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.</span></p>\r\n<p><br />Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.&nbsp;</p>\r\n<p>Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE IF NOT EXISTS `tbl_post` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `cat` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `discription` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `discription`) VALUES
(12, 2, 'Second Heading for PHP programming', '<p>Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>\r\n<p>Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>', 'upload/e92e96dd8b.png', 'Nazmul', 'PHP,Programming, Coding, Best Coding', '2017-08-22 17:35:54', ''),
(13, 3, 'Third Heading for hml programming', '<p>hml Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>', 'upload/88684c58fb.jpg', 'Nazmul', 'hml, Programming, Coding, Best Coding', '2017-08-22 17:47:54', ''),
(14, 4, 'Smart programming for C#', '<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>\r\n<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>', 'upload/9bba1884a0.png', 'Nazmul', 'C#,Programming, Coding, Best Coding', '2017-08-22 17:52:53', ''),
(16, 1, 'java programming is the best of all', '<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>\r\n<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>', 'upload/384c11ecb8.jpg', 'Nazmul', 'Java', '2017-08-22 17:56:18', ''),
(17, 1, 'Most granted programming is java', '<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>\r\n<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>', 'upload/a450ca8d1f.jpg', 'Nazmul', 'Java', '2017-08-22 18:00:04', ''),
(18, 2, 'latest Heading for php', '<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>\r\n<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>', 'upload/94510715ff.jpg', 'Nazmul', 'PHP', '2017-08-22 18:03:30', ''),
(19, 0, 'Eam in quis cessita C#', '<p>&nbsp;</p>\r\n<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>\r\n<p>Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, an pri libris nonumes, labores sensibus deseruisse ei sed. P eum te. At sed quidam accusamus. Quidam detracto vim ad, sed eu alia illum gloriatur. Ne sea tantas, ius ulobortis dissentiunt.Ne sea hinc tantas</p>\r\n<p>Eum fuisset volumus noanpri libris nonumes, labores sensibus deseruisse</p>', 'upload/7c60681397.jpg', 'Nazmul', 'C#', '2017-08-22 18:05:24', ''),
(22, 10, 'PSD logo design', '<p>m in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no, <a href="http://www.faceboo.com">an pri libris nonumes</a>, labores ....</p>\r\n<p><span>m in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.</span><br /><span>Class aptent taciti sociosq rtorque conubia inceptos himaeos.</span><br /><span>Eum fuisset volumus no, an pri libris nonumes, labores ....</span></p>', 'upload/27a5622c9b.png', 'Nazmul', 'PSD,Programming, Coding, Best Coding', '2017-08-27 16:39:38', ''),
(23, 10, 'Photoshop Tutorial', '<p>m in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.<br />Class aptent taciti sociosq rtorque conubia inceptos himaeos.<br />Eum fuisset volumus no,&nbsp;<a href="http://www.faceboo.com/">an pri libris nonumes</a>, labores ....</p>\r\n<p><span>m in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.</span><br /><span>Class aptent taciti sociosq rtorque conubia inceptos himaeos.</span><br /><span>Eum fuisset volumus no, an pri libris nonumes, labores ....</span></p>', 'upload/4fc39bda08.png', 'Razzak', 'PSD, Graphic, Design,Photoshop', '2017-09-03 16:19:53', 'Nice photo shop design, with illustrator Graphic Design. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE IF NOT EXISTS `tbl_social` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `fb` varchar(255) NOT NULL,
  `tw` varchar(255) NOT NULL,
  `ln` varchar(255) NOT NULL,
  `gp` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `fb`, `tw`, `ln`, `gp`) VALUES
(1, 'http://facebook.com/training project', 'http://twitter.com', 'http://linktl.com', 'http://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `role` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `email`, `details`, `role`) VALUES
(1, 'Md.Nazmul Hossain', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'csenazmul96@gmail.com', 'quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.', 1),
(3, 'Raton Kumer Mondal', 'raton', '827ccb0eea8a706c4c34a16891f84e7b', 'raton@gmail.com', 'Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.', 3),
(4, 'Shariful islam', 'shariful', '827ccb0eea8a706c4c34a16891f84e7b', 'shariful.info56@gmail.com', 'Lorem ipsum dolor sit amet, pri harum nusquam ut. Eam in quis cessita pertina cia perseris sed te. Mel esse solet patrioque ne, ea epicuri deserunt malusu noster euismod noluisse ut duo. Nam nullam causae nodans.', 2);

-- --------------------------------------------------------

--
-- Table structure for table `title_slogan`
--

CREATE TABLE IF NOT EXISTS `title_slogan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `title_slogan`
--

INSERT INTO `title_slogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'Training with live project', 'www.trainingwithliveproject.com', 'upload/logo.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
