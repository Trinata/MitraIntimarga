-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2014 at 06:59 PM
-- Server version: 5.5.37-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ptmitra`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `mitra_news_content`
--

INSERT INTO `mitra_news_content` (`id`, `parentid`, `lid`, `title`, `brief`, `content`, `image`, `thumbnail_image`, `slider_image`, `categoryid`, `articleType`, `url`, `sourceurl`, `file`, `created_date`, `expired_date`, `posted_date`, `fromwho`, `filesize`, `can_save`, `tags`, `authorid`, `n_status`, `topcontent`) VALUES
(1, 0, 0, '1 Tips si kecil tidur nyenyak hingga lelap dan lahap sampai selamanya', '', '&lt;span class=&quot;brief&quot;&gt;Usia Balita merupakan periode emas tumbuh kembang Si Kecil. Untuk mendukung pertumbuhansi kecil secara&lt;/span&gt;', '7f97ab29b00bc87ba72226b1f13cc4b3.jpg', '', '', 0, 0, '', '', 'http://localhost/nestle/nestle/public_assets/7f97ab29b00bc87ba72226b1f13cc4b3.jpg', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:17', 0, 0, 0, '', 1, 1, 0),
(2, 0, 0, '2 Tips si kecil tidur nyenyak hingga lelap dan lahap sampai selamanya', '', '&lt;span class=&quot;brief&quot;&gt;Usia Balita merupakan periode emas tumbuh kembang Si Kecil. Untuk mendukung pertumbuhansi kecil secara&lt;/span&gt;', '1d15a439732ff4756b0ea121e05ffa81.jpg', '', '', 0, 0, '', '', 'http://localhost/nestle/nestle/public_assets/1d15a439732ff4756b0ea121e05ffa81.jpg', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:25', 0, 0, 0, '', 1, 1, 0),
(3, 0, 0, '3 Tips si kecil tidur nyenyak hingga lelap dan lahap sampai selamanya', '', '&lt;span class=&quot;brief&quot;&gt;Usia Balita merupakan periode emas tumbuh kembang Si Kecil. Untuk mendukung pertumbuhansi kecil secara&lt;/span&gt;', '83badbf45943ed06a978e79baf77224a.jpg', '', '', 0, 0, '', '', 'http://localhost/nestle/nestle/public_assets/83badbf45943ed06a978e79baf77224a.jpg', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:33', 0, 0, 0, '', 1, 1, 0),
(4, 0, 0, '4 Tips si kecil tidur nyenyak hingga lelap dan lahap sampai selamanya', '', '&lt;span class=&quot;brief&quot;&gt;Usia Balita merupakan periode emas tumbuh kembang Si Kecil. Untuk mendukung pertumbuhansi kecil secara&lt;/span&gt;', 'db5086d7fa346198edea68b2d72f0d1f.jpg', '', '', 0, 0, '', '', 'http://localhost/nestle/nestle/public_assets/db5086d7fa346198edea68b2d72f0d1f.jpg', '2014-08-10 15:47:02', '0000-00-00 00:00:00', '2014-09-01 22:23:41', 0, 0, 0, '', 1, 1, 0);

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
  `brief` text NOT NULL,
  `content` text NOT NULL,
  `typealbum` int(11) NOT NULL COMMENT '1:local,4:fb,5:twitter',
  `gallerytype` int(11) NOT NULL COMMENT '1:frame,2:cover',
  `files` varchar(200) NOT NULL COMMENT 'can be image or song',
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=360 ;

--
-- Dumping data for table `mitra_news_content_repo`
--

INSERT INTO `mitra_news_content_repo` (`id`, `title`, `brief`, `content`, `typealbum`, `gallerytype`, `files`, `thumbnail`, `fromwho`, `otherid`, `userid`, `created_date`, `n_status`) VALUES
(1, 'Upload foto from local store', '', '', 1, 0, 'da8de22919f7bcaa242758f4ded9bef6.jpeg', '', 0, 0, 10044, '2014-08-11 00:41:05', 1),
(2, 'Upload foto from local store', '', '', 1, 0, '69fe11d4347836d5945ef8e1e80d78b8.jpeg', '', 0, 0, 10044, '2014-08-11 00:43:24', 1),
(3, 'Upload foto from local store', '', '', 1, 0, '7f6dd5c9e93ac5ed2e7ea7a529e888d1.jpg', '', 0, 0, 10044, '2014-08-11 00:45:49', 1),
(4, 'Upload foto from local store', '', '', 1, 0, 'a7ac056a20b7adbc38f54da9657636e5.jpeg', '', 0, 0, 10044, '2014-08-11 00:47:27', 1),
(5, 'Upload foto from local store', '', '', 1, 0, '4919bdde439abe3e3a93ffd0f57db36a.jpeg', '', 0, 0, 10044, '2014-08-11 10:11:37', 1),
(6, 'frame', '', '', 1, 1, 'frame.png', '', 0, 0, 10044, '2014-08-11 10:11:37', 0),
(7, 'frame', '', '', 1, 1, 'frame2.png', '', 0, 0, 10044, '2014-08-11 10:11:37', 0),
(8, 'Upload foto from local store', '', '', 1, 0, 'd8350005ec6aafd2414b2ed8f5a6dd46.jpg', 'd8350005ec6aafd2414b2ed8f5a6dd46.jpg', 0, 0, 10044, '2014-08-11 11:23:17', 1),
(9, 'Upload foto from local store', '', '', 1, 0, 'ece8c207d4b48dd89dbc9441639782d8.jpg', 'ece8c207d4b48dd89dbc9441639782d8.jpg', 0, 0, 10044, '2014-08-11 11:30:13', 1),
(10, 'Upload foto from local store', '', '', 1, 0, '2421d170dff9a0e8200063ace7771ed7.jpg', '2421d170dff9a0e8200063ace7771ed7.jpg', 0, 0, 10044, '2014-08-11 11:37:57', 1),
(11, 'Upload foto from local store', '', '', 1, 0, 'c5cb9816ec8dfb53a4245c70fdb9ba54.jpg', 'c5cb9816ec8dfb53a4245c70fdb9ba54.jpg', 0, 0, 10044, '2014-08-11 11:43:26', 1),
(12, 'Upload foto from local store', '', '', 1, 0, '9da89522834ddcea363cf49b42ec59e9.jpg', '9da89522834ddcea363cf49b42ec59e9.jpg', 0, 0, 10044, '2014-08-11 11:45:18', 1),
(13, 'Upload foto from local store', '', '', 1, 0, '93bf6e98726ddadb3cfde4aca9644de5.jpg', '93bf6e98726ddadb3cfde4aca9644de5.jpg', 0, 0, 10044, '2014-08-11 11:59:59', 1),
(14, 'Upload foto from local store', '', '', 1, 0, '537c8c6336533c1c916253e88d611647.jpg', '537c8c6336533c1c916253e88d611647.jpg', 0, 0, 10044, '2014-08-11 12:02:01', 1),
(15, 'Upload foto from local store', '', '', 1, 0, '0234e1bb56e433e850bccf796fca8a94.jpg', '0234e1bb56e433e850bccf796fca8a94.jpg', 0, 0, 10046, '2014-08-11 12:18:40', 1),
(16, 'Upload foto from local store', '', '', 1, 0, 'a01dc2c47e3ac25e6fe09ce4a0d930a8.jpg', 'a01dc2c47e3ac25e6fe09ce4a0d930a8.jpg', 0, 0, 10046, '2014-08-11 13:03:32', 1),
(17, 'Upload foto from local store', '', '', 1, 0, 'a3146ae293e88564ac4b8b0023fffc4c.jpg', 'a3146ae293e88564ac4b8b0023fffc4c.jpg', 0, 0, 10046, '2014-08-11 13:06:39', 1),
(18, 'Upload foto from local store', '', '', 1, 0, 'e755652b9e8ff43e8c0b051184b1fea7.jpg', 'e755652b9e8ff43e8c0b051184b1fea7.jpg', 0, 0, 10044, '2014-08-11 13:07:46', 1),
(19, 'Upload foto from local store', '', '', 1, 0, '0b8c54a03ede9ba66b1e75bc7b6db4d0.jpg', '0b8c54a03ede9ba66b1e75bc7b6db4d0.jpg', 0, 0, 10044, '2014-08-11 13:09:45', 1),
(20, 'Upload foto from local store', '', '', 1, 0, '97ac1121dc6e00f584a478b7a5e27a32.jpg', '', 0, 0, 10044, '2014-08-11 13:14:05', 1),
(21, 'Upload foto from local store', '', '', 1, 0, '', '', 0, 0, 10044, '2014-08-11 13:14:51', 1),
(22, 'Upload foto from local store', '', '', 1, 0, '180ec3b88a7f8ca84c4a7f0afb36905f.png', '180ec3b88a7f8ca84c4a7f0afb36905f.png', 0, 0, 10044, '2014-08-11 13:15:32', 1),
(23, 'Upload foto from local store', '', '', 1, 0, '43699265a5b16e89f083daf30de2dd59.png', '43699265a5b16e89f083daf30de2dd59.png', 0, 0, 10044, '2014-08-11 15:23:50', 1),
(24, 'Upload foto from local store', '', '', 1, 0, '80c36fcd04b401a5e627b8b2d6e8afa0.jpg', '80c36fcd04b401a5e627b8b2d6e8afa0.jpg', 0, 0, 10050, '2014-08-11 19:32:10', 1),
(25, 'Upload foto from local store', '', '', 1, 0, 'fe0908073054564d204942f970302340.png', 'fe0908073054564d204942f970302340.png', 0, 0, 10044, '2014-08-11 19:35:02', 1),
(26, 'Upload foto from local store', '', '', 1, 0, '20e307bd9fcb7b4079786fa2b807ba8c.png', '20e307bd9fcb7b4079786fa2b807ba8c.png', 0, 0, 10050, '2014-08-11 19:36:41', 1),
(27, 'Upload foto from local store', '', '', 1, 0, '277c86a5f1dd51fe5fb55eebd7d68060.jpg', '277c86a5f1dd51fe5fb55eebd7d68060.jpg', 0, 0, 10044, '2014-08-11 19:43:35', 1),
(28, 'Upload foto from local store', '', '', 1, 0, '6f27e33e5365308e0b64615dbca8535e.png', '6f27e33e5365308e0b64615dbca8535e.png', 0, 0, 10065, '2014-08-11 21:19:45', 1),
(29, '', '', '', 2, 0, 'http://localhost/nestle/nestle/', '', 0, 0, 0, '2014-08-12 09:13:29', 1),
(30, '', '', '', 0, 1, 'http://localhost/nestle/nestle/', '', 0, 0, 0, '2014-08-12 09:21:10', 0),
(31, 'frame2.png', '', 'd99f9ca16180052619e7074bd9815c4c.png', 0, 1, 'http://localhost/nestle/nestle/public_assets/frame/d99f9ca16180052619e7074bd9815c4c.png', '', 0, 0, 0, '2014-08-12 09:22:30', 0),
(32, 'frame2.png', '', 'http://localhost/nestle/nestle/public_assets/frame/dd8a660b65edf0d1987cd419de7d6a6f.png', 0, 1, 'dd8a660b65edf0d1987cd419de7d6a6f.png', '', 0, 0, 0, '2014-08-12 09:29:42', 0),
(33, 'frame2.png', '', 'http://localhost/nestle/nestle/public_assets/frame/d009bb15ac8765a39ff20b10221d8832.png', 0, 1, 'd009bb15ac8765a39ff20b10221d8832.png', '', 0, 0, 0, '2014-08-12 09:32:42', 0),
(34, 'frame.png', '', 'http://localhost/nestle/nestle/public_assets/frame/bcb444784f2b409babb3183b1f927721.png', 0, 1, 'bcb444784f2b409babb3183b1f927721.png', '', 0, 0, 0, '2014-08-12 09:33:16', 0),
(35, 'nestle-activgro-profpic-2.png', '', 'http://localhost/nestle/nestle/public_assets/frame/f7ccd75d691f8e1511f121544976a346.png', 0, 1, 'f7ccd75d691f8e1511f121544976a346.png', '', 0, 0, 0, '2014-08-12 09:35:40', 0),
(36, 'nestle-activgro-profpic-1.png', '', 'http://localhost/nestle/nestle/public_assets/frame/ecca3bb5126cd9db8305ad8c6f647797.png', 0, 1, 'nestle-activgro-profpic-1.png', '', 0, 0, 0, '2014-08-12 09:35:52', 0),
(37, 'Upload foto from local store', '', '', 1, 0, '7c93a11e6ab61daf988b00a899c8c503.jpg', '', 0, 0, 10044, '2014-08-12 09:36:43', 1),
(38, 'Upload foto from local store', '', '', 1, 0, '855dbdfa1ac543914903e6be17a0eaf6.png', '', 0, 0, 10044, '2014-08-12 09:58:23', 1),
(39, 'Upload foto from album facebook', '', '', 1, 0, '/home/ovancop/Data/htdocs/nestle/nestle/public_assets/e0bee9fd6b213787e452ce0e218cf83c2e44cfc3jpg', '', 0, 0, 10044, '2014-08-12 12:27:58', 1),
(40, 'Upload foto from album facebook', '', '', 1, 0, 'e337e8e28fef7e634710e07f8125af0bb85d8fc4jpg', 'e337e8e28fef7e634710e07f8125af0bb85d8fc4jpg', 0, 0, 10044, '2014-08-12 12:29:44', 1),
(41, 'Upload foto from album facebook', '', '', 1, 0, 'a8aa8f3057d1699c76f6cf2311a3efa2d914a9c2jpg', 'a8aa8f3057d1699c76f6cf2311a3efa2d914a9c2jpg', 0, 0, 10044, '2014-08-12 12:30:59', 1),
(42, 'Upload foto from album facebook', '', '', 1, 0, '8a441ae82cbfbcc35995108b95a4bad65a0383f2jpg', '', 0, 0, 10044, '2014-08-12 12:31:21', 1),
(43, 'Upload foto from album facebook', '', '', 1, 0, '7633f534ac238e1e76dfbb74b2d4b2ca0ee0c63c.jpg', '7633f534ac238e1e76dfbb74b2d4b2ca0ee0c63c.jpg', 0, 0, 10044, '2014-08-12 12:33:27', 1),
(44, 'Upload foto from album facebook', '', '', 1, 0, '614b29219e30bbc1460b1b15df0532bf43cc109b.jpg', '', 0, 0, 10044, '2014-08-12 12:43:52', 1),
(45, 'Upload foto from local store', '', '', 1, 0, 'fc6c06a79e95ded2474d87bc4b165f06.png', '', 0, 0, 10044, '2014-08-12 18:12:08', 1),
(46, 'Upload foto from local store', '', '', 1, 0, '319c5590847b12876782282a5b037b9c.png', '', 0, 0, 10044, '2014-08-12 20:11:50', 1),
(47, 'Upload foto from local store', '', '', 1, 0, '39b12b30b3672e70a98f0b2f66bc5b08.png', '', 0, 0, 10044, '2014-08-12 20:13:15', 1),
(48, 'Upload foto from local store', '', '', 1, 0, '33150c033356e0c1de8c89bd3cd2f190.png', '', 0, 0, 10044, '2014-08-12 20:14:13', 1),
(49, 'Upload foto from local store', '', '', 1, 0, 'ecdd97890ce7849b000db8674d0c05c8.png', '', 0, 0, 10044, '2014-08-12 20:15:05', 1),
(50, 'Upload foto from local store', '', '', 1, 0, '84a7609f6418b84a612bbac955f7dfed.png', '', 0, 0, 10044, '2014-08-12 20:15:31', 1),
(51, 'Upload foto from local store', '', '', 1, 0, '1671d53ddfd2fd8244274ee4626f6f84.png', '', 0, 0, 10044, '2014-08-12 20:17:46', 1),
(52, 'Upload foto from local store', '', '', 1, 0, '9dee0e87629bdc16333aa6bb76e1ad3b.png', '', 0, 0, 10044, '2014-08-12 20:18:03', 1),
(53, 'nestle-activgro-profpic-1.png', '', 'http://localhost/nestle/nestle/public_assets/frame/ecca3bb5126cd9db8305ad8c6f647797.png', 0, 2, 'nestle-activgro-cover-1.jpg', '', 0, 36, 0, '2014-08-12 09:35:52', 1),
(54, 'nestle-activgro-profpic-2.png', '', 'http://localhost/nestle/nestle/public_assets/frame/f7ccd75d691f8e1511f121544976a346.png', 0, 2, 'nestle-activgro-cover-2.jpg', '', 0, 35, 0, '2014-08-12 09:35:40', 1),
(55, 'Upload foto from local store', '', '', 1, 0, '0b994d2e496b70b5fcae12226993c9da.png', '', 0, 0, 10044, '2014-08-13 13:09:08', 1),
(56, 'Upload foto from local store', '', '', 1, 0, '204587a242157e0c9cb5d3474660f153.png', '', 0, 0, 10044, '2014-08-13 13:14:25', 1),
(57, 'Upload foto from local store', '', '', 1, 0, 'a2e48b6725db9c375b34181b92bbaa75.png', '', 0, 0, 10044, '2014-08-13 13:31:00', 1),
(58, 'Upload foto from album facebook', '', '', 1, 0, '3c69e224f358c3139b32fef4954b6e448323cd0d.jpg', '', 0, 0, 10044, '2014-08-13 16:02:43', 1),
(59, 'Upload foto from local store', '', '', 1, 0, '30d4841794c43fa635dc73755085b8db.jpg', '', 0, 0, 10044, '2014-08-13 17:32:38', 1),
(60, 'Upload foto from local store', '', '', 1, 0, '90c6734d96d70c91b41a5ae945655c3a.png', '', 0, 0, 10044, '2014-08-13 17:51:38', 1),
(61, 'Upload foto from local store', '', '', 1, 0, '00ebe8ea57b6d8e34ea353be47969dfe.png', '', 0, 0, 10044, '2014-08-13 19:02:25', 1),
(62, 'Upload foto from local store', '', '', 1, 0, '3a6c6d0e6fe839ff65855654aebf9bb5.jpg', '', 0, 0, 10044, '2014-08-13 19:32:54', 1),
(63, 'Upload foto from local store', '', '', 1, 0, 'ca24981f1ea05adc9c1b12de6e752cee.jpg', '', 0, 0, 10044, '2014-08-13 20:03:33', 1),
(64, 'Upload foto from local store', '', '', 1, 0, '9b07c18281f296295b564869f3d8cf0c.png', '', 0, 0, 10044, '2014-08-13 20:27:50', 1),
(65, 'Upload foto from local store', '', '', 1, 0, '50874f0d21603d58a2303b465c522136.jpg', '', 0, 0, 10044, '2014-08-13 20:28:34', 1),
(66, 'Upload foto from local store', '', '', 1, 0, '966b09902fe835c24f6c813deccc4b8d.jpg', '', 0, 0, 10044, '2014-08-13 23:17:42', 1),
(67, 'Upload foto from local store', '', '', 1, 0, '17659664fb47908bf583d728766e7cf9.png', '', 0, 0, 10044, '2014-08-13 23:28:11', 1),
(68, 'Upload foto from local store', '', '', 1, 0, '944c48a131c4bc96eb6dabdbb8279118.png', '', 0, 0, 10044, '2014-08-13 23:33:08', 1),
(69, 'Upload foto from local store', '', '', 1, 0, 'e3c5d9ef7407da9a4efd7f686cfa9804.jpg', '', 0, 0, 10044, '2014-08-13 23:36:14', 1),
(70, 'Upload foto from local store', '', '', 1, 0, '31a5a95795db45d7f00b13d1bfb75158.png', '', 0, 0, 10044, '2014-08-14 00:26:29', 1),
(71, 'Upload foto from local store', '', '', 1, 0, '01caea4aaff355e332c2935430ce3554.jpg', 'cropped_01caea4aaff355e332c2935430ce3554.jpg', 0, 0, 10044, '2014-08-14 00:26:40', 1),
(72, 'Upload foto from local store', '', '', 1, 0, '6a50e3c0c147c57de43d4f0322fff5ad.jpg', 'cropped_6a50e3c0c147c57de43d4f0322fff5ad.jpg', 0, 0, 10044, '2014-08-14 00:29:45', 1),
(73, 'Upload foto from local store', '', '', 1, 0, '166e923e71665ae334fbaa3558e02c2b.jpg', 'cropped_166e923e71665ae334fbaa3558e02c2b.jpg', 0, 0, 10044, '2014-08-14 00:30:33', 1),
(74, 'Upload foto from local store', '', '', 1, 0, 'f28318ce7744dd757dba4fdbe5e4c3d4.jpg', 'cropped_f28318ce7744dd757dba4fdbe5e4c3d4.jpg', 0, 0, 10044, '2014-08-14 00:31:24', 1),
(75, 'Upload foto from local store', '', '', 1, 0, '5af14a45d96af07bc6000e7124a6cbe4.png', 'cropped_5af14a45d96af07bc6000e7124a6cbe4.png', 0, 0, 10044, '2014-08-14 00:32:00', 1),
(76, 'Upload foto from local store', '', '', 1, 0, '14294fdedb34b4d7fa84a53f92fd8de7.png', 'cropped_14294fdedb34b4d7fa84a53f92fd8de7.png', 0, 0, 10044, '2014-08-14 00:32:55', 1),
(77, 'Upload foto from local store', '', '', 1, 0, '38d0788343f37315d2b1b9d188254f17.png', 'cropped_38d0788343f37315d2b1b9d188254f17.png', 0, 0, 10044, '2014-08-14 00:33:54', 1),
(78, 'Upload foto from local store', '', '', 1, 0, 'a2cab3976cbe6a5e946acb9a36140602.png', 'cropped_a2cab3976cbe6a5e946acb9a36140602.png', 0, 0, 10044, '2014-08-14 00:35:21', 1),
(79, 'Upload foto from local store', '', '', 1, 0, '5754692794cc5ee2444ae14dd162dfa3.png', 'cropped_5754692794cc5ee2444ae14dd162dfa3.png', 0, 0, 10044, '2014-08-14 00:35:57', 1),
(80, 'Upload foto from local store', '', '', 1, 0, '9e3592f3759abede5490c798ffef0218.png', 'cropped_9e3592f3759abede5490c798ffef0218.png', 0, 0, 10044, '2014-08-14 00:41:16', 1),
(81, 'Upload foto from local store', '', '', 1, 0, '005cf4d0d08a9b45191d00fdc49e1f21.png', 'cropped_005cf4d0d08a9b45191d00fdc49e1f21.png', 0, 0, 10044, '2014-08-14 00:49:25', 1),
(82, 'Upload foto from local store', '', '', 1, 0, '32fb2b04db2cb75bf263bfa493fc80f8.jpg', 'cropped_32fb2b04db2cb75bf263bfa493fc80f8.jpg', 0, 0, 10044, '2014-08-14 00:51:49', 1),
(83, 'Upload foto from local store', '', '', 1, 0, 'c1fa3ec033258a6f9ba8fa7563d4d65c.jpg', '', 0, 0, 10044, '2014-08-14 01:18:20', 1),
(84, 'Upload foto from local store', '', '', 1, 0, 'b96dc4694c3e36d3c988b17fa5b5b0f5.jpg', '', 0, 0, 10044, '2014-08-14 01:18:43', 1),
(85, 'Upload foto from local store', '', '', 1, 0, '70761957f4286282eb99ac9bdb18ed87.jpg', 'cropped_70761957f4286282eb99ac9bdb18ed87.jpg', 0, 0, 10044, '2014-08-14 01:19:27', 1),
(86, 'Upload foto from local store', '', '', 1, 0, 'bd8655360c0ac264386bc3dafa9916d8.jpg', 'cropped_bd8655360c0ac264386bc3dafa9916d8.jpg', 0, 0, 10044, '2014-08-14 01:31:36', 1),
(87, 'Upload foto from local store', '', '', 1, 0, 'b37b0f7340eb2d9251bc1a751988da2f.png', 'cropped_b37b0f7340eb2d9251bc1a751988da2f.png', 0, 0, 10044, '2014-08-14 01:44:51', 1),
(88, 'Upload foto from local store', '', '', 1, 0, '4ad8b65884e23b3421499843cf3c1fc5.png', 'cropped_4ad8b65884e23b3421499843cf3c1fc5.png', 0, 0, 10044, '2014-08-14 02:18:19', 1),
(89, 'Upload foto from local store', '', '', 1, 0, '03783fca272c7643459994f324dec880.jpg', 'cropped_03783fca272c7643459994f324dec880.jpg', 0, 0, 10044, '2014-08-14 02:19:43', 1),
(90, 'Upload foto from local store', '', '', 1, 0, '2c9f04eca5c8830dd45a538c4ba57bcb.jpg', '', 0, 0, 10044, '2014-08-14 02:27:55', 1),
(91, 'Upload foto from local store', '', '', 1, 0, '56e835af5b26104cc19d49b0b6d7bbb4.jpg', 'cropped_56e835af5b26104cc19d49b0b6d7bbb4.jpg', 0, 0, 10044, '2014-08-14 02:28:21', 1),
(92, 'Upload foto from local store', '', '', 1, 0, '6c314dab7538e464f797e75659157792.jpg', 'cropped_6c314dab7538e464f797e75659157792.jpg', 0, 0, 10044, '2014-08-14 02:29:36', 1),
(93, 'Upload foto from local store', '', '', 1, 0, 'b601c835b94525f423d9f78a79338242.png', 'cropped_b601c835b94525f423d9f78a79338242.png', 0, 0, 10044, '2014-08-14 02:36:23', 1),
(94, 'Upload foto from local store', '', '', 1, 0, '984f60073585ad03611ac8d63803b964.png', '', 0, 0, 10044, '2014-08-14 02:37:49', 1),
(95, 'Upload foto from local store', '', '', 1, 0, 'e89c19bcde2f45efb6bac1f45d3248a3.png', 'cropped_e89c19bcde2f45efb6bac1f45d3248a3.png', 0, 0, 10044, '2014-08-14 02:50:39', 1),
(96, 'Upload foto from local store', '', '', 1, 0, '6be6843322a3c15d65451bc1e9eb7d34.jpg', 'cropped_6be6843322a3c15d65451bc1e9eb7d34.jpg', 0, 0, 10044, '2014-08-14 08:15:00', 1),
(97, 'Upload foto from local store', '', '', 1, 0, '54f8d81fbf3a1dfb75bfa738c27718c9.png', 'cropped_54f8d81fbf3a1dfb75bfa738c27718c9.png', 0, 0, 10044, '2014-08-14 08:28:18', 1),
(98, 'Upload foto from local store', '', '', 1, 0, '62e0516f26bb018459d505abee7493d4.png', '', 0, 0, 10044, '2014-08-14 08:41:49', 1),
(99, 'Upload foto from local store', '', '', 1, 0, '92ba8ad88b0b90be5d410cbb7a34526f.png', '', 0, 0, 10044, '2014-08-14 08:48:49', 1),
(100, 'Upload foto from local store', '', '', 1, 0, 'c4107a7477c0fafeebacf5ae2e1d6d5d.png', '', 0, 0, 10044, '2014-08-14 08:51:15', 1),
(101, 'Upload foto from local store', '', '', 1, 0, 'fb992a0a66c70909b74118b1b414e321.png', '', 0, 0, 10044, '2014-08-14 08:52:34', 1),
(102, 'Upload foto from local store', '', '', 1, 0, 'ade9ff7334f50208d19f71eb0ee92b21.png', '', 0, 0, 10044, '2014-08-14 08:53:45', 1),
(103, 'Upload foto from local store', '', '', 1, 0, '11c869f0532c244c84b4c11b5ea4cca8.png', '', 0, 0, 10044, '2014-08-14 09:15:54', 1),
(104, 'Upload foto from local store', '', '', 1, 0, '2660b504a991503bc1a896020a1e5b70.png', '', 0, 0, 10044, '2014-08-14 09:20:39', 1),
(105, 'Upload foto from local store', '', '', 1, 0, 'c52fffff16736f9d0588b1bec498cd5e.png', '', 0, 0, 10044, '2014-08-14 09:21:27', 1),
(106, 'Upload foto from local store', '', '', 1, 0, '85ad96232d55284c1245d8c92b248925.png', '', 0, 0, 10044, '2014-08-14 09:28:40', 1),
(107, 'nestle-activgro-profpic-1.png', '', 'de67dd8684bd5af086dc3334c71a6136.png', 2, 1, 'http://localhost/nestle/nestle/public_assets/frame/de67dd8684bd5af086dc3334c71a6136.png', '', 0, 0, 0, '2014-08-14 10:19:37', 0),
(108, 'Upload foto from local store', '', '', 1, 0, '6f9f913eec76d9a4c9f210fdeb75d461.jpg', '', 0, 0, 10046, '2014-08-14 11:57:57', 1),
(109, 'Upload foto from local store', '', '', 1, 0, '391ac9dd2a8466618290e4b6b6035f87.jpeg', '', 0, 0, 10044, '2014-08-15 11:25:09', 1),
(110, 'Upload foto from local store', '', '', 1, 0, 'c441ecf8564aee19701a8ec988d99c6f.jpeg', '', 0, 0, 10044, '2014-08-15 11:45:44', 1),
(111, 'Upload foto from local store', '', '', 1, 0, '74e4baf85dfbf853ca518c7a7739b486.jpeg', '', 0, 0, 10044, '2014-08-15 11:46:15', 1),
(112, 'Upload foto from local store', '', '', 1, 0, '57c86d7dded34df6f1369c724c1d44c2.jpeg', '', 0, 0, 10044, '2014-08-15 12:16:09', 1),
(113, 'Upload foto from local store', '', '', 1, 0, '608d8fd77105face306f75437e382f96.jpeg', '', 0, 0, 10044, '2014-08-15 12:18:06', 1),
(114, 'Upload foto from local store', '', '', 1, 0, '51551877dbfce44c43b65e58005f8234.jpeg', '', 0, 0, 10044, '2014-08-15 12:20:23', 1),
(115, 'Upload foto from local store', '', '', 1, 0, 'e2b9048027d06a35f00a7989687c7def.jpeg', '', 0, 0, 10044, '2014-08-15 12:25:35', 1),
(116, 'Upload foto from local store', '', '', 1, 0, '67fdccd16c7cfecc8b0dd8d3cf151acd.png', '', 0, 0, 10044, '2014-08-15 13:36:19', 1),
(117, 'Upload foto from local store', '', '', 1, 0, 'e4d75f2ad16e82f1cb90fdf7bbf33f56.jpeg', '', 0, 0, 10044, '2014-08-15 13:44:53', 1),
(118, 'Upload foto from local store', '', '', 1, 0, '911f418f892888ac04f2ce2959a6acee.png', '', 0, 0, 10044, '2014-08-19 19:17:42', 1),
(119, 'Upload foto from local store', '', '', 1, 0, '78e3fa55833cccec7cb21f2e284014d9.png', '', 0, 0, 10044, '2014-08-20 09:11:53', 1),
(120, 'Upload foto from local store', '', '', 1, 0, 'd72a1816c7f98223c53a3cbd5eb50514.jpg', '', 0, 0, 10069, '2014-08-20 10:09:53', 1),
(121, 'Upload foto from local store', '', '', 1, 0, '1cccb8500946b53636da8cff67457c5f.png', '', 0, 0, 10068, '2014-08-21 17:48:46', 1),
(122, 'Upload foto from local store', '', '', 1, 0, 'a6ca9431abc571e712e632d72c8e3173.png', '', 0, 0, 10068, '2014-08-21 20:17:08', 1),
(123, 'Upload foto from local store', '', '', 1, 0, 'a48da439c9fb0ea220d0ffacf530c2de.png', '', 0, 0, 10068, '2014-08-21 20:46:09', 1),
(124, 'Upload foto from local store', '', '', 1, 0, 'cce02794093cc799938e174f5be557ac.png', '', 0, 0, 10068, '2014-08-21 21:02:08', 1),
(125, 'Upload foto from local store', '', '', 1, 0, 'fc9d8bd201f70aba7da3f483abc82184.png', '', 0, 0, 10068, '2014-08-21 21:47:26', 1),
(126, 'Upload foto from local store', '', '', 1, 0, '4d3bef4a41f5e720e244195eea0b9b39.png', '', 0, 0, 10068, '2014-08-21 21:53:18', 1),
(127, 'Upload foto from local store', '', '', 1, 0, '9701bb3d010180a7c125184a93784fae.png', '', 0, 0, 10068, '2014-08-21 21:55:14', 1),
(128, 'Upload foto from local store', '', '', 1, 0, 'f6a394d99ed21935a0b0095e4af32c08.jpg', '', 0, 0, 10068, '2014-08-22 09:46:12', 1),
(129, 'Upload foto from local store', '', '', 1, 0, '766bc61edbcfba4930a3ed0ede8dcc59.jpg', '', 0, 0, 10068, '2014-08-22 10:00:31', 1),
(130, 'Upload foto from local store', '', '', 1, 0, '5219ce698ede79914a419c05a572cdcd.jpg', '', 0, 0, 10068, '2014-08-22 10:01:57', 1),
(131, 'Upload foto from local store', '', '', 1, 0, '2c4be5b49756792a14ba4d7daf89d16c.jpg', '', 0, 0, 10068, '2014-08-22 10:12:53', 1),
(132, 'Upload foto from local store', '', '', 1, 0, '15831c6c8b4d8e9d315e79fb7f513004.jpg', '', 0, 0, 10068, '2014-08-22 10:46:53', 1),
(133, 'Upload foto from local store', '', '', 1, 0, 'a1adf3a77a6483f7dc244ed8b8bca5ae.jpg', '', 0, 0, 10068, '2014-08-22 10:58:00', 1),
(134, 'Upload foto from local store', '', '', 1, 0, '79827175d41d8a949bf2c5d175290888.png', '', 0, 0, 10068, '2014-08-22 12:19:54', 1),
(135, 'Upload foto from local store', '', '', 1, 0, 'f1d58bfbcbc7c0b893edacbf5f42497f.png', '', 0, 0, 10068, '2014-08-22 13:38:53', 1),
(136, 'Upload foto from local store', '', '', 1, 0, 'd194a5df903795d3d33e919aa91e702e.png', '', 0, 0, 10068, '2014-08-22 15:21:07', 1),
(137, 'Upload foto from local store', '', '', 1, 0, 'f30637dd716c1b5e899215dd615a1216.png', '', 0, 0, 10068, '2014-08-22 15:27:33', 1),
(138, 'Upload foto from local store', '', '', 1, 0, '754da719a45b7043bc6759b484190e18.jpg', '', 0, 0, 10068, '2014-08-22 16:23:29', 1),
(139, 'Upload foto from local store', '', '', 1, 0, 'd970e19cbb5e3bafc3e0639c36f23dd8.png', '', 0, 0, 10068, '2014-08-22 16:49:32', 1),
(140, 'creative', '', 'ad8beac50ccb17340e2aceaa8fce3cfc.png', 4, 1, 'ad8beac50ccb17340e2aceaa8fce3cfc.png', '', 0, 0, 0, '2014-08-23 16:50:44', 1),
(141, 'creative', '', '46fb8dd5a2d3f2b19f70e61570357c04.jpg', 4, 2, '46fb8dd5a2d3f2b19f70e61570357c04.jpg', '', 0, 140, 0, '2014-08-23 16:50:44', 1),
(142, 'music', '', 'e2fd032d59adf5ff324125e8154398cc.png', 4, 1, 'e2fd032d59adf5ff324125e8154398cc.png', '', 0, 0, 0, '2014-08-23 16:51:37', 1),
(143, 'music', '', '8664e58e195cbdc57752f2e34ed75726.jpg', 4, 2, '8664e58e195cbdc57752f2e34ed75726.jpg', '', 0, 142, 0, '2014-08-23 16:51:37', 1),
(144, 'outdoor', '', '15af537619441d1c9179f773cca5c356.png', 4, 1, '15af537619441d1c9179f773cca5c356.png', '', 0, 0, 0, '2014-08-23 16:52:13', 0),
(145, 'outdoor', '', '70d60deed9a330f97e16eea6bc8404af.jpg', 4, 2, '70d60deed9a330f97e16eea6bc8404af.jpg', '', 0, 144, 0, '2014-08-23 16:52:13', 1),
(146, 'promo', '', '161197201ba5f556eeb8e12977badefc.png', 4, 1, '161197201ba5f556eeb8e12977badefc.png', '', 0, 0, 0, '2014-08-23 16:52:36', 0),
(147, 'promo', '', '0020229e51c6548d74ae5a2877895203.jpg', 4, 2, '0020229e51c6548d74ae5a2877895203.jpg', '', 0, 146, 0, '2014-08-23 16:52:36', 1),
(148, 'animal', '', 'a13de5ba065c6baf86ba36387b33caac.png', 5, 1, 'a13de5ba065c6baf86ba36387b33caac.png', '', 0, 0, 0, '2014-08-23 16:53:39', 0),
(149, 'animal', '', '1d11c7ff171bb3d6f9688271b0c387fe.jpg', 5, 2, '1d11c7ff171bb3d6f9688271b0c387fe.jpg', '', 0, 148, 0, '2014-08-23 16:53:39', 1),
(150, 'creative', '', 'd1d489c2b22b46bd20184bea22ccb59e.png', 5, 1, 'd1d489c2b22b46bd20184bea22ccb59e.png', '', 0, 0, 0, '2014-08-23 16:53:58', 0),
(151, 'creative', '', '24d40143ffeb2ff08fe09b1d69f20917.jpg', 5, 2, '24d40143ffeb2ff08fe09b1d69f20917.jpg', '', 0, 150, 0, '2014-08-23 16:53:58', 1),
(152, 'music', '', '8d7e80b94d24004b845b3f195b1bc80f.png', 5, 1, '8d7e80b94d24004b845b3f195b1bc80f.png', '', 0, 0, 0, '2014-08-23 16:54:14', 0),
(153, 'music', '', 'c06e8f6a689d8694567ff2ff8f6340d6.jpg', 5, 2, 'c06e8f6a689d8694567ff2ff8f6340d6.jpg', '', 0, 152, 0, '2014-08-23 16:54:14', 1),
(154, 'outdoor', '', 'c06ba243c3653d3d654c0c5a8511c6ff.png', 5, 1, 'c06ba243c3653d3d654c0c5a8511c6ff.png', '', 0, 0, 0, '2014-08-23 16:54:30', 0),
(155, 'outdoor', '', '49b2237c137b9de8e860fe0a3c381496.jpg', 5, 2, '49b2237c137b9de8e860fe0a3c381496.jpg', '', 0, 154, 0, '2014-08-23 16:54:30', 1),
(156, 'Upload foto from local store', '', '', 1, 0, '7f8949866d368f9d9450f80aa4aaf662.jpg', '', 0, 0, 10068, '2014-08-23 21:36:38', 1),
(157, 'Upload foto from local store', '', '', 1, 0, '93fe73d36c042153882eef6d626f03bf.png', '', 0, 0, 10068, '2014-08-23 22:06:27', 1),
(158, 'Upload foto from local store', '', '', 1, 0, '9aacfebea3815bf8d7d80d37cadad56c.png', '', 0, 0, 10068, '2014-08-23 22:06:47', 1),
(159, 'Upload foto from local store', '', '', 1, 0, 'caffbe40364c947980825e136a4a7e4c.png', '', 0, 0, 10068, '2014-08-23 22:07:06', 1),
(160, 'Upload foto from local store', '', '', 1, 0, 'd9921a85305aa6d8bc22eb4a7f9dd82c.png', '', 0, 0, 10068, '2014-08-23 22:07:18', 1),
(161, 'Upload foto from local store', '', '', 1, 0, '0e8458fb62aa691ad039d616cb8fdafa.png', '', 0, 0, 10068, '2014-08-23 22:07:46', 1),
(162, 'Upload foto from local store', '', '', 1, 0, '3140fbe960c35b650a115f39e79517d8.png', '', 0, 0, 10068, '2014-08-23 22:47:09', 1),
(163, 'Upload foto from local store', '', '', 1, 0, '8321f3c1d82255304cb341293de1410d.jpg', '', 0, 0, 10068, '2014-08-23 23:07:51', 1),
(164, 'Upload foto from local store', '', '', 1, 0, '4ce2171d29d07c662a5beae3e96854fb.png', '', 0, 0, 10068, '2014-08-23 23:08:06', 1),
(165, 'Upload foto from local store', '', '', 1, 0, '2d7ce3cae9732866c87c9dfee948fad3.jpg', '', 0, 0, 10068, '2014-08-23 23:14:21', 1),
(166, 'Upload foto from local store', '', '', 1, 0, '4a094109b858db9126f37091c534ec9d.png', '', 0, 0, 10068, '2014-08-23 23:15:41', 1),
(167, 'Upload foto from local store', '', '', 1, 0, '66b85edfeb838560cfbb6c6bd9bab18d.jpg', '', 0, 0, 10068, '2014-08-23 23:16:41', 1),
(168, 'Upload foto from local store', '', '', 1, 0, 'd32bff479f9c0d7ea949ce20f96e8db6.jpg', '', 0, 0, 10068, '2014-08-23 23:17:04', 1),
(169, 'Upload foto from local store', '', '', 1, 0, '09615b10b8e4ff4f3353ef8a65ad2640.jpg', '', 0, 0, 10068, '2014-08-23 23:17:45', 1),
(170, 'Upload foto from local store', '', '', 1, 0, '3273ca82c88e3e7b548c186457085faa.jpg', '', 0, 0, 10068, '2014-08-23 23:18:25', 1),
(171, 'Upload foto from local store', '', '', 1, 0, '75f5624b827956d2a4493260813612ed.jpg', '', 0, 0, 10068, '2014-08-23 23:19:28', 1),
(172, 'Upload foto from local store', '', '', 1, 0, 'cbae6f2f07ee2825ee1fa4cb3c74ab48.jpg', '', 0, 0, 10068, '2014-08-23 23:19:49', 1),
(173, 'Upload foto from local store', '', '', 1, 0, 'a846d067287d0edfc8a6287be8cd23aa.png', '', 0, 0, 10068, '2014-08-23 23:20:02', 1),
(174, 'Upload foto from local store', '', '', 1, 0, '3cb7eb35a9a64d10935efe58cecdc334.png', '', 0, 0, 10068, '2014-08-23 23:20:40', 1),
(175, 'Upload foto from local store', '', '', 1, 0, 'a8283ec6ed55ffe9a9b362eb49dd79d3.png', '', 0, 0, 10068, '2014-08-23 23:28:49', 1),
(176, 'Upload foto from local store', '', '', 1, 0, 'a161a164a8c539c2bd877dd59add3f52.png', '', 0, 0, 10068, '2014-08-23 23:33:09', 1),
(177, 'Upload foto from local store', '', '', 1, 0, '2bacb6c68690749a98f94e26dbc4466a.png', '', 0, 0, 10068, '2014-08-23 23:33:49', 1),
(178, 'Upload foto from local store', '', '', 1, 0, 'ba97edc71502fe3e17c77c50518da2a8.png', '', 0, 0, 10068, '2014-08-23 23:34:11', 1),
(179, 'Upload foto from local store', '', '', 1, 0, '71d2a1efe07b93ddd76db27922fc1a5a.png', '', 0, 0, 10068, '2014-08-23 23:34:49', 1),
(180, 'Upload foto from local store', '', '', 1, 0, '96842058e71c8e9331906ed5d17c7ea2.png', '', 0, 0, 10068, '2014-08-23 23:37:39', 1),
(181, 'Upload foto from local store', '', '', 1, 0, '550ea7ef36eb5c0ca77f477baadb1ec1.png', '', 0, 0, 10068, '2014-08-23 23:47:15', 1),
(182, 'Upload foto from local store', '', '', 1, 0, '908ce331f381fc3e16955cbca369a2ca.png', '', 0, 0, 10068, '2014-08-23 23:48:08', 1),
(183, 'Upload foto from local store', '', '', 1, 0, '90470e454aae75182eb3a6f085f689bd.jpg', '', 0, 0, 10068, '2014-08-23 23:49:39', 1),
(184, 'Upload foto from local store', '', '', 1, 0, '34adcd6217181ab45c12d5f8b74013e4.png', '', 0, 0, 10068, '2014-08-23 23:49:54', 1),
(185, 'Upload foto from local store', '', '', 1, 0, '9d0c561b703fc90332ac61395a15143e.png', '', 0, 0, 10068, '2014-08-23 23:50:25', 1),
(186, 'Upload foto from local store', '', '', 1, 0, '9926fdd7d21c1ccebc8ce7e9757602d4.png', '', 0, 0, 10068, '2014-08-23 23:53:36', 1),
(187, 'Upload foto from local store', '', '', 1, 0, 'a259536ddcae59f40e64f1505cf6cc4b.png', '', 0, 0, 10068, '2014-08-23 23:55:49', 1),
(188, 'Upload foto from local store', '', '', 1, 0, '1c78098f0a944ac41f4eb5e294c7b59e.png', '', 0, 0, 10068, '2014-08-23 23:57:20', 1),
(189, 'Upload foto from local store', '', '', 1, 0, '4d62cac30ee9a8b4f28a208250ab65e6.png', '', 0, 0, 10068, '2014-08-24 00:01:00', 1),
(190, 'Upload foto from local store', '', '', 1, 0, '6ad04f7fb62d71231a4a4e15839fe551.png', '', 0, 0, 10068, '2014-08-24 00:01:11', 1),
(191, 'Upload foto from local store', '', '', 1, 0, '63c7485913ce3367f07866d76997bc9e.png', '', 0, 0, 10068, '2014-08-24 00:05:18', 1),
(192, 'Upload foto from local store', '', '', 1, 0, 'f952a8945d95e9836a44c3320155b3bb.png', '', 0, 0, 10068, '2014-08-24 00:07:01', 1),
(193, 'Upload foto from local store', '', '', 1, 0, '424d0d3e3c485c159f74c7c204dcfa95.png', '', 0, 0, 10068, '2014-08-24 00:09:03', 1),
(194, 'Upload foto from local store', '', '', 1, 0, '17179ce7898c536a05341c6709256371.jpg', '', 0, 0, 10068, '2014-08-24 00:20:41', 1),
(195, 'Upload foto from local store', '', '', 1, 0, '54611878ded5d2dcbef8ae44fe0c450f.jpg', '', 0, 0, 10068, '2014-08-24 00:20:59', 1),
(196, 'Upload foto from local store', '', '', 1, 0, 'a23cbf60a4b857d28c7a14e9e120d1f2.png', '', 0, 0, 10068, '2014-08-24 00:21:11', 1),
(197, 'Upload foto from local store', '', '', 1, 0, 'bac2bb0b1c340a5b7906d79c03822413.png', '', 0, 0, 10068, '2014-08-24 00:21:42', 1),
(198, 'Upload foto from local store', '', '', 1, 0, 'c38ec52ade36e5f40339d25a8b99d64c.png', '', 0, 0, 10068, '2014-08-24 00:23:04', 1),
(199, 'Upload foto from local store', '', '', 1, 0, 'ace70d02ccbb9fbd490976ca371e9378.png', '', 0, 0, 10068, '2014-08-24 00:23:25', 1),
(200, 'Upload foto from local store', '', '', 1, 0, '5aaafe65c1876480787a850a34e5d019.png', '', 0, 0, 10068, '2014-08-24 00:23:46', 1),
(201, 'Upload foto from local store', '', '', 1, 0, '5ca81e8ac8dfa025db4aa34d684eccdd.png', '', 0, 0, 10068, '2014-08-24 00:24:07', 1),
(202, 'Upload foto from local store', '', '', 1, 0, 'ca5a06a4509e13d68d3ffbc5cccc34cf.png', '', 0, 0, 10068, '2014-08-24 00:28:20', 1),
(203, 'Upload foto from local store', '', '', 1, 0, 'de5b3ac1e90639c490676530954b2af6.png', '', 0, 0, 10069, '2014-08-24 00:30:06', 1),
(204, 'Upload foto from local store', '', '', 1, 0, '416f557b169e165cd73b4133e2621e07.png', '', 0, 0, 10069, '2014-08-24 00:39:15', 1),
(205, 'Upload foto from local store', '', '', 1, 0, '8109989e65afc0f265333756f48ec309.png', '', 0, 0, 10069, '2014-08-24 00:41:05', 1),
(206, 'Upload foto from local store', '', '', 1, 0, '43fc4219adb62c43ff8d862dbfd5bc68.png', '', 0, 0, 10069, '2014-08-24 00:41:59', 1),
(207, 'Upload foto from local store', '', '', 1, 0, 'f7cad9e9a96a84810de1f3d44a761f3b.png', '', 0, 0, 10069, '2014-08-24 00:46:11', 1),
(208, 'Upload foto from local store', '', '', 1, 0, 'a118d87723b865ed52e39a1c9df24647.png', '', 0, 0, 10069, '2014-08-24 00:48:30', 1),
(209, 'Upload foto from local store', '', '', 1, 0, '850b30b7a053c0e647f36690550e9611.png', '', 0, 0, 10069, '2014-08-24 00:49:46', 1),
(210, 'Upload foto from local store', '', '', 1, 0, 'baac8bf34f44af2f1e4e0bf983dc1fcd.png', '', 0, 0, 10069, '2014-08-24 00:55:50', 1),
(211, 'Upload foto from local store', '', '', 1, 0, 'fead71b5de1373c1a7c3f229af0b91fc.png', '', 0, 0, 10069, '2014-08-24 00:56:04', 1),
(212, 'Upload foto from local store', '', '', 1, 0, '195eeab61350f24c2586d890cb6ea2fb.png', '', 0, 0, 10069, '2014-08-24 00:59:01', 1),
(213, 'Upload foto from local store', '', '', 1, 0, '6f61eed267552826241a75cfcd12a6ab.png', '', 0, 0, 10069, '2014-08-24 00:59:38', 1),
(214, 'Upload foto from local store', '', '', 1, 0, 'a082c1009eeae0b1673ebc55a3202c39.png', '', 0, 0, 10069, '2014-08-24 01:00:45', 1),
(215, 'Upload foto from local store', '', '', 1, 0, 'ef3969c460663759582b9f218819a689.png', '', 0, 0, 10069, '2014-08-24 01:01:55', 1),
(216, 'Upload foto from local store', '', '', 1, 0, 'cb4f987747226728fe764648f2690a8e.png', '', 0, 0, 10069, '2014-08-24 01:02:27', 1),
(217, 'Upload foto from local store', '', '', 1, 0, '83a0ef07a83c7650f817a69d224f3fee.png', '', 0, 0, 10069, '2014-08-24 01:02:58', 1),
(218, 'Upload foto from local store', '', '', 1, 0, '984324b192f5fdfb80398bd8d31a7f4d.png', '', 0, 0, 10069, '2014-08-24 01:14:11', 1),
(219, 'Upload foto from local store', '', '', 1, 0, '292c562df030fb893d052a3fade4d800.png', '', 0, 0, 10069, '2014-08-24 01:27:09', 1),
(220, 'Upload foto from local store', '', '', 1, 0, 'f90360fd1c6c71e90f296bd98cdd0c61.png', '', 0, 0, 10069, '2014-08-24 01:27:25', 1),
(221, 'Upload foto from local store', '', '', 1, 0, '6e7e4e27476fa40eefcf4a33ad1460aa.png', '', 0, 0, 10070, '2014-08-24 01:34:57', 1),
(222, 'Upload foto from local store', '', '', 1, 0, '7df8b7fdf14fcba93a12f15e8370c10e.png', '', 0, 0, 10069, '2014-08-24 11:57:32', 1),
(223, 'Upload foto from local store', '', '', 1, 0, 'f1ee15007731b6a236410ef992f92f4f.png', '', 0, 0, 10071, '2014-08-26 12:33:34', 1),
(224, 'Upload foto from local store', '', '', 1, 0, '40ca0bd6c35247c6b63ab933ce48f309.png', '', 0, 0, 10071, '2014-08-26 15:26:31', 1),
(225, 'Upload foto from local store', '', '', 1, 0, 'f6aa62526efde6585b8652c245042a9c.jpeg', '', 0, 0, 10072, '2014-08-26 15:45:55', 1),
(226, 'Upload foto from local store', '', '', 1, 0, '8f2434e6f62e1232f9ff55351af82b6c.png', '', 0, 0, 10072, '2014-08-26 15:46:06', 1),
(227, 'Upload foto from album facebook', '', '', 1, 0, 'ffd3d62204209c6b6970b2d2f6891ad5549bca0d.jpg', '', 0, 0, 10071, '2014-08-26 17:48:53', 1),
(228, 'Upload foto from album facebook', '', '', 1, 0, '8a4074e87e0ea2b6f4e257d23abd8fc15725310a.jpg', '', 0, 0, 10071, '2014-08-26 17:51:15', 1),
(229, 'Upload foto from album facebook', '', '', 1, 0, 'ffd3d62204209c6b6970b2d2f6891ad5549bca0d.jpg', '', 0, 0, 10071, '2014-08-26 17:51:59', 1),
(230, 'Upload foto from album facebook', '', '', 1, 0, 'f2ffb77d4b0c4f3476f636023c633ddf0e8bb0d4.jpg', '', 0, 0, 10071, '2014-08-26 17:54:59', 1),
(231, 'Upload foto from album facebook', '', '', 1, 0, 'f2ffb77d4b0c4f3476f636023c633ddf0e8bb0d4.jpg', '', 0, 0, 10071, '2014-08-26 17:56:02', 1),
(232, 'Upload foto from album facebook', '', '', 1, 0, '65b99303c504e8fdb58cdee41f05e7dcb66d69fa.jpg', '', 0, 0, 10071, '2014-08-26 17:59:59', 1),
(233, 'Upload foto from album facebook', '', '', 1, 0, 'e02f85118b5752aa16c90fa3a67d6e427400c9a3.jpg', '', 0, 0, 10071, '2014-08-26 18:21:47', 1),
(234, 'Upload foto from album facebook', '', '', 1, 0, '3c69e224f358c3139b32fef4954b6e448323cd0d.jpg', '', 0, 0, 10071, '2014-08-26 19:52:46', 1),
(235, 'Upload foto from local store', '', '', 1, 0, '1efc70b22bbb3279d33484288c1800b4.jpeg', '', 0, 0, 10071, '2014-08-26 19:58:11', 1),
(236, 'Upload foto from local store', '', '', 1, 0, '91d4de4154a1613e06f46b8a4d382d15.png', '', 0, 0, 10071, '2014-08-27 10:56:26', 1),
(237, 'Upload foto from local store', '', '', 1, 0, 'de28637b7f706f5ce07599722d5b7b66.png', '', 0, 0, 10071, '2014-08-27 11:05:11', 1),
(238, 'Upload foto from local store', '', '', 1, 0, '5d4fa0b2f64d55f8c4435d7121f64998.png', '', 0, 0, 10071, '2014-08-27 11:06:00', 1),
(239, 'Upload foto from local store', '', '', 1, 0, '707ddf9f466d330f39d2503a8814045a.png', '', 0, 0, 10071, '2014-08-27 12:53:05', 1),
(240, 'Upload foto from local store', '', '', 1, 0, '7fa1f43aa3ba666db17cdcf50a144be2.png', '', 0, 0, 10071, '2014-09-01 01:42:29', 1),
(241, 'Upload foto from local store', '', '', 1, 0, '4c1e1691672cd11a73c206c3da724d1c.png', '', 0, 0, 10072, '2014-09-01 01:54:58', 1),
(242, 'Upload foto from local store', '', '', 1, 0, '647248bd3fdba6c5ab20f1450c2ff876.png', '', 0, 0, 10072, '2014-09-01 01:55:13', 1),
(243, 'Upload foto from local store', '', '', 1, 0, '4fd3e66ad07b379c406f507e00500516.png', '', 0, 0, 10071, '2014-09-02 01:21:57', 1),
(244, 'Upload foto from local store', '', '', 1, 0, 'cefe75c31388d730144042111d5eea34.png', '', 0, 0, 10072, '2014-09-02 12:57:56', 1),
(245, 'Creative', '', '76b8e6de15f12d52cfa165d42665aea7.png', 5, 1, '76b8e6de15f12d52cfa165d42665aea7.png', '', 0, 0, 0, '2014-09-02 13:01:58', 1),
(246, 'Creative', '', '7ac3b5755dccaa863be59b8db3c688e6.jpg', 5, 2, '7ac3b5755dccaa863be59b8db3c688e6.jpg', '', 0, 245, 0, '2014-09-02 13:01:58', 1),
(247, 'Upload foto from local store', '', '', 1, 0, 'd340b191f26678ca1a4db76070e48b86.png', '', 0, 0, 10072, '2014-09-02 13:02:30', 1),
(248, 'Upload foto from local store', '', '', 1, 0, '3a9d79a8800f04fe285b36cacc301166.jpeg', '', 0, 0, 10071, '2014-09-02 13:36:08', 1),
(249, 'Upload foto from local store', '', '', 1, 0, '820e222e0ba1913b42dacdf4cf2fd098.png', '', 0, 0, 10071, '2014-09-02 16:03:43', 1),
(250, 'Upload foto from local store', '', '', 1, 0, '7330d2a40efd9faecf87eec3989b8b37.jpg', '', 0, 0, 10072, '2014-09-02 20:54:06', 1),
(251, 'Upload foto from local store', '', '', 1, 0, 'ec5d2f4f3a898c7ff6d3fba547f49706.jpg', '', 0, 0, 10072, '2014-09-02 20:54:45', 1),
(252, 'Upload foto from local store', '', '', 1, 0, '276dc8471a5fc440a76656a6e54884ea.jpg', '', 0, 0, 10071, '2014-09-02 22:58:26', 1),
(253, 'Upload foto from local store', '', '', 1, 0, 'a116470acf6b3fb285a46696ad021bb9.png', '', 0, 0, 10071, '2014-09-03 17:16:54', 1),
(254, 'Upload foto from local store', '', '', 1, 0, 'a4b49fa23deec298075d25702369264c.png', '', 0, 0, 10071, '2014-09-04 16:34:52', 1),
(255, 'Upload foto from local store', '', '', 1, 0, '63c6009a5ee0484e95d31de12f4cb1d1.png', '', 0, 0, 10071, '2014-09-04 16:34:52', 1),
(256, 'Upload foto from local store', '', '', 1, 0, '694a1c0511c7a770ca568419174fa860.jpg', '', 0, 0, 10072, '2014-09-04 17:42:03', 1),
(257, 'Upload foto from local store', '', '', 1, 0, 'ab4ca6141cb24dc1273d77e357b72ba3.jpg', '', 0, 0, 10072, '2014-09-04 17:42:04', 1),
(258, 'Upload foto from local store', '', '', 1, 0, 'ea77281b6ff71fea712e9c0238b727c6.png', '', 0, 0, 10072, '2014-09-04 18:52:50', 1),
(259, 'Upload foto from local store', '', '', 1, 0, 'e1f587d2d13ce4b42c2511a52f4d388e.png', '', 0, 0, 10072, '2014-09-04 18:52:51', 1),
(260, 'Upload foto from local store', '', '', 1, 0, '7a46e7e04448aeed8fd4561932153284.png', '', 0, 0, 10072, '2014-09-04 21:44:33', 1),
(261, 'Upload foto from local store', '', '', 1, 0, '2f6c0936eee6bd7eed227e297e338391.png', '', 0, 0, 10072, '2014-09-04 21:44:33', 1),
(262, 'Upload foto from album facebook', '', '', 1, 0, 'ffd3d62204209c6b6970b2d2f6891ad5549bca0d.jpg', '', 0, 0, 10071, '2014-09-05 09:39:27', 1),
(263, 'Upload foto from local store', '', '', 1, 0, 'c3005b67cbcdda492ab0666453def94f.png', '', 0, 0, 10071, '2014-09-05 09:41:24', 1),
(264, 'Upload foto from local store', '', '', 1, 0, '95e91f741ff70e13fe71f36929a037fe.png', '', 0, 0, 10071, '2014-09-05 09:41:25', 1),
(265, 'Upload foto from local store', '', '', 1, 0, 'db126ac843f81b969b3ea1e3521e1de3.png', '', 0, 0, 10071, '2014-09-05 16:31:25', 1),
(266, 'Upload foto from local store', '', '', 1, 0, '990e8ce858d24c650a66b7bbe00b182b.png', '', 0, 0, 10071, '2014-09-05 16:31:25', 1),
(267, 'Upload foto from local store', '', '', 1, 0, '2f7e04da10983444815efde9a5dc67a6.png', '', 0, 0, 10071, '2014-09-05 17:09:19', 1),
(268, 'Upload foto from local store', '', '', 1, 0, '133f4e182f18acd2eb6bf2522a1830e5.png', '', 0, 0, 10071, '2014-09-05 17:09:20', 1),
(269, 'Upload foto from local store', '', '', 1, 0, '835ffc92e3e2abe218cde6d39b6af0c0.png', '', 0, 0, 10071, '2014-09-05 17:51:11', 1),
(270, 'Upload foto from local store', '', '', 1, 0, '5377f2820e27b222ac2a3b7c838327d9.png', '', 0, 0, 10071, '2014-09-05 17:51:11', 1),
(271, 'Upload foto from local store', '', '', 1, 0, 'ecab44ef27e4cddae39284066dc9ac61.png', '', 0, 0, 10071, '2014-09-05 17:51:53', 1),
(272, 'Upload foto from local store', '', '', 1, 0, '23dfe37276bdd122dcea392f164e41af.png', '', 0, 0, 10071, '2014-09-05 17:51:54', 1),
(273, 'Upload foto from local store', '', '', 1, 0, '821ec1971ac84f85ffe62c3fd66468fd.png', '', 0, 0, 10071, '2014-09-05 17:52:48', 1),
(274, 'Upload foto from local store', '', '', 1, 0, '18ceac29d476d6b17715b8623261d408.png', '', 0, 0, 10071, '2014-09-05 17:52:49', 1),
(275, 'Upload foto from local store', '', '', 1, 0, '7997948a624ed1ea73521c51759e71e8.png', '', 0, 0, 10071, '2014-09-05 19:51:36', 1),
(276, 'Upload foto from local store', '', '', 1, 0, '86e3239d91435ae5617b08ad7d878d00.png', '', 0, 0, 10071, '2014-09-05 19:51:38', 1),
(277, 'Upload foto from local store', '', '', 1, 0, 'c827bd36125b6d29eaa64c878f424dab.png', '', 0, 0, 10072, '2014-09-05 19:58:55', 1),
(278, 'Upload foto from local store', '', '', 1, 0, 'f182dd2576d2d951381ae0b528a951ea.png', '', 0, 0, 10072, '2014-09-05 19:58:56', 1),
(279, 'Upload foto from local store', '', '', 1, 0, '92de039a2e127d5760cbd365df88e376.png', '', 0, 0, 10071, '2014-09-05 20:05:38', 1),
(280, 'Upload foto from local store', '', '', 1, 0, '06c8e6b97b4ccce09551f9985bcaf696.png', '', 0, 0, 10071, '2014-09-05 20:05:38', 1),
(281, 'Upload foto from local store', '', '', 1, 0, '0e7b5f100731cce1cb52bdc16207a0f1.png', '', 0, 0, 10072, '2014-09-07 23:21:34', 1),
(282, 'Upload foto from local store', '', '', 1, 0, 'a36599e75a09fef412cf5de5c544931c.png', '', 0, 0, 10072, '2014-09-07 23:21:34', 1),
(283, 'Upload foto from local store', '', '', 1, 0, 'd54ba0740893c757182683e747e71e34.png', '', 0, 0, 10072, '2014-09-07 23:32:35', 1),
(284, 'Upload foto from local store', '', '', 1, 0, 'bdf3f799c9c9881da2b4ef2d892b3a8a.png', '', 0, 0, 10072, '2014-09-07 23:32:36', 1),
(285, 'Upload foto from local store', '', '', 1, 0, 'bd7a35254d1c61097ac6a25d7454b4ad.png', '', 0, 0, 10072, '2014-09-07 23:33:16', 1),
(286, 'Upload foto from local store', '', '', 1, 0, '71b55f2891a07a3252939d33a1b64eb6.png', '', 0, 0, 10072, '2014-09-07 23:33:17', 1),
(287, 'Upload foto from local store', '', '', 1, 0, '342cf71703e802c8cfcf4da9f0ac749f.png', '', 0, 0, 10072, '2014-09-07 23:34:27', 1),
(288, 'Upload foto from local store', '', '', 1, 0, '1d1c0d1dcac045988e154f60456d6d1d.png', '', 0, 0, 10072, '2014-09-07 23:34:27', 1),
(289, 'Upload foto from local store', '', '', 1, 0, '079c69abe3fd4c2a4fde00c41f03014c.png', '', 0, 0, 10072, '2014-09-07 23:36:05', 1),
(290, 'Upload foto from local store', '', '', 1, 0, 'f438735719aae91f0b1e420d728b8eb1.png', '', 0, 0, 10072, '2014-09-07 23:37:01', 1),
(291, 'Upload foto from local store', '', '', 1, 0, 'de329d962522669c9069481782e3fdd2.jpg', '', 0, 0, 10072, '2014-09-11 15:57:25', 1),
(292, 'animal', '', 'a68f5768ff5425cb6193fea979c773a0.png', 5, 1, 'a68f5768ff5425cb6193fea979c773a0.png', '', 0, 0, 0, '2014-09-19 14:07:39', 1),
(293, 'animal', '', '3170d43332b2d8c4512ae00a64cc8932.jpg', 5, 2, '3170d43332b2d8c4512ae00a64cc8932.jpg', '', 0, 292, 0, '2014-09-19 14:07:39', 1),
(294, 'Upload foto from local store', '', '', 1, 0, '8970fdc3ed374e1678788dfbe42dbc15.jpg', '', 0, 0, 10072, '2014-09-19 15:30:35', 1),
(295, 'Upload foto from local store', '', '', 1, 0, '7b6fdc09991f23f28d0357c8a650c809.jpg', '', 0, 0, 10072, '2014-09-19 15:35:43', 1),
(296, 'Upload foto from local store', '', '', 1, 0, '12e2c8b9cf9db15a244ad1726b35fa6f.jpg', '', 0, 0, 10072, '2014-09-19 17:44:02', 1),
(297, 'Upload foto from local store', '', '', 1, 0, '18d76aed2d9ed8ece8e19a99e05ca674.jpg', '', 0, 0, 10072, '2014-09-19 18:30:55', 1),
(298, 'Upload foto from local store', '', '', 1, 0, '2c947ef3c3aebd7b3166c86db590dc4e.png', '', 0, 0, 10072, '2014-09-19 18:48:04', 1),
(299, 'Upload foto from local store', '', '', 1, 0, '89b508f7b171539fc1286014526fbf3a.png', '', 0, 0, 10072, '2014-09-19 18:55:26', 1),
(300, 'Upload foto from local store', '', '', 1, 0, 'bef912cf6d451da40a3ff15b07210887.png', '', 0, 0, 10072, '2014-09-19 19:06:12', 1),
(301, 'Upload foto from local store', '', '', 1, 0, 'c4ce04aa3115b285de15759d0c0ea8ca.png', '', 0, 0, 10072, '2014-09-19 19:06:52', 1),
(302, 'Upload foto from local store', '', '', 1, 0, '2d903724f3837241b5f50d7b1dd807c8.jpg', '', 0, 0, 10072, '2014-09-19 19:07:47', 1),
(303, 'Upload foto from local store', '', '', 1, 0, '87c22792d3de72846ee004f858f71feb.png', '', 0, 0, 10072, '2014-09-19 19:09:04', 1),
(304, 'Upload foto from local store', '', '', 1, 0, '1e8b521c027c8583874aca7f576fa1c0.jpg', '', 0, 0, 10072, '2014-09-19 19:09:33', 1),
(305, 'Upload foto from local store', '', '', 1, 0, 'b12b84164e9cb1ec45f337e170ac19d7.jpg', '', 0, 0, 10072, '2014-09-19 19:27:40', 1),
(306, 'Upload foto from local store', '', '', 1, 0, '3991e684c8a2369c1196253f484eb8e9.jpg', '', 0, 0, 10072, '2014-09-19 19:28:01', 1),
(307, 'Upload foto from local store', '', '', 1, 0, '88f9600c4ce87c2df981d7d2ece93d7c.jpg', '', 0, 0, 10072, '2014-09-19 19:28:54', 1),
(308, 'Upload foto from local store', '', '', 1, 0, 'c59165fab3d6ad1e851631cf97a7a4dc.jpg', '', 0, 0, 10072, '2014-09-19 19:31:49', 1),
(309, 'Upload foto from local store', '', '', 1, 0, 'bf4d1a97a89c2413e3d55e3551305709.png', '', 0, 0, 10072, '2014-09-19 19:48:53', 1),
(310, 'Upload foto from local store', '', '', 1, 0, 'c578269d952fa928bac937ba47034528.png', '', 0, 0, 10072, '2014-09-19 19:50:04', 1),
(311, 'Upload foto from local store', '', '', 1, 0, '5a2b57834653289d9ffd9feb39875b96.png', '', 0, 0, 10072, '2014-09-19 19:53:23', 1),
(312, 'Upload foto from local store', '', '', 1, 0, '7a8d38783c62b2a0ff19b1f5b6bef4fc.png', '', 0, 0, 10072, '2014-09-19 19:54:12', 1),
(313, 'Upload foto from local store', '', '', 1, 0, '12b6aff3b36da63715220011024635cf.png', '', 0, 0, 10072, '2014-09-19 19:55:25', 1),
(314, 'Upload foto from local store', '', '', 1, 0, '1726b6aa3d43d10f1f9f3c5b02e58926.jpg', '', 0, 0, 10072, '2014-09-20 10:02:35', 1),
(315, 'Upload foto from local store', '', '', 1, 0, '1cc25e3ca0e03b3efac0be3668ce6c95.jpg', '', 0, 0, 10072, '2014-09-20 10:04:03', 1),
(316, 'Upload foto from local store', '', '', 1, 0, 'd261d1845c1d698fd9164a500def571e.png', '', 0, 0, 10072, '2014-09-23 08:50:29', 1),
(317, 'Upload foto from local store', '', '', 1, 0, 'd720cdf5a4f2051d16c75d25f46165b0.png', '', 0, 0, 10072, '2014-09-23 09:36:16', 1),
(318, 'Upload foto from local store', '', '', 1, 0, 'e08cb76b73e23c213f47ec196d50b28e.jpg', '', 0, 0, 10072, '2014-09-23 09:53:22', 1),
(319, 'Upload foto from local store', '', '', 1, 0, '54632708b0f51a036dbca3bff9746115.png', '', 0, 0, 10072, '2014-09-23 10:01:24', 1),
(320, 'Upload foto from local store', '', '', 1, 0, '4ced7f1e10a9bb25845c742a48f78b42.png', '', 0, 0, 10072, '2014-09-23 13:24:28', 1),
(321, 'Upload foto from local store', '', '', 1, 0, 'aa06dafbb289b45d7aaf2b78f97bf385.png', '', 0, 0, 10072, '2014-09-23 13:29:33', 1),
(322, 'Upload foto from local store', '', '', 1, 0, 'f35cfc2e504bb545be179c2bb53ad76b.png', '', 0, 0, 10076, '2014-09-23 16:00:59', 1),
(323, 'Upload foto from local store', '', '', 1, 0, '3f3c7cfa20fe43614b8755138961c917.png', '', 0, 0, 10076, '2014-09-23 16:01:55', 1),
(324, 'Upload foto from local store', '', '', 1, 0, '278122b9709b34d1972890e8c89f151e.png', '', 0, 0, 10079, '2014-09-23 16:27:32', 1),
(325, 'Upload foto from local store', '', '', 1, 0, '98ffb60571cccfaa2b73ddc53a9d2e7a.png', '', 0, 0, 10079, '2014-09-23 16:50:48', 1),
(326, 'Upload foto from local store', '', '', 1, 0, '425924a46d7745c6a70ac8237f4fbbd6.png', '', 0, 0, 10079, '2014-09-24 15:19:33', 1),
(327, 'Upload foto from local store', '', '', 1, 0, '162d3ce85f4226003cd0fbfc3d54382f.png', '', 0, 0, 10079, '2014-09-24 15:23:52', 1),
(328, 'Upload foto from local store', '', '', 1, 0, '896f5c428d88053762c6ef0f8b9079af.jpeg', '', 0, 0, 10079, '2014-09-25 23:23:08', 1),
(329, 'Upload foto from local store', '', '', 1, 0, '53f9cc2869f14f2f9f361a547afe2881.png', '', 0, 0, 10079, '2014-09-25 23:23:29', 1),
(330, 'Upload foto from local store', '', '', 1, 0, '49c96e8b3804267f72aafccd61064dc2.png', '', 0, 0, 10079, '2014-09-25 23:23:54', 1),
(331, 'Upload foto from local store', '', '', 1, 0, 'd3888d0dc56ae80c0955af4486038556.png', '', 0, 0, 10079, '2014-09-25 23:28:06', 1),
(332, 'Upload foto from local store', '', '', 1, 0, '65c2048cf233d652e107c955236da167.png', '', 0, 0, 10079, '2014-09-25 23:36:39', 1),
(333, 'Upload foto from album facebook', '', '', 1, 0, '2bbae3e014075be730047a5fe4c52e49a6f3baf5.jpg', '', 0, 0, 10071, '2014-09-25 23:38:01', 1),
(334, 'Upload foto from album facebook', '', '', 1, 0, 'fc3014733498dcf219e9c513e31762f41ca9c806.jpg', '', 0, 0, 10071, '2014-09-25 23:40:36', 1),
(335, 'Upload foto from album facebook', '', '', 1, 0, 'e6c5a7f7de5a21512521bf85e0e830747a96926d.jpg', '', 0, 0, 10071, '2014-09-27 20:46:54', 1),
(336, 'Upload foto from album facebook', '', '', 1, 0, 'd1e338746ca79950eaa197e7f68bc022b175531b.jpg', '', 0, 0, 10071, '2014-09-27 22:45:32', 1),
(337, 'Upload foto from local store', '', '', 1, 0, 'd8787340056e06666ce4f9a3f7595eea.png', '', 0, 0, 10079, '2014-09-27 23:08:04', 1),
(338, 'Upload foto from local store', '', '', 1, 0, '66c3985c0052d2d4b8e33985f7c419b1.png', '', 0, 0, 10079, '2014-09-27 23:09:39', 1),
(339, 'Upload foto from local store', '', '', 1, 0, '085289daa9186eb3d02f321907ae00b9.png', '', 0, 0, 10079, '2014-09-28 14:29:34', 1),
(340, 'Upload foto from local store', '', '', 1, 0, 'c17a524bec3bf623d2e168b9472cc379.jpg', '', 0, 0, 10079, '2014-09-29 20:23:26', 1),
(341, 'Upload foto from local store', '', '', 1, 0, '2256fbdcabb485a6dfce9d6e9d99df2d.png', '', 0, 0, 10079, '2014-09-29 20:24:06', 1),
(342, 'Upload foto from local store', '', '', 1, 0, '2df35b729843c2ffdb29cc2028a30c12.jpg', '', 0, 0, 10079, '2014-09-29 20:35:15', 1),
(343, 'Upload foto from local store', '', '', 1, 0, '55a8effd4cbbc8554ea0195096711095.png', '', 0, 0, 10079, '2014-09-29 20:44:37', 1),
(344, 'Upload foto from local store', '', '', 1, 0, 'b7e3d13f2b2580ae5b622365411412fb.png', '', 0, 0, 10079, '2014-09-29 20:47:20', 1),
(345, 'Upload foto from local store', '', '', 1, 0, '93d8e19a3806cc061b93da5b8084087a.jpg', '', 0, 0, 10079, '2014-09-29 20:54:17', 1),
(346, 'Upload foto from local store', '', '', 1, 0, 'f79bfd51ffc2126d726e2188d1e8b39c.png', '', 0, 0, 10079, '2014-09-29 20:58:51', 1),
(347, 'Upload foto from local store', '', '', 1, 0, 'ea903c4199d210d88df8178748c9ac56.jpg', '', 0, 0, 10079, '2014-09-29 21:01:10', 1),
(348, 'Upload foto from local store', '', '', 1, 0, 'f89ffe596e4e281ca5398b2d412ffdfe.png', '', 0, 0, 10079, '2014-09-29 21:17:55', 1),
(349, 'Upload foto from local store', '', '', 1, 0, '9b0c1a0b6e0df9b95aecf8ba262cb8bf.jpg', '', 0, 0, 10079, '2014-10-01 14:16:07', 1),
(350, 'Upload foto from local store', '', '', 1, 0, 'e83ee88c7b788acdc1d2792c245904d1.png', '', 0, 0, 10079, '2014-10-01 14:16:16', 1),
(351, 'Upload foto from local store', '', '', 1, 0, '7a4f6e7a250fb192b35298a82d07c1a9.jpg', '', 0, 0, 10079, '2014-10-01 14:30:38', 1);
INSERT INTO `mitra_news_content_repo` (`id`, `title`, `brief`, `content`, `typealbum`, `gallerytype`, `files`, `thumbnail`, `fromwho`, `otherid`, `userid`, `created_date`, `n_status`) VALUES
(352, 'Upload foto from local store', '', '', 1, 0, 'a47dd8dbecc3a9b524929db389fe647d.jpg', '', 0, 0, 10079, '2014-10-01 14:45:45', 1),
(353, 'Upload foto from local store', '', '', 1, 0, '05e1c778ca879ae1e658997339101dfd.png', '', 0, 0, 10079, '2014-10-01 15:16:09', 1),
(354, 'Upload foto from local store', '', '', 1, 0, 'b1626edda1f21fd6c7ea1e4f9ad5eaf8.png', '', 0, 0, 10079, '2014-10-01 15:51:54', 1),
(355, 'Upload foto from local store', '', '', 1, 0, '027f33b3eb24bc50a38f2da409005f64.jpg', '', 0, 0, 10079, '2014-10-01 19:38:03', 1),
(356, 'Upload foto from local store', '', '', 1, 0, '7dc5df8557b7a7f2ee60f853958867f1.jpeg', '', 0, 0, 10079, '2014-10-03 18:58:44', 1),
(357, 'Upload foto from local store', '', '', 1, 0, 'a5f6f57883c1801e9596d06398270c87.jpeg', '', 0, 0, 10079, '2014-10-03 19:11:04', 1),
(358, 'Upload foto from local store', '', '', 1, 0, '0a100e32d0a0992f2b5c90d172feb113.jpeg', '', 0, 0, 10079, '2014-10-03 19:13:13', 1),
(359, 'Upload foto from local store', '', '', 1, 0, '27779f2fcd638054ba2e8f3eb64aaeed.jpg', '', 0, 0, 10079, '2014-10-07 09:24:17', 1);

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
