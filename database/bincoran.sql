-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 25, 2025 at 12:22 PM
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
(45, 'Mengubah Limbah Kelapa Menjadi Produk', '20250621Jun2555.jpg', 'PT. Binco Ran Nusantara merupakan Produsen Pengolahan Limbah Sabut Kelapa yang memberikan kesempatan dan edukasi kepada masyarakat umum untuk turut serta memanfaatkan limbah sabut kelapa yang selama ini hanya dibuang begitu saja.');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int NOT NULL,
  `judul` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `foto`, `tanggal`) VALUES
(34, 'Foto Tim PT Binco', '20250625Jun4758.jpg', '2025-06-25'),
(35, 'Kunjungan Mahasiswa KKN', '20250625Jun4817.jpg', '2025-06-25'),
(36, 'Penyerahan Sertifikat Pelatihan', '20250625Jun4832.jpg', '2025-06-25'),
(37, 'Penerimaan Hasil Produksi Supplier', '20250625Jun4858.jpg', '2025-06-25'),
(38, 'Kunjungan Calon Supplier', '20250625Jun4913.jpg', '2025-06-25'),
(39, 'Kiriman Hasil Produksi Supplier', '20250625Jun4952.jpg', '2025-06-25'),
(40, 'Pengiriman Pesanan Cocopeat', '20250625Jun5022.jpg', '2025-06-25'),
(41, 'PT Binco Ran Nusantara Sukoharjp', '20250625Jun5101.jpg', '2025-06-25'),
(42, 'Wisata Petik Melon', '20250625Jun5133.jpg', '2025-06-25'),
(43, 'Greenhouse Smartplant PT Binco Ran Nusantara', '20250625Jun5151.jpg', '2025-06-25'),
(44, 'Kunjungan Masyarakat ke Greenhouse Smartplant PT Binco', '20250625Jun5208.jpg', '2025-06-25');

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
  `alamat` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `whatsapp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `youtube` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `tiktok`, `alamat`, `whatsapp`, `youtube`) VALUES
(1, 'Bincoran Nusantara', 'Produsen Pengolahan limbah sabut kelapa dan mengedukasi masyarakat agar limbah bernilai dan tidak terbuang sia-sia.', 'bincorannusantara', 'Bincorannusantara', '@bincorannusantara', 'PT. Binco Ran Nusantara  Suruh, Kayuapak, Kec. Polokarto, Kabupaten Sukoharjo, Jawa Tengah', '6281221231117', '@BincoRan');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `harga` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `tanggal`, `username`, `harga`) VALUES
(104, 'KESET SEDANG', 'LENGTH : 45cm\r\n\r\nWIDTH : 30cm\r\n\r\nTHICKNESS : 5cm\r\n\r\nMATERIAL : COCO FIBER', NULL, 'KESET-SEDANG', '2025-06-25', 'admin', '19000.00'),
(105, 'KESET PREMIUM HALUS', 'LENGTH : 100 CM\r\n\r\nWIDTH : 50 CM\r\n\r\nTHICKNESS : 5 CM\r\n\r\nMATERIAL : COCO FIBER FINE', NULL, 'KESET-PREMIUM-HALUS', '2025-06-25', 'admin', '74999.00'),
(106, 'KESET PREMIUM KASAR', 'LENGTH : 95 CM\r\n\r\nWIDTH : 45 CM\r\n\r\nTHICKNESS 4 CM\r\n\r\nMATERIAL : COCO FIBER', NULL, 'KESET-PREMIUM-KASAR', '2025-06-25', 'admin', '39999.00'),
(107, 'SIKAT TOILET KAYU', 'PANJANG SIKAT : 10 CM\r\n\r\nPANJANG PEGANGAN: 30 CM\r\n\r\nLEBAR SIKAT : 8CM\r\n', NULL, 'SIKAT-TOILET-KAYU', '2025-06-25', 'admin', '10000.00'),
(108, 'BINCO KUASKU', 'PANJANG: 26 CM\r\n\r\nPANJANG PEGANGAN: 27 CM\r\n\r\nPANJANG SERAT: 9 CM\r\n\r\nDIAMETER KAYU: 2 CM', NULL, 'BINCO-KUASKU', '2025-06-25', 'admin', '6000.00'),
(109, 'BINCO BRUSH', 'PANJANG: 16 CM\r\n\r\nPANJANG PEGANGAN: 6,5 CM\r\n\r\nPANJANG SERAT: 9 CM\r\n\r\nDIAMETER KAYU: 2 CM', NULL, 'BINCO-BRUSH', '2025-06-25', 'admin', '5000.00'),
(110, 'LAKOP', 'PANJANG PEGANGAN: 90 CM\r\n\r\nBERAT SAPU: 250 G\r\n\r\nLEBAR SAPU: 30 CM', NULL, 'LAKOP', '2025-06-25', 'admin', '9500.00'),
(111, 'RAJUT', 'PANJANG PEGANGAN: 90 CM\r\n\r\nBERAT SAPU: 250 G\r\n\r\nLEBAR SAPU: 30 CM', NULL, 'RAJUT', '2025-06-25', 'admin', '13500.00'),
(112, 'HIAS ESTETIK', 'DIAMETER ATAS: 14,5 CM\r\n\r\nDIAMETER BAWAH: 8 CM\r\n\r\nTINGGI: 13 CM\r\n\r\nBAHAN: ORGANIK TAHAN PECAH\r\n', NULL, 'HIAS-ESTETIK', '2025-06-25', 'admin', '23000.00'),
(116, 'BULET KECIL', 'DIAMETER ATAS: 11 CM\r\n\r\nDIAMETER BAWAH: 7 CM\r\n\r\nTINGGI: 10 CM\r\n\r\nBAHAN: ORGANIK TAHAN PECAH', NULL, 'BULET-KECIL', '2025-06-25', 'admin', '5500.00'),
(117, 'SEMI POLIGON KECIL', 'DIAMETER ATAS: 13,5 CM\r\n\r\nDIAMETER BAWAH: 8 CM\r\n\r\nTINGGI: 11 CM\r\n\r\nBAHAN: ORGANIK TAHAN PECAH\r\n', NULL, 'SEMI-POLIGON-KECIL', '2025-06-25', 'admin', '11125.00'),
(118, 'SEMI BULAT KECIL', 'DIAMETER ATAS: 14 CM DIAMETER BAWAH: 8 CM\r\n\r\nTINGGI: 12 CM\r\n\r\nBAHAN: ORGANIK TAHAN PECAH', NULL, 'SEMI-BULAT-KECIL', '2025-06-25', 'admin', '11125.00'),
(119, 'POLIGON SEDANG', 'GIAMETER ATAS: 14,5 CM\r\n\r\nDIAMETER BAWAH: 8 CM\r\n\r\nTINGGI: 13 CM\r\n\r\nBAHAN: ORGANIK TAHAN PECAH', NULL, 'POLIGON-SEDANG', '2025-06-25', 'admin', '11125.00'),
(120, 'BULAT SEDANG', 'DIAMETER ATAS: 16,5 CM\r\n\r\nDIAMETER BAWAH: 10 CM\r\n\r\nTINGGI: 14 CM\r\n\r\nBAHAN: ORGANIK TAHAN PECAH', NULL, 'BULAT-SEDANG', '2025-06-25', 'admin', '13125.00'),
(121, 'BULAT BESAR', 'DIAMETER ATAS: 21 CM\r\n\r\nDIAMETER BAWAH: 11,5 CM\r\n\r\nTINGGI: 18 CM\r\n\r\nBAHAN: ORGANIK TAHAN PECAH', NULL, 'BULAT-BESAR', '2025-06-25', 'admin', '19625.00'),
(122, 'POLIGON BESAR', 'DIAMETER ATAS: 21 CM\r\n\r\nDIAMETER BAWAH: 11,5 CM\r\n\r\nTINGGI: 18 CM\r\n\r\nBAHAN: ORGANIK\r\n\r\nTAHAN PECAH', NULL, 'POLIGON-BESAR', '2025-06-25', 'admin', '19625.00'),
(123, 'TALI 20 MM', 'DIAMETER : 20 MM\r\n\r\nPANJANG : 100 METER\r\n\r\nBAHAN : SERAT KELAPA\r\n\r\nWARNA : COKELAT\r\n\r\n', NULL, 'TALI-20-MM', '2025-06-25', 'admin', '4500.00'),
(124, 'TALI 8 MM', 'DIAMETER : 8 MM\r\n\r\nPANJANG : 100 METER\r\n\r\nBAHAN : SERAT KELAPA\r\n\r\nWARNA : COKELAT', NULL, 'TALI-8-MM', '2025-06-25', 'admin', '650.00'),
(125, 'TALI 6 MM', 'DIAMETER : 6 MM\r\n\r\nPANJANG : 100 METER\r\n\r\nBAHAN : SERAT KELAPA\r\n\r\nWARNA : COKELAT\r\n', NULL, 'TALI-6-MM', '2025-06-25', 'admin', '650.00'),
(126, 'TALI 4 MM', 'DIAMETER : 4 MM\r\n\r\nPANJANG : 100 METER\r\n\r\nBAHAN : SERAT KELAPA\r\n\r\nWARNA : COKELAT', NULL, 'TALI-4-MM', '2025-06-25', 'admin', '500.00'),
(127, 'COCOPEAT BLOCK HIGH EC', '100% COCOPEAT\r\n\r\nUKURAN 7CM\r\n\r\nEC (KEKONDUKSIAN LISTRIK) : 0,3MS/CM\r\n\r\nPH NETRAL : 5,2–6,8\r\n\r\nKANDUNGAN KELEMBAPAN :<20%\r\n\r\nDIMENSI : 30 X 30 X 10', NULL, 'COCOPEAT-BLOCK-HIGH-EC', '2025-06-25', 'admin', '35500.00'),
(128, 'COCOPEAT BLOCK LOW EC', '100% COCOPEAT UKURAN X 7CM\r\n\r\nEC (KEKONDUKSIAN LISTRIK) : 0,3 MS/CM\r\n\r\nPH NETRAL : 5,2–6,8\r\n\r\nANDUNGAN KELEMBAPAN :<20%\r\n\r\nDIMENSI : 30 X 30 X 10', NULL, 'COCOPEAT-BLOCK-LOW-EC', '2025-06-25', 'admin', '36500.00'),
(129, 'KOHE MURNI KERING HALUS SIAP PAKAI 5L', '100% KOTORAN KAMBING\r\n\r\nUKURAN : 30 X 40\r\n\r\nPH : 7.0 - 8.0 C/N\r\n\r\n(CARBON TO NITROGEN RATIO) : 20:1 - 30:1\r\n\r\nBERAT : <3KG', NULL, 'KOHE-MURNI-KERING-HALUS-SIAP-PAKAI-5L', '2025-06-25', 'admin', '13500.00'),
(130, 'TEPUNG ARANG CHARCOAL HUSKS', '100% TEPUNG ARANG COCOFIBER\r\n\r\nUKURAN : 30 X 40\r\n\r\nPH : 6\r\n\r\nKANDUNGAN KELEMBAPAN : < 20%\r\n\r\nBERAT : <3KG', NULL, 'TEPUNG-ARANG-CHARCOAL-HUSKS', '2025-06-25', 'admin', '7499.00'),
(131, 'COCOPEAT HIGH EC 5L', '100% COCOPEAT\r\n\r\nUKURAN : 30 CM X 40 CM\r\n\r\nEC (KEKONDUKSIAN LISTRIK) : 0.5-1.0 dS/m\r\n\r\nPH : 5.5 - 6.5\r\n\r\nKANDUNGAN KELEMBAPAN : <20%', NULL, 'COCOPEAT-HIGH-EC-5L', '2025-06-25', 'admin', '8500.00'),
(132, 'MEDIA TANAM SIAP PAKAI 5L', '100% COCOPEAT DENGAN CAMPURAN\r\n\r\nUKURAN : 30 CM X 40 CM\r\n\r\nEC (KEKONDUKSIAN LISTRIK) : 0,5-1.0 dS/m\r\n\r\nPH : 5.5 - 6.5\r\n\r\nKANDUNGAN KELEMBAPAN : <20%', NULL, 'MEDIA-TANAM-SIAP-PAKAI-5L', '2025-06-25', 'admin', '10000.00'),
(133, 'COCOPEAT HIGH EC 50L', '100% COCOPEAT\r\n\r\nUKURAN : 45 CM X 55 CM\r\n\r\nEC (KEKONDUKSIAN LISTRIK) : 0.5-1.0 dS/m\r\n\r\nPH : 5.5 - 6.5\r\n\r\nKANDUNGAN KELEMBAPAN : <20%', NULL, 'COCOPEAT-HIGH-EC-50L', '2025-06-25', 'admin', '30000.00'),
(134, 'COCOPEAT LOW EC (BEBAS TANIN ) 50L', '100% COCOPEAT\r\n\r\nUKURAN : 45 CM X 55 CM\r\n\r\nEC (KEKONDUKSIAN LISTRIK) : 0.5-1.0 dS/m\r\n\r\nPH : 5.5 - 6.5\r\n\r\n\\KANDUNGAN KELEMBAPAN : <20%', NULL, 'COCOPEAT-LOW-EC-(BEBAS-TANIN-)-50L', '2025-06-25', 'admin', '34999.00'),
(135, 'MEDIA TANAM SIAP PAKAI 25L', '100% COCOPEAT DENGAN CAMPURAN\r\n\r\nUKURAN : 45 CM X 55 CM\r\n\r\nEC (KEKONDUKSIAN LISTRIK) : 0.5-1.0 dS/m\r\n\r\nPH : 5.5 - 6.5\r\n\r\n\\KANDUNGAN KELEMBAPAN : <20%', NULL, 'MEDIA-TANAM-SIAP-PAKAI-25L', '2025-06-25', 'admin', '25000.00'),
(136, 'MEDIA TANAM SIAP PAKAI 50L', '100% COCOPEAT DENGAN CAMPURAN\r\n\r\nUKURAN : 45 CM X 55 CM\r\n\r\nEC (KEKONDUKSIAN LISTRIK) : 0.5-1.0 dS/m\r\n\r\nPH : 5.5 - 6.5\r\n\r\nKANDUNGAN KELEMBAPAN : <20%', NULL, 'MEDIA-TANAM-SIAP-PAKAI-50L', '2025-06-25', 'admin', '45000.00');

-- --------------------------------------------------------

--
-- Table structure for table `konten_foto`
--

CREATE TABLE `konten_foto` (
  `id` int NOT NULL,
  `id_konten` int NOT NULL,
  `foto` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `konten_foto`
--

INSERT INTO `konten_foto` (`id`, `id_konten`, `foto`) VALUES
(15, 104, '20250625035118_0.webp'),
(16, 105, '20250625035917_0.webp'),
(17, 106, '20250625040009_0.webp'),
(18, 107, '20250625040254_0.webp'),
(19, 108, '20250625040355_0.webp'),
(20, 109, '20250625040434_0.webp'),
(21, 110, '20250625040559_0.webp'),
(22, 111, '20250625040634_0.webp'),
(23, 112, '20250625042843_0.webp'),
(27, 116, '20250625072754_0.webp'),
(28, 117, '20250625072838_0.webp'),
(29, 118, '20250625072935_0.webp'),
(30, 119, '20250625073016_0.webp'),
(31, 120, '20250625073126_0.webp'),
(32, 121, '20250625073205_0.webp'),
(33, 122, '20250625073241_0.webp'),
(34, 123, '20250625073316_0.webp'),
(35, 124, '20250625073409_0.webp'),
(36, 125, '20250625073446_0.webp'),
(37, 126, '20250625073520_0.webp'),
(38, 127, '20250625073552_0.webp'),
(39, 128, '20250625073631_0.webp'),
(40, 129, '20250625073706_0.webp'),
(41, 130, '20250625073738_0.webp'),
(42, 131, '20250625073814_0.webp'),
(43, 132, '20250625073847_0.webp'),
(44, 133, '20250625073926_0.webp'),
(45, 134, '20250625074018_0.webp'),
(46, 135, '20250625074106_0.webp'),
(47, 136, '20250625074142_0.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tiktok_videos`
--

CREATE TABLE `tiktok_videos` (
  `id_tiktok` int NOT NULL,
  `video_url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tiktok_videos`
--

INSERT INTO `tiktok_videos` (`id_tiktok`, `video_url`, `created_at`) VALUES
(8, 'https://www.tiktok.com/@bincorannusantara/video/7516834769137618184?is_from_webapp=1&sender_device=pc&web_id=7496720721419863570', '2025-06-24 14:30:57'),
(9, 'https://www.tiktok.com/@bincorannusantara/video/7514978488055581959?is_from_webapp=1&sender_device=pc&web_id=7496720721419863570', '2025-06-24 14:32:32'),
(10, 'https://www.tiktok.com/@bincorannusantara/video/7514610379427695879?is_from_webapp=1&sender_device=pc&web_id=7496720721419863570', '2025-06-24 14:32:52');

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
(7, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2025-06-25 18:23:30'),
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
-- Indexes for table `konten_foto`
--
ALTER TABLE `konten_foto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_konten` (`id_konten`);

--
-- Indexes for table `tiktok_videos`
--
ALTER TABLE `tiktok_videos`
  ADD PRIMARY KEY (`id_tiktok`);

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
  MODIFY `id_caraousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `konten_foto`
--
ALTER TABLE `konten_foto`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tiktok_videos`
--
ALTER TABLE `tiktok_videos`
  MODIFY `id_tiktok` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `konten_foto`
--
ALTER TABLE `konten_foto`
  ADD CONSTRAINT `konten_foto_ibfk_1` FOREIGN KEY (`id_konten`) REFERENCES `konten` (`id_konten`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
