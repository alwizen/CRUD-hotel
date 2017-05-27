-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2017 at 12:04 
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `htl2`
--

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE IF NOT EXISTS `kamar` (
  `no_kamar` char(5) NOT NULL,
  `tipe_kamar` varchar(20) NOT NULL,
  `jml_ranjang` varchar(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`no_kamar`, `tipe_kamar`, `jml_ranjang`, `id`) VALUES
('D01', 'Standard room', 'Triple/Family', 776611),
('M01', 'Standard room', 'Single', 998811),
('S01', 'Superior room', 'Double', 889900);

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE IF NOT EXISTS `tamu` (
  `id` int(20) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `jns_kel` varchar(20) NOT NULL,
  `notelp` char(13) NOT NULL,
  `jalan` varchar(100) NOT NULL,
  `provinsi` varchar(40) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `kd_pos` int(7) NOT NULL,
  `tgl_checkin` date NOT NULL,
  `tgl_checkout` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `no_kamar` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id`, `nama`, `jns_kel`, `notelp`, `jalan`, `provinsi`, `kota`, `kd_pos`, `tgl_checkin`, `tgl_checkout`, `keterangan`, `no_kamar`) VALUES
(776611, 'Alwi', 'Laki-Laki', '086701366698', 'JL. Otto Iskandardinata', 'Jawa Tengah', 'Pekalongan', 81139, '2017-05-26', '2017-05-26', 'Bersama teman', 'D01'),
(889900, 'Esti', 'Perempuan', '08016779081', 'JL. Garuda', 'Jawa Tengah', 'Tegal', 51138, '2017-05-25', '2017-05-25', 'Kamar harus steril', 'S01'),
(998811, 'Mbak Kris', 'Perempuan', '083016779081', 'JL. Hos Cokro Aminoto', 'Jawa Tengah', 'Batang', 81139, '2017-05-24', '2017-05-25', 'kamar harus bersih', 'M01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`no_kamar`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
