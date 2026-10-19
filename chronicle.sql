-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 06:18 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chronicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `no_telp` int(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `password`, `nama`, `no_telp`, `alamat`) VALUES
(1, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 87555444, 'Jl.Sigura gura, Malang, Jawa Timur'),
(3, 'icyaizadmin', 'icyaizadmin@gmail.com', '603f5a4b6e0c012f382ba0d9a8d8ff25', 'icyaizadmin', 88938323, 'Atlanta'),
(4, 'admin2', 'admin2@gmail.com', 'admin2', 'admin2', 88938323, 'Sigura gura');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(15) NOT NULL,
  `id_admin` int(15) NOT NULL,
  `id_kategori` int(15) NOT NULL,
  `nama_berita` varchar(100) DEFAULT NULL,
  `foto_berita` text DEFAULT NULL,
  `konten_berita` text DEFAULT NULL,
  `waktu` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_admin`, `id_kategori`, `nama_berita`, `foto_berita`, `konten_berita`, `waktu`) VALUES
(28, 3, 2, 'Figma is not forever', '9891figma.jpg', 'The Figma obsession needs to stop, because you never know what’s coming in 1–2 years and the time spent learning Figma specific workflows may prove to be completely wasted.\r\n', '2024-06-21 19:35:28'),
(31, 3, 2, 'Microsoft is ditching React', '5148react.png', 'Recently, the Microsoft Edge Team wrote an article on how Microsoft team is improving Edge to become faster.', '2024-06-21 20:17:20'),
(32, 3, 2, 'Microsoft is ditching React updated', '9881react.png', 'Microsoft updated', '2024-06-21 23:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Sport'),
(2, 'Technology'),
(3, 'Otomotif');

-- --------------------------------------------------------

--
-- Table structure for table `produk_langganan`
--

CREATE TABLE `produk_langganan` (
  `id_produk` int(15) NOT NULL,
  `nama_produk` text DEFAULT NULL,
  `harga_produk` double DEFAULT NULL,
  `deskripsi_produk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_langganan`
--

INSERT INTO `produk_langganan` (`id_produk`, `nama_produk`, `harga_produk`, `deskripsi_produk`) VALUES
(1, 'monthly', 25000, 'produk bulanan'),
(2, 'yearly', 450000, 'produk tahunan');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_produk`, `id_user`, `waktu`) VALUES
(9, 1, 13, '2024-06-21 20:03:39'),
(10, 1, 13, '2024-06-21 20:04:17'),
(11, 1, 15, '2024-06-21 23:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `nama_user` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `no_telp` int(50) DEFAULT NULL,
  `bio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `id_produk`, `nama_user`, `email`, `password`, `no_telp`, `bio`) VALUES
(1, 1, 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 13123213, 'pass:user'),
(8, 1, 'usercoba4', 'usercoba4@gmail.com', '55a84ca9cb63367b887b6617f315d613', 839039390, 'usercoba4'),
(10, 2, 'Admin Editor', 'admineditor@gmail.com', 'f3fa817831359e606d9116a6ed34366a', 85947584, 'Admin Editor'),
(11, 1, 'usercobacoba updated', 'usercobacoba@gmail.com', '1e5e98e8ee99eae71f663e5e78205aa3', 839039, 'usercobacoba updated'),
(13, 2, 'icyaiz', 'icyaiz@gmail.com', '603f5a4b6e0c012f382ba0d9a8d8ff25', 9210, 'twentyseven'),
(14, NULL, 'alex', 'alexupdated@gmail.com', '534b44a19bf18d20b71ecc4eb77c572f', 9210, 'alexupdated'),
(15, NULL, 'fuadiz', 'fuad@gmail.com', 'd0b0caa56fee5e734ca286516b5885dc', 9210, 'fuad ganteng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`) USING BTREE,
  ADD KEY `id_admin` (`id_admin`) USING BTREE;

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `produk_langganan`
--
ALTER TABLE `produk_langganan`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produk_langganan`
--
ALTER TABLE `produk_langganan`
  MODIFY `id_produk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `berita_ibfk_2` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id_admin`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk_langganan` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk_langganan` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
