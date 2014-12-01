-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 02, 2014 at 07:34 AM
-- Server version: 5.5.40-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

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
-- Table structure for table `mitra_contact`
--

CREATE TABLE IF NOT EXISTS `mitra_contact` (
  `id_contact` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `institusi` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjek` varchar(100) NOT NULL,
  `komentar` text NOT NULL,
  `create_date` datetime NOT NULL,
  `n_status` int(11) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mitra_contact`
--

INSERT INTO `mitra_contact` (`id_contact`, `nama`, `alamat`, `kota`, `institusi`, `telp`, `fax`, `email`, `subjek`, `komentar`, `create_date`, `n_status`) VALUES
(1, 'nama', 'alamat', 'kota', 'dept', '08378249328', '123', 'o.pulu@yahoo.com', 'subjek', 'dsafwre', '2014-11-22 10:57:08', 1),
(2, 'namae', 'ewe', 'drfg', 'dgf', 'rdgf', 'dg', 'df', 'dg', 'drg', '2014-12-02 06:50:22', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
