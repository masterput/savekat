-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 23, 2021 at 12:21 PM
-- Server version: 10.2.41-MariaDB-log-cll-lve
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `savekatm_savekat`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_kucing`
--

CREATE TABLE `data_kucing` (
  `id` int(12) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `umur` varchar(5) NOT NULL,
  `jenis_kucing` varchar(20) NOT NULL,
  `berat` int(5) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `lokasi` varchar(200) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `nama_rekening` varchar(20) NOT NULL,
  `no_rekening` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_kucing`
--

INSERT INTO `data_kucing` (`id`, `nama`, `umur`, `jenis_kucing`, `berat`, `jenis_kelamin`, `deskripsi`, `gambar`, `lokasi`, `nomor_telp`, `nama_rekening`, `no_rekening`, `user_id`) VALUES
(47, 'kattie', '3', 'Domestik/Kampung', 2, 'Betina', 'Kucing lucu dan menggemaskan. Bulu halus dan lembut. Sehat dan lincah.', 'kat1.jpg', 'Semarang', '085600868745', 'master', '7685765765', 28),
(48, 'milo', '1', 'Persia', 1, 'Jantan', 'Bulu lebat dan halus. Lincah dan aktif. Sehat dan tidak cacat.', 'kat2.jpg', 'Jakarta', '089795884653', 'Yuyun', '565465465', 27),
(49, 'Kitten', '1', 'Anggora', 2, 'Betina', 'Lucu dan menggemaskan. Sehat dan tidak gampang sakit-sakitan. ', 'cat4.jpg', 'Bandung', '0897564663563', 'Praja', '5564654654', 30),
(50, 'Moci', '3', 'Persia', 2, 'Betina', 'Bulu putih lebat dan halus. Tidak cacat. Nurut', 'cat2.jpg', 'Surabaya', '089765756565', 'Putra', '5647547547', 31),
(51, 'Amir', '5', 'Maine Coon', 2, 'Jantan', 'Amir sudah diberi obat cacing dan kutu. Belum divaksin dan disteril. Badannya ada spot jamur dan sudah diobati. Sempat ada luka bekas cakaran yang menjadi abses, tetapi sudah diobati dan kering tertutup. Amir agak dominan. Cocok untuk keluarga yang hanya ingin memelihara satu kucing saja.', 'cat-g644d8821f_640.jpg', 'Makassar', '62852144356', 'Reni', '56611255', 29),
(52, 'Simba', '36', 'Persia', 4, 'Jantan', 'Sudah steril dan belum vaksin. Simba lahir di parkiran dan tinggal di parkiran. Simba teritorial dan agresif ke beberapa kucing lain. Dia juga sepertinya punya gangguan pernapasan karena sering terkena flu walau tidak sampai parah. Simba mudah diberikan vitamin seperti nutrigel plus atau flumax saat mulai bersin-bersin atau basah hidungnya.', 'cat-g7427bfce8_640.jpg', 'Pekanbaru', '6285723318094', 'Putri', '5994321556', 29),
(53, 'Nero', '8', 'Domestik/Kampung', 2, 'Jantan', 'Belum divaksin dan disteril, sudah diberi obat kutu dan obat cacing. Sangat playful. Dibuang bersama saudaranya yang sakit di parkiran dan tidak bertahan. Nero masih tinggal di parkiran di Ps Minggu.', 'cat-gcfb5b787e_640.jpg', 'Gorontalo', '628521334544', 'Tina', '566788822', 29);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `email`, `password`, `level`) VALUES
(18, 'admin', 'admin', 'admin@gmail.com', '$2y$10$OeNLuk/2WawVzzkOTM6oYOijOc4FETSyO6JnK3HhiNK2LftzWyLF6', 'admin'),
(27, 'yuyun', 'yuyun', 'yuyun@gmail.com', '$2y$10$9ke9mFQhEogANSv2FGnvP.qsTvgH48nYZCjEn4FGI6qLdrDSZqpNC', 'user'),
(28, 'master', 'master', 'master@gmail.com', '$2y$10$U6JIJkNUuDZbGnN0Uj3mEe128UoCwVc5Xg/Q1qdsW.Uubei2DtVNO', 'user'),
(29, 'Afifa Atira', 'afifaarn', 'afifa@gmail.com', '$2y$10$/J.r2jS0kwx5r4hWa7pzmenpLjVzyNq3j7OGvYuevmSzKtsHsBAD6', 'user'),
(30, 'praja', 'praja', 'praja@gmail.com', '$2y$10$JdnnhjBZ/ag5DuhWFoOj3ejhcLqt2Tv9gLenGP8Y6nRos.mW4o8i6', 'user'),
(31, 'putra', 'putra', 'putra@gmail.com', '$2y$10$.MyqeMo3E644Hfpaa6D2ZuQBEQzv1BiXCCK1vl/pWsQpzPgxMGdIW', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_kucing`
--
ALTER TABLE `data_kucing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_kucing`
--
ALTER TABLE `data_kucing`
  ADD CONSTRAINT `data_kucing_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
