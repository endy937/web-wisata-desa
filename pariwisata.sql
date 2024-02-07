-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 02:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_wisata`
--

CREATE TABLE `data_wisata` (
  `id` int(11) NOT NULL,
  `nama_wista` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_wisata`
--

INSERT INTO `data_wisata` (`id`, `nama_wista`, `alamat`, `status`) VALUES
(1, 'Curug Tilu', 'Dusun. Cempakawarna, keluluarahan No. 11, RT.002/RW.010, Cilembang, Kec. Cihideung, Tasikmalaya, Jaw', 'Aktif'),
(2, 'Wisata Cimanintin', 'dusun. Wiratanuningrat, Empangsari, Tawang, Tawangsari, Kec. Tawang, Tasikmalaya, Jawa Barat', 'aktif'),
(3, 'gedogan Camp', 'Dusun. sukamaju rt. 11, Rw. 004. Indihiang, kaki gunung gede Kec. Indihiang, Tasikmalaya, Jawa Barat', 'aktif'),
(4, 'Gunung Sungkem Camp', 'Dusun. Letkol Basir Surya No. 16, Setianagara, Kec. Cibeureum, Tasikmalaya, Jawa Barat', 'aktif'),
(5, 'Tebing Aki', 'Cipakat, Kec. Singaparna Tasikmalaya, Jawa Barat', 'aktif'),
(6, 'taman langit', 'Cipakat, Kec. Singaparna Tasikmalaya, Jawa Barat', 'aktif'),
(7, 'air terjun pengantin', 'Cipakat, Kec. Singaparna Tasikmalaya, Jawa Barat', 'aktif'),
(8, 'bukit putri', 'Cipakat, Kec. Singaparna Tasikmalaya, Jawa Barat', 'aktif'),
(9, 'pantai cikalong', 'Cipakat, Kec. cikalong Tasikmalaya, Jawa Barat', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `waktu_tgl` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `pilih_wisata` varchar(20) NOT NULL,
  `jml_tiket` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `nama`, `email`, `no_hp`, `waktu_tgl`, `pilih_wisata`, `jml_tiket`) VALUES
(18, 'Endi Rahman Muhamad', 'endymuhamad93@gmail.com', '083383335948', '2024-01-16 10:40:00', 'Tebing Aki', 10),
(19, 'yahya', 'anonymouse011111@gmail.com', '083383335948', '2024-01-16 10:49:00', 'Taman Langit', 7),
(20, 'ajis', 'anonymouse011111@gmail.com', '083383335948', '2024-01-17 03:40:00', 'Gedogan Camp', 3),
(22, 'endi', 'anonymouse011111@gmail.com', '083383335948', '2024-01-17 04:10:00', 'curug tilu', 3),
(23, 'Endi Rahman Muhamad', 'endymuhamad93@gmail.com', '083383335948', '2024-01-20 06:14:00', 'Taman Langit', 12);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin123', 'admin'),
(2, 'pegawai', 'pegawai123', 'pegawai'),
(3, 'pengurus', 'pengurus123', 'pengurus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_wisata`
--
ALTER TABLE `data_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_wisata`
--
ALTER TABLE `data_wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
