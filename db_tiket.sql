-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 01:46 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tiket`
--
CREATE DATABASE IF NOT EXISTS `db_tiket` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_tiket`;

-- --------------------------------------------------------

--
-- Table structure for table `t_armada`
--

DROP TABLE IF EXISTS `t_armada`;
CREATE TABLE IF NOT EXISTS `t_armada` (
  `no_travel` varchar(15) NOT NULL,
  `no_plat` varchar(8) DEFAULT NULL,
  `jumlah_kursi` int(5) DEFAULT NULL,
  `id_rute` int(15) DEFAULT NULL,
  `kelas` varchar(15) DEFAULT NULL,
  `harga_tiket` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_armada`
--

INSERT INTO `t_armada` (`no_travel`, `no_plat`, `jumlah_kursi`, `id_rute`, `kelas`, `harga_tiket`) VALUES
('AX0002', 'D 4012 C', 5, 4, 'VIP', 150000),
('NS-01', 'F 5547 J', 12, 7, 'VIP', 1200000),
('NS-1', 'D 1234 H', 12, 7, 'Executive', 200000),
('NS-2', 'D 2345 H', 12, 7, 'Ekonomi', 100000),
('NS-21', 'B 8990 H', 12, 6, 'Ekonomi', 100000),
('NS-30', 'B 00909 ', 12, 5, 'Executive', 200000),
('NS-99', 'D 8888 M', 12, 4, 'VIP', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `t_konfirmasi`
--

DROP TABLE IF EXISTS `t_konfirmasi`;
CREATE TABLE IF NOT EXISTS `t_konfirmasi` (
  `no_tagihan` int(10) DEFAULT NULL,
  `bukti` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_konfirmasi`
--

INSERT INTO `t_konfirmasi` (`no_tagihan`, `bukti`) VALUES
(1, 'favicon.ico'),
(2, 'favicon.ico'),
(3, 'favicon.ico'),
(24, '20160731_151443.jpg'),
(26, '05.jpg'),
(27, 'blank.jpg'),
(28, '1.jpg'),
(30, '42.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_pemesanan`
--

DROP TABLE IF EXISTS `t_pemesanan`;
CREATE TABLE IF NOT EXISTS `t_pemesanan` (
`no_tiket` int(15) NOT NULL,
  `no_travel` varchar(8) DEFAULT NULL,
  `id_rute` int(15) DEFAULT NULL,
  `harga` int(15) DEFAULT NULL,
  `tgl_berangkat` date DEFAULT NULL,
  `no_tagihan` int(10) DEFAULT NULL,
  `status_cetak` enum('0','1') DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pemesanan`
--

INSERT INTO `t_pemesanan` (`no_tiket`, `no_travel`, `id_rute`, `harga`, `tgl_berangkat`, `no_tagihan`, `status_cetak`) VALUES
(5, 'NS-99', 5, 100000, '0000-00-00', 1, '0'),
(6, 'NS-99', 5, 100000, '0000-00-00', 2, '0'),
(7, 'NS-99', 5, 100000, '0000-00-00', 2, '0'),
(8, 'NS-99', 5, 100000, '2018-02-10', 2, '0'),
(9, 'NS-99', 4, 100000, '2018-02-10', 3, '1'),
(10, 'NS-99', 4, 100000, '2018-02-10', 3, '1'),
(11, 'NS-99', 4, 100000, '2018-02-10', 3, '1'),
(12, 'AX0002', 5, 100000, '2018-01-25', 5, '0'),
(13, 'AX0002', 5, 100000, '2018-01-25', 5, '0'),
(14, 'AX0002', 4, 100000, '2018-01-25', 6, '0'),
(15, 'AX0002', 4, 100000, '2018-01-25', 6, '0'),
(16, 'AX0002', 4, 100000, '2018-01-25', 6, '0'),
(17, 'AX0002', 4, 100000, '2018-01-25', 6, '0'),
(18, 'AX0002', 4, 100000, '2018-01-25', 7, '0'),
(19, 'AX0002', 4, 100000, '2018-01-25', 7, '0'),
(20, 'AX0002', 4, 100000, '2018-01-25', 7, '0'),
(21, 'AX0002', 4, 100000, '2018-01-25', 8, '0'),
(22, 'AX0002', 4, 100000, '2018-01-25', 8, '0'),
(23, 'AX0002', 4, 100000, '2018-01-25', 8, '0'),
(24, 'AX0002', 4, 100000, '2018-01-25', 9, '0'),
(25, 'AX0002', 4, 100000, '2018-01-25', 9, '0'),
(26, 'AX0002', 4, 100000, '2018-01-25', 9, '0'),
(27, 'AX0002', 4, 100000, '2018-01-25', 10, '0'),
(28, 'AX0002', 4, 100000, '2018-01-25', 10, '0'),
(29, 'AX0002', 4, 100000, '2018-01-25', 10, '0'),
(30, 'AX0002', 4, 100000, '2018-01-25', 10, '0'),
(31, 'AX0002', 4, 100000, '2018-01-25', 10, '0'),
(32, 'AX0002', 4, 100000, '2018-01-25', 11, '0'),
(33, 'AX0002', 4, 100000, '2018-01-25', 11, '0'),
(34, 'AX0002', 4, 100000, '2018-01-25', 11, '0'),
(35, 'AX0002', 4, 100000, '2018-01-25', 11, '0'),
(36, 'AX0002', 4, 100000, '2018-01-25', 13, '0'),
(37, 'AX0002', 4, 100000, '2018-01-25', 13, '0'),
(38, 'AX0002', 4, 100000, '2018-01-25', 13, '0'),
(39, 'AX0002', 4, 100000, '2018-01-25', 13, '0'),
(126, 'NS-21', 6, 100000, '2018-01-27', 15, '0'),
(127, 'NS-21', 6, 100000, '2018-01-27', 15, '0'),
(128, 'NS-21', 6, 100000, '2018-01-27', 15, '0'),
(129, 'NS-99', 4, 100000, '0000-00-00', 16, '0'),
(130, 'NS-99', 4, 100000, '0000-00-00', 16, '0'),
(131, 'NS-01', 7, 1200000, '2018-01-25', 17, '0'),
(132, 'NS-99', 4, 150000, '2018-01-26', 18, '0'),
(133, 'NS-30', 5, 200000, '2018-01-31', 19, '0'),
(134, 'NS-21', 6, 100000, '2018-01-21', 20, '0'),
(135, 'AX0002', 4, 150000, '2018-01-27', 21, '0'),
(136, 'AX0002', 4, 150000, '2018-01-27', 21, '0'),
(137, 'AX0002', 4, 150000, '2018-01-27', 22, '0'),
(138, 'AX0002', 4, 150000, '2018-01-27', 22, '0'),
(139, 'AX0002', 4, 150000, '2018-01-27', 23, '0'),
(140, 'AX0002', 4, 150000, '2018-01-27', 23, '0'),
(141, 'NS-99', 4, 150000, '2018-02-24', 24, '1'),
(142, 'AX0002', 4, 150000, '2018-01-21', 25, '0'),
(143, 'AX0002', 4, 150000, '2018-01-22', 26, '1'),
(144, 'AX0002', 4, 150000, '2018-01-22', 26, '0'),
(145, 'NS-21', 6, 100000, '2018-01-22', 27, '0'),
(146, 'NS-21', 6, 100000, '2018-01-22', 27, '0'),
(147, 'AX0002', 4, 150000, '0000-00-00', 28, '1'),
(148, 'AX0002', 4, 150000, '0000-00-00', 28, '0'),
(149, 'NS-99', 4, 150000, '2018-01-23', 29, '0'),
(150, 'NS-99', 4, 150000, '2018-01-23', 29, '0'),
(151, 'NS-99', 4, 150000, '2018-01-23', 29, '0'),
(152, 'NS-99', 4, 150000, '2018-01-23', 30, '1'),
(153, 'NS-99', 4, 150000, '2018-01-23', 30, '0'),
(154, 'NS-99', 4, 150000, '2018-01-23', 30, '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_rute`
--

DROP TABLE IF EXISTS `t_rute`;
CREATE TABLE IF NOT EXISTS `t_rute` (
`id_rute` int(11) NOT NULL,
  `asal` varchar(25) DEFAULT NULL,
  `tujuan` varchar(25) DEFAULT NULL,
  `jam_berangkat` time DEFAULT NULL,
  `jam_tiba` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_rute`
--

INSERT INTO `t_rute` (`id_rute`, `asal`, `tujuan`, `jam_berangkat`, `jam_tiba`) VALUES
(4, 'Bandung', 'Tasikmalaya', '17:25:00', '20:00:00'),
(5, 'Bandung', 'Jakarta', '18:00:00', '22:00:00'),
(6, 'Tasikmalaya', 'Bandung', '14:00:00', '18:00:00'),
(7, 'Sukabumi ', 'Bandung', '16:15:00', '21:00:00'),
(8, 'Jakarta', 'Bandung', '18:00:00', '18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `t_tagihan`
--

DROP TABLE IF EXISTS `t_tagihan`;
CREATE TABLE IF NOT EXISTS `t_tagihan` (
`no_tagihan` int(12) NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `waktu_pesan` datetime DEFAULT NULL,
  `status_bayar` enum('0','1') DEFAULT '0' COMMENT '"0" Sudah Bayar,"1" Sudah bayar',
  `email` varchar(200) NOT NULL,
  `jumlah_kursi` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tagihan`
--

INSERT INTO `t_tagihan` (`no_tagihan`, `nama`, `no_hp`, `waktu_pesan`, `status_bayar`, `email`, `jumlah_kursi`) VALUES
(1, 'asd', '232', '2018-01-01 00:00:00', '1', 'bel@mavil.com', 1),
(2, 'Bale', '12112', '2018-01-19 00:00:00', '1', 'bale@as.com', 3),
(3, 'ASD', '9090', '2018-01-19 16:02:30', '1', 'eba@email.com', 3),
(4, 'asd', '232', '2018-01-19 16:23:25', '0', 'asa@bale', 343),
(5, 'bale', '9090', '2018-01-19 16:46:25', '0', 'bale@gamil.com', 2),
(6, 'bale', '9090', '2018-01-19 18:00:24', '0', 'bale@bale.com', 3),
(7, 'bale', '9090', '2018-01-19 18:01:41', '0', 'bale@bale.com', 3),
(8, 'Nasgor', '3434', '2018-01-19 18:02:46', '0', 'ramdani.iqbal@rocketmail.com', 3),
(9, 'Nasgor', '3434', '2018-01-19 18:03:32', '0', 'ramdani.iqbal@rocketmail.com', 3),
(10, 'bale', '090', '2018-01-19 19:23:07', '0', 'bale@mail.com', 3),
(11, 'baleee', '898989', '2018-01-19 19:38:26', '0', 'bale@mail.com', 4),
(12, 'Afdhalul', '085121212', '2018-01-19 20:01:34', '0', 'qqqq', 100),
(13, 'Afdhalul', '085121212', '2018-01-19 20:01:48', '0', 'qqqq', 11),
(14, 'Asep', '08765432', '2018-01-20 10:57:38', '0', 'fr@example.com', 3),
(15, 'fredi', '087736363', '2018-01-20 13:41:04', '0', 'ex@ex.com', 3),
(16, 'jam 14-54, NS-99', '234234', '2018-01-20 14:55:26', '0', 'sddscs', 2),
(17, 'as', '213', '2018-01-21 06:09:30', '0', 'as', 1),
(18, '11:06- ns-99', '3456', '2018-01-21 11:07:07', '0', 'wertyu', 1),
(19, '12:41, NS-30', '123', '2018-01-21 12:41:26', '0', '12', 1),
(20, '15:02, NS-21', '12', '2018-01-21 15:02:39', '0', '123', 1),
(21, 'assd', '90901', '2018-01-21 20:40:16', '0', 'bale@mail.com', 2),
(22, 'assd', '90901', '2018-01-21 20:43:09', '0', 'bale@mail.com', 2),
(23, 'assd', '90901', '2018-01-21 20:44:58', '0', 'bale@mail.com', 2),
(24, 'tes1', '90900', '2018-01-21 20:52:51', '1', 'bale@mail.com', 1),
(25, 'abc', '343', '2018-01-21 22:47:40', '0', 'asa@mail.com', 1),
(26, 'sa', 'asa', '2018-01-22 01:05:00', '1', 'asa', 2),
(27, 'as', '23`a', '2018-01-22 01:16:44', '1', 'asasa', 2),
(28, 'iqbal R', '081121119', '2018-01-23 20:09:17', '1', 'iqbal@email.com', 2),
(29, 'Iqbal R', '0909090', '2018-01-23 20:24:33', '0', 'iqbal@maill.com', 3),
(30, 'Iqbal R', '0909090', '2018-01-23 20:24:33', '1', 'iqbal@maill.com', 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `validasi`
--
DROP VIEW IF EXISTS `validasi`;
CREATE TABLE IF NOT EXISTS `validasi` (
`no_tiket` int(15)
,`no_travel` varchar(8)
,`id_rute` int(15)
,`waktu_pesan` datetime
,`tgl_berangkat` date
,`status_bayar` enum('0','1')
);
-- --------------------------------------------------------

--
-- Structure for view `validasi`
--
DROP TABLE IF EXISTS `validasi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `validasi` AS (select `t_pemesanan`.`no_tiket` AS `no_tiket`,`t_pemesanan`.`no_travel` AS `no_travel`,`t_pemesanan`.`id_rute` AS `id_rute`,`t_tagihan`.`waktu_pesan` AS `waktu_pesan`,`t_pemesanan`.`tgl_berangkat` AS `tgl_berangkat`,`t_tagihan`.`status_bayar` AS `status_bayar` from (`t_pemesanan` join `t_tagihan` on((`t_pemesanan`.`no_tagihan` = `t_tagihan`.`no_tagihan`))));

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_armada`
--
ALTER TABLE `t_armada`
 ADD PRIMARY KEY (`no_travel`), ADD KEY `id_rute` (`id_rute`);

--
-- Indexes for table `t_konfirmasi`
--
ALTER TABLE `t_konfirmasi`
 ADD KEY `no_tagihan` (`no_tagihan`);

--
-- Indexes for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
 ADD PRIMARY KEY (`no_tiket`), ADD KEY `no_travel` (`no_travel`), ADD KEY `id_rute` (`id_rute`), ADD KEY `no_tagihan` (`no_tagihan`);

--
-- Indexes for table `t_rute`
--
ALTER TABLE `t_rute`
 ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `t_tagihan`
--
ALTER TABLE `t_tagihan`
 ADD PRIMARY KEY (`no_tagihan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
MODIFY `no_tiket` int(15) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `t_rute`
--
ALTER TABLE `t_rute`
MODIFY `id_rute` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_tagihan`
--
ALTER TABLE `t_tagihan`
MODIFY `no_tagihan` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_armada`
--
ALTER TABLE `t_armada`
ADD CONSTRAINT `t_armada_ibfk_1` FOREIGN KEY (`id_rute`) REFERENCES `t_rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_konfirmasi`
--
ALTER TABLE `t_konfirmasi`
ADD CONSTRAINT `t_konfirmasi_ibfk_1` FOREIGN KEY (`no_tagihan`) REFERENCES `t_tagihan` (`no_tagihan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `t_pemesanan`
--
ALTER TABLE `t_pemesanan`
ADD CONSTRAINT `t_pemesanan_ibfk_5` FOREIGN KEY (`no_travel`) REFERENCES `t_armada` (`no_travel`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `t_pemesanan_ibfk_6` FOREIGN KEY (`id_rute`) REFERENCES `t_rute` (`id_rute`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `t_pemesanan_ibfk_7` FOREIGN KEY (`no_tagihan`) REFERENCES `t_tagihan` (`no_tagihan`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
