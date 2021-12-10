-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 12:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savekat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kucing`
--

CREATE TABLE `data_kucing` (
  `id` int(12) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `umur` varchar(5) NOT NULL,
  `jenis_kucing` varchar(15) NOT NULL,
  `berat` int(5) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `nama_rekening` varchar(20) NOT NULL,
  `no_rekening` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kucing`
--

INSERT INTO `data_kucing` (`id`, `nama`, `umur`, `jenis_kucing`, `berat`, `jenis_kelamin`, `deskripsi`, `gambar`, `lokasi`, `nomor_telp`, `nama_rekening`, `no_rekening`) VALUES
(9, 'kattie', '2', 'Anggora', 24, 'Jantan', 'sehat, makmur', 'cat/images/cat5.jpg', 'Tangerang', '62898887865', 'Master Putra', '75487694'),
(10, 'Cimol', '3', 'Persia', 24, 'Betina', 'Kucing lucu, suka aktif dimalam hari', 'cat/images/cat1.jpg', 'Tangerang', '62898887865', 'Master Putra', '567546546'),
(11, 'Anabul', '4', 'Siam', 32, 'Betina', 'Sehat, lucu, menggemaskan', 'cat/images/cat2.jpg', 'Tangerang', '62898887865', 'Master Putra', '767546754'),
(12, 'Astro', '3', 'Domestik/Kampun', 20, 'Jantan', 'Kucing lincah, agresif', 'cat/images/cat3.jpg', 'Malang', '62898887865', 'Master Putra', '898797700'),
(13, 'Anabel', '6', 'Anggora', 21, 'Betina', 'Suka banget bercanda, suka gangguin orang', 'cat/images/cat4.jpg', 'Bandung', '62898887865', 'Master Putra', '768678678'),
(15, 'bening', '2', 'Anggora', 10, 'Betina', 'Sehat, manis', 'cat/images/cat2.jpg', 'Tangerang', '628674838372', 'master', '7329592');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`) VALUES
(14, 'master', 'master', 'master@gmail.com', '$2y$10$1TMtGZFiRNgArK7R573oqeWf7xyjmbQQev3mTNkb22GYPwmBxhara'),
(16, 'putra', 'putra', 'putra@gmail.com', '$2y$10$NTFas3/2QEB.ClOsRLiXteZdPlN8F9XwbOY3uqGb/hFELYyZSlqRa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kucing`
--
ALTER TABLE `data_kucing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_kucing`
--
ALTER TABLE `data_kucing`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
