-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 01:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mp`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `link1` varchar(100) DEFAULT NULL,
  `link2` varchar(100) DEFAULT NULL,
  `link3` varchar(100) DEFAULT NULL,
  `link4` varchar(100) DEFAULT NULL,
  `artikel1` varchar(100) DEFAULT NULL,
  `artikel2` varchar(100) DEFAULT NULL,
  `artikel3` varchar(100) DEFAULT NULL,
  `artikel4` varchar(100) DEFAULT NULL,
  `gambar1` varchar(200) DEFAULT NULL,
  `gambar2` varchar(100) DEFAULT NULL,
  `gambar3` varchar(100) DEFAULT NULL,
  `gambar4` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `link1`, `link2`, `link3`, `link4`, `artikel1`, `artikel2`, `artikel3`, `artikel4`, `gambar1`, `gambar2`, `gambar3`, `gambar4`) VALUES
(15, '851-P01.pdf', '851-P01.pdf', '851-P01.pdf', '851-P01.pdf', 'Manfaat Berbelanja Bersama Anak Ke Pasar Tradisional', 'Peran Ibu Dalam Menjaga Nutrisi Si Adik pada Masa Pandemi Covid-19', 'Alasan Pentingnya Anak Berinteraksi dengan Orang Lain Sejak Dini', 'Alasan Pentingnya Anak Berinteraksi dengan Orang Lain Sejak Dini', 'artikel-1.1.jpg', 'artikel-2.2.jpg', 'artikel-3.3.jpg', 'artikel-4.4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `artikel2`
--

CREATE TABLE `artikel2` (
  `id` int(11) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `artikel` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` int(50) NOT NULL,
  `message` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `komentar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `nama`, `email`, `komentar`) VALUES
(55, 'Rifky Alaydrus', 'azzahraaisha100@gmail.com', 'halo'),
(98, ' Rizal Fauzi', 'ardhisyh@gmail.com', 'uuhuhuhuhuhuhu'),
(141, 'aldi', 'azzahraaisha100@gmail.com', 'halo');

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `is_activate` int(1) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `data_created` date DEFAULT NULL,
  `foto` varchar(500) NOT NULL,
  `JenisKelamin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `is_activate`, `role_id`, `data_created`, `foto`, `JenisKelamin`) VALUES
(79, 'Rizal Fauzi', 'rf7699886@gmail.com', '$2y$10$NG4hGX770lk6ccCmJKpbLepxCVkVjFJwTt9Vu37FLxd2gmNAMYUyS', 2, 1, '0000-00-00', 'about.jpg', ''),
(93, 'saskia azahra', 'saskia@gmail.com', '$2y$10$n1qvpjQ0ArFnekvfSYbRpeWu6RjAzhXSShi5NoelNOtReqdIm2nUe', 2, 1, '0000-00-00', '', NULL),
(94, 'aisha azzahra', 'aishaazzahra@gmail.com', NULL, NULL, NULL, NULL, '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi_data`
--

CREATE TABLE `verifikasi_data` (
  `id` int(11) NOT NULL,
  `ayah` varchar(100) NOT NULL,
  `ibu` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `jumlah_anak` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifikasi_data`
--

INSERT INTO `verifikasi_data` (`id`, `ayah`, `ibu`, `alamat`, `jumlah_anak`) VALUES
(1, 'rizal', 'siapa aja', 'bekasi', 2),
(2, 'rizal', 'hai', 'kuningan', 4),
(3, 'rizal', 'hai', 'kuningan', 4),
(4, '', '', '', 0),
(5, 'imam', 'viona', 'bekasi', 210);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artikel2`
--
ALTER TABLE `artikel2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifikasi_data`
--
ALTER TABLE `verifikasi_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `artikel2`
--
ALTER TABLE `artikel2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `verifikasi_data`
--
ALTER TABLE `verifikasi_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
