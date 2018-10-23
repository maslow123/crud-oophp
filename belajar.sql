-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2018 at 01:16 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text,
  `pengarang` varchar(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `tahunTerbit` int(4) NOT NULL,
  `jenis_buku` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `pengarang`, `penerbit`, `tahunTerbit`, `jenis_buku`) VALUES
(49, 'Pengantin Muda', 'Koala Was Was', 'Jusuf Mahabrata', 2017, 'Majalah'),
(52, 'Bersamanya Semua Indah', 'PT Dutra Sirna', 'Kumpangan', 2015, 'Majalah');

-- --------------------------------------------------------

--
-- Table structure for table `sekolah`
--

CREATE TABLE IF NOT EXISTS `sekolah` (
  `Kepala_Sekolah` varchar(50) NOT NULL,
  `Guru_indo` varchar(25) DEFAULT NULL,
  `tes` int(11) NOT NULL,
  `Guru_MTK` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Kepala_Sekolah`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekolah`
--

INSERT INTO `sekolah` (`Kepala_Sekolah`, `Guru_indo`, `tes`, `Guru_MTK`) VALUES
('Hilman', 'NOC', 0, 'Rizqi'),
('NAMAKU', 'NOC', 0, 'NAMA1'),
('NAMAKU2', 'NOC', 0, 'NAMA2'),
('NAMAKU3', 'NOC', 0, 'NAMA3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `nama`) VALUES
(1, 'maslow', 'a89930548', 'fadhly'),
(2, 'noc', 'a89930548', 'maslow');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
