-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 Feb 2018 pada 01.19
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
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(13) NOT NULL,
  `gender` enum('laki-laki','perempuan','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `address`, `phone`, `gender`) VALUES
('C0001', 'Test Cust', 'Karangkobarg', '0856712612', 'laki-laki'),
('C0002', 'test gilang', 'banjar', '08329434', 'perempuan'),
('C0003', 'gilangs', 'sfafas', '08123231', 'perempuan'),
('C0004', 'kasd', 'sdanfdsa\r\n', 'jsdnk', 'laki-laki'),
('C0005', 'saf', 'dsfadfsa', 'sdfa', 'laki-laki'),
('C0006', 'firman', 'asjkhfdjkad\r\n', '921839', 'perempuan'),
('C0007', 'MUFTI ISMI RIZQI', 'JL PRAMUKA NO 12', '085715338630', 'laki-laki'),
('C0008', 'Mufti Ismi', 'jahja', '15338630', 'perempuan'),
('C0009', 'hawley', 'bancarkembar', '01293901', 'laki-laki'),
('C0010', 'hanan', 'karanglewas', '901239021', 'perempuan'),
('C0011', 'boruto', 'konoha', '9120', 'laki-laki'),
('C0012', 'sarada', 'sunagakure', '9012124', 'laki-laki'),
('C0013', 'sakura', 'amegakure', '2319', 'laki-laki'),
('C0014', 'af', 'as', 'sdf', 'laki-laki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(13) NOT NULL,
  `reservation_code` varchar(13) NOT NULL,
  `reservation_at` datetime NOT NULL,
  `reservation_date` datetime NOT NULL,
  `id_customer` varchar(13) NOT NULL,
  `id_transportation` varchar(13) NOT NULL,
  `id_rute` varchar(13) NOT NULL,
  `depart_at` datetime NOT NULL,
  `price` varchar(13) NOT NULL,
  `id_user` varchar(13) NOT NULL,
  `seat_code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `reservation_code`, `reservation_at`, `reservation_date`, `id_customer`, `id_transportation`, `id_rute`, `depart_at`, `price`, `id_user`, `seat_code`) VALUES
(4, '2018-02-07', '2018-02-07 03:06:06', '2018-02-07 03:06:06', 'C0007', 't001', 'r001', '2018-02-02 00:00:00', '5000', 'sample', 1),
(5, '2018-02-07', '2018-02-07 03:06:06', '2018-02-07 03:06:06', 'C0008', 't001', 'r001', '2018-02-02 00:00:00', '5000', 'sample', 29),
(6, '2018-02-07', '2018-02-07 09:20:08', '2018-02-07 09:20:08', 'C0009', 't001', 'r001', '2018-02-02 00:00:00', '5000', 'sample', 4),
(7, '2018-02-07', '2018-02-07 09:20:08', '2018-02-07 09:20:08', 'C0010', 't001', 'r001', '2018-02-02 00:00:00', '5000', 'sample', 13),
(9, '2018-02-08', '2018-02-08 13:10:36', '2018-02-08 13:10:36', 'C0012', 't001', 'r001', '2018-02-02 00:00:00', '5000', 'sample', 2),
(14, '2018-02-08', '2018-02-08 13:43:30', '2018-02-08 13:43:30', 'C0011', 't001', 'r001', '2018-02-02 00:00:00', '5000', 'sample', 22),
(15, '2018-02-08', '2018-02-08 13:43:30', '2018-02-08 13:43:30', 'C0012', 't001', 'r001', '2018-02-02 00:00:00', '5000', 'sample', 8),
(16, '2018-02-08', '2018-02-08 13:50:22', '2018-02-08 13:50:22', 'C0013', 't001', 'r001', '2018-02-02 00:00:00', '5000', 'sample', 11),
(17, '2018-02-08', '2018-02-08 13:52:25', '2018-02-08 13:52:25', 'C0014', 't001', 'r001', '2018-02-02 00:00:00', '5000', 'sample', 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rute`
--

CREATE TABLE `rute` (
  `id_rute` varchar(13) NOT NULL,
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
('r001', '2018-02-02 00:00:00', 'Purwokerto(PWT)-Ahmad Yani', 'Banjarnegara(BJR)-Sudirman', '2018-02-02 06:00:00', '5000', 't001'),
('r002', '2018-02-02 01:00:00', 'Banjarnegara(BJR)-Sutomo', 'Purwokerto(PWT)-Piere Tendean', '2018-02-02 03:00:00', '3000', 't002'),
('r003', '2018-02-02 08:00:00', 'Purwokerto(PWT)-Ahmad Yani', 'Banjarnegara(BJR)-Sutomo', '2018-02-01 11:00:00', '7000', 't003'),
('r004', '2018-02-03 06:15:00', 'Purwokerto(PWT)-Ahmad Yani', 'Purbalingga(PBG)-Nasution', '2018-02-03 06:45:00', '2000', 't002'),
('r005', '2018-02-03 08:00:00', 'Purwokerto(PWT)-Ahmad Yani', 'Purbalingga(PBG)-Nasution', '2018-02-03 08:30:00', '4000', 't001');

-- --------------------------------------------------------

--
-- Struktur dari tabel `seat`
--

CREATE TABLE `seat` (
  `id_seat` varchar(13) NOT NULL,
  `id_transportation` varchar(13) NOT NULL,
  `baris` varchar(2) NOT NULL,
  `kolom` int(3) NOT NULL,
  `status` enum('0','1','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transportation`
--

CREATE TABLE `transportation` (
  `id_transportation` varchar(13) NOT NULL,
  `code` varchar(13) NOT NULL,
  `description` text NOT NULL,
  `seat_qty` int(3) NOT NULL,
  `seat_av` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation`
--

INSERT INTO `transportation` (`id_transportation`, `code`, `description`, `seat_qty`, `seat_av`) VALUES
('t001', 'R 2560 SAH', 'Pesawat Apik', 40, 31),
('t002', 'R 2521 SAH', 'sjfadkdfsjakl', 40, 39),
('t003', 'R 8822', 'sdfkldfk', 40, 39);

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
('u0003', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'muftiganteng');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
