-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1build0.15.04.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2015 at 06:58 AM
-- Server version: 5.6.27-0ubuntu0.15.04.1
-- PHP Version: 5.6.4-4ubuntu6.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemilukmteti`
--

-- --------------------------------------------------------

--
-- Table structure for table `calon`
--

CREATE TABLE IF NOT EXISTS `calon` (
  `id` tinyint(1) unsigned NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `visi` text,
  `misi` text,
  `suara` mediumint(9) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `calon`
--

INSERT INTO `calon` (`id`, `nama`, `visi`, `misi`, `suara`, `created_at`, `updated_at`) VALUES
(1, 'Robbi Maulana Fatma Saputra', 'visi1', 'misi1', 0, NULL, '2014-12-07 08:19:44'),
(2, 'Misbach Imaduddin Zuhdi', 'visi2', 'misi2', 0, NULL, '2014-12-06 13:02:06'),
(3, 'Ahmad Khinarto', 'visi3', 'misi3', 0, NULL, '2014-12-07 10:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE IF NOT EXISTS `pemilih` (
  `id` int(3) NOT NULL,
  `nim` varchar(18) NOT NULL,
  `psswd` varchar(6) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `sudahMemilih` tinyint(1) DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id`, `nim`, `psswd`, `password`, `nama`, `sudahMemilih`, `created_at`, `updated_at`, `remember_token`) VALUES
(1, '11111', 'b0baee', '$2y$10$8YWmQDmLIf/8CC1y/vTMNO/oaCWprBlLtsNd.LNDCK4oV8fhT9sDi', 'Nama', 0, '2015-11-26 00:00:00', '2015-11-25 23:58:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calon`
--
ALTER TABLE `calon`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilih`
--
ALTER TABLE `pemilih`
 ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
