-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2024 at 08:55 AM
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
-- Database: `db_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` text COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`, `deskripsi`) VALUES
(30, '\"Menjelajah Lebih Dekat ke Tata Surya dan Seisinya\"', '20241217Dec2520.jpg', 'Kenali keunikan planet-planet, satelit alami, dan objek misterius lainnya yang berada dalam tata surya kita.'),
(31, '\"Menyingkap Rahasia Alam Semesta yang Tak Terbatas\"', '20241217Dec5209.jpg', 'Jelajahi keindahan kosmos, temukan fenomena luar angkasa, dan ikuti perkembangan terbaru dalam eksplorasi bintang dan planet. Semesta menyimpan keajaiban menunggu untuk ditemukan.'),
(32, '\"Fenomena Langit yang Membuat Takjub\"', '20241217Dec2322.jpg', 'Saksikan peristiwa langka seperti gerhana, komet yang melintas, atau aurora menari di langit malam yang indah.');

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
(15, 'Nebula Orion', '20241217Dec4927.jpg', '2024-12-17', 'awan gas dan debu antarbintang yang menjadi tempat kelahiran bintang-bintang baru. Warna-warna memukau pada nebula ini menunjukkan keindahan proses alam semesta yang dinamis.'),
(17, 'Aurora Borealis ', '20241217Dec0343.jpg', '2024-12-17', 'Aurora Borealis, atau cahaya utara, adalah fenomena cahaya yang terjadi di langit kutub akibat interaksi partikel matahari dengan atmosfer bumi.'),
(18, 'Teleskop James Webb', '20241217Dec0615.jpg', '2024-12-17', 'Teleskop James Webb adalah alat canggih yang membantu kita mempelajari galaksi, bintang, dan eksoplanet di alam semesta dengan detail belum pernah ada sebelumnya.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(12, 'Eksplorasi'),
(13, 'Astronomi'),
(14, 'Galaksi');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_website` text COLLATE utf8mb4_general_ci,
  `instagram` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facebook` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tiktok` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `tiktok`, `alamat`, `email`) VALUES
(1, 'Orbitara', 'platform yang menyediakan artikel-artikel menarik tentang astronomi. Kami membahas berbagai topik, mulai dari bintang dan planet hingga fenomena alam semesta, untuk memperluas wawasan pembaca', 'https://instagram.com/charisa.m.f', 'https://facebook.com/charisamarshafaradilla', 'sasa', 'Jumantono', 'mailto:safariyan70665@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` text COLLATE utf8mb4_general_ci,
  `foto` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_kategori` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(36, 'Citra Nebula Kepala Kuda', 'Ada yang baru dari hasil pengamatan Teleskop Antariksa James Webb! Baru-baru ini, Webb mengabadikan citra inframerah paling tajam dari Nebula Kepala Kuda, menangkap kompleksitas\r\nkawasan debu dan gas di sana dengan resolusi spasial yang belum pernah diamati sebelumnya. Nebula Kepala Kuda, yang muncul dari gelombang turbulensi debu dan gas, yang juga dikenal sebagai\r\nBarnard 33, terletak sekitar 1.300 tahun cahaya jauhnya di arah rasi bintang Orion. Dalam citra terbaru Webb ini, Nebula Kepala Kuda terlihat hanya bagian \"surai-nya saja. \r\n\r\nAwan debu dan gas Nebula Kepala Kuda yang tampak biru di bagian bawah dalam citra terbaru Webb ini didominasi oleh molekul hidrogen dingin. Gumpalan berwarna merah yang memanjang diatas\r\nnebula utama sebagian besar mewakili gas atom hidrogen. Di wilayah ini, yang dikenal sebagai wilayah fotodisosiasi, sinar ultraviolet dari bintang-bintang masif muda di dekatnya menciptakan sebagian besar wilayah gas dan debu yang hangat dan netral di antara gas yang terionisasi penuh di atas dan nebula yang lebih dingin di bawah. \r\n\r\nSeperti kebanyakan citra yang diambil oleh Webb, galaksi-galaksi jauh di latar belakang nebula tampak bertebaran. Citra ini sendiri terdiri dari cahaya dengan panjang gelombang 1,4 dan 2,5 mikron (diwakili dengan warna biru), 3,0 dan 3,23 mikron (cyan), 3,35 mikron (hijau), 4,3 mikron (kuning), dan 4,7 dan 4,05 mikron (merah).\r\n\r\nNebula Kepala Kuda bukan tanpa alasan nebula yang satu ini disebut sebagai \"Nebula Kepala Kuda\". Para astronom memang gemar menamai suatu nebula dari kenampakannya di langit yang mirip sesuatu di Bumi. Dengan kata lain, nebula ini memang mirip sekali dengan kepala kuda.', '20241217Dec1103.jpg', 'citra-nebula-kepala-kuda', '13', '2024-12-17', 'sasa'),
(37, 'Parade Planet 25 Januari', 'Memasuki 2025, langit akan menyuguhi pemandangan parade planet. Planet-planet terdekat dari Bumi yakni Venus, Mars, Jupiter,\r\nSaturnus, Uranus, dan Neptunus dapat diamati secara bersamaan dalam satu malam.\r\n\r\nKapan Bisa Melihat Parade Planet?\r\n\r\nSementara, seperti dikutip dari CNET, sebagian penduduk di bumi dapat menyaksikan parade planet tersebut pada hari-hari menjelang 21 Januari 2025 dan sekitar empat minggu setelahnya. Mars, Venus, Jupiter, dan Saturnus dapat dilinat dengan mata telanjang. Sedangkan untuk melihat Neptunus dan Uranus, memerlukan perangkat penglihatan berdaya tinggi seperti teleskop. Waktu terbaik untuk melihat planet-planet it, dari belahan bumi utara\r\nadalah tepat setelah matahari terbenam sekitar pukul 8.30 malam wakiu setempat.\r\n\r\nPengamat mungkin masih dapat melihat Venus, Saturnus, dan Neptunus di cakrawala sefelah itu. Namun, keiga planet tersebut akan berada di bawah cakrawala pada pukul 23.30 hingga tengah malam, tergantung lokasi Setelah itu, Mars, Jupiter, dan Uranus akan tetap terlinat selama beberapa jam lagi, dan Mars akhimya terbenam tepat sebelum matahari terbit Tidak seperti parade sebelumnya, parade ini akan berlangsung cukup lama. Masyarakat dapat melinat keenam planet tersebut setiap malam hingga pekan teraknir Februari .\r\n\r\nBagaimana Caranya Melihat Parade Planet?\r\n\r\nUntuk melihat angkasa, sebaiknya pengamat menjauh dari kota, karena polusi cahaya dapat mengaburkan pandangan. Bahkan pinggiran kota mungkin tidak cukup jauh Sebaiknya pengamat memastikan bahwa malam untuk mengamati itu cerah dengan tutupan awan sesedikit mungkin\r\n\r\nNamun, jika ingin melihat ketujuh planet pada akhir Februari, mungkin akan cukup sulit karena beberapa planet akan cukup dekat dengan Matahari. Terlebih, disarankan pengamat menyediakan perlindungan UV untuk mata dan sangat berhati-hati mengarahkan teleskop.', '20241217Dec5803.jpg', 'Parade-Planet-25-Januari', '14', '2024-12-17', 'sasa'),
(43, ' Astronot Amerika Neil Armstrong ', 'Pada tanggal 20 Juli 1969, astronot Amerika Neil Armstrong mendarat di bulan, dan menjadi manusia pertama yang berjalan di permukaan bulan. Hampir 240.000 mil dari Bumi, \r\n\r\nIa adalah seorang pilot militer Amerika. Lahir pada tanggal 5 Agustus 1930, dekat Wapakoneta, Ohio. Ia bergabung dengan National Aeronautics and Space Administration (NASA). sebuah lembaga antaraiksa Amerika (kalau Indonesia namanya LAPAN). Armstrong meninggal pada 25 Agustus 2012, pada usia 82 tahun.\r\n\r\nArmstrong berangkat ke bulan pada tahun 1969 bersama Michael Collins dan Edwin E. Aldrin, dia adalah bagian dari misi berawak pertama NASA ke bulan. Ketiganya diluncurkan ke luar angkasa pada 16 Juli 1969. Menjabat sebagai komandan misi, Armstrong mengemudikan Modul Bulan ke permukaan bulan pada 20 Juli 1969, dengan Buzz Aldrin di dalamnya. Collins tetap di Modul Komando.\r\n\r\nPada 10:56 PM, Armstrong keluar dari Lunar Module. Dia berkata, \"Itu adalah satu langkah kecil bagi manusia, satu lompatan raksasa bagi umat manusia,\" saat dia membuat langkah pertamanya yang terkenal di bulan. Selama sekitar dua setengah jam, Armstrong dan Aldrin mengumpulkan sampel dan melakukan eksperimen. Mereka juga memotret, termasuk jejak kaki mereka sendiri. Kembali pada 24 Juli 1969, pesawat Apollo 11 mendarat di Samudra Pasifik sebelah barat Hawaii. Kru dan pesawat itu diambil oleh U.S.S. Hornet, kemudian ketiga astronot itu dikarantina selama tiga minggu.\r\n\r\nSetelahnya, ada sebelas astronot lainnya telah mengikuti jejaknya, termasuk Komandan David Scott dan Pilot Modul Bulan James Irwin, yang mengambil foto bersejarah ini (ilustrasi) selama misi bulan Apollo 15 pada tahun 1971.', '20241217Dec4435.jpg', 'astronot-amerika-neil-armstrong', '12', '2024-12-17', 'sasa'),
(44, 'Korea Selatan Luncurkan Roket', 'Untuk pertama kalinya roket komersial ruang angkasa buatan Korea Selatan (Korsel) berhasil mengorbit pada Kamis (25/5) waktu Seoul, mencapai tonggak sejarah lain untuk program luar angkasa negara tersebut.\r\nSetelah gagal diluncurkan karena terkendala gangguan teknis, Roket Nuri yang juga dikenal dengan KSLV-II lepas landas dari Naro Space Center di pantai selatan Korsel pada pukul 18:24 waktu setempat dalam penerbangan ketiganya.\r\n\r\n\"Di antara delapan satelit di dalam roket, satelit kelas komersial utama melakukan kontak dengan stasiun pangkalan di Antartika setelah berhasil memisahkan diri dari kendaraan ruang angkasa,\" kata Menteri Sains Lee Jong-ho, seperti dikutip dari Reuters.\r\n\r\nPresiden Yoon Suk Yeol mengatakan, peluncuran roket yang memiliki panjang 47,2 meter dan berat 200 ton itu menjadikan Korsel berada dalam urutan tujuh negara teratas yang sukses meluncurkan satelit buatan dalam negeri ke orbit dengan kendaraan peluncuran ruang angkasa yang juga buatan dalam negeri.\r\n\r\n“Ini akan sangat mengubah cara dunia melihat teknologi ilmu antariksa Korea Selatan dan industri majunya,” kata Yoon.\r\n\r\nSebelumnya pada Rabu, kementerian membatalkan peluncuran yang direncanakan beberapa jam sebelum waktu yang dijadwalkan, dengan alasan masalah teknis, yang digambarkan oleh para pejabat sebagai kesalahan komunikasi dalam sistem yang mengontrol tangki helium di landasan peluncuran.\r\n\r\nMereka mengatakan masalah itu berhasil diperbaiki setelah bekerja semalaman.\r\n\r\nNuri dikembangkan secara independen dengan teknologi roket milik Korsel - mulai dari desain dan manufaktur hingga pengujian dan peluncuran, sebuah lompatan maju yang signifikan bagi negara yang sejauh ini mengandalkan sumber daya asing untuk pengembangan kendaraan peluncuran ruang angkasa.\r\n\r\nProyek Nuri senilai 2 triliun won (22,5 triliun rupiah) yang dimulai pada 2010 akan berlanjut hingga 2027, dengan tiga peluncuran roket tambahan.\r\n\r\nNuri dalam bahasa Korea berarti dunia. Nuri merupakan roket tiga tahap yang dikembangkan untuk menempatkan satelit ke orbit rendah 600-800 km di atas bumi. ', '20241217Dec5548.jpg', 'Korea-Selatan-Luncurkan-Roket', '12', '2024-12-17', 'sasa'),
(45, 'Teleskop Angkasa James Webb', 'Teleskop Luar Angkasa James Webb adalah teleskop luar angkasa terbesar dan terkuat yang pernah dibuat. Teleskop ini akan memungkinkan para ilmuwan untuk melihat seperti apa alam semesta kita sekitar 200 juta tahun setelah Big Bang . Teleskop ini akan dapat menangkap gambar beberapa galaksi pertama yang pernah terbentuk. Teleskop ini juga akan dapat mengamati objek-objek di tata surya kita dari Mars ke luar, melihat ke dalam awan debu untuk melihat di mana bintang-bintang dan planet-planet baru terbentuk, dan memeriksa atmosfer planet-planet yang mengorbit bintang-bintang lain.\r\n\r\nBerikut adalah beberapa fakta menarik tentang Teleskop Luar Angkasa James Webb:\r\n\r\nItu sangat, sangat besar.\r\nTeleskop Webb setinggi gedung 3 lantai dan sepanjang lapangan tenis! Teleskop ini begitu besar sehingga harus dilipat seperti origami agar muat di dalam roket untuk diluncurkan. Teleskop akan dibuka, dengan pelindung matahari terlebih dahulu, begitu berada di luar angkasa.\r\n\r\nIa dapat melihat menembus awan debu.\r\n\r\nTeleskop Luar Angkasa James Webb melihat alam semesta dalam cahaya yang tidak terlihat oleh mata manusia. Cahaya ini disebut radiasi inframerah , dan kita dapat merasakannya sebagai panas. Petugas pemadam kebakaran menggunakan kamera inframerah untuk melihat dan menyelamatkan orang melalui asap dalam kebakaran. Teleskop Luar Angkasa James Webb akan menggunakan kamera inframerahnya untuk melihat melalui debu di alam semesta kita. Bintang dan planet terbentuk di dalam awan debu tersebut, jadi mengintip ke dalam dapat menghasilkan penemuan baru yang menarik! Teleskop ini juga akan dapat melihat objek (seperti galaksi pertama) yang sangat jauh sehingga perluasan alam semesta telah membuat cahayanya bergeser dari tampak ke inframerah!\r\n\r\nApa yang dilakukan Teleskop Luar Angkasa James Webb saat ini?\r\nTeleskop Luar Angkasa James Webb diluncurkan pada tanggal 25 Desember 2021. Ingin tetap mendapatkan informasi terkini dan mempelajari lebih lanjut tentang teleskop terbesar dan terkuat milik NASA? Simak kronologi menarik ini untuk mengetahui apa saja yang dilakukan teleskop tersebut saat ini! Temukan juga fakta, foto, video, dan informasi lainnya di Situs Web Teleskop Luar Angkasa James Webb !', '20241218Dec0037.jpg', 'teleskop-angkasa-james-webb', '13', '2024-12-18', 'sasa'),
(46, 'Cahaya Utara Aurora Borealis', 'Apa itu Cahaya Utara (Aurora Borealis)?\r\nCahaya utara mengejutkan para pengamat bintang dengan muncul dalam berbagai bentuk—dari bercak atau awan yang tersebar, hingga pita, lengkungan, riak, atau tirai yang menari-nari. Cahaya tersebut bergerak dan berubah bentuk serta warna. Para ilmuwan mengaitkan warna-warna cerahnya dengan gas-gas yang dilepaskan di atmosfer Bumi; oksigen memancarkan warna hijau dari aurora\r\n\r\nApa itu Cahaya Utara (Aurora Borealis)?\r\nCahaya utara mengejutkan para pengamat bintang dengan muncul dalam berbagai bentuk—dari bercak atau awan yang tersebar, hingga pita, lengkungan, riak, atau tirai yang menari-nari. Cahaya tersebut bergerak dan berubah bentuk serta warna. Para ilmuwan mengaitkan warna-warna cerahnya dengan gas-gas yang dilepaskan di atmosfer Bumi; oksigen memancarkan warna hijau dari aurora .\r\n\r\nApa Penyebab Munculnya Cahaya Utara? Dijelaskan.\r\nJawaban singkatnya? Matahari. Cahaya tersebut disebabkan oleh interaksi antara medan magnet Bumi dan partikel bermuatan dari atmosfer matahari yang memasuki atmosfer Bumi. Suar matahari (partikel berenergi dari matahari) melayang melalui ruang angkasa pada angin matahari, yang akhirnya menembus medan magnet Bumi. Elektron dalam medan magnet tersebut menyerempet atom oksigen atau molekul nitrogen di atmosfer Bumi.\r\n\r\nSemburan cahaya warna-warni — cahaya utara —adalah partikel yang bertabrakan (biasanya elektron) dan atom; saat bertabrakan, elektron dapat kembali ke keadaan energi awal yang lebih rendah, dan dalam prosesnya, melepaskan foton atau partikel cahaya yang kita kenal sebagai aurora.\r\n\r\nRamalan Penampakan Cahaya Utara\r\nAurora terjadi; tidak ada jadwal yang ditetapkan. Sering kali, aurora terjadi hanya dengan peringatan 30 menit ; yang lain berspekulasi peringatan beberapa hari dan periode patokan di sekitar ekuinoks musim semi dan musim gugur untuk peningkatan aurora. Pembacaan indeks Kp (indeks aktivitas geomagnetik global) sebesar enam plus (6+) menunjukkan potensi untuk melihat cahaya utara.\r\n\r\nPara ilmuwan menggunakan satelit untuk mengukur kecepatan dan kepadatan angin matahari, dan jika kondisinya tepat, mereka dapat memperkirakan kapan Cahaya Utara akan muncul. Intensitas dan lokasi Cahaya Utara juga dapat diperkirakan menggunakan model komputer berdasarkan data waktu nyata dari berbagai instrumen.\r\n\r\nSama seperti siklus atau musim Bumi, keluaran energi matahari juga berfluktuasi dalam jangka waktu sekitar 11 tahun atau siklus matahari . Para ilmuwan menyebut siklus matahari seperti bandul, berayun maju mundur antara periode tertinggi dan terendah. Peramal cuaca memperkirakan minimum matahari berikutnya akan tiba pada tahun 2019–2020—tetapi jangan khawatir—aurora masih muncul di langit malam. Hanya saja \" maksimum matahari ,\" atau puncak aktivitas matahari, kemungkinan besar mengakibatkan frekuensi aurora yang lebih besar. Menurut satu sumber , tahun 2022–2027 mungkin merupakan tahun terbaik untuk penampakan aurora.', '20241218Dec0547.jpg', 'cahaya-utara-aurora-borealis', '14', '2024-12-18', 'sasa'),
(47, 'Black Hole Misteri Luar Angkasa', 'Lubang hitam disebut sebagai objek paling menakutkan di alam semesta. Pasalnya, objek langit ini memiliki gravitasi yang teramat sangat kuat. Apakah bentuknya memang berupa lubang?\r\nDiketahui, keunikan objek angkasa ini adalah bahwa tak ada materi yang bisa lolos dari wilayah kekuasaannya, yang dibatasi oleh horizon peristiwa, sekalipun itu cahaya. Di zona ini, hukum fisika yang kita kenal tak berlaku, yang disebut sebagai singularitas.\r\n\r\n\"Lubang hitam adalah objek yang sama seperti objek lainnya, hanya saja ia sangat padat. Ini memberinya medan gravitasi yang sangat tinggi sehingga tidak satu pun, bahkan cahaya, yang dapat lolos darinya,\" urai dia.\r\n\r\nKarena tidak ada cahaya yang lolos dari lubang hitam, ia mengatakan objek angkasa itu tidak terlihat, atau \'hitam\'. Walaupun, mereka tetap dapat dideteksi oleh efeknya pada materi di sekitarnya.\r\n\r\n\"Istilah \'lubang\' digunakan karena apa pun yang jatuh \'ke dalam\' lubang hitam akan terperangkap selamanya,\" ujar dia.\r\n\r\nMenurutnya, karya fiksi ilmiah sering menggambarkan lubang hitam sebagai portal antar semesta atau waktu. Ini mungkin mengapa sering disalahartikan bahwa lubang hitam adalah \'lubang\' dalam ruang-waktu. \"Konsep ini bagaimanapun tidak sepenuhnya fiksi.\"\r\n\r\nPada 1935, fisikawan Albert Einstein dan Nathan Rosen mengajukan konsep \'lubang cacing\' (wormhole) melalui ruang-waktu, yang bisa menjadi sarana transportasi untuk melintasi jarak yang jauh secara instan.\r\n\r\nMasalahnya, kata Gunn, lubang hitam ini diduga kuat tak stabil.\r\n\r\n\"Lubang hitam yang terjadi secara alami tidak membentuk lubang cacing secara bawaan. Faktanya, ada keraguan bahwa mereka bisa terjadi secara alami, bahwa mereka akan tetap stabil selama lebih dari sepersekian detik, atau mereka akan menjadi sesuatu yang lebih besar atau semakin kecil,\" urai dia.\r\n\r\n', '20241218Dec1058.jpg', 'black-hole-misteri-luar-angkasa', '14', '2024-12-18', 'sasa'),
(48, 'Bintang Terbesar Uy Scuti', '\r\n\r\nBintang raksasa terbesar di alam semesta kita dinamakan UY Scuti. Ukurannya sangat besar, bahkan membuat Matahari hanya seperti titik kecil jika berada di dekatnya. \r\n\r\nFaktanya, bintang yang sering kita lihat di langit malam sebenarnya berukuran besar dengan jarak yang sangat jauh. \r\n\r\nSebagian besar bintang juga bersinar lebih terang daripada Matahari. Namun, karena jaraknya yang jauh, kita tidak pernah menyadarinya. \r\n\r\nBersumber dari space.com, bintang UY Scuti adalah bintang raksasa dengan radius atau jari-jari 1.700 kali lebih besar dari jari-jari Matahari. \r\n\r\nSebagai gambaran, jika kita memasukkan 5 miliar bola seukuran Matahari, maka itu semua cukup untuk masuk ke dalam bola seukuran UY Scuti. \r\n\r\nMasih ingatkah teman-teman ukuran Matahari? \r\n\r\nMenurut data statistik NASA, jari-jari Matahari diperkirakan sekitar 696.000 kilometer, sehingga diameternya bisa mencapai 1,392 juta kilometer!\r\n\r\nBersumber dari space.com, bintang UY Scuti adalah bintang raksasa dengan radius atau jari-jari 1.700 kali lebih besar dari jari-jari Matahari. \r\n\r\nSebagai gambaran, jika kita memasukkan 5 miliar bola seukuran Matahari, maka itu semua cukup untuk masuk ke dalam bola seukuran UY Scuti. \r\n\r\nMasih ingatkah teman-teman ukuran Matahari? \r\n\r\nMenurut data statistik NASA, jari-jari Matahari diperkirakan sekitar 696.000 kilometer, sehingga diameternya bisa mencapai 1,392 juta kilometer!\r\n\r\nJika bintang UY Scuti diperkirakan jari-jarinya 1.700 kali lebih besar dari jari-jari Matahari, maka jari-jarinya bisa mencapai 1.183.200.000 kilometer. \r\n\r\nWah, ukuran yang luar biasa besar, ya!\r\n\r\nNamun, meski ukuran diameternya lebih besar dari Matahari, bintang ini bukanlah bintang terberat di alam semesta, lo. \r\n\r\nMenurut EarthSky, bintang terberat adalah bintang R136a1 yang memiliki massa sekitar 250 massa Matahari. \r\n\r\n', '20241218Dec2023.jpg', 'Bintang-Terbesar-Uy-Scuti', '14', '2024-12-18', 'sasa'),
(49, 'Sejarah Bagaimana Hubble Tercipta', 'Atmosfer Bumi adalah kutukan bagi para astronom. Gagasan untuk mengirim teleskop ke luar angkasa untuk menghindarinya pertama kali diajukan jauh sebelum satelit pertama diluncurkan, jauh sebelum ada yang bermimpi mengirim astronot ke luar angkasa. Ilmuwan roket Jerman Herman Oberth adalah pemikir perintis pada masanya dan mengusulkan teleskop untuk luar angkasa sejak tahun 1923 dalam bukunya \"Die Rakete zu den Planeträumen\". Teleskop luar angkasa menghindari masalah-masalah yang membuat frustrasi seperti malam pengamatan yang berawan dan berkabut, kerlap-kerlip bintang bahkan pada malam yang cerah, dan penyerapan bagian spektrum ultraviolet dan inframerah.\r\n\r\nButuh waktu bertahun-tahun sebelum teknologi dapat mengikuti ide Oberth. Lyman Spitzer dari Amerika mengusulkan rencana yang lebih realistis untuk teleskop antariksa pada tahun 1946 dan melobi idenya selama hampir 30 tahun. Pada tahun 1970-an, NASA dan Badan Antariksa Eropa mengambil alih ide tersebut dan mengusulkan teleskop antariksa berukuran 3 meter. Pendanaan mulai mengalir pada tahun 1977 dan diputuskan untuk memberi nama teleskop tersebut dengan nama Edwin Powell Hubble yang telah menemukan perluasan Alam Semesta pada tahun 1920-an. Meskipun Teleskop Antariksa Hubble diperkecil menjadi 2,4 meter, proyek tersebut mulai menarik perhatian yang signifikan dari para astronom.\r\n\r\nCermin presisi itu rampung pada tahun 1981 dan perakitan seluruh wahana antariksa selesai pada tahun 1985. Rencananya, peluncuran pesawat ulang-alik NASA akan dilakukan pada tahun 1986, tetapi beberapa bulan sebelumnya, bencana Challenger menyebabkan penundaan selama setahun untuk seluruh program pesawat ulang-alik. Hubble akhirnya diluncurkan pada tahun 1990 dan ketegangan meningkat saat para astronom memeriksa gambar pertama melalui mata Hubble.\r\n\r\nSeperti dalam semua petualangan yang menyenangkan, kesuksesan tidak datang dengan mudah: tidak butuh waktu lama untuk menyadari bahwa cermin Hubble memiliki cacat serius. Cacat pemfokusan mencegah Hubble mengambil gambar yang tajam — tepi cermin terlalu datar hanya seperlima puluh lebar rambut manusia. Selama beberapa bulan berikutnya, para ilmuwan dan teknisi dari NASA dan ESA bekerja sama dan menghasilkan paket optik korektif yang luar biasa yang akan memulihkan penglihatan Hubble sepenuhnya.\r\n\r\nSekelompok astronaut melaksanakan perbaikan yang diperlukan untuk memulihkan teleskop ke tingkat kinerja yang diinginkan selama Misi Servis Hubble pertama (SM1) pada bulan Desember 1993.\r\n\r\nMeskipun keempat misi servis berikutnya sama-sama menuntut dalam hal kompleksitas dan beban kerja, SM1 menarik perhatian para astronom dan masyarakat luas pada tingkat yang belum pernah dicapai oleh misi pesawat ulang-alik lainnya sejak saat itu. Direncanakan dengan cermat dan dilaksanakan dengan cemerlang, misi tersebut berhasil dalam segala hal. Misi ini akan tercatat dalam sejarah sebagai salah satu puncak penerbangan antariksa manusia. Hubble kembali beraksi.\r\n\r\nSejak SM1, empat Misi Servis lainnya telah dilaksanakan. Selama SM2 pada tahun 1997, dua instrumen baru dipasang. Misi Servis 3 dibagi menjadi dua, yang menyebabkan sistem penomoran yang agak membingungkan: pada SM3A , 1999, banyak sistem teknis penting Hubble dipertukarkan, dan pada tahun 2002 muncul SM3B ketika Hubble kembali mendapatkan instrumen sains baru.\r\n\r\nMisi Servis 4 (perjalanan kelima ke Hubble oleh para astronot sejak peluncuran) berlangsung pada musim semi 2009. Selama SM4, para astronot kembali meningkatkan kemampuan ilmiah Hubble, memasang kamera utama baru dan instrumen yang dirancang untuk membantu menjawab pertanyaan mendalam tentang struktur skala besar dan asal usul kosmos. Mereka juga melakukan sejumlah tugas perawatan lainnya, termasuk memperbaiki Kamera Survei Canggih dan Spektrograf Pencitraan Teleskop Luar Angkasa , yang keduanya rusak sejak misi sebelumnya.\r\n\r\nDengan pensiunnya pesawat ulang alik AS pada tahun 2011, tidak akan ada lagi misi servis yang memungkinkan. Namun, dengan teleskop yang telah diperbaiki dan ditingkatkan sepenuhnya, diharapkan teleskop tersebut dapat berfungsi dengan baik selama sekitar 7-8 tahun, bahkan mungkin lebih lama.', '20241218Dec2059.jpg', 'Sejarah-Bagaimana-Hubble-Tercipta', '13', '2024-12-18', 'sasa'),
(50, 'Apollo 8 Misi Pertama ke Bulan', 'Apollo 8, misi berawak pertama ke Bulan, kembali dengan selamat ke Bumi setelah perjalanan bersejarah selama enam hari.\r\n\r\nDikutip dari History.com, Selasa (27/12/2022) pada tanggal 21 Desember, Apollo 8 diluncurkan oleh roket Saturn 5 tiga tahap dari Cape Canaveral, Florida.\r\n\r\nAdapun astronot yang diberi tugas adalah Frank Borman, James Lovell, Jr., dan William Anders di dalamnya.\r\n\r\nPada Malam Natal, para astronot memasuki orbit mengelilingi Bulan, pesawat ruang angkasa berawak pertama yang melakukannya.\r\n\r\nSelama 10 orbit Bulan Apollo 8, gambar televisi dikirim kembali ke rumah dan foto spektakuler diambil dari Bumi dan bulan dari pesawat ruang angkasa.\r\n\r\nSelain menjadi manusia pertama yang melihat secara langsung dunia asal mereka secara keseluruhan, ketiga astronot tersebut juga menjadi yang pertama melihat sisi jauh bulan.\r\n\r\nPada pagi Natal, Apollo 8 meninggalkan orbit bulannya dan memulai perjalanannya kembali ke Bumi, mendarat dengan selamat di Samudra Pasifik pada 27 Desember.\r\n\r\nPada tanggal 20 Juli tahun berikutnya, Neil A. Armstrong dan Edwin \"Buzz\" Aldrin, astronot dari misi Apollo 11, menjadi manusia pertama yang berjalan di Bulan.\r\n\r\n', '20241218Dec2642.jpg', 'apollo-8-misi-pertama-ke-bulan', '12', '2024-12-18', 'sasa'),
(51, 'Laboratorium Sains di Planet Mars ', 'Misi Mars Science Laboratory (MSL)—bersama penjelajahnya, Curiosity—merupakan bagian dari Program Eksplorasi Mars milik NASA . Program Eksplorasi Mars merupakan program jangka panjang yang berfokus pada eksplorasi robotik di planet merah tersebut. Curiosity dirancang untuk menentukan kelayakhunian planet tersebut dan untuk menentukan apakah Mars pernah memiliki lingkungan yang mampu mendukung kehidupan kecil (mikroba). Misi Mars Science Laboratory mendarat di Mars pada bulan Agustus 2012. [1]\r\n\r\nMuatan Sains\r\n\r\nPenjelajah Curiosity menjelajahi Kawah Gale dan mengambil sampel batu, tanah, dan udara untuk analisis di dalamnya. Penjelajah ini memiliki perangkat canggih yang terdiri dari 10 instrumen sains yang memainkan peran penting dalam misi Laboratorium Sains Mars. Instrumen-instrumen ini digunakan untuk memperoleh informasi tentang geologi, atmosfer, kondisi lingkungan, dan potensi tanda-tanda biologis di Mars. Penjelajah ini mencari batu-batuan khusus yang terbentuk di air dan/atau memiliki tanda-tanda organik. Penjelajah ini dilengkapi dengan 17 kamera, laser untuk menguapkan dan mempelajari titik-titik kecil batu dari jarak jauh, dan bor untuk mengumpulkan sampel batu bubuk. Curiosity menganalisis sampel bubuk yang dibor dari batu, dan juga mengukur sidik jari kimia yang ada di berbagai batu dan tanah untuk menentukan komposisi dan sejarahnya, terutama interaksi masa lalunya dengan air.', '20241218Dec3306.jpg', 'laboratorium-sains-di-planet-mars', '12', '2024-12-18', 'sasa'),
(52, 'Pesawat Ulang Alik Wahana Antariksa', 'Pada tahun 1972, program Apollo mulai berakhir, dan NASA melakukan pencarian jati diri teknologi. Roket Apollo adalah wahana antariksa sekali pakai. Biaya per misi, yah, sangat mahal. Wahana antariksa yang dapat digunakan kembali tidak hanya akan menghemat uang, tetapi juga akan menjadi kemajuan teknologi yang menakjubkan.\r\n\r\nSetelah Presiden Richard Nixon mengumumkan rencana untuk membangun pesawat ruang angkasa yang dapat digunakan kembali yang akan menjalankan beberapa misi, mungkin dalam jumlah yang tidak terbatas, NASA mengembangkan desain dasar: dua pendorong roket padat yang terpasang pada modul pengorbit dan tangki bahan bakar eksternal.\r\n\r\nAda banyak rintangan yang dihadapi proyek ini. Karena peralatan yang melindungi wahana antariksa sebelumnya dari atmosfer Bumi yang panas pada dasarnya hancur saat memasuki atmosfer, NASA membutuhkan konsep pelindung panas yang sama sekali baru. NASA menemukan metode melapisi wahana dengan ubin keramik yang akan menyerap panas tanpa merusaknya. Desain ulang utama lainnya berkaitan dengan pendaratan itu sendiri. Wahana antariksa lama pada dasarnya menukik tajam menembus atmosfer dan jatuh ke laut. Sulit untuk menggunakan kembali peralatan setelah mendarat di air. Wahana antariksa baru akan mendarat lebih seperti pesawat layang, di landasan pendaratan yang sebenarnya.\r\n\r\nButuh waktu sembilan tahun dari awal proyek hingga penerbangan pertama. Pada tahun 1981, pesawat ulang-alik Columbia lepas landas dan misi perdananya berhasil. NASA telah berhasil menciptakan pesawat antariksa yang dapat digunakan kembali.\r\n\r\nColumbia diikuti oleh empat pesawat ulang alik lainnya: Challenger, Discovery, Atlantis, dan Endeavour. Dari tahun 1981 hingga 2011, kelima pesawat ini menerbangkan 135 misi, yang sebagian besar melibatkan singgah di Stasiun Luar Angkasa Internasional (ISS) [sumber: NASA].\r\n\r\nSebuah upaya kolaboratif yang luar biasa, ISS dibuat untuk memajukan eksplorasi ruang angkasa. Sekarang mari kita kembali ke hari-hari awal pencarian yang mulia itu untuk sebuah cerita tentang orang-orang pertama yang pernah melihat sisi terjauh bulan... ', '20241218Dec3840.jpg', 'Pesawat-Ulang-Alik-Wahana-Antariksa', '13', '2024-12-18', 'sasa'),
(54, 'Apa itu Transit Planet Venus', 'Telah terjadi lima puluh dua transit Venus melintasi permukaan Matahari sejak tahun 2000 SM, tetapi hingga tahun 1643 M, tidak ada manusia yang diketahui telah mengamati kelangkaan astronomi ini.\r\n\r\nVenus mengorbit Matahari di dalam orbit Bumi, jadi kadang-kadang terjadi bahwa seperti yang terlihat dari Bumi, piringan Venus melintasi Matahari. Ia tampak sebagai bintik hitam kecil, hanya 1/30 diameter Matahari. Dengan kondisi atmosfer yang tepat untuk melembutkan sinar matahari yang intens, cakrawala yang tidak terhalang, dan peringatan dini yang cukup, mata yang tajam dapat melihat transit tersebut saat matahari terbit atau terbenam. Untuk menghindari kebutaan, jangan pernah mengamati Matahari tanpa pelindung mata yang tepat. Karena transit Venus pertama kali diprediksi dan terlihat oleh astronom Inggris Jeremiah Horrocks pada tahun 1639, penampakannya berikutnya pada tahun 1761, 1769, 1874, dan 1882 disambut dengan kehebohan dan rasa ingin tahu ilmiah dan publik yang semakin meningkat.\r\n\r\nPara astronom segera menemukan bahwa dengan mengukur transit secara cermat, jarak Matahari ke Bumi dapat dihitung. Pada tahun 1761, nilai pasti angka ini masih belum diketahui; perkiraan berkisar antara 5 juta hingga lebih dari 150 juta mil. Tanpa nilai pastinya, para astronom tidak dapat menyimpulkan ukuran fisik tata surya kita, atau dimensi alam semesta di luar jangkauan terluar tata surya. Ukuran, massa, dan daya radiasi Matahari kita juga tidak dapat ditentukan dengan jelas. Pengukuran yang cermat terhadap transit Venus oleh ratusan ekspedisi dan pengamat internasional segera menyempurnakan satuan astronomi ini (\"satuan astronomi\" adalah istilah ilmiah untuk satuan ukuran yang sama dengan jarak rata-rata dari Bumi ke Matahari) menjadi 95 juta mil pada tahun 1769, dan kemudian menjadi 92,79 juta mil pada tahun 1891. Selama abad kedua puluh, teknologi radar yang sama yang digunakan para astronom untuk memetakan permukaan Merkurius, atau mempelajari cincin Saturnus, telah menghasilkan nilai yang tepat untuk jarak antara Matahari dan Bumi sebesar 92.9558203 juta mil, dengan margin kesalahan kurang dari beberapa mil. Namun, terlepas dari pencapaian teknologi ini, kesederhanaan yang elegan dari pengukuran transit Venus membuat perbedaan praktis terbesar dalam perkembangan menuju akurasi yang lebih tinggi dalam pengukuran jarak yang sangat jauh di ruang angkasa. Pengamatan transit ini penting bagi para astronom dalam hal lain juga.\r\n\r\nSebelum transit tahun 1761, tidak seorang pun mengira bahwa planet mungkin memiliki atmosfer. Planet dianggap hanya bola-bola batu berwarna dan kawah yang kusam. Salah satu hal pertama yang diperhatikan oleh astronom Rusia Mikhail Lomonosov (1711-1765) tentang transit tahun 1761 adalah bahwa piringan hitam Venus tampak seolah-olah dikelilingi oleh lingkaran cahaya. Ia menyadari bahwa hanya benda yang dikelilingi oleh atmosfer yang menyebar yang dapat menyebabkan tampilan seperti itu. Saat ini, para astronom mencari planet yang mengorbit bintang-bintang jauh dengan mengukur berkurangnya cahaya dari bintang-bintang saat planet-planet melintas di antara bintang-bintang itu dan garis pandang kita. Dalam kasus planet yang mengorbit bintang HD 209458, instrumen-instrumen di Bumi dapat menggunakan transit planet itu untuk menemukan komposisi kimia atmosfernya.', '20241218Dec4351.jpg', 'apa-itu-transit-planet-venus', '14', '2024-12-18', 'sasa');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `id_saran` int NOT NULL,
  `isi_saran` text NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`id_saran`, `isi_saran`, `tanggal`, `nama`, `email`) VALUES
(22, 'Website ini menyediakan informasi tentang bintang dan galaksi, dengan penjelasan yang jelas dan mudah dimengerti.', '2024-12-17', 'Tiara', 'tiara@gmail.com'),
(24, 'Website ini memberikan panduan mudah untuk memulai eksplorasi langit malam dengan alat-alat astronomi sederhana.', '2024-12-17', 'Desi', 'desi@gmail.com'),
(25, 'Berisi berbagai artikel dan foto yang memperkenalkan keajaiban alam semesta, dari galaksi hingga bintang - bintang', '2024-12-17', 'Thohiroh', 'thohi@gmail.com'),
(26, 'artikelnya bagus', '2024-12-18', 'thohi', 'thohiii@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(70) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recent_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`, `recent_login`) VALUES
(2, 'sasa', 'Admin', '202cb962ac59075b964b07152d234b70', 'Admin', '2024-12-18 13:57:23');

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
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

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
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`id_saran`);

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
  MODIFY `id_caraousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `id_saran` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
