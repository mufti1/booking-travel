-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 Feb 2018 pada 02.50
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
  `gender` enum('laki-laki','perempuan','','') NOT NULL,
  `kebutuhan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_customer`, `name`, `address`, `phone`, `gender`, `kebutuhan`) VALUES
('C0001', 'Test Cust', 'Karangkobarg', '0856712612', 'laki-laki', NULL),
('C0002', 'Mufti Ismi', 'Karangklesem', '085715338630', 'laki-laki', NULL),
('C0003', 'Hanabi Hyuga', 'Konoha', '092391', 'perempuan', NULL),
('C0004', 'Test Cust 2', 'Mana ', '99123932', 'laki-laki', 'Saya sering gaje'),
('C0005', 'Tesst Cust 3', 'ga tau', '123u312', 'perempuan', '');

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
(48, 'U00012018022111', '15:36:11', '2018-02-21', 'C0002', 't001', 'r001', '2018-02-02 00:00:00', '10111', 'U0001', 1, 2),
(49, 'U00012018022111', '15:36:11', '2018-02-21', 'C0003', 't001', 'r001', '2018-02-02 00:00:00', '10111', 'U0001', 22, 2),
(50, 'U00022018022229', '01:02:29', '2018-02-22', 'C0004', 't001', 'r001', '2018-02-02 00:00:00', '10229', 'U0002', 7, 2),
(51, 'U00022018022229', '01:02:29', '2018-02-22', 'C0005', 't001', 'r001', '2018-02-02 00:00:00', '10229', 'U0002', 13, 2);

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
  `seat_qty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transportation`
--

INSERT INTO `transportation` (`id_transportation`, `code`, `description`, `seat_qty`) VALUES
('t001', 'R 2560 SAH', 'Pesawat Apik', 140),
('t002', 'R 2521 SAH', 'sjfadkdfsjakl', 40),
('t003', 'R 8822', 'sdfkldfk', 40);

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
  MODIFY `id_reservation` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
