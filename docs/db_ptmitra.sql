-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2014 at 12:57 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ptmitra`
--
CREATE DATABASE IF NOT EXISTS `db_ptmitra` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_ptmitra`;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activityValue` varchar(100) DEFAULT NULL,
  `n_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `activityValue`, `n_status`) VALUES
(1, 'surf', 1),
(2, 'welcome', 1),
(3, 'article', 1),
(4, 'register', 1),
(5, 'share', 1);

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `activityId` int(11) NOT NULL,
  `activityDesc` text NOT NULL,
  `source` varchar(20) NOT NULL,
  `datetimes` datetime NOT NULL,
  `n_status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `userid`, `activityId`, `activityDesc`, `source`, `datetimes`, `n_status`) VALUES
(1, 10068, 1, 'home', '127.0.0.1', '2014-08-20 10:58:34', 1),
(2, 10068, 1, 'home', '127.0.0.1', '2014-08-20 10:58:59', 1),
(3, 10068, 2, 'login success', '127.0.0.1', '2014-08-20 11:09:09', 1),
(4, 10068, 2, 'login success', '127.0.0.1', '2014-08-20 11:12:23', 1),
(5, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-20 11:16:18', 1),
(6, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-20 11:16:43', 1),
(7, 10068, 2, 'login success', '127.0.0.1', '2014-08-20 16:36:09', 1),
(8, 10068, 2, 'login success', '127.0.0.1', '2014-08-20 17:16:03', 1),
(9, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-20 17:32:44', 1),
(10, 10068, 2, 'login success', '127.0.0.1', '2014-08-20 17:33:55', 1),
(11, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-20 17:33:57', 1),
(12, 10068, 2, 'login success', '127.0.0.1', '2014-08-20 17:34:29', 1),
(13, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-20 17:34:55', 1),
(14, 10068, 2, 'login success', '127.0.0.1', '2014-08-21 17:48:31', 1),
(15, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 17:48:32', 1),
(16, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 17:48:36', 1),
(17, 10068, 2, 'login success', '127.0.0.1', '2014-08-21 20:16:56', 1),
(18, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:16:58', 1),
(19, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 20:17:01', 1),
(20, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 20:35:19', 1),
(21, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:35:22', 1),
(22, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:35:29', 1),
(23, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:39:21', 1),
(24, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:40:39', 1),
(25, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:45:51', 1),
(26, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 20:46:01', 1),
(27, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 20:48:13', 1),
(28, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:48:14', 1),
(29, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:52:40', 1),
(30, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:53:47', 1),
(31, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:53:57', 1),
(32, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:55:24', 1),
(33, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:55:31', 1),
(34, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:56:27', 1),
(35, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:57:07', 1),
(36, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:57:13', 1),
(37, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:57:40', 1),
(38, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:58:17', 1),
(39, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 20:58:55', 1),
(40, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 21:02:02', 1),
(41, 10069, 2, 'login success', '127.0.0.1', '2014-08-21 21:15:51', 1),
(42, 10068, 2, 'login success', '127.0.0.1', '2014-08-21 21:47:10', 1),
(43, 10068, 1, 'pilih frame', '127.0.0.1', '2014-08-21 21:47:12', 1),
(44, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 21:47:17', 1),
(45, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 21:52:44', 1),
(46, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 21:53:11', 1),
(47, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 21:55:04', 1),
(48, 10068, 1, 'upload foto', '127.0.0.1', '2014-08-21 21:55:07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_member`
--

CREATE TABLE IF NOT EXISTS `admin_member` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `name` varchar(46) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(46) DEFAULT NULL,
  `salt` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `n_status` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_member`
--

INSERT INTO `admin_member` (`id`, `name`, `nickname`, `email`, `register_date`, `username`, `salt`, `password`, `n_status`) VALUES
(1, 'admin', 'admin', 'admin@example.com', '2014-08-07 22:56:36', 'admin', 'codekir v3.0', 'b2e982d12c95911b6abeacad24e256ff3fa47fdb', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitra_category`
--

CREATE TABLE IF NOT EXISTS `mitra_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(200) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `relation` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `n_status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mitra_category`
--

INSERT INTO `mitra_category` (`id`, `category_name`, `description`, `image`, `relation`, `create_date`, `n_status`) VALUES
(1, 'IT', 'Dunia teknologi', NULL, NULL, '2014-07-25 12:23:11', 1),
(2, 'Ekonomi', 'Dunia Ekonomi', NULL, NULL, '2014-07-25 12:23:11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitra_child`
--

CREATE TABLE IF NOT EXISTS `mitra_child` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL COMMENT 'parent id',
  `name` varchar(200) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `n_status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `mitra_child`
--

INSERT INTO `mitra_child` (`id`, `userid`, `name`, `birthdate`, `n_status`) VALUES
(4, 10044, 'aaaa', '2014-08-01', 1),
(5, 10044, 'bbbb', '2014-08-04', 1),
(6, 10068, 'aa', '2014-08-01', 1),
(7, 10068, 'bb', '2014-08-02', 1),
(8, 10068, 'ccc', '2014-08-04', 1),
(9, 10069, 's', '2014-08-20', 1),
(10, 10069, 's', '2014-08-20', 1),
(11, 10069, 's', '2014-08-13', 1),
(12, 10068, 'ovvvv', '2014-08-11', 1),
(13, 10069, 'aaaa', '2014-08-22', 1),
(14, 10070, 'werwer', '2014-08-20', 1),
(15, 10071, 'sdcs', '2014-08-05', 1),
(16, 10072, 'cassa', '2014-08-05', 1),
(17, 10071, 'dsada', '2014-08-11', 1),
(18, 10071, 'adsa', '2014-09-01', 1),
(19, 10071, 'e', '2014-09-02', 1),
(20, 10075, 'Iman', '2014-09-16', 1),
(21, 10078, 'casac', '2014-09-01', 1),
(22, 10079, 'sdadsa', '2014-09-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitra_member_interest`
--

CREATE TABLE IF NOT EXISTS `mitra_member_interest` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL DEFAULT '0',
  `category_id` varchar(100) DEFAULT NULL,
  `date_join` varchar(300) NOT NULL,
  `n_status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mitra_member_interest`
--

INSERT INTO `mitra_member_interest` (`id`, `userid`, `category_id`, `date_join`, `n_status`) VALUES
(1, 10043, '1,2', '2014-07-25 17:59:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitra_news_content`
--

CREATE TABLE IF NOT EXISTS `mitra_news_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `brief` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `thumbnail_image` varchar(200) NOT NULL,
  `slider_image` varchar(200) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `articleType` int(11) NOT NULL,
  `url` varchar(200) NOT NULL,
  `sourceurl` varchar(100) NOT NULL,
  `file` varchar(200) NOT NULL,
  `created_date` datetime NOT NULL,
  `expired_date` datetime NOT NULL,
  `posted_date` datetime NOT NULL,
  `fromwho` int(11) NOT NULL DEFAULT '0' COMMENT '0:web or admin ;1:user ;2:pages',
  `filesize` int(11) NOT NULL,
  `can_save` int(11) NOT NULL,
  `tags` text NOT NULL COMMENT 'format serialize tags',
  `authorid` int(11) NOT NULL,
  `n_status` int(11) NOT NULL DEFAULT '0',
  `topcontent` int(11) NOT NULL DEFAULT '0' COMMENT '0;standart;1:featured;2:review;3:interview',
  PRIMARY KEY (`id`),
  KEY `title` (`title`),
  KEY `categoryid` (`categoryid`),
  KEY `created_date` (`created_date`),
  KEY `posted_date` (`posted_date`),
  KEY `n_status` (`n_status`),
  KEY `articleTypeID` (`articleType`),
  KEY `image` (`image`),
  KEY `parentID` (`parentid`),
  KEY `lid` (`lid`),
  KEY `online` (`fromwho`),
  KEY `expired_date` (`expired_date`),
  KEY `url` (`url`),
  KEY `aid` (`authorid`),
  KEY `file` (`file`),
  KEY `slider_image` (`slider_image`),
  KEY `sourceurl` (`filesize`),
  KEY `thumbnail_image` (`thumbnail_image`),
  KEY `topcontent` (`topcontent`),
  KEY `sourceurl_2` (`sourceurl`),
  KEY `can_save` (`can_save`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `mitra_news_content`
--

INSERT INTO `mitra_news_content` (`id`, `parentid`, `lid`, `title`, `brief`, `content`, `image`, `thumbnail_image`, `slider_image`, `categoryid`, `articleType`, `url`, `sourceurl`, `file`, `created_date`, `expired_date`, `posted_date`, `fromwho`, `filesize`, `can_save`, `tags`, `authorid`, `n_status`, `topcontent`) VALUES
(2, 0, 0, '2 Tips si kecil tidur nyenyak hingga lelap dan lahap sampai selamanya', '', '&lt;span class=&quot;brief&quot;&gt;Usia Balita merupakan periode emas tumbuh kembang Si Kecil. Untuk mendukung pertumbuhansi kecil secara&lt;/span&gt;', '1d15a439732ff4756b0ea121e05ffa81.jpg', '', '', 0, 0, '', '', 'http://localhost/nestle/nestle/public_assets/1d15a439732ff4756b0ea121e05ffa81.jpg', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:25', 0, 0, 0, '', 1, 1, 0),
(3, 0, 0, '3 Tips si kecil tidur nyenyak hingga lelap dan lahap sampai selamanya', '', '&lt;span class=&quot;brief&quot;&gt;Usia Balita merupakan periode emas tumbuh kembang Si Kecil. Untuk mendukung pertumbuhansi kecil secara&lt;/span&gt;', '83badbf45943ed06a978e79baf77224a.jpg', '', '', 0, 0, '', '', 'http://localhost/nestle/nestle/public_assets/83badbf45943ed06a978e79baf77224a.jpg', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:33', 0, 0, 0, '', 1, 1, 0),
(4, 0, 0, '4 Tips si kecil tidur nyenyak hingga lelap dan lahap sampai selamanya', '', '&lt;span class=&quot;brief&quot;&gt;Usia Balita merupakan periode emas tumbuh kembang Si Kecil. Untuk mendukung pertumbuhansi kecil secara&lt;/span&gt;', 'db5086d7fa346198edea68b2d72f0d1f.jpg', '', '', 0, 0, '', '', 'http://localhost/nestle/nestle/public_assets/db5086d7fa346198edea68b2d72f0d1f.jpg', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:41', 0, 0, 0, '', 1, 1, 0),
(5, 0, 1, 'partner', 'Advanced Geosciences, Inc., Austin, TX, USA', '<ul>\r\n    <li>\r\n       OVERHOUSER Magnetometer/Gradiometer\r\n    </li>\r\n    <li>\r\n       SUPERGRADIO Meter Earthquake Prediction Instrumentation\r\n    </li>\r\n    <li>\r\n       UEROMAG Observatory Volcanology\r\nRadiaMeter\r\n    </li>\r\n    <li>\r\n       POTASSIUM Optically Pumped K-Mag/Grad\r\n    </li>\r\n    <li>\r\n       AIRBORNE SYSTEM Potassium - SuperSenser\r\n    </li>\r\n</ul>', 'assets/images/partner/agi.jpg', '', '', 1, 0, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(6, 0, 1, 'partner', 'Bartington Instruments, Ltd., Oxford OX28 4FE, UK', '<ul>\r\n    <li>\r\n       OVERHOUSER Magnetometer/Gradiometer\r\n    </li>\r\n    <li>\r\n       SUPERGRADIO Meter Earthquake Prediction Instrumentation\r\n    </li>\r\n    <li>\r\n       UEROMAG Observatory Volcanology\r\nRadiaMeter\r\n    </li>\r\n\r\n</ul>', 'assets/images/partner/Bartington.gif', '', '', 1, 0, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(7, 0, 0, 'DMT', 'DMT GmbH., Essen, GERMANY', '\r\n<ul>\r\n    <li>\r\n       OVERHOUSER Magnetometer/Gradiometer\r\n    </li>\r\n    <li>\r\n       SUPERGRADIO Meter Earthquake Prediction Instrumentation\r\n    </li>\r\n    <li>\r\n       UEROMAG Observatory Volcanology\r\nRadiaMeter\r\n    </li>\r\n    <li>\r\n       POTASSIUM Optically Pumped K-Mag/Grad\r\n    </li>\r\n    <li>\r\n       AIRBORNE SYSTEM Potassium - SuperSenser\r\n    </li>\r\n</ul>', 'assets/images/partner/dmt.gif', '', '', 3, 1, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 2, 0),
(8, 0, 0, 'frediksen', 'Scientific Educational Apparatus', '<ul>\r\n    <li>\r\n       OVERHOUSER Magnetometer/Gradiometer\r\n    </li>\r\n    <li>\r\n       SUPERGRADIO Meter Earthquake Prediction Instrumentation\r\n    </li>\r\n    <li>\r\n       UEROMAG Observatory Volcanology\r\nRadiaMeter\r\n    </li>\r\n    <li>\r\n       POTASSIUM Optically Pumped K-Mag/Grad\r\n    </li>\r\n    <li>\r\n       AIRBORNE SYSTEM Potassium - SuperSenser\r\n    </li>\r\n</ul>', 'assets/images/partner/frediksen.jpg', '', '', 3, 2, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 2, 0),
(9, 0, 1, 'hazdust', '', '<ul>\r\n    <li>\r\n       DCS-1 Drill Cores Scanner\r\n    </li>\r\n    <li>\r\n       Gamma Surveyor\r\n    </li>\r\n    <li>\r\n       SCR-Scintillation Gamma RadiaMeter\r\n    </li>\r\n</ul>', 'assets/images/partner/hazdust.gif', '', '', 3, 2, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 2, 0),
(10, 0, 1, 'IDS', '', '', 'assets/images/partner/ids.jpg', '', '', 0, 0, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(11, 0, 1, 'partner', '', '', 'assets/images/partner/reftek.gif', '', '', 0, 0, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(13, 0, 0, 'profile', '', '\r\n\r\nPT. MITRA INTIMARGA is a well known regional distributor in INDONESIA, specializing in GEOPHYSICS and SCIENTIFIC equipment and tools. As a Supplier for laboratories and Research, Institutes, we distribute major brands that are reputable Global market in their respective fields.\r\n\r\nAs the leading provider of Scientific & Technology Equipment, our extensive customers’ coverage includes Government University and Institutes, Government Research Laboratories and Industries in Indonesia.\r\n\r\n\r\nThis is achieved by leveraging our established regional sales network and our strong technical competencies to ensure that we meet the market objectives for our Principals.\r\n\r\nCustomer service is a priority in PT. Mitra Intimarga. The company has an extensive regional network of Sales Offices as our Company Dealer. This enables the Company to provide a high level of customer  interactions to handle for After Sales Services.\r\n\r\nA Dealers also a vehicle for our Principal partners to gain instant access to the Indonesia markets for their respective products. This is a competitive advantage the benefits both our Customers & our Principals.   ', '', '', '', 411, 0, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(14, 0, 0, '', '', '', 'assets/images/img/compony-division.jpg', '', '', 412, 0, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(16, 0, 0, '', '', '', 'assets/images/img/struktur.PNG', '', '', 413, 0, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(17, 0, 0, '', '', '', 'assets/images/img/CompanyMark.gif', '', '', 414, 0, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(18, 0, 0, '', '', '<ul>\r\n	<li> I. GOVERNMENT AGENCY :\r\n		<ul>\r\n			<li>\r\n				Directorate General of Geology and Mineral Resources (ESDM), Bandung\r\n			</li>\r\n			<li>\r\n				Bureau of Meteorology and Geophysics (BMG), Jakarta\r\n			</li>\r\n			<li>\r\n				Research Center for Calibration, Instrumentation and Metrology, Indonesia Institute of Sciences (KIM-LIPI), Serpong\r\n			</li>\r\n			<li>\r\n				Research & Development Center of Applied Physics (P2F-LIPI), Serpong\r\n			</li>\r\n			<li>\r\n				Agency for the Assessment and Application of Technology (BPPT), Jakarta\r\n			</li>\r\n			<li>\r\n				A Center of Physics Applied, Indonesia Institute of Sciences (P2F-LIPI), Bandung\r\n			</li>\r\n		</ul>		\r\n	</li>\r\n	<li> II.  ACADEMIC INSTITUTION/UNIVERSITIES :\r\n		<ul>\r\n			<li>\r\n				Directorate General of Geology and Mineral Resources (ESDM), Bandung\r\n			</li>\r\n			<li>\r\n				Bureau of Meteorology and Geophysics (BMG), Jakarta\r\n			</li>\r\n			<li>\r\n				Research Center for Calibration, Instrumentation and Metrology, Indonesia Institute of Sciences (KIM-LIPI), Serpong\r\n			</li>\r\n			<li>\r\n				Research & Development Center of Applied Physics (P2F-LIPI), Serpong\r\n			</li>\r\n			<li>\r\n				Agency for the Assessment and Application of Technology (BPPT), Jakarta\r\n			</li>\r\n			<li>\r\n				A Center of Physics Applied, Indonesia Institute of Sciences (P2F-LIPI), Bandung\r\n			</li>\r\n		</ul>\r\n	<li> III.  PRIVATE SECTOR :\r\n		<ul>\r\n			<li>\r\n				Directorate General of Geology and Mineral Resources (ESDM), Bandung\r\n			</li>\r\n			<li>\r\n				Bureau of Meteorology and Geophysics (BMG), Jakarta\r\n			</li>\r\n			<li>\r\n				Research Center for Calibration, Instrumentation and Metrology, Indonesia Institute of Sciences (KIM-LIPI), Serpong\r\n			</li>\r\n			<li>\r\n				Research & Development Center of Applied Physics (P2F-LIPI), Serpong\r\n			</li>\r\n			<li>\r\n				Agency for the Assessment and Application of Technology (BPPT), Jakarta\r\n			</li>\r\n			<li>\r\n				A Center of Physics Applied, Indonesia Institute of Sciences (P2F-LIPI), Bandung\r\n			</li>\r\n		</ul>\r\n</ul>   ', 'assets/images/img/CompanyMark.gif', '', '', 415, 0, '', '', '', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(19, 0, 0, '', '', '', '', '', '', 31, 1, '', '', 'public_assets/pdf/geophysics.pdf', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(20, 0, 0, '', '', '', '', '', '', 31, 2, '', '', 'public_assets/pdf/scientifics.pdf', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(21, 0, 0, '', '', '', '', '', '', 411, 1, '', '', 'public_assets/pdf/company_profile.pdf', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(22, 0, 0, '', '', '', '', '', '', 412, 2, '', '', 'public_assets/pdf/company-division.pdf', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(23, 0, 0, '', '', '', '', '', '', 415, 5, '', '', 'public_assets/pdf/company-customer-list.pdf', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(24, 0, 0, 'About Us PT. MITRA INTIMARGA', '', '<p class="MsoNormal" style="text-align: justify; text-autospace: none; line-height:150%">              </p><p class="MsoNormal" style="text-align: justify; text-autospace: none; line-height:150%">              <b><span style="font-family:Tahoma;color:green"><font size="4">PT. MITRA INTIMARGA</font></span></b><font size="4"><span style="font-family:Tahoma;color:#1F1A17">is a               supplier for Laboratories and Research Institutes in </span><b>              <span style="font-family:Tahoma;color:red">INDONESIA</span></b></font><span style="font-family:Tahoma;color:#1F1A17"><font size="4">.               Our product knowledge, experience and personnel provide expertise               from a mix of Geophysics, Electronics Engineer and Scientific               Background designed to meet the challenges of your Laboratory &amp; Research.</font></span></p>              <p class="MsoNormal" style="text-align: justify; text-autospace: none; line-height:150%">              <span style="font-family:Tahoma;color:#1F1A17"><font size="4">Our emphasis is to understand our products within your               application and provide quick and accurate response with in </font> </span>              <font size="4">              <b><span style="font-family:Tahoma;color:blue">"1A" BEST PRICE and               BEST QUALITY</span></b></font><span style="font-family:Tahoma;color:#1F1A17"><font size="4">.</font></span></p>              <p class="MsoNormal" style="text-align: justify; text-autospace: none; line-height:150%">              <span style="font-family:Tahoma;color:#1F1A17"><font size="4">Thanks to the Partnership with a several number of Manufacturers               was developed on the area of Science and               Engineering to meet the needs of Researchers, Professional,               Academic and Government Communities.</font></span></p>              <p class="MsoNormal" style="text-align: justify; text-autospace: none; line-height:150%">              <span style="font-family:Tahoma;color:#1F1A17"><font size="4">As with all our product, the components and systems detailed here               have been selected to deliver the very highest performance and               reliability with exceptional value for money.</font></span></p>              <p class="MsoNormal" style="text-align: justify; text-autospace: none; line-height:150%">              <span style="font-family:Tahoma;color:#1F1A17"><font size="4">When dealing with </font> </span><font size="4"><b>              <span style="font-family:Tahoma;color:blue">PT. MITRA INTIMARGA</span></b><span style="font-family:Tahoma;color:#1F1A17"> youâ€™ll receive advice and information from trained Engineers               whose technical expertise to handle for installation and after               sales service allowing you to make decision through us, </span>              </font><i>              <span style="font-family:Arial;color:#1F1A17"><font size="4">quickly and easily....</font></span></i></p>              <p class="MsoNormal" style="text-align: justify; text-autospace: none; line-height:150%">              <b><i><span style="font-family:Tahoma;color:green"><font size="4">Call Us</font></span></i></b><span style="font-family:Tahoma;color:#1F1A17"><font size="4">               to arrange  before your buy our range of products.</font></span></p><p class="MsoNormal" style="text-align: justify; text-autospace: none; line-height:150%"></p><br>', '', '', '', 2, 0, '', '', 'public_assets/pdf/company-customer-list.pdf', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(25, 0, 0, 'gfdgfdg', '', 'gfdgfdgfdg', '2be9b1a088bb0bc83612eada20bde8d2.jpg', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(26, 0, 0, 'Scientific Educational Apparatus', '', '<span style="font-family: Arial; color: #0000FF"><font size="2">Physics - Educational Experiment Sets</font></span>', 'c9d4de220074e7ac917fbda18d854648.jpg', '', '', 0, 3, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(27, 0, 0, 'Thin Film Measurement & Analysis', '', '<span style="font-family:Arial;color:#0000FF"><font size="2">Spectroscopic Ellipsometer<br>Spectroscopic                   Reflect meter<br>Plasma Monitoring &amp; Process Control System</font></span>', '', '', '', 0, 3, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(28, 0, 0, 'Professional Prototyping PCB Machines', '', '<font face="Arial" size="2" color="#0000FF">CNC Drilling Routing Machines, Board Cutter, Conveyorised Spray Etching, Parallel Beam Exposure, Waste Water Treatment, Etching/Hinning/Drying and Developing Machines, Spray Etching Machine, Solder Mask Exposure, Dry Film Laminator, Galvanic Plating, Multilayer Press, Photoplotter, Brushing Machines</font>', '', '', '', 0, 3, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(29, 0, 0, 'Professional Prototyping PCB Machines', '', '<font face="Arial" size="2" color="#0000FF">CNC Drilling Routing Machines, Board Cutter, Conveyorised Spray Etching, Parallel Beam Exposure, Waste Water Treatment, Etching/Hinning/Drying and Developing Machines, Spray Etching Machine, Solder Mask Exposure, Dry Film Laminator, Galvanic Plating, Multilayer Press, Photoplotter, Brushing Machines</font>', '0491e5188125156e9d88b94aff7a604d.gif', '', '', 0, 3, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(33, 0, 0, 'marabottt', '', 'kjsaldjslkjdlksajdlksajdlkjdlksad', 'caf9f48deea6535a97e8060b2faf8fa4.jpg', '', '', 0, 3, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(34, 0, 0, 'marabottt', '', 'kjsaldjslkjdlksajdlksajdlkjdlksad', 'd2e96c557c87740c8769970e408c9c80.jpg', '', '', 0, 3, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(35, 0, 0, ' Scientific update', '', 'fasfsafasfsafsafsafsa', '162c70dcfa0c645c37b7505e4275e1f0.jpg', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(36, 0, 0, 'Geophysics ngehe', '', 'fdslkfdsfhlkdshflkdshflkdshfds', 'cbce3b4c501ad55a0357ef78d4049e7b.jpg', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(37, 0, 0, ' Geophysics hoho', '', 'sdsadsadsadsa', 'e54aa09c6ed768b2132a9b5ae9245da2.gif', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(38, 0, 0, 'Geophysics curcol', '', 'Geophysics curcol', '87d8c965d0d16bb9cddc6eb611f6d765.jpg', '', '', 3, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(39, 0, 0, ' Scientific', '', '<h3>Scientific</h3>&nbsp;ngehe<br>', 'c82be5cffd3f3730ca1c746a158b5f1c.jpg', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(40, 0, 0, 'Geophysics curcol', '', 'Geophysics curcol', '', '', '', 3, 1, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(41, 0, 0, ' Geophysics mencret', '', 'fkdljflkdjflkhdslkfhdslkhflkdshflkdsfs', '1c48d1e46403d3aea5d72d21ef4ac90c.jpg', '', '', 3, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(42, 0, 0, 'micro pactfdsfdsfdsf fdsfdsfdsfdsf', '', ' <p id="content-container"></p><p class="row"></p>Â ScientificÂ  zfdasndasndnas salkdjlksajdlksjdlksad<br><br>hflkdslfjdsalfjsa;dsa;ld<br>', '45c8cff4e84454f2465f10496408b6de.jpg', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(43, 0, 0, 'agi ahhaahaa', '', 'agi sahdkljsalkdjsalkjdsa sakdjlksajdlksad dsakdjlksajdlksad sakdjlsajdlsajdlsajd<br>', '64cd14148af73279bcc91e1dbfdf956d.jpg', '', '', 3, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(44, 0, 0, ' Scientific', '', ' <p id="content-container"></p><p class="row"></p>idskdjlksajdlksahd salkdjskajdlksa IDS<br>', '8930a81a25a3f93d13e735670519047b.jpg', '', '', 3, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(45, 0, 0, 'IDS', '', ' <p id="content-container"></p>IDS jhdskfhlkdshfkldshfkds dskhflkdshfkldshfds<br>', 'f4524e78ad7f7dc59e2087222240b5b8.jpg', '', '', 3, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(46, 0, 0, 'hadust', '', 'dsadkljaldksad<br>dlksjadlkjsalkdjsad<br>sakdjsalkjdlsjdlsad<br>sldksa;lkd;lsakd;lsad<br>dlsdl;sakjd;ljsa;ldsad<br>sdsalkdjsakldjlksad<br>dsadsad<br>', '6ffe5b50bfc69835f07fb4d96c650c51.gif', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(47, 0, 0, 'company_profile hahha', '', '<font face="Tahoma" size="4" color="#1f1a17"><b>PT. MITRA INTIMARGA </b>is               a well known regional distributor in              <b>INDONESIA</b>, specializing in </font>          <font face="Tahoma" size="4" color="#00CC00"><b>GEOPHYSICS</b></font><font face="Tahoma" size="4" color="#1f1a17">           and</font><font face="Tahoma" color="#0000FF"><b><font size="4">Â SCIENTIFIC          </font> </b></font>          <font face="Tahoma" size="4" color="#1f1a17">equipment and tools. As a           Supplier for laboratories and Research, Institutes, we distribute           major brands that are reputable Global market in their respective           fields.<br></font><p style="margin-top: 0; margin-bottom: 0" align="justify">          <font face="Tahoma" size="4" color="#1f1a17">As the leading               providerÂ of Scientific & Technology               Equipment, our extensive customersâ€™               coverageÂ includes Government University               and Institutes, Government Research               Laboratories and Industries in Indonesia. </font></p>              <p style="margin-top: 0; margin-bottom: 0" align="justify">          <font face="Tahoma" size="4" color="#1f1a17"> <br>              This isÂ achieved byÂ leveraging our               established regional sales network andÂ our strong technicalÂ competencies to               ensure that we meet the marketÂ objectives for our Principals.</font></p>              <p align="justify">          <font face="Tahoma" size="4" color="#1f1a17">Customer service is               a priority in <i>PT. Mitra Intimarga.</i>Â The company hasÂ an           extensive <b>              regional networkÂ of Sales</b> Offices               asÂ ourÂ Company Dealer. This enables               the Company to provide a high               level of customerÂ  interactions toÂ handle for After Sales Services. </font>              </p>              <p align="justify">          <font face="Tahoma" color="#1f1a17"><font size="4">A Dealers also a               vehicle for our Principal partners               toÂ gain instant access to the               Indonesia markets for their respective products. </font> <i>          <font size="4">This is aÂ competitive               advantage theÂ benefits both ourÂ Customers &Â our Principals.</font>Â Â  </i></font>              </p><br>', '1c48d1e46403d3aea5d72d21ef4ac90c.jpg', '', '', 4, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(48, 0, 0, ' Geophysics', '', 'fkdljflkdjflkhdslkfhdslkhflkdshflkdsfs', 'e1697a7a6a2a38a753418a19a5c11f80.jpg', '', '', 4, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(50, 0, 0, 'Company Organization hahha', '', 'tes Company Organization hahaha<br>', 'a233d34b6032a503f028a2875b9ee8ee.PNG', '', '', 4, 3, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(51, 0, 0, 'Company Marketing Strategy', '', '', '527aa21a86181205a35eb078d110f8a7.gif', '', '', 4, 4, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(52, 0, 0, 'Customer List', '', '<p style="margin-top: 4; margin-bottom: -15"><b><font size="2">Â            I.Â Â Â  GOVERNMENT AGENCY :</font></b></p>          <ul style="list-style-type: circle; font-family: Book Antiqua; font-size: 10px" type="circle"><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">            Directorate General of Geology and Mineral Resources (ESDM), Bandung</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Bureau of             Meteorology and Geophysics (BMG), Jakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Research             Center for Calibration, Instrumentation and Metrology, Indonesia             Institute of Sciences (KIM-LIPI), Serpong</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Research &             Development Center of Applied Physics (P2F-LIPI), Serpong</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Agency for             the Assessment and Application of Technology (BPPT), Jakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">A Center             of Physics Applied, Indonesia Institute of Sciences (P2F-LIPI),             Bandung</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Magnetics             Observatory Station, Pelabuhan Ratu</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Magnetics             Observatory Station, Kupang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Research             Venter for Oceanography, LIPI, Ancol</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Energy and             Mineral Resources, Palembang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Technology             Center for Marine Survey (Baruna Jaya), Jakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Research             Center for Geotechnology (Geotech-LIPI), Bandung</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Energy and Mineral Resources, Kupang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Energy and Mineral Resources, Banjarmasin</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Research & Development CenterÂ  Mineral & Coal Technology (tek MIRA), Bandung</font></p></li></ul>          <p style="margin-bottom: -15"><b><font size="2">Â  II.Â            ACADEMIC INSTITUTION/UNIVERSITIES :</font></b></p>          <ul style="list-style-type: circle; font-family: Book Antiqua; font-size: 10px" type="circle"><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Medical Physics, Medical Faculty, University of Indonesia (UI),             Jakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Syiah Kuala (UNSYIAH), Banda Aceh</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Sumatera Utara (USU), Medan</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, State University of Medan (UNIMED), Medan</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Jabal Ghafur (UJG), Sigli</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Bengkulu (UNIB), Bengkulu</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Sriwijaya (UNSRI), Palembang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Lampung (UNILA), Bandar Lampung</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, Bogor Institute of Agriculture (IPB), Bogor</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, Bandung Institute of Technology (ITB), Bandung</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Andalas (UNAND), Padang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Hasanuddin (UNHAS), Makassar</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Lambung Mangkurat (UNLAM), Banjarmasin</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Padjajaran (UNPAD), Bandung</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Diponegoro (UNDIP), Semarang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, Institutes Teknogi Sepuluh Nopember (ITS), Surabaya</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Airlangga (UNAIR), Surabaya</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Sebelas Maret (UNS), Solo</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Jember (UNJEM), Jember</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, State Universiy of Yogyakarta (UNY), Yogyakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, State University of Malang (UNEMAL), Malang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, State University of Jakarta (UNJ), Jakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Electrical Engineering, University of Syiah Kuala (UNSYIAH),             Banda Aceh</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Electrical Engineering, State Polytechnic of Jakarta, Jakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Electrical Engineering, State Polytechnic of Semarang, Semarang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Electrical Engineering, University of Diponegoro (UNDIP),             Semarang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Geophysical & Engineering, Institute Technology Bandung (ITB),             Bandung</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Meteorology and Geophysics, Institute Technology Bandung (ITB),             Bandung</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Fisheries             Laboratory, Institute of Fisheries (STP) Fisheries and Marine             Department, Jakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Electrical Engineering, State Polytechnic of Padang, Padang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Makassar (UNM), Makassar</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department of Physics, Fakulty of Mathematicss and Natural Sciences University of Khairun, Ternate, MALUT</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department of Physics, University Pembangunan NasionalÂ  Yogyakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department of Physics, Faculty of Mathematicss and Natural Sciences, University of Indonesia (UI), Jakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Electrical Engineering, State Polytechnic of Padang, Padang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Training Center AgencyÂ  and Industry of Banten, Serang</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department of Electrical Engineering, University of Bengkulu (UNIB), Bengkulu</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department of Electrical Engineering, University of Jakarta (UNJ), Jakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department of Electrical Engineering, State Polytechnic of Lhokseumawe, Lhokseumawe</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Training Center AgencyÂ  and Industry of Pulogadung, Jakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department of Electrical Engineering, University of Sumatera Utara (USU), Medan</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department of Electrical Engineering, State Polytechnic of Makassar, Makassar</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department of Electrical Engineering, State Polytechnic of Samarinda, Samarinda</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department of Electrical Engineering, State Polytechnic of Pontianak, Pontianak</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Training Center AgencyÂ  and Industry of Makassar, Makassar</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Khairun, Ternate</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Pembangunan Nasional , Yogyakarta</font></p></li><li>            <p style="margin-top: 0; margin-bottom: 0"><font size="2">Department             of Physics, University of Padang (UNP), Padang</font></p></li></ul>', 'b3177ab3abf9a2d3157bdfbad2338036.gif', '', '', 4, 5, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(55, 0, 0, ' Customer Location', '', '', 'a044c87838104e62178adeac6409ddf0.jpg', '', '', 4, 6, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(56, 0, 0, 'dfdsf', '', 'dfsdfdsfdsf', '34e93a8ace3d6e183a46d47419dc1d2c.png', '', '', 3, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(57, 0, 0, 'dfdsf', '', 'dfsdfdsfdsf', '407995ddec63534c161dca89c2fc858f.png', '', '', 3, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(58, 0, 0, 'sdfdsfdsf', '', 'dsfdsfdsfdsf', '974abac42b4bf33cfee2718199c4e134.png', '', '', 3, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 2, 0),
(59, 0, 0, 'maraoks', '', 'czcxcxzc', '2fe922dab5b6a39721cf3138a36db5f5.png', '', '', 3, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(60, 0, 0, 'fkjdslkfjdslkfdsf', '', 'dsfdsfdsfdsfdsfdsf', '5fa60dc07044240253af7c578d4bef8b.jpg', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(61, 0, 0, 'maho', '', 'zxcxzczxcxzc', 'f4d95535202f877ff2d3944f458393bd.jpg', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(62, 0, 0, 'jojo', '', 'sadasdsadsa', 'a5c4d099ed3a32f2273615dcc0f4118c.png', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(63, 0, 0, 'hore', '', 'zxczczxc', '52c6a34c8682103bac1106dae0b4a593.png', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(64, 0, 0, 'hore', '', 'zxczczxc', 'bdfc76d81690edbbb8b817d398205703.png', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(65, 0, 0, 'hore', '', 'zxczczxc', '8f2e7fb25fe9f4f9944585717294ebf1.png', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(66, 0, 0, 'hade', '', 'zxdzxczx', '1952682be11e154950c3586342af30e5.jpg', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(67, 0, 0, 'dfdsfsdf', '', 'dsfdsfdsf', '45fc1e4f32cf2eb3e6ab35881014fc02.jpg', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `mitra_news_content_comment`
--

CREATE TABLE IF NOT EXISTS `mitra_news_content_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `contentid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `n_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `date` (`date`),
  KEY `userid` (`userid`),
  KEY `contentid` (`contentid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mitra_news_content_repo`
--

CREATE TABLE IF NOT EXISTS `mitra_news_content_repo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `titleimage` varchar(200) NOT NULL,
  `brief` text NOT NULL,
  `content` text NOT NULL,
  `contentimage` text NOT NULL,
  `typealbum` int(11) NOT NULL COMMENT '1:local,4:fb,5:twitter',
  `gallerytype` int(11) NOT NULL COMMENT '1:frame,2:cover',
  `files` varchar(200) NOT NULL COMMENT 'can be image or song',
  `filesimage` varchar(255) NOT NULL,
  `thumbnail` varchar(200) NOT NULL,
  `fromwho` int(11) NOT NULL COMMENT '0;admin;1:user;2:pages',
  `otherid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `created_date` datetime NOT NULL,
  `n_status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `otherid` (`otherid`),
  KEY `IDX_typeAlbum` (`typealbum`),
  KEY `IDX_Album_ID` (`gallerytype`),
  KEY `IDX_FROM_WHO` (`fromwho`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=366 ;

--
-- Dumping data for table `mitra_news_content_repo`
--

INSERT INTO `mitra_news_content_repo` (`id`, `title`, `titleimage`, `brief`, `content`, `contentimage`, `typealbum`, `gallerytype`, `files`, `filesimage`, `thumbnail`, `fromwho`, `otherid`, `userid`, `created_date`, `n_status`) VALUES
(360, 'fbef4e10e8e9f08508e368b79dac2dbc.pdf', '', '', '', '', 3, 1, 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '', '', 0, 0, 0, '0000-00-00 00:00:00', 0),
(361, '', '', '', 'fdgfgdf', '', 3, 1, '', '', '', 0, 45, 0, '0000-00-00 00:00:00', 1),
(362, '973400a39833f8206644656a2e812f3d.pdf', '', '', '', '', 3, 1, 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '', '', 0, 59, 0, '0000-00-00 00:00:00', 1),
(363, '5299d4b42c84002e1734a46edec01693.pdf', 'e54383279be6c9492fe3ac3c5a47af74.jpg', '', 'asdsadsadsad', '', 3, 2, 'C:/xampp/htdocs/MitraIntimarga/public_assets/', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '', 0, 46, 0, '0000-00-00 00:00:00', 1),
(364, '7818cf052151ed4c967e3d21af6d5e19.pdf', '', '', '', '', 3, 2, 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '', '', 0, 66, 0, '0000-00-00 00:00:00', 1),
(365, '77d70dd2034ee075e6a9ae38ec48d7d5.pdf', '', '', '', '', 3, 2, 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '', '', 0, 67, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `social_member`
--

CREATE TABLE IF NOT EXISTS `social_member` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `sosmed_id` varchar(50) NOT NULL,
  `name` varchar(46) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `verified_date` datetime NOT NULL,
  `img` varchar(200) DEFAULT NULL COMMENT 'GIID Image',
  `image_profile` varchar(200) NOT NULL,
  `small_img` varchar(200) DEFAULT NULL,
  `username` varchar(46) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `zipcode` int(10) NOT NULL,
  `sex` varchar(11) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `description` text,
  `link` text,
  `middle_name` varchar(46) DEFAULT NULL,
  `last_name` varchar(46) DEFAULT NULL,
  `StreetName` varchar(150) DEFAULT NULL,
  `phone_number` varchar(15) DEFAULT NULL,
  `n_status` int(3) NOT NULL DEFAULT '0' COMMENT '0:pending, 1:approved, 2:delete',
  `login_count` int(11) NOT NULL DEFAULT '0',
  `verified` tinyint(3) DEFAULT '0' COMMENT '0->no hp blm verified, 1->sudah verified.',
  `usertype` int(11) NOT NULL COMMENT '1:industri, 2:balai, 3:balaiverificator, 4:bpom, 5:bpomverivicator',
  `email_token` varchar(50) DEFAULT NULL,
  `photo_moderation` int(11) NOT NULL,
  `salt` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `sosmed_id` (`sosmed_id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10080 ;

--
-- Dumping data for table `social_member`
--

INSERT INTO `social_member` (`id`, `sosmed_id`, `name`, `nickname`, `email`, `register_date`, `verified_date`, `img`, `image_profile`, `small_img`, `username`, `last_login`, `city`, `zipcode`, `sex`, `birthday`, `description`, `link`, `middle_name`, `last_name`, `StreetName`, `phone_number`, `n_status`, `login_count`, `verified`, `usertype`, `email_token`, `photo_moderation`, `salt`, `password`) VALUES
(10071, '10202304338879140', 'Ovan Pulu', NULL, 'o.pulu@yahoo.com', '2014-08-25 00:57:35', '0000-00-00 00:00:00', NULL, '', NULL, NULL, '2014-09-27 22:38:08', NULL, 0, 'male', NULL, NULL, 'https://www.facebook.com/app_scoped_user_id/10202304338879140/', 'Sunarto', 'Pulu', 'e', 'e', 1, 48, 1, 1, NULL, 0, NULL, NULL),
(10073, '384175162', 'er joned', NULL, NULL, '2014-08-30 08:50:26', '0000-00-00 00:00:00', NULL, '', NULL, 'erjoned', NULL, 0, 0, NULL, NULL, '', '', NULL, NULL, NULL, NULL, 1, 0, 0, 2, NULL, 0, NULL, NULL),
(10074, '10202597422519302', 'Albertus', NULL, 'andreass_bayu@yahoo.com', '2014-08-31 12:55:31', '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, NULL, 0, 'male', NULL, NULL, 'https://www.facebook.com/app_scoped_user_id/10202597422519302/', 'Andreass Bayu', 'Aji', NULL, NULL, 1, 0, 0, 1, NULL, 0, NULL, NULL),
(10075, '1900304539', 'Albertus Bayu Aji', NULL, 'andreass.bayu@gmail.com', '2014-09-15 05:48:25', '0000-00-00 00:00:00', NULL, '', NULL, 'AndreassBayu', NULL, 0, 0, NULL, NULL, '', '', NULL, NULL, 'Jakarat', '085710440875', 1, 0, 1, 2, NULL, 0, NULL, NULL),
(10079, '594315585', 'Ovan Sunarto P.', NULL, 'ovan89@gmail.com', '2014-09-23 02:18:35', '0000-00-00 00:00:00', NULL, '', NULL, 'ovancop', '2014-10-07 09:24:05', 0, 0, NULL, NULL, 'Kesehatan lebih penting', 'http://t.co/jePSH4BIdP', NULL, NULL, 'ada', '2311', 1, 20, 1, 2, NULL, 0, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
