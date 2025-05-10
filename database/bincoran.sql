-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2025 at 02:29 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bincoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`, `deskripsi`) VALUES
(41, 'Bincoran Nusantara', '20250326Mar4553.jpg', 'Perusahaan yang bergerak di bidang pengolahan serabut kelapa.');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int NOT NULL,
  `judul` varchar(60) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `isifoto` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `foto`, `tanggal`, `isifoto`) VALUES
(20, 'bincoran1', '20250327Mar3208.jpg', '2025-03-27', 'bincoran'),
(21, 'bincoran2', '20250327Mar3229.jpg', '2025-03-27', 'bincoran'),
(22, 'bincoran3', '20250327Mar3249.jpg', '2025-03-27', 'bincoran'),
(23, 'bincoran5', '20250327Mar3308.jpg', '2025-03-27', 'bincoran'),
(25, 'binco', '20250509May0844.jpg', '2025-05-09', 'bin'),
(26, 'bincooo', '20250509May0903.jpg', '2025-05-09', 'bincooo'),
(28, 'bincoranmmmmmmmm', '20250510May1944.jpg', '2025-05-10', 'bincora');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profil_website` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `instagram` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facebook` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tiktok` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `whatsapp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `youtube` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `tiktok`, `alamat`, `whatsapp`, `youtube`) VALUES
(1, 'Bincoran Nusantara', 'PT BINCO RAN NUSANTARA adalah perusahaan yang bergerak di bidang pengolahan serabut kelapa.', 'https://www.instagram.com/bincorannusantara', 'https://www.facebook.com/Bincorannusantara', 'https://www.tiktok.com/@bincorannusantara', 'Suruh, Kayuapak, Kecamatan Polokarto, Sukoharjo', 'http://wa.me/6281221231117', 'http://www.youtube.com/@BincoRan');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `tanggal`, `username`, `harga`) VALUES
(56, 'BINCO FLOWERPOT', 'Cocopot atau pot yang terbuat dari sabut kelapa merupakan suatu alternatif dalam upaya mengurangi limbah sabut kelapa di lingkungan. Cocopot ini selain bermanfaat bagi lingkungan juga memiliki fungsi pakai.', '20250323Mar2449.jpg', 'BINCO-FLOWERPOT', '2025-03-23', 'admin', '0.00'),
(57, 'BINCO COCOROPE', 'Cocorope atau biasa kita kenal dengan tali serabut kelapa adalah tali yang dihasilkan dari lilitan serabut kelapa, yang dirangkai dan disatukan menjadi pilinan rapat membentuk sebuah tali.', '20250323Mar2531.jpg', 'BINCO-COCOROPE', '2025-03-23', 'admin', '0.00'),
(58, 'BINCO COCOKAT', 'Cocokat adalah sikat menggunakan bahan baku sabut kelapa (cocobristle). Tampilan yang elegan dan ideal dan alami, merupakan poin utama sikat ini, serta mendukung mengurangi limbah plastik.', '20250323Mar2616.jpg', 'BINCO-COCOKAT', '2025-03-23', 'admin', '0.00'),
(78, 'BINCO KUASKU', 'Semua bahan baku dari kuasku terdiri dari bahan alami. Kuasku memiliki fungsi yang fleksibel. Tersedia pada dua ukuran praktis. Umumnya digunakan untuk makanan.', '20250327Mar5040.jpg', 'BINCO-KUASKU', '2025-03-27', 'admin', '0.00'),
(79, 'COCOBRISTLE', 'Serat inti dari sabut kelapa yang kuat dan serbaguna.', '20250509May3451.jpg', 'COCOBRISTLE', '2025-05-10', 'admin', '120000.00'),
(81, 'COCOPEAT', 'Serbuk sabut kelapa yang digunakan sebagai media tanam organik dengan daya serap air tinggi, membantu mengurangi penggunaan tanah.', '20250509May3643.jpg', 'COCOPEAT', '2025-05-09', 'admin', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recent_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`, `recent_login`) VALUES
(7, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2025-05-10 08:18:51'),
(9, 'Binco Ran Nusantara', 'Binco Ran Nusantara', 'b79e3f61af120786a60dcf8ff7bb494d', 'admin', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
