-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2023 at 02:28 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bonbin`
--

CREATE TABLE `tbl_bonbin` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_bonbin`
--

INSERT INTO `tbl_bonbin` (`id`, `judul`, `gambar`) VALUES
(1, 'bonbin1', 'dhuha2.jpg'),
(2, 'kebun binatang', 'bonbin2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `subjek` text NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'ammar', 'ammarstar0@gmail.com', 'pert', 'hallo apa kabarnya');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pendaftaran`
--

CREATE TABLE `tbl_pendaftaran` (
  `id` int(11) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat_siswa` text NOT NULL,
  `nama_wali` text NOT NULL,
  `alamat_wali` text NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pendaftaran`
--

INSERT INTO `tbl_pendaftaran` (`id`, `nama_siswa`, `tanggal_lahir`, `alamat_siswa`, `nama_wali`, `alamat_wali`, `telp`) VALUES
(1, 'ammar', '2012-02-03', 'ampel kejeron 1/32', 'hamzah', 'ampel kejeron 1/32', '085773020994');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profil`
--

CREATE TABLE `tbl_profil` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  `tujuan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_profil`
--

INSERT INTO `tbl_profil` (`id`, `visi`, `misi`, `tujuan`) VALUES
(1, 'Unggul Dalam Prestasi Berdasarkan Imtaq dan Iptek, Berakhlaqul karimah, Terampil Dan Mandiri.', '  <ol>\r\n        <li>Mengembankan sumber daya secara optimal dalam rangka mempersiapkan di era global</li>\r\n        <li>Menengembangkan spiritual emosional dan intelektual siswa secara menyeluruh</li>\r\n      </ol>', '<ol>\r\n<li>Menciptakan sikap dan perilaku religius di lingkungan dalam dan luar sekolah.</li>\r\n<li>Menciptakan sikap jujur, toleransi, disiplin, kerja keras, kreatif, mandiri, demokratis,rasa ingin tahu.</li>\r\n<li>Terwujudnya disiplin yang tinggi dari seluruh warga sekolah.</li>\r\n<li>Terwujudnya suasana pergaulan sehari-hari yang berdasarkan keimanan dan ketaqwaan.</li>\r\n<li>Terwujudnya sikap kerja keras dan tanggungjawab serta menyelesaikan tugas tepat waktu.</li>\r\n<li>Terwujudnya sikap tangguh serta memberikan manfaat pada lingkungan sekitar.</li>\r\n<li>Terwujudnya Budaya literasi membaca,dan menulis menganggapnya sebagai suatu kebutuhan.</li>\r\n</ol>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `nama`, `email`, `pass`) VALUES
(1, 'Ammar', 'ammarstar0@gmail.com', '123456'),
(2, 'ammar star', 'ammarstar0@gmail.com', '123'),
(8, 'ammar', 'ammarstar0@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_utama`
--

CREATE TABLE `tbl_utama` (
  `id` int(11) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `isi` text NOT NULL,
  `nama_gambar` varchar(20) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_utama`
--

INSERT INTO `tbl_utama` (`id`, `judul`, `isi`, `nama_gambar`, `gambar`) VALUES
(1, 'Belajar Membaca', 'Buku merupakan sumber dari segala informasi yang bisa membuka wawasan seseorang mengenai berbagai hal. Membaca buku sama dengan menambah ilmu pengetahuan seperti tentang ekonomi, sosial, budaya, politik hingga aspek-aspek kehidupan lainnya. Dengan membaca, seseorang juga dapat terbantu mengubah masa depan dan menambah kecerdasan akal serta pikiran.', '', 'membaca.jpg'),
(2, 'Tata Boga', 'Tata boga yang dilaksanakan oleh SD Bahreisy merupakan sebagai cara untuk menggali bakat anak didik terutama dalam memasak. Dalam kegiatan tata boga di SD Bahreisy selalu diadakan setiap tahun dan dilaksanakan untuk siswa kelas VI(6). Dalam kegiatan tata boga ini siswa membeli bahan di apsar sendiri, kemudian memasak dari bahan baku yang telah dibeli, kemudian makan bersama hasil dari masakan yang telah dibuat dan terakhir ditutup dengan mencuci piring.', '', 'memasak.jpg'),
(3, 'Study Tour', 'Study tour adalah aktivitas di luar ruangan kelas yang memiliki tujuan untuk belajar mengenai proses suatu hal secara langsung. Aktivitas ini 2 kali dalam satu tahun, yaitu semester I sebanyak 1 kali dan semester II sebanyak 1 kali. Selain menjadi sarana belajar para siswa, kegiatan ini menjadi sebuah kegiatan berekreasi. Proses belajar dalam kegiatan ini berbeda karena para murid akan mengunjungi obyek secara langsung.', '', 'studytour.jpg'),
(42, 'ammar ', '<p>star&nbsp;</p>\r\n', '', 'sekolah1.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bonbin`
--
ALTER TABLE `tbl_bonbin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_utama`
--
ALTER TABLE `tbl_utama`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bonbin`
--
ALTER TABLE `tbl_bonbin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_pendaftaran`
--
ALTER TABLE `tbl_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_profil`
--
ALTER TABLE `tbl_profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_utama`
--
ALTER TABLE `tbl_utama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
