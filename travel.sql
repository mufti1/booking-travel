-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Feb 2018 pada 23.22
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id_banner` int(11) NOT NULL,
  `banner1` text NOT NULL,
  `banner2` text NOT NULL,
  `banner3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id_banner`, `banner1`, `banner2`, `banner3`) VALUES
(1, '24253923_544122872600498_8677494651449507840_n1.jpg', 'bush1.png', 'contoh_foto_rumah1.jpg'),
(2, 'bush.png', 'contoh_foto_rumah.jpg', '24253923_544122872600498_8677494651449507840_n.jpg'),
(3, '24253923_544122872600498_8677494651449507840_n.jpg', 'contoh_foto_rumah.jpg', 'bush.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(13) NOT NULL,
  `gender` enum('laki-laki','perempuan','','') NOT NULL,
  `no_identitas` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `address`, `phone`, `gender`, `no_identitas`) VALUES
('C0001', 'Test Cust', 'Karangkobarg', '0856712612', 'laki-laki', '1112211'),
('C0002', 'Mufti Ismi', 'Karangklesem', '085715338630', 'laki-laki', '1112211'),
('C0003', 'Hanabi Hyuga', 'Konoha', '092391', 'perempuan', '1112211'),
('C0004', 'Test Cust 2', 'Mana ', '99123932', 'laki-laki', '1112211'),
('C0005', 'Tesst Cust 3', 'ga tau', '123u312', 'perempuan', '1112211'),
('C0006', 'samplw', 'kadkla', '901239012', 'laki-laki', '1112211'),
('C0007', 'skjjksafdjk', 'asdasd', '9012390123', 'laki-laki', '1112211'),
('C0008', 'Hanan Jomblo', 'Karanglewas', '087621625', 'laki-laki', '1112211'),
('C0009', 'Mufti Ismi Rizqi', 'Karangklesem Rt 02 Rw 03, Kecamatan Pekuncen', '085715338630', 'laki-laki', '1112211'),
('C0010', 'Aku Ganteng', 'Karangklesem Rt 02 Rw 03, Kecamatan Pekuncen', '085715338630', 'laki-laki', '1112211'),
('C0011', 'asal', 'askjkfasdj', '9210123', 'laki-laki', '1112211'),
('C0012', 'klsaefjisdaljfk', 'klajljal', '012390231', 'laki-laki', '1112211'),
('C0013', 'hanan', 'pwt', '12', 'laki-laki', '1112211'),
('C0014', 'asa', 'as', 'sssas', 'laki-laki', '1112211'),
('C0015', 'sdfjjkasd', 'jasjfaj', 'klasklsfadjl', 'laki-laki', '1112211'),
('C0016', 'kakjas', 'kalfaj', 'klasfklas', 'laki-laki', '1112211'),
('C0017', 'asu', 'banfsa', 'sadhjkas', 'laki-laki', '1112211'),
('C0018', 'sadsdfam,', 'dafasddf', 'sfdafsda', 'laki-laki', '1112211'),
('C0019', 'skjal', 'ka', 'kaafklsd', 'laki-laki', '1112211'),
('C0020', 'test', 'test', 'sfaafsd', 'laki-laki', '1112211'),
('C0021', 'Mufti Ismi', 'Karangklese', '085715338630', 'laki-laki', '99918210391');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(13) NOT NULL,
  `reservation_code` varchar(100) NOT NULL,
  `reservation_at` varchar(20) NOT NULL,
  `reservation_date` varchar(20) NOT NULL,
  `id_customer` varchar(13) NOT NULL,
  `id_transportation` varchar(13) NOT NULL,
  `id_rute` varchar(13) NOT NULL,
  `depart_at` datetime NOT NULL,
  `price` varchar(13) NOT NULL,
  `id_user` varchar(13) NOT NULL,
  `seat_code` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `reservation_code`, `reservation_at`, `reservation_date`, `id_customer`, `id_transportation`, `id_rute`, `depart_at`, `price`, `id_user`, `seat_code`, `status`) VALUES
(48, 'U00012018022111', '15:36:11', '2018-02-21', 'C0002', 'T0001', '1', '2018-02-02 00:00:00', '10111', 'U0001', 1, 3),
(49, 'U00012018022111', '15:36:11', '2018-02-21', 'C0003', 'T0001', '1', '2018-02-02 00:00:00', '10111', 'U0001', 22, 3),
(50, 'U00022018022229', '01:02:29', '2018-02-22', 'C0004', 'T0001', '1', '2018-02-02 00:00:00', '10229', 'U0002', 7, 2),
(51, 'U00022018022229', '01:02:29', '2018-02-22', 'C0005', 'T0001', '1', '2018-02-02 00:00:00', '10229', 'U0002', 13, 2),
(52, 'U00022018022231', '07:32:31', '2018-02-22', 'C0006', 'T0001', '1', '2018-02-02 00:00:00', '10231', 'U0002', 41, 3),
(53, 'U00022018022231', '07:32:31', '2018-02-22', 'C0007', 'T0001', '1', '2018-02-02 00:00:00', '10231', 'U0002', 59, 3),
(54, 'U00022018022323', '03:13:23', '2018-02-23', 'C0008', 'T0001', '1', '2018-02-02 00:00:00', '5323', 'U0002', 106, 2),
(55, 'U00012018022303', '03:57:03am', '2018-02-23', 'C0009', 'T0001', '1', '2018-02-02 00:00:00', '5303', 'U0001', 40, 2),
(58, 'U00012018022326', '11:59:26am', '2018-02-23', 'C0010', 'T0001', '1', '2018-02-02 00:00:00', '5326', 'U0001', 8, 2),
(59, 'u00032018022445', '00:24:45am', '2018-02-24', 'C0011', 'T0002', '5', '2018-02-03 06:15:00', '4445', 'u0003', 34, 2),
(60, 'u00032018022445', '00:24:45am', '2018-02-24', 'C0012', 'T0002', '5', '2018-02-03 06:15:00', '4445', 'u0003', 1, 2),
(61, 'U00022018022500', '04:18:00am', '2018-02-25', 'C0013', 'T0001', '1', '2018-02-02 00:00:00', '5500', 'U0002', 104, 3),
(62, 'U00022018022501', '04:58:01am', '2018-02-25', 'C0014', 'T0001', '13', '2018-02-25 12:00:00', '125501', 'U0002', 3, 2),
(63, 'U00022018022553', '05:06:53am', '2018-02-25', 'C0015', 'T0001', '13', '2018-02-25 12:00:00', '125553', 'U0002', 1, 2),
(64, 'U00022018022548', '05:27:48am', '2018-02-25', 'C0016', 'T0001', '19', '2018-02-25 01:00:00', '1770', 'U0002', 1, 2),
(65, 'U00022018022539', '06:26:39am', '2018-02-25', 'C0017', 'T0001', '19', '2018-02-25 01:00:00', '2983', 'U0002', 39, 2),
(66, 'U00022018022539', '06:26:39am', '2018-02-25', 'C0018', 'T0001', '19', '2018-02-25 01:00:00', '2983', 'U0002', 6, 2),
(67, 'U00022018022641', '07:39:41am', '2018-02-26', 'C0019', 'T0001', '1', '2018-02-02 00:00:00', '5641', 'U0002', 4, 2),
(68, 'U00022018022832', '00:54:32am', '2018-02-28', 'C0020', 'T0001', '1', '2018-02-02 00:00:00', '5832', 'U0002', 3, 2),
(69, 'U00012018022832', '01:19:32am', '2018-02-28', 'C0021', 'T0001', '1', '2018-02-02 00:00:00', '5832', 'U0001', 136, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id_rute` int(13) NOT NULL,
  `depart_at` datetime NOT NULL,
  `rute_from` varchar(50) NOT NULL,
  `rute_to` varchar(50) NOT NULL,
  `arrival` datetime NOT NULL,
  `price` varchar(13) NOT NULL,
  `id_transportation` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rute`
--

INSERT INTO `rute` (`id_rute`, `depart_at`, `rute_from`, `rute_to`, `arrival`, `price`, `id_transportation`) VALUES
(1, '2018-02-02 00:00:00', 'Purwokerto(PWT)-Ahmad Yani', 'Banjarnegara(BJR)-Sudirman', '2018-02-02 06:00:00', '5000', 'T0001'),
(2, '2018-02-03 08:00:00', 'Purwokerto(PWT)-Ahmad Yani', 'Purbalingga(PBG)-Nasution', '2018-02-03 08:30:00', '200000', 'T0001'),
(3, '2018-02-24 00:00:00', 'Purwokerto(PWT)-Ahmad Yani', 'Banjarnegara(BJR)-Sudirman', '2018-02-24 00:00:00', '100000', 'T0002'),
(4, '2018-02-02 01:00:00', 'Banjarnegara(BJR)-Sutomo', 'Purwokerto(PWT)-Piere Tendean', '2018-02-02 03:00:00', '3000', 'T0002'),
(5, '2018-02-03 06:15:00', 'Purwokerto(PWT)-Ahmad Yani', 'Purbalingga(PBG)-Nasution', '2018-02-03 06:45:00', '2000', 'T0003'),
(6, '2018-02-02 08:00:00', 'Purwokerto(PWT)-Ahmad Yani', 'Banjarnegara(BJR)-Sutomo', '2018-02-01 11:00:00', '7000', 'T0003'),
(12, '2018-02-24 12:00:00', 'Purworejo(PWJ)-Juanda', 'Purwokerto(PWT)-Sudirman', '2018-02-24 14:00:00', '125000', 'T0001'),
(13, '2018-02-25 12:00:00', 'Purworejo(PWJ)-Juanda', 'Purwokerto(PWT)-Sudirman', '2018-02-25 14:00:00', '125000', 'T0001'),
(14, '2018-02-26 12:00:00', 'Purworejo(PWJ)-Juanda', 'Purwokerto(PWT)-Sudirman', '2018-02-26 14:00:00', '125000', 'T0001'),
(15, '2018-02-27 12:00:00', 'Purworejo(PWJ)-Juanda', 'Purwokerto(PWT)-Sudirman', '2018-02-27 14:00:00', '125000', 'T0001'),
(16, '2018-02-28 12:00:00', 'Purworejo(PWJ)-Juanda', 'Purwokerto(PWT)-Sudirman', '2018-02-28 14:00:00', '125000', 'T0001'),
(17, '2018-03-01 12:00:00', 'Purworejo(PWJ)-Juanda', 'Purwokerto(PWT)-Sudirman', '2018-03-01 14:00:00', '125000', 'T0001'),
(18, '2018-03-02 12:00:00', 'Purworejo(PWJ)-Juanda', 'Purwokerto(PWT)-Sudirman', '2018-03-02 14:00:00', '125000', 'T0001'),
(19, '2018-02-25 01:00:00', 'Purworejo(PWJ)-Juanda', 'Purwokerto(PWT)-Sudirman', '2018-02-25 03:00:00', '1222', 'T0001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation`
--

CREATE TABLE `transportation` (
  `id_transportation` varchar(13) NOT NULL,
  `code` varchar(13) NOT NULL,
  `armada` varchar(100) NOT NULL,
  `seat_qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation`
--

INSERT INTO `transportation` (`id_transportation`, `code`, `armada`, `seat_qty`) VALUES
('T0001', 'R 2560 SAHs', 'Pesawat Apiks', 200),
('T0002', 'R 2521 SAH', 'sjfadkdfsjakl', 40),
('T0003', 'R 8822', 'sdfkldfk', 40);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(13) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `level` enum('1','muftiganteng','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `fullname`, `level`) VALUES
('U0001', 'mufti', 'dd6a160efe63a6b04244b2bbad757977', 'Mufti Ismi Rizqi', '1'),
('U0002', 'hanan', '2b37661f80c1b0e51e5ed54781a7ff52', 'Hanan Afif', '1'),
('u0003', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'muftiganteng'),
('U0004', 'yser', 'd41d8cd98f00b204e9800998ecf8427e', 'user', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Indexes for table `rute`
--
ALTER TABLE `rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`id_transportation`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `rute`
--
ALTER TABLE `rute`
  MODIFY `id_rute` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
