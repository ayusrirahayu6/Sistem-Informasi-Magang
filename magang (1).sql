-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 02:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simagang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `email`, `alamat`, `no_hp`, `password`) VALUES
(1, 'Ayu Sri Rahayu', 'admin@gmail.com', 'Tukdana, Indramayu', '085724285231', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bagian`
--

CREATE TABLE `bagian` (
  `id` int(11) NOT NULL,
  `nama_bagian` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bagian`
--

INSERT INTO `bagian` (`id`, `nama_bagian`, `no_telp`, `desc`) VALUES
(1, 'Bagian Kepegawaian', '0812312322', 'Bagian Kepengurusan Pegawai'),
(2, 'Bagian Administrasi', '(0234) 554336', 'Bagian Kepengurusan Administrasi'),
(3, 'Bagian Teknologi Informasi', '(0234) 554386', 'Bagian Kepengurusan Teknologi Informasi dan komunikasi'),
(4, 'Bagian Adm & Keuangan', '(0234) 554776', 'Bagian Kepengurusan Administrasi Keuangan'),
(5, 'Bagian Kasubag & Pemasaran', '(0234) 554896', 'Bagian Kepengurusan Kasubag dan Pemasaran'),
(6, 'Perumdam Cabang Indramayu', '(0234) 271576', 'Bagian Kepengurusan Perumdam Cabang Indramayu');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(100) NOT NULL,
  `inputnama` varchar(50) NOT NULL,
  `inputasalsekolah` varchar(50) NOT NULL,
  `inputalamat` varchar(100) NOT NULL,
  `inputnohp` varchar(20) NOT NULL,
  `inputemail` varchar(50) NOT NULL,
  `inputkatasandi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `inputnama`, `inputasalsekolah`, `inputalamat`, `inputnohp`, `inputemail`, `inputkatasandi`) VALUES
(1, 'Ayu Sri', 'SMKN 1', 'Indramayu', '087777888999', 'ayu@gmail.com', '25f9e794323b453885f5'),
(2, 'Ayu Sri Rahyu', 'SMAN 1 Tukdana', 'Tukdana, Indramayu', '085724285231', 'ayusrirahayuu900@gmail.com', '7b156bf942f20c70e77a'),
(4, 'Indah', 'SMKN 2', 'Indramayu', '087120987654', 'indahh@gmail.com', 'a8b136aedcc7e8e2e471'),
(9, 'Junaeni', 'SMKN 2', 'Kandanghaur, Indramayu', '089765432123', 'junaeni@gmail.com', 'a2e865f3e4737d54791c'),
(10, 'erina', 'SMAN 1 Tukdana', 'Tukdana, Indramayu', '089765432123', 'erina@gmail.com', '25f9e794323b453885f5'),
(12, 'erina', 'UNY', 'Indramayu', '087777888999', 'erina@gmail.com', '986901b408e47b9e0431'),
(13, 'Ayu Sri', 'SMKN 1', 'Indramayu', '087777888999', 'ayus@gmail.com', 'c44a471bd78cc6c2fea3'),
(14, 'erina', 'SMKN 2', 'Kandanghaur, Indramayu', '089765432123', 'erina@gmail.com', '986901b408e47b9e0431'),
(16, 'Ayu Sri Rahayu', 'SMAN 77 Jakarta', 'Citayem', '081212121223', 'test@gmail.com', 'f5bb0c8de146c67b44babbf4e6584cc0');

-- --------------------------------------------------------

--
-- Table structure for table `form_dokumen`
--

CREATE TABLE `form_dokumen` (
  `id_dokumen` int(100) NOT NULL,
  `inputnama` varchar(50) NOT NULL,
  `inputasalsekolah` varchar(50) NOT NULL,
  `inputemail` varchar(50) NOT NULL,
  `inputfile` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info_magang`
--

CREATE TABLE `info_magang` (
  `id` int(11) NOT NULL,
  `id_bagian` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kuota` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_magang`
--

INSERT INTO `info_magang` (`id`, `id_bagian`, `nama`, `kuota`, `status`) VALUES
(1, 1, 'Bagian Jaringan', 1, 1),
(2, 2, 'TI dan Database', 2, 1),
(3, 3, 'Kolaborasi', 1, 1),
(4, 1, 'Bagian Pelayanan', 2, 1),
(5, 1, 'Bagian Administrasi', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `lamaran`
--

CREATE TABLE `lamaran` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_lowongan` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lamaran`
--

INSERT INTO `lamaran` (`id`, `id_user`, `id_lowongan`, `status`, `file`) VALUES
(1, 1, 2, 1, ''),
(2, 4, 4, 0, ''),
(3, 16, 1, 1, 'TS_Mar_VickiFrendikaManurung2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` longtext NOT NULL,
  `date` datetime NOT NULL,
  `dokumen` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `title`, `desc`, `date`, `dokumen`) VALUES
(1, 'Daftar Peserta Magang', 'Berikut merupakan daftar peserta magang yang daftar di bulan Agustus.\r\nBagi Peserta magang yang sudah diterima dan namanya terdaftar harap melengkapi berkas yang sudah ditentukan.', '2022-07-15 21:00:42', '10307781.pdf'),
(2, 'Daftar Peserta Magang', 'Berikut merupakan daftar peserta magang yang daftar di bulan Agustus.\r\nBagi Peserta magang yang sudah diterima dan namanya terdaftar harap melengkapi berkas yang sudah ditentukan.', '2022-07-14 20:45:55', 'test.pdf'),
(28, 'Hasil Seleksi Magang', 'Berdasarkan hasil test dibawah yang telah dilaksanakan pada hari telah dilaksanakan, maka berikut merupakan daftar nama yang telah lolos seleksi dan akan mengikuti magang pada tanggal yang ditentukan. silahkan unduh dokumen untuk melihat hasil.', '2022-07-17 09:06:33', '10307781.pdf'),
(29, 'sad', 'a', '2022-07-17 09:10:53', '10307781.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bagian`
--
ALTER TABLE `bagian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`),
  ADD UNIQUE KEY `id_daftar` (`id_daftar`,`inputnama`,`inputasalsekolah`,`inputalamat`,`inputnohp`,`inputemail`,`inputkatasandi`);

--
-- Indexes for table `form_dokumen`
--
ALTER TABLE `form_dokumen`
  ADD PRIMARY KEY (`id_dokumen`),
  ADD UNIQUE KEY `id_dokumen` (`id_dokumen`,`inputnama`,`inputasalsekolah`,`inputemail`);

--
-- Indexes for table `info_magang`
--
ALTER TABLE `info_magang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_bagian` (`id_bagian`);

--
-- Indexes for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_lowongan` (`id_lowongan`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bagian`
--
ALTER TABLE `bagian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `form_dokumen`
--
ALTER TABLE `form_dokumen`
  MODIFY `id_dokumen` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info_magang`
--
ALTER TABLE `info_magang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `info_magang`
--
ALTER TABLE `info_magang`
  ADD CONSTRAINT `info_magang_ibfk_1` FOREIGN KEY (`id_bagian`) REFERENCES `bagian` (`id`);

--
-- Constraints for table `lamaran`
--
ALTER TABLE `lamaran`
  ADD CONSTRAINT `lamaran_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `daftar` (`id_daftar`),
  ADD CONSTRAINT `lamaran_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `info_magang` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
