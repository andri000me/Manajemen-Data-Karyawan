-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 16, 2015 at 06:08 AM
-- Server version: 5.6.13
-- PHP Version: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `karyawan`
--
CREATE DATABASE IF NOT EXISTS `karyawan` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `karyawan`;

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE IF NOT EXISTS `data_karyawan` (
  `nik` varchar(9) NOT NULL DEFAULT '',
  `nama` varchar(30) NOT NULL,
  `namafoto` varchar(50) NOT NULL,
  `jk` varchar(1) NOT NULL,
  `jab` varchar(10) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `tmp_lhr` varchar(15) NOT NULL,
  `tgl_lhr` date DEFAULT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`nik`),
  UNIQUE KEY `nik` (`nik`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`nik`, `nama`, `namafoto`, `jk`, `jab`, `dept`, `tmp_lhr`, `tgl_lhr`, `gol_darah`, `agama`, `status`, `telp`, `email`) VALUES
('NIK000001', 'Andi Hatmoko', 'photograph.jpg', '', 'Supervisor', 'Engineering', 'Cilacap', '0000-00-00', 'A', '-', '-', '085714057686', 'andihatmokodhbs@yahoo.com'),
('nik00005', 'Test Input Record', 'shutterstock_1475897631.jpg', 'L', 'Kepala', 'Rahasia', 'Pacitan', '1959-05-05', 'A', '-', '-', '081999888777', 'mail@localhost.net'),
('NIK00007', 'Pretester', '79.jpg', 'L', 'testing', 'testing', 'testing', '1957-07-04', 'A', 'Islam', 'K1', '081238278378', 'james@bond.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
