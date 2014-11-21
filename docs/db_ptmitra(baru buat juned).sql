-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Nov 2014 pada 00.16
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

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
-- Struktur dari tabel `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
`id` int(11) NOT NULL,
  `activityValue` varchar(100) DEFAULT NULL,
  `n_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `activity`
--

INSERT INTO `activity` (`id`, `activityValue`, `n_status`) VALUES
(1, 'surf', 1),
(2, 'welcome', 1),
(3, 'article', 1),
(4, 'register', 1),
(5, 'share', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `activity_log`
--

CREATE TABLE IF NOT EXISTS `activity_log` (
`id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `activityId` int(11) NOT NULL,
  `activityDesc` text NOT NULL,
  `source` varchar(20) NOT NULL,
  `datetimes` datetime NOT NULL,
  `n_status` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data untuk tabel `activity_log`
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
-- Struktur dari tabel `admin_member`
--

CREATE TABLE IF NOT EXISTS `admin_member` (
`id` int(15) NOT NULL,
  `name` varchar(46) DEFAULT NULL,
  `nickname` varchar(50) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `username` varchar(46) DEFAULT NULL,
  `salt` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `n_status` int(3) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `admin_member`
--

INSERT INTO `admin_member` (`id`, `name`, `nickname`, `email`, `register_date`, `username`, `salt`, `password`, `n_status`) VALUES
(1, 'admin', 'admin', 'admin@example.com', '2014-08-07 22:56:36', 'admin', 'codekir v3.0', 'b2e982d12c95911b6abeacad24e256ff3fa47fdb', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_category`
--

CREATE TABLE IF NOT EXISTS `mitra_category` (
`id` int(11) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `relation` int(11) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `n_status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `mitra_category`
--

INSERT INTO `mitra_category` (`id`, `category_name`, `description`, `image`, `relation`, `create_date`, `n_status`) VALUES
(1, 'IT', 'Dunia teknologi', NULL, NULL, '2014-07-25 12:23:11', 1),
(2, 'Ekonomi', 'Dunia Ekonomi', NULL, NULL, '2014-07-25 12:23:11', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_child`
--

CREATE TABLE IF NOT EXISTS `mitra_child` (
`id` int(11) NOT NULL,
  `userid` int(11) NOT NULL COMMENT 'parent id',
  `name` varchar(200) DEFAULT NULL,
  `birthdate` date NOT NULL,
  `n_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data untuk tabel `mitra_child`
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
-- Struktur dari tabel `mitra_member_interest`
--

CREATE TABLE IF NOT EXISTS `mitra_member_interest` (
`id` int(11) NOT NULL,
  `userid` int(11) NOT NULL DEFAULT '0',
  `category_id` varchar(100) DEFAULT NULL,
  `date_join` varchar(300) NOT NULL,
  `n_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `mitra_member_interest`
--

INSERT INTO `mitra_member_interest` (`id`, `userid`, `category_id`, `date_join`, `n_status`) VALUES
(1, 10043, '1,2', '2014-07-25 17:59:14', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_news_content`
--

CREATE TABLE IF NOT EXISTS `mitra_news_content` (
`id` int(11) NOT NULL,
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
  `topcontent` int(11) NOT NULL DEFAULT '0' COMMENT '0;standart;1:featured;2:review;3:interview'
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `mitra_news_content`
--

INSERT INTO `mitra_news_content` (`id`, `parentid`, `lid`, `title`, `brief`, `content`, `image`, `thumbnail_image`, `slider_image`, `categoryid`, `articleType`, `url`, `sourceurl`, `file`, `created_date`, `expired_date`, `posted_date`, `fromwho`, `filesize`, `can_save`, `tags`, `authorid`, `n_status`, `topcontent`) VALUES
(1, 0, 0, ' Company Profile', '', '&nbsp;Donec dignissim, dolor et vehicula tincidunt, nunc dolor dignissim nibh, et vulputate diam ante eget tellus. Sed ac efficitur magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque placerat, elit non dignissim blandit, urna dolor imperdiet diam, sed accumsan mauris ex ac erat. Nam imperdiet, lorem at scelerisque malesuada, metus elit bibendum lacus, quis sollicitudin massa dolor vitae augue. Nullam vel mauris in augue dignissim dictum. Proin dignissim mi arcu, non consequat velit aliquam in. Curabitur at ligula nec enim lobortis sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br><br>Nunc cursus felis arcu, quis commodo felis auctor eget. Morbi vitae nulla eu mauris pulvinar aliquet et vel nisl. Nulla luctus metus sem, suscipit bibendum tortor cursus aliquet. Morbi vel iaculis felis. Pellentesque porttitor dapibus mollis. Donec non orci vitae lectus suscipit rutrum. Nulla eu felis interdum, dapibus sapien vel, iaculis nisi. Curabitur faucibus magna vel mauris condimentum, et rhoncus enim efficitur. Phasellus sagittis dolor lectus, non imperdiet sapien consequat sagittis. Mauris non mollis elit. Proin varius placerat aliquam. Cras quis molestie massa, quis commodo neque. Praesent metus libero, tempor sit amet libero et, consectetur faucibus ligula. Donec urna justo, mollis at faucibus ut, aliquam vel erat. Curabitur suscipit turpis vel elit scelerisque, luctus lacinia tortor consequat. Praesent mollis nulla lorem, pulvinar imperdiet enim sagittis non.<br><br>Donec rutrum lacinia nunc, ullamcorper venenatis nunc eleifend gravida. Sed ex neque, ultrices non condimentum molestie, venenatis scelerisque elit. Vestibulum blandit nunc ac augue mollis, ac tempor ligula sollicitudin. Nullam tincidunt sed lorem ut egestas. Vestibulum vitae commodo lacus. Praesent sed mollis neque. Nam nec augue nunc. Curabitur consequat mattis lectus. Nulla at elit cursus, ullamcorper nunc eu, rhoncus orci. Fusce ac pulvinar nulla, vel mollis sem. Curabitur lacinia nisi erat, at feugiat ipsum posuere sed. Quisque consequat lacinia convallis. In eu metus finibus, ultrices odio lacinia, hendrerit odio. Aenean nec ante sagittis, sodales turpis vitae, sodales magna.<br><br>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. <br>', '', '', '', 2, 1, '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(2, 0, 0, 'Company Division', '', '', '31ef530091f85ebe148bf1a7256e7322.jpg', '', '', 2, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(3, 0, 0, 'Company Organization', '', '', '7aa5ae1e39e16e855b610b53b2fa44ee.jpg', '', '', 2, 3, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(4, 0, 0, 'Company Marketing Strategy', '', '&nbsp;Donec dignissim, dolor et vehicula tincidunt, nunc dolor dignissim nibh, et vulputate diam ante eget tellus. Sed ac efficitur magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque placerat, elit non dignissim blandit, urna dolor imperdiet diam, sed accumsan mauris ex ac erat. Nam imperdiet, lorem at scelerisque malesuada, metus elit bibendum lacus, quis sollicitudin massa dolor vitae augue. Nullam vel mauris in augue dignissim dictum. Proin dignissim mi arcu, non consequat velit aliquam in. Curabitur at ligula nec enim lobortis sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.<br><br>Nunc cursus felis arcu, quis commodo felis auctor eget. Morbi vitae nulla eu mauris pulvinar aliquet et vel nisl. Nulla luctus metus sem, suscipit bibendum tortor cursus aliquet. Morbi vel iaculis felis. Pellentesque porttitor dapibus mollis. Donec non orci vitae lectus suscipit rutrum. Nulla eu felis interdum, dapibus sapien vel, iaculis nisi. Curabitur faucibus magna vel mauris condimentum, et rhoncus enim efficitur. Phasellus sagittis dolor lectus, non imperdiet sapien consequat sagittis. Mauris non mollis elit. Proin varius placerat aliquam. Cras quis molestie massa, quis commodo neque. Praesent metus libero, tempor sit amet libero et, consectetur faucibus ligula. Donec urna justo, mollis at faucibus ut, aliquam vel erat. Curabitur suscipit turpis vel elit scelerisque, luctus lacinia tortor consequat. Praesent mollis nulla lorem, pulvinar imperdiet enim sagittis non.<br><br>Donec rutrum lacinia nunc, ullamcorper venenatis nunc eleifend gravida. Sed ex neque, ultrices non condimentum molestie, venenatis scelerisque elit. Vestibulum blandit nunc ac augue mollis, ac tempor ligula sollicitudin. Nullam tincidunt sed lorem ut egestas. Vestibulum vitae commodo lacus. Praesent sed mollis neque. Nam nec augue nunc. Curabitur consequat mattis lectus. Nulla at elit cursus, ullamcorper nunc eu, rhoncus orci. Fusce ac pulvinar nulla, vel mollis sem. Curabitur lacinia nisi erat, at feugiat ipsum posuere sed. Quisque consequat lacinia convallis. In eu metus finibus, ultrices odio lacinia, hendrerit odio. Aenean nec ante sagittis, sodales turpis vitae, sodales magna.<br><br>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. <br>', '7209bbbbe7c421f1aa63255bb7dd754e.jpg', '', '', 2, 4, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(5, 0, 0, ' Form Customer List', '', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. <br>', 'cabf070eff685ed7d7cab320a2afcd4f.jpg', '', '', 2, 5, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(6, 0, 0, ' Form Customer Location', '', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. <br>', '2c46d0df43c5acc85d69aaf03b73b43d.jpg', '', '', 2, 6, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(7, 0, 0, 'coba Geophysics ', '', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. <br>', 'c4af48c13008f86d6a9692ec0b1685d1.jpg', '', '', 3, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(8, 0, 0, 'coba Scientifics ', '', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. <br>', '17b5e67f7ea3285b393ca156ba88f9f2.jpg', '', '', 3, 2, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(9, 0, 0, 'brochure baru', '', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. <br>', 'ba4f9a080ad549f5a2e5e07e61106ab3.jpg', '', '', 4, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, '', 0, 1, 0),
(10, 0, 0, 'Brocure test', '', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. <br>', '36d9fceb8a2f350ad4b7f66930d2cb65.jpg', '', '', 4, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-11-11 00:00:00', 0, 0, 0, '', 0, 1, 0),
(11, 0, 0, 'brocure test 3', '', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla bibendum magna quis sapien blandit placerat. Vivamus pretium, dolor at rutrum varius, eros turpis suscipit quam, sed tincidunt purus ante pellentesque ipsum. Aliquam venenatis lorem a viverra cursus. Sed tristique ultrices dictum. Sed eu arcu sit amet erat fermentum eleifend id non odio. Nunc congue consectetur enim, vel egestas quam pretium consectetur. Sed ac libero velit. Donec pharetra nibh vitae finibus commodo.<br><br>Aliquam luctus sagittis est nec blandit. Cras est nisl, bibendum vel pellentesque in, blandit non nulla. Fusce vitae magna molestie, interdum lorem vehicula, faucibus justo. Nunc vehicula erat sit amet mattis tincidunt. Praesent non imperdiet augue. Aenean vitae aliquet elit. Nullam ac felis nisl. Donec semper sem nibh, vel faucibus sem placerat vel. Curabitur ligula sapien, convallis sed convallis ut, scelerisque at dolor. <br>', '7ef86153622dd298e8df47b15e6807f6.jpg', '', '', 4, 1, '', '', 'C:/xampp/htdocs/MitraIntimarga/public_assets/', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2014-11-11 00:00:00', 0, 0, 0, '', 0, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_news_content_comment`
--

CREATE TABLE IF NOT EXISTS `mitra_news_content_comment` (
`id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `contentid` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `n_status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mitra_news_content_repo`
--

CREATE TABLE IF NOT EXISTS `mitra_news_content_repo` (
`id` int(11) NOT NULL,
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
  `n_status` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `mitra_news_content_repo`
--

INSERT INTO `mitra_news_content_repo` (`id`, `title`, `titleimage`, `brief`, `content`, `contentimage`, `typealbum`, `gallerytype`, `files`, `filesimage`, `thumbnail`, `fromwho`, `otherid`, `userid`, `created_date`, `n_status`) VALUES
(1, ' Company Profile', '', '', '', '', 2, 1, '532024844f594dc4288cf87db1646cb3.pdf', '', '', 0, 1, 0, '0000-00-00 00:00:00', 0),
(2, 'Company Division', '', '', '', '', 2, 2, '95d1153d79e5cf0b91237b1668012311.pdf', '', '', 0, 2, 0, '0000-00-00 00:00:00', 0),
(3, 'Company Organization', '', '', '', '', 2, 3, '5cfad7600e1960ca8e1962350c0a69bd.pdf', '', '', 0, 3, 0, '0000-00-00 00:00:00', 0),
(4, 'Company Marketing Strategy', '', '', '', '', 2, 4, '355c9671402baad697ae30ef5df18ddd.pdf', '', '', 0, 4, 0, '0000-00-00 00:00:00', 0),
(5, ' Form Customer List', '', '', '', '', 2, 5, 'a2106347d82453f1f3a87397d5950fbc.pdf', '', '', 0, 5, 0, '0000-00-00 00:00:00', 0),
(6, ' Form Customer Location', '', '', '', '', 2, 6, '673b772e5e5972a66d1c0a357eb4147b.pdf', '', '', 0, 6, 0, '0000-00-00 00:00:00', 0),
(7, 'coba Geophysics ', '', '', '', '', 3, 1, '18e6dc4298fd0674a49353cc7dd13587.pdf', '', '', 0, 7, 0, '0000-00-00 00:00:00', 1),
(8, 'coba Scientifics ', '', '', '', '', 3, 2, '4d607f286b1c72a6780c7b720e0efb99.pdf', '', '', 0, 8, 0, '0000-00-00 00:00:00', 1),
(9, 'brochure baru', '', '', '', '', 4, 1, 'd44b187f680b9e8e8b24465074d7dad4.pdf', '', '', 0, 9, 0, '0000-00-00 00:00:00', 0),
(10, 'Brocure test', '', '', '', '', 4, 1, '4491343614237e42372a27a4ebc74912.pdf', '', '', 0, 10, 0, '0000-00-00 00:00:00', 0),
(11, 'brocure test 3', '', '', '', '', 4, 1, 'deda5c0a785b2e40d2a89fef865b0d3e.pdf', '', '', 0, 11, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `social_member`
--

CREATE TABLE IF NOT EXISTS `social_member` (
`id` int(15) NOT NULL,
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
  `password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10080 ;

--
-- Dumping data untuk tabel `social_member`
--

INSERT INTO `social_member` (`id`, `sosmed_id`, `name`, `nickname`, `email`, `register_date`, `verified_date`, `img`, `image_profile`, `small_img`, `username`, `last_login`, `city`, `zipcode`, `sex`, `birthday`, `description`, `link`, `middle_name`, `last_name`, `StreetName`, `phone_number`, `n_status`, `login_count`, `verified`, `usertype`, `email_token`, `photo_moderation`, `salt`, `password`) VALUES
(10071, '10202304338879140', 'Ovan Pulu', NULL, 'o.pulu@yahoo.com', '2014-08-25 00:57:35', '0000-00-00 00:00:00', NULL, '', NULL, NULL, '2014-09-27 22:38:08', NULL, 0, 'male', NULL, NULL, 'https://www.facebook.com/app_scoped_user_id/10202304338879140/', 'Sunarto', 'Pulu', 'e', 'e', 1, 48, 1, 1, NULL, 0, NULL, NULL),
(10073, '384175162', 'er joned', NULL, NULL, '2014-08-30 08:50:26', '0000-00-00 00:00:00', NULL, '', NULL, 'erjoned', NULL, 0, 0, NULL, NULL, '', '', NULL, NULL, NULL, NULL, 1, 0, 0, 2, NULL, 0, NULL, NULL),
(10074, '10202597422519302', 'Albertus', NULL, 'andreass_bayu@yahoo.com', '2014-08-31 12:55:31', '0000-00-00 00:00:00', NULL, '', NULL, NULL, NULL, NULL, 0, 'male', NULL, NULL, 'https://www.facebook.com/app_scoped_user_id/10202597422519302/', 'Andreass Bayu', 'Aji', NULL, NULL, 1, 0, 0, 1, NULL, 0, NULL, NULL),
(10075, '1900304539', 'Albertus Bayu Aji', NULL, 'andreass.bayu@gmail.com', '2014-09-15 05:48:25', '0000-00-00 00:00:00', NULL, '', NULL, 'AndreassBayu', NULL, 0, 0, NULL, NULL, '', '', NULL, NULL, 'Jakarat', '085710440875', 1, 0, 1, 2, NULL, 0, NULL, NULL),
(10079, '594315585', 'Ovan Sunarto P.', NULL, 'ovan89@gmail.com', '2014-09-23 02:18:35', '0000-00-00 00:00:00', NULL, '', NULL, 'ovancop', '2014-10-07 09:24:05', 0, 0, NULL, NULL, 'Kesehatan lebih penting', 'http://t.co/jePSH4BIdP', NULL, NULL, 'ada', '2311', 1, 20, 1, 2, NULL, 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_member`
--
ALTER TABLE `admin_member`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra_category`
--
ALTER TABLE `mitra_category`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra_child`
--
ALTER TABLE `mitra_child`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitra_member_interest`
--
ALTER TABLE `mitra_member_interest`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `userid` (`userid`);

--
-- Indexes for table `mitra_news_content`
--
ALTER TABLE `mitra_news_content`
 ADD PRIMARY KEY (`id`), ADD KEY `title` (`title`), ADD KEY `categoryid` (`categoryid`), ADD KEY `created_date` (`created_date`), ADD KEY `posted_date` (`posted_date`), ADD KEY `n_status` (`n_status`), ADD KEY `articleTypeID` (`articleType`), ADD KEY `image` (`image`), ADD KEY `parentID` (`parentid`), ADD KEY `lid` (`lid`), ADD KEY `online` (`fromwho`), ADD KEY `expired_date` (`expired_date`), ADD KEY `url` (`url`), ADD KEY `aid` (`authorid`), ADD KEY `file` (`file`), ADD KEY `slider_image` (`slider_image`), ADD KEY `sourceurl` (`filesize`), ADD KEY `thumbnail_image` (`thumbnail_image`), ADD KEY `topcontent` (`topcontent`), ADD KEY `sourceurl_2` (`sourceurl`), ADD KEY `can_save` (`can_save`);

--
-- Indexes for table `mitra_news_content_comment`
--
ALTER TABLE `mitra_news_content_comment`
 ADD PRIMARY KEY (`id`), ADD KEY `date` (`date`), ADD KEY `userid` (`userid`), ADD KEY `contentid` (`contentid`);

--
-- Indexes for table `mitra_news_content_repo`
--
ALTER TABLE `mitra_news_content_repo`
 ADD PRIMARY KEY (`id`), ADD KEY `otherid` (`otherid`), ADD KEY `IDX_typeAlbum` (`typealbum`), ADD KEY `IDX_Album_ID` (`gallerytype`), ADD KEY `IDX_FROM_WHO` (`fromwho`);

--
-- Indexes for table `social_member`
--
ALTER TABLE `social_member`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `sosmed_id` (`sosmed_id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `admin_member`
--
ALTER TABLE `admin_member`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mitra_category`
--
ALTER TABLE `mitra_category`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mitra_child`
--
ALTER TABLE `mitra_child`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `mitra_member_interest`
--
ALTER TABLE `mitra_member_interest`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mitra_news_content`
--
ALTER TABLE `mitra_news_content`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `mitra_news_content_comment`
--
ALTER TABLE `mitra_news_content_comment`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mitra_news_content_repo`
--
ALTER TABLE `mitra_news_content_repo`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `social_member`
--
ALTER TABLE `social_member`
MODIFY `id` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10080;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
