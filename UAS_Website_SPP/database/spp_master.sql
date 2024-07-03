-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 09:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spp_master`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `dashboard_metrics`
-- (See below for the actual view)
--
CREATE TABLE `dashboard_metrics` (
`total_siswa` bigint(21)
,`belum_lunas` bigint(21)
,`lunas` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jurusan`) VALUES
(1, 'X IPA 1', 'IPA'),
(2, 'X IPS 1', 'IPS'),
(3, 'XI IPA 1', 'IPA'),
(4, 'XI IPS 1', 'IPS'),
(5, 'XII IPA 1', 'IPA'),
(6, 'XII IPS 1', 'IPS');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `nisn` varchar(10) DEFAULT NULL,
  `tgl_bayar` date DEFAULT NULL,
  `bulan_dibayar` varchar(20) DEFAULT NULL,
  `tahun_dibayar` year(4) DEFAULT NULL,
  `id_spp` int(11) DEFAULT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES
(1, 1, '0025853220', '2024-06-06', 'Juni', '2024', 3, 550000),
(2, 1, '0021617628', '2024-06-16', 'Juni', '2024', 1, 500000),
(3, 1, '0026700977', '2024-06-03', 'Juni', '2024', 1, 500000),
(4, 1, '0027980788', '2024-06-09', 'Juni', '2024', 2, 525000),
(5, 1, '0023880426', '2024-06-16', 'Juni', '2024', 3, 550000),
(6, 1, '0017197352', '2024-06-22', 'Juni', '2024', 3, 550000),
(7, 1, '0016948455', '2024-06-24', 'Juni', '2024', 3, 550000),
(8, 1, '0014882993', '2024-06-24', 'Juni', '2024', 1, 500000),
(9, 1, '0019306359', '2024-06-08', 'Juni', '2024', 1, 500000),
(10, 1, '0024475479', '2024-06-21', 'Juni', '2024', 1, 500000),
(11, 1, '0019569923', '2024-06-04', 'Juni', '2024', 3, 550000),
(12, 1, '0014588249', '2024-06-17', 'Juni', '2024', 1, 500000),
(13, 1, '0022681317', '2024-06-08', 'Juni', '2024', 2, 525000),
(14, 1, '0018256586', '2024-06-24', 'Juni', '2024', 1, 500000),
(15, 1, '0014936137', '2024-06-19', 'Juni', '2024', 2, 525000),
(16, 1, '0027649390', '2024-06-19', 'Juni', '2024', 2, 525000),
(17, 1, '0019468109', '2024-06-21', 'Juni', '2024', 1, 500000),
(18, 1, '0013252984', '2024-06-17', 'Juni', '2024', 3, 550000),
(19, 1, '0017081310', '2024-06-20', 'Juni', '2024', 2, 525000),
(20, 1, '0016758788', '2024-06-06', 'Juni', '2024', 3, 550000),
(21, 1, '0025326141', '2024-06-20', 'Juni', '2024', 2, 525000),
(22, 1, '0017697532', '2024-06-07', 'Juni', '2024', 1, 500000),
(23, 1, '0021540822', '2024-06-19', 'Juni', '2024', 2, 525000),
(24, 1, '0016252126', '2024-06-23', 'Juni', '2024', 3, 550000),
(25, 1, '0027569486', '2024-06-18', 'Juni', '2024', 1, 500000),
(26, 1, '0016640743', '2024-06-15', 'Juni', '2024', 1, 500000),
(27, 1, '0011263247', '2024-06-10', 'Juni', '2024', 2, 525000),
(28, 1, '0019223761', '2024-06-17', 'Juni', '2024', 2, 525000),
(29, 1, '0028151212', '2024-06-18', 'Juni', '2024', 2, 525000),
(30, 1, '0014131883', '2024-06-08', 'Juni', '2024', 2, 525000),
(31, 1, '0018392288', '2024-06-27', 'Juni', '2024', 1, 500000),
(32, 1, '0027303541', '2024-06-21', 'Juni', '2024', 1, 500000),
(33, 1, '0019655960', '2024-06-20', 'Juni', '2024', 2, 525000),
(34, 1, '0011772914', '2024-06-25', 'Juni', '2024', 3, 550000),
(35, 1, '0029523948', '2024-06-22', 'Juni', '2024', 2, 525000),
(36, 1, '0029977834', '2024-06-07', 'Juni', '2024', 3, 550000),
(37, 1, '0011296520', '2024-06-23', 'Juni', '2024', 2, 525000),
(38, 1, '0028891302', '2024-06-06', 'Juni', '2024', 2, 525000),
(39, 1, '0014412204', '2024-06-21', 'Juni', '2024', 3, 550000),
(40, 1, '0022822416', '2024-06-08', 'Juni', '2024', 2, 525000),
(41, 1, '0016780607', '2024-06-21', 'Juni', '2024', 2, 525000),
(42, 1, '0026176796', '2024-06-11', 'Juni', '2024', 2, 525000),
(43, 1, '0015426116', '2024-06-04', 'Juni', '2024', 2, 525000),
(44, 1, '0029726617', '2024-06-25', 'Juni', '2024', 1, 500000),
(45, 1, '0026900955', '2024-06-19', 'Juni', '2024', 2, 525000),
(46, 1, '0029753679', '2024-06-06', 'Juni', '2024', 3, 550000),
(47, 1, '0013458025', '2024-06-20', 'Juni', '2024', 1, 500000),
(48, 1, '0015354825', '2024-06-14', 'Juni', '2024', 2, 525000),
(49, 1, '0029494118', '2024-06-17', 'Juni', '2024', 3, 550000),
(50, 1, '0015298363', '2024-06-23', 'Juni', '2024', 1, 500000),
(51, 1, '0027952552', '2024-06-14', 'Juni', '2024', 1, 500000),
(52, 1, '0013806406', '2024-06-08', 'Juni', '2024', 1, 500000),
(53, 1, '0026111119', '2024-06-17', 'Juni', '2024', 2, 525000),
(54, 1, '0011000745', '2024-06-11', 'Juni', '2024', 1, 500000),
(55, 1, '0022591064', '2024-06-21', 'Juni', '2024', 2, 525000),
(56, 1, '0015164158', '2024-06-04', 'Juni', '2024', 2, 525000),
(57, 1, '0023409403', '2024-06-30', 'Juni', '2024', 1, 500000),
(58, 1, '0011548356', '2024-06-09', 'Juni', '2024', 2, 525000),
(59, 1, '0018249736', '2024-06-24', 'Juni', '2024', 3, 550000),
(60, 1, '0015563467', '2024-06-17', 'Juni', '2024', 2, 525000),
(61, 1, '0027392445', '2024-06-19', 'Juni', '2024', 3, 550000),
(62, 1, '0022129360', '2024-06-24', 'Juni', '2024', 1, 500000),
(63, 1, '0012352786', '2024-06-10', 'Juni', '2024', 1, 500000),
(64, 1, '0024555568', '2024-06-20', 'Juni', '2024', 1, 500000),
(65, 1, '0029461915', '2024-06-16', 'Juni', '2024', 3, 550000),
(66, 1, '0018170016', '2024-06-20', 'Juni', '2024', 3, 550000),
(67, 1, '0026303339', '2024-06-14', 'Juni', '2024', 3, 550000),
(68, 1, '0012128560', '2024-06-04', 'Juni', '2024', 3, 550000),
(69, 1, '0019832110', '2024-06-14', 'Juni', '2024', 1, 500000),
(70, 1, '0027078114', '2024-06-02', 'Juni', '2024', 3, 550000),
(71, 1, '0027214866', '2024-06-28', 'Juni', '2024', 3, 550000),
(72, 1, '0018197442', '2024-06-25', 'Juni', '2024', 1, 500000),
(73, 1, '0015119012', '2024-06-01', 'Juni', '2024', 3, 550000),
(74, 1, '0018980250', '2024-06-25', 'Juni', '2024', 3, 550000),
(75, 1, '0019321496', '2024-06-25', 'Juni', '2024', 3, 550000),
(76, 1, '0027080208', '2024-06-29', 'Juni', '2024', 3, 550000),
(77, 1, '0025305329', '2024-06-28', 'Juni', '2024', 3, 550000),
(78, 1, '0023556907', '2024-06-18', 'Juni', '2024', 2, 525000),
(79, 1, '0014915873', '2024-06-04', 'Juni', '2024', 1, 500000),
(80, 1, '0024817125', '2024-06-11', 'Juni', '2024', 3, 550000),
(81, 1, '0015403108', '2024-06-05', 'Juni', '2024', 1, 500000),
(82, 1, '0015657083', '2024-06-10', 'Juni', '2024', 2, 525000),
(83, 1, '0025819167', '2024-06-18', 'Juni', '2024', 3, 550000),
(84, 1, '0028937734', '2024-06-10', 'Juni', '2024', 1, 500000),
(85, 1, '0026013399', '2024-06-27', 'Juni', '2024', 3, 550000),
(86, 1, '0019430187', '2024-06-18', 'Juni', '2024', 3, 550000),
(87, 1, '0026121773', '2024-06-18', 'Juni', '2024', 3, 550000),
(88, 1, '0015377696', '2024-06-25', 'Juni', '2024', 1, 500000),
(89, 1, '0028226764', '2024-06-08', 'Juni', '2024', 1, 500000),
(90, 1, '0011403142', '2024-06-30', 'Juni', '2024', 1, 500000),
(91, 1, '0022522134', '2024-06-16', 'Juni', '2024', 1, 500000),
(92, 1, '0024413113', '2024-06-02', 'Juni', '2024', 3, 550000),
(93, 1, '0014977311', '2024-06-30', 'Juni', '2024', 3, 550000),
(94, 1, '0016958972', '2024-06-02', 'Juni', '2024', 2, 525000),
(95, 1, '0026127526', '2024-06-01', 'Juni', '2024', 2, 525000),
(96, 1, '0018943755', '2024-06-17', 'Juni', '2024', 1, 500000),
(97, 1, '0028099753', '2024-06-26', 'Juni', '2024', 1, 500000),
(98, 1, '0026924997', '2024-06-12', 'Juni', '2024', 3, 550000),
(99, 1, '0023890176', '2024-06-17', 'Juni', '2024', 2, 525000),
(100, 1, '0026214565', '2024-06-04', 'Juni', '2024', 2, 525000),
(101, 1, '0015840992', '2024-06-21', 'Juni', '2024', 3, 550000),
(102, 1, '0025741756', '2024-06-09', 'Juni', '2024', 1, 500000),
(103, 1, '0019675924', '2024-06-26', 'Juni', '2024', 1, 500000),
(104, 1, '0025937813', '2024-06-12', 'Juni', '2024', 2, 525000),
(105, 1, '0013738806', '2024-06-22', 'Juni', '2024', 3, 550000),
(106, 1, '0011170896', '2024-06-06', 'Juni', '2024', 3, 550000),
(107, 1, '0013029255', '2024-06-05', 'Juni', '2024', 3, 550000),
(108, 1, '0024358100', '2024-06-17', 'Juni', '2024', 1, 500000),
(109, 1, '0014001656', '2024-06-27', 'Juni', '2024', 2, 525000),
(110, 1, '0028335750', '2024-06-09', 'Juni', '2024', 2, 525000),
(111, 1, '0022019960', '2024-06-09', 'Juni', '2024', 1, 500000),
(112, 1, '0013980486', '2024-06-20', 'Juni', '2024', 3, 550000),
(113, 1, '0017779158', '2024-06-21', 'Juni', '2024', 3, 550000),
(114, 1, '0011877934', '2024-06-14', 'Juni', '2024', 1, 500000),
(115, 1, '0028122415', '2024-06-30', 'Juni', '2024', 2, 525000),
(116, 1, '0019562682', '2024-06-01', 'Juni', '2024', 2, 525000),
(117, 1, '0011838231', '2024-06-25', 'Juni', '2024', 2, 525000),
(118, 1, '0019902786', '2024-06-24', 'Juni', '2024', 1, 500000),
(119, 1, '0016918433', '2024-06-03', 'Juni', '2024', 1, 500000),
(120, 1, '0023568902', '2024-06-03', 'Juni', '2024', 2, 525000),
(121, 1, '0022634587', '2024-06-30', 'Juni', '2024', 2, 525000),
(122, 1, '0012901712', '2024-06-02', 'Juni', '2024', 3, 550000),
(123, 1, '0019483123', '2024-06-27', 'Juni', '2024', 1, 500000),
(124, 1, '0012691749', '2024-06-28', 'Juni', '2024', 1, 500000);

--
-- Triggers `pembayaran`
--
DELIMITER $$
CREATE TRIGGER `update_status_pembayaran` AFTER INSERT ON `pembayaran` FOR EACH ROW BEGIN
    UPDATE siswa
    SET status_pembayaran = 'lunas'
    WHERE nisn = NEW.nisn;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `nama_petugas` varchar(35) DEFAULT NULL,
  `level` enum('admin') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'admin', 'admin', 'Heruna', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(8) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `id_spp` int(11) DEFAULT NULL,
  `status_pembayaran` enum('lunas','belum lunas') DEFAULT 'belum lunas'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`, `status_pembayaran`) VALUES
('0011000745', '0134903', 'Dadi Firgantoro', 4, 'Jl. Setiabudhi No. 26, Sungai Penuh, JT 85806', '08357827115', 1, 'lunas'),
('0011085583', '0155809', 'Tirtayasa Adriansyah', 1, 'Gang Waringin No. 087, Surakarta, AC 63182', '08278509237', 2, 'belum lunas'),
('0011170896', '0143394', 'Dariati Rahmawati', 2, 'Jl. Rajawali Timur No. 102, Pematangsiantar, AC 00163', '08682696934', 2, 'lunas'),
('0011263247', '0144246', 'dr. Baktiadi Ardianto, S.Gz', 5, 'Jl. BKR No. 22, Depok, NT 17105', '08460165306', 3, 'lunas'),
('0011291138', '0117913', 'Gaduh Suryatmi', 1, 'Gang Joyoboyo No. 265, Semarang, Kalimantan Timur 39089', '08836361668', 2, 'belum lunas'),
('0011296520', '0130370', 'dr. Kamaria Marpaung, S.Psi', 1, 'Jl. Lembong No. 64, Dumai, Jawa Barat 85246', '08956780496', 3, 'lunas'),
('0011403142', '0153543', 'Niyaga Purwanti', 3, 'Jl. Yos Sudarso No. 30, Malang, KT 14100', '08580122709', 3, 'lunas'),
('0011548356', '0192544', 'drg. Yuni Permata, S.Sos', 2, 'Jalan Rajiman No. 504, Bau-Bau, SU 82013', '08161641466', 1, 'lunas'),
('0011772914', '0172131', 'Iriana Hardiansyah', 2, 'Gang Cikapayang No. 4, Purwokerto, KT 73786', '08964163120', 2, 'lunas'),
('0011816427', '0187052', 'Syahrini Suwarno', 2, 'Gang W.R. Supratman No. 88, Cilegon, Maluku 65751', '08558944098', 1, 'belum lunas'),
('0011838231', '0159508', 'Vivi Putra', 6, 'Jalan Kapten Muslihat No. 6, Singkawang, Jawa Tengah 15148', '08866225590', 2, 'lunas'),
('0011877934', '0146891', 'Mahfud Mandala, S.E.', 4, 'Jl. Suniaraja No. 269, Denpasar, BT 15203', '08493390217', 2, 'lunas'),
('0011998572', '0137833', 'Reza Situmorang', 3, 'Gang Tubagus Ismail No. 4, Sukabumi, JK 99749', '08849320583', 2, 'belum lunas'),
('0012113553', '0196616', 'Yulia Lailasari, S.E.', 3, 'Jalan Siliwangi No. 73, Jayapura, AC 55564', '08213097723', 1, 'belum lunas'),
('0012128560', '0126242', 'T. Najib Jailani', 2, 'Gang Kutisari Selatan No. 1, Denpasar, Kalimantan Barat 11737', '08480707465', 1, 'lunas'),
('0012352786', '0157236', 'Fathonah Simbolon', 6, 'Gg. Monginsidi No. 576, Tanjungpinang, Sulawesi Selatan 72488', '08834994538', 2, 'lunas'),
('0012550942', '0131264', 'Tomi Widodo', 6, 'Gg. Asia Afrika No. 19, Gorontalo, BB 90444', '08932110515', 2, 'belum lunas'),
('0012678212', '0153526', 'Ihsan Hutapea', 3, 'Jalan KH Amin Jasuta No. 668, Meulaboh, Sulawesi Barat 30293', '08454185115', 2, 'belum lunas'),
('0012691749', '0122663', 'Hamima Irawan, M.TI.', 1, 'Gg. Gegerkalong Hilir No. 23, Kota Administrasi Jakarta Utara, LA 58727', '08859665298', 1, 'lunas'),
('0012879876', '0157977', 'Asmuni Yuliarti', 1, 'Gang Suryakencana No. 232, Kota Administrasi Jakarta Timur, ST 01296', '08872142273', 2, 'belum lunas'),
('0012901712', '0156218', 'Betania Sihombing, M.Pd', 3, 'Gang Lembong No. 0, Kendari, BA 46150', '08827165102', 2, 'lunas'),
('0013029255', '0198304', 'R.A. Uchita Halim, S.Farm', 2, 'Gg. Rungkut Industri No. 7, Cimahi, PA 67267', '08564045621', 3, 'lunas'),
('0013107687', '0171692', 'Dodo Hasanah, S.Sos', 4, 'Jl. Ronggowarsito No. 25, Banjarbaru, JA 46166', '08669591153', 2, 'belum lunas'),
('0013252984', '0126285', 'R.A. Zahra Andriani', 3, 'Jl. Kebonjati No. 79, Prabumulih, PB 86171', '08261211261', 2, 'lunas'),
('0013458025', '0198968', 'Jindra Astuti', 5, 'Gang Setiabudhi No. 417, Batu, Jawa Tengah 48700', '08155340810', 3, 'lunas'),
('0013659304', '0115922', 'Rahman Uyainah', 5, 'Jl. M.H Thamrin No. 02, Padang, Sulawesi Barat 50275', '08806264010', 3, 'belum lunas'),
('0013738806', '0188429', 'Lasmanto Prabowo', 2, 'Jl. Moch. Toha No. 908, Palembang, YO 74111', '08259884925', 2, 'lunas'),
('0013752198', '0158938', 'R. Bagiya Wulandari, S.Pd', 5, 'Jalan Gedebage Selatan No. 3, Bima, KS 24835', '08561830592', 2, 'belum lunas'),
('0013806406', '0195406', 'Jarwa Nasyidah', 2, 'Jalan Kapten Muslihat No. 062, Madiun, Bengkulu 29518', '08567854910', 1, 'lunas'),
('0013980486', '0139736', 'Marsito Sihotang', 5, 'Gg. S. Parman No. 912, Sukabumi, KI 36683', '08315344316', 2, 'lunas'),
('0014001656', '0177598', 'Gandewa Yulianti', 6, 'Jl. Medokan Ayu No. 9, Pasuruan, RI 44663', '08964975287', 3, 'lunas'),
('0014024501', '0136228', 'Nyana Melani', 2, 'Gg. Pacuan Kuda No. 0, Palembang, SS 76341', '08472373917', 3, 'belum lunas'),
('0014131883', '0128706', 'Uli Rahimah', 1, 'Jl. Veteran No. 567, Bekasi, Kepulauan Bangka Belitung 44534', '08564699951', 3, 'lunas'),
('0014243248', '0147935', 'Cawisadi Siregar, M.Kom.', 6, 'Gang Jamika No. 8, Surabaya, NT 85185', '08781493096', 2, 'belum lunas'),
('0014412204', '0191486', 'Uli Pudjiastuti', 5, 'Jalan Cempaka No. 4, Sukabumi, AC 13344', '08453932218', 3, 'lunas'),
('0014588249', '0194002', 'Darmana Farida', 6, 'Jl. Laswi No. 4, Palopo, SN 72222', '08898281744', 1, 'lunas'),
('0014609590', '0152612', 'R.A. Kamila Sinaga, S.Kom', 1, 'Gg. Jayawijaya No. 08, Kota Administrasi Jakarta Timur, JB 25642', '08701347529', 2, 'belum lunas'),
('0014882993', '0152100', 'Taufan Hidayanto', 2, 'Jalan Bangka Raya No. 6, Ternate, Banten 86814', '08898168404', 3, 'lunas'),
('0014915873', '0138629', 'Winda Wastuti', 3, 'Gg. M.T Haryono No. 1, Palembang, MA 88166', '08817485037', 2, 'lunas'),
('0014936137', '0118336', 'Oni Santoso, M.Pd', 3, 'Jalan Rungkut Industri No. 774, Tebingtinggi, Kalimantan Tengah 57661', '08542519632', 1, 'lunas'),
('0014977311', '0172939', 'Hj. Maida Mangunsong, S.T.', 6, 'Gang S. Parman No. 61, Mojokerto, RI 14302', '08472698905', 2, 'lunas'),
('0015119012', '0174611', 'Cut Sadina Wahyudin', 6, 'Gang Soekarno Hatta No. 6, Pekanbaru, Sulawesi Barat 43652', '08729999722', 1, 'lunas'),
('0015164158', '0126448', 'Belinda Mandasari', 6, 'Gg. M.H Thamrin No. 94, Ambon, KS 49471', '08951446704', 3, 'lunas'),
('0015183397', '0194917', 'Cakrawangsa Latupono', 2, 'Jalan Ahmad Dahlan No. 510, Pontianak, Jambi 68313', '08916962444', 2, 'belum lunas'),
('0015298363', '0153314', 'Citra Laksmiwati', 5, 'Gang Ronggowarsito No. 322, Bima, RI 88469', '08792202941', 2, 'lunas'),
('0015304340', '0188381', 'Elon Pradana', 5, 'Gang Jend. A. Yani No. 7, Jayapura, BA 97183', '08741837794', 2, 'belum lunas'),
('0015354825', '0140011', 'Rudi Purnawati, S.E.I', 3, 'Gg. Cihampelas No. 68, Pasuruan, Sulawesi Utara 45338', '08452655469', 2, 'lunas'),
('0015377696', '0179394', 'Cut Ratih Prasetya', 5, 'Jalan Kapten Muslihat No. 5, Kota Administrasi Jakarta Pusat, Sulawesi Barat 76588', '08787995800', 1, 'lunas'),
('0015403108', '0113291', 'Hj. Samiah Habibi', 3, 'Jalan Sukabumi No. 996, Kota Administrasi Jakarta Timur, GO 93254', '08761896670', 3, 'lunas'),
('0015404598', '0190126', 'Bakda Pratama, M.M.', 6, 'Gg. Veteran No. 668, Sabang, JA 96591', '08847975974', 1, 'belum lunas'),
('0015426116', '0193377', 'Nadine Maulana', 6, 'Gg. Pasteur No. 1, Tebingtinggi, DI Yogyakarta 69348', '08151477782', 3, 'lunas'),
('0015452635', '0118067', 'Titi Wahyuni, S.Pd', 4, 'Jalan Suniaraja No. 5, Solok, SU 08393', '08431581940', 2, 'belum lunas'),
('0015475841', '0196124', 'Dt. Muhammad Widodo', 1, 'Jalan Setiabudhi No. 1, Yogyakarta, YO 29932', '08800074737', 2, 'belum lunas'),
('0015563467', '0140796', 'Carub Rahayu', 2, 'Gg. Ahmad Yani No. 8, Balikpapan, AC 82743', '08242063762', 2, 'lunas'),
('0015657083', '0132173', 'Ella Prasetya', 2, 'Gang Ir. H. Djuanda No. 2, Kota Administrasi Jakarta Pusat, JI 98920', '08578188224', 3, 'lunas'),
('0015674311', '0175220', 'dr. Cemeti Nashiruddin', 2, 'Jalan Rajawali Timur No. 9, Yogyakarta, KS 27467', '08291544614', 2, 'belum lunas'),
('0015780011', '0116292', 'Septi Januar, S.Ked', 4, 'Jalan Merdeka No. 3, Palembang, KU 09821', '08281135667', 1, 'belum lunas'),
('0015840992', '0149805', 'Zulaikha Sitompul', 6, 'Gang Tubagus Ismail No. 984, Padang Sidempuan, Gorontalo 03174', '08493613430', 1, 'lunas'),
('0015975327', '0122324', 'Rahmat Iswahyudi', 4, 'Jl. K.H. Wahid Hasyim No. 0, Padangpanjang, Sulawesi Utara 51773', '08738298043', 3, 'belum lunas'),
('0016252126', '0198725', 'Ami Setiawan, S.Pd', 1, 'Gg. Jamika No. 6, Solok, SU 30264', '08858853172', 1, 'lunas'),
('0016272977', '0198115', 'Alambana Wahyudin', 1, 'Jl. Ir. H. Djuanda No. 3, Pasuruan, Sumatera Selatan 43621', '08934509776', 1, 'belum lunas'),
('0016381371', '0184079', 'Kacung Nurdiyanti', 4, 'Jl. Cikutra Timur No. 24, Denpasar, Sulawesi Tenggara 51410', '08109994065', 3, 'belum lunas'),
('0016382533', '0111735', 'R.A. Vicky Yuniar, M.Ak', 6, 'Jalan Rumah Sakit No. 06, Blitar, RI 81314', '08144723337', 3, 'belum lunas'),
('0016496674', '0118481', 'Zulaikha Tarihoran', 4, 'Jalan Cihampelas No. 9, Bontang, KT 04315', '08896721819', 2, 'belum lunas'),
('0016640743', '0192747', 'Aisyah Permata', 1, 'Gang Suniaraja No. 5, Surakarta, Aceh 17233', '08678488564', 2, 'lunas'),
('0016758788', '0142413', 'Zulfa Ardianto', 3, 'Jalan Otto Iskandardinata No. 9, Tangerang Selatan, SS 04037', '08366459533', 3, 'lunas'),
('0016780607', '0167507', 'Lasmanto Situmorang', 3, 'Gang Setiabudhi No. 885, Denpasar, SG 99209', '08404731085', 1, 'lunas'),
('0016918433', '0120875', 'Kajen Zulaika', 3, 'Gg. PHH. Mustofa No. 191, Palembang, JK 43597', '08409866375', 3, 'lunas'),
('0016948455', '0133573', 'Cici Wulandari', 4, 'Gg. Kapten Muslihat No. 47, Magelang, Kepulauan Riau 64443', '08961097810', 2, 'lunas'),
('0016958972', '0197993', 'Rina Puspita', 4, 'Jl. Raya Ujungberung No. 03, Depok, Jawa Timur 02148', '08766546738', 3, 'lunas'),
('0017081310', '0131741', 'Tgk. Natalia Namaga, S.Pd', 6, 'Gang Kapten Muslihat No. 6, Mojokerto, Sulawesi Tengah 07505', '08475731543', 3, 'lunas'),
('0017197352', '0131342', 'Daryani Budiyanto', 5, 'Jl. Jakarta No. 50, Sungai Penuh, PA 76575', '08578865575', 3, 'lunas'),
('0017510530', '0166890', 'Azalea Thamrin', 4, 'Jl. Rumah Sakit No. 2, Sorong, SB 77818', '08629597457', 3, 'belum lunas'),
('0017697532', '0167670', 'Puti Uchita Simanjuntak', 6, 'Gang Rajawali Timur No. 15, Pagaralam, Kalimantan Barat 71498', '08676132711', 2, 'lunas'),
('0017779158', '0111630', 'Juli Sirait', 5, 'Gg. BKR No. 07, Tangerang, Sulawesi Tengah 91248', '08115449151', 1, 'lunas'),
('0018170016', '0165585', 'Hj. Winda Hutagalung, M.Farm', 3, 'Gang Gegerkalong Hilir No. 903, Kotamobagu, Kalimantan Selatan 34745', '08960552869', 3, 'lunas'),
('0018197442', '0179684', 'Wakiman Wijaya', 1, 'Jalan Cempaka No. 3, Bitung, Jawa Barat 89233', '08460673768', 1, 'lunas'),
('0018249736', '0157563', 'Raisa Firmansyah', 1, 'Jl. Dr. Djunjunan No. 988, Meulaboh, Banten 10746', '08712132648', 1, 'lunas'),
('0018256586', '0183459', 'Puti Putri Susanti', 1, 'Gang BKR No. 28, Bandar Lampung, ST 63726', '08233346300', 2, 'lunas'),
('0018258028', '0161791', 'Aslijan Hassanah, M.Pd', 5, 'Gang Astana Anyar No. 21, Sorong, Sumatera Selatan 60829', '08522148319', 1, 'belum lunas'),
('0018392288', '0163809', 'Tami Tarihoran', 3, 'Jalan Erlangga No. 2, Gorontalo, NB 07569', '08319182690', 2, 'lunas'),
('0018633689', '0113070', 'Reza Uyainah', 5, 'Gg. Gedebage Selatan No. 294, Bukittinggi, Nusa Tenggara Timur 85592', '08198184281', 1, 'belum lunas'),
('0018943755', '0182456', 'Hani Sihotang', 1, 'Jl. M.T Haryono No. 56, Palangkaraya, Sulawesi Tengah 41124', '08944886787', 1, 'lunas'),
('0018980250', '0115591', 'Gangsar Nasyiah', 2, 'Gg. Sadang Serang No. 9, Probolinggo, Kalimantan Tengah 52044', '08909430999', 3, 'lunas'),
('0018984346', '0172435', 'Cengkir Laksmiwati', 6, 'Jalan Raya Ujungberung No. 732, Batu, YO 52974', '08599384521', 2, 'belum lunas'),
('0018990586', '0151712', 'Almira Januar, S.T.', 4, 'Jalan K.H. Wahid Hasyim No. 48, Kota Administrasi Jakarta Barat, Sumatera Barat 32920', '08146078715', 2, 'belum lunas'),
('0019223761', '0156790', 'Jinawi Marpaung', 2, 'Gg. Astana Anyar No. 684, Makassar, SB 94979', '08123748564', 2, 'lunas'),
('0019279792', '0186173', 'Simon Susanti', 4, 'Gg. H.J Maemunah No. 0, Kotamobagu, Jawa Barat 80993', '08378623305', 2, 'belum lunas'),
('0019286774', '0178307', 'drg. Cawuk Utama', 3, 'Jalan Medokan Ayu No. 72, Langsa, Sulawesi Barat 12117', '08473979247', 2, 'belum lunas'),
('0019306359', '0148579', 'Wage Yuliarti', 3, 'Jalan M.H Thamrin No. 897, Cirebon, DI Yogyakarta 72302', '08434144753', 3, 'lunas'),
('0019321496', '0122984', 'Cecep Nababan', 1, 'Gang Cihampelas No. 90, Bekasi, Kalimantan Selatan 65959', '08699141519', 3, 'lunas'),
('0019376671', '0148650', 'Oliva Palastri', 4, 'Gang Jayawijaya No. 37, Cirebon, BB 96559', '08964705715', 2, 'belum lunas'),
('0019430187', '0139583', 'Puti Ana Laksmiwati, S.Pt', 1, 'Jl. Indragiri No. 94, Sabang, Sulawesi Barat 68352', '08139410308', 2, 'lunas'),
('0019468109', '0169600', 'Lidya Sudiati', 4, 'Gang Kiaracondong No. 446, Medan, Kalimantan Tengah 34952', '08148229002', 3, 'lunas'),
('0019483123', '0185947', 'Hafshah Mustofa', 5, 'Jalan Abdul Muis No. 78, Malang, Bali 99716', '08238028621', 1, 'lunas'),
('0019562682', '0140136', 'drg. Aslijan Anggraini', 3, 'Gang Indragiri No. 831, Padang Sidempuan, BE 92910', '08920996891', 2, 'lunas'),
('0019569923', '0197973', 'Ilsa Nashiruddin', 6, 'Gang Kendalsari No. 800, Madiun, RI 47714', '08612832122', 3, 'lunas'),
('0019655960', '0189199', 'Caturangga Santoso', 3, 'Jl. Dipenogoro No. 77, Sawahlunto, Kepulauan Riau 11393', '08255767923', 1, 'lunas'),
('0019675924', '0184294', 'Samiah Pertiwi', 2, 'Gang Ahmad Yani No. 84, Makassar, Sulawesi Utara 63855', '08473344052', 3, 'lunas'),
('0019807518', '0114996', 'Yoga Wibisono, S.Pt', 2, 'Gg. Sadang Serang No. 776, Prabumulih, Papua Barat 87650', '08337974620', 3, 'belum lunas'),
('0019817709', '0183317', 'Ayu Dongoran', 5, 'Gang Soekarno Hatta No. 643, Tanjungpinang, JA 94526', '08580524513', 3, 'belum lunas'),
('0019828135', '0122945', 'R.M. Sabar Melani', 2, 'Jalan Kutai No. 6, Bengkulu, Kepulauan Bangka Belitung 04206', '08424472703', 2, 'belum lunas'),
('0019832110', '0116541', 'Marsudi Laksmiwati, S.IP', 6, 'Jalan Antapani Lama No. 465, Tomohon, SU 53658', '08407368734', 2, 'lunas'),
('0019902786', '0156544', 'Cakrajiya Hakim', 6, 'Jalan Ciwastra No. 8, Kotamobagu, KI 43620', '08116226802', 1, 'lunas'),
('0021540822', '0138026', 'Ami Pratiwi', 6, 'Gang Erlangga No. 084, Banjarbaru, Sulawesi Utara 05560', '08551237725', 1, 'lunas'),
('0021617628', '0136045', 'R.A. Raina Mangunsong, S.Sos', 1, 'Gang Moch. Toha No. 430, Banjarmasin, Sumatera Barat 89117', '08969600027', 1, 'lunas'),
('0021798988', '0114064', 'Chandra Saefullah, S.Pt', 3, 'Jl. Kebonjati No. 75, Kota Administrasi Jakarta Pusat, KT 92524', '08621070134', 2, 'belum lunas'),
('0022019960', '0198951', 'Lega Jailani', 2, 'Jalan Jakarta No. 22, Prabumulih, JB 62380', '08417532542', 2, 'lunas'),
('0022129360', '0146773', 'Aurora Iswahyudi, M.Farm', 3, 'Gang Pasteur No. 68, Lubuklinggau, LA 12949', '08981578085', 1, 'lunas'),
('0022131587', '0146345', 'Kania Damanik', 4, 'Jl. M.T Haryono No. 08, Pontianak, Kalimantan Utara 05395', '08372951164', 1, 'belum lunas'),
('0022522134', '0119753', 'Harja Palastri', 3, 'Gang Rajawali Barat No. 33, Meulaboh, DKI Jakarta 24199', '08907353764', 2, 'lunas'),
('0022591064', '0187563', 'Alika Siregar', 3, 'Gg. Pasteur No. 299, Probolinggo, SR 45651', '08534882735', 2, 'lunas'),
('0022634587', '0195409', 'Yessi Kuswandari', 4, 'Gg. Soekarno Hatta No. 67, Padang Sidempuan, Bali 99394', '08447162351', 2, 'lunas'),
('0022681317', '0140766', 'R. Ifa Manullang, S.Sos', 4, 'Jalan Ciumbuleuit No. 13, Medan, ST 97924', '08339915916', 2, 'lunas'),
('0022822416', '0173078', 'Anastasia Novitasari', 2, 'Jalan Gegerkalong Hilir No. 49, Bogor, Sumatera Utara 52388', '08642022393', 3, 'lunas'),
('0023225004', '0184792', 'Hasna Rahimah', 6, 'Jalan HOS. Cokroaminoto No. 3, Kota Administrasi Jakarta Timur, Kalimantan Utara 20177', '08903210316', 2, 'belum lunas'),
('0023289715', '0111620', 'Anggabaya Nasyiah', 1, 'Jl. H.J Maemunah No. 91, Batu, Kalimantan Timur 34530', '08796565124', 2, 'belum lunas'),
('0023307865', '0124168', 'Syahrini Iswahyudi', 3, 'Jl. Pelajar Pejuang No. 7, Bekasi, LA 94818', '08633497042', 3, 'belum lunas'),
('0023409403', '0163257', 'Uli Suwarno', 4, 'Gg. Erlangga No. 11, Manado, Sumatera Barat 01902', '08721079035', 1, 'lunas'),
('0023556907', '0182218', 'Rahmi Padmasari', 5, 'Gang Dr. Djunjunan No. 90, Surakarta, PB 26321', '08462185563', 1, 'lunas'),
('0023568902', '0150517', 'Farhunnisa Widodo', 3, 'Jl. Sukabumi No. 54, Padang, Sumatera Barat 22535', '08555317768', 1, 'lunas'),
('0023750666', '0113580', 'dr. Panji Haryanto', 2, 'Jalan Laswi No. 0, Surakarta, JA 70933', '08499895245', 2, 'belum lunas'),
('0023880426', '0190576', 'Hj. Anastasia Maheswara', 1, 'Jl. R.E Martadinata No. 477, Banjar, NT 82059', '08184003112', 3, 'lunas'),
('0023890176', '0156441', 'Lukita Susanti', 2, 'Gg. Merdeka No. 806, Solok, KB 15179', '08724955768', 2, 'lunas'),
('0024204052', '0182163', 'Wulan Rahmawati', 6, 'Gg. Yos Sudarso No. 918, Tomohon, SN 85065', '08684947220', 3, 'belum lunas'),
('0024358100', '0199663', 'T. Gilang Simbolon, M.Ak', 6, 'Jalan Surapati No. 113, Batam, Sulawesi Tengah 17537', '08224088677', 2, 'lunas'),
('0024406810', '0140678', 'Daruna Halimah', 2, 'Jl. Indragiri No. 66, Kota Administrasi Jakarta Timur, KB 94962', '08437537020', 1, 'belum lunas'),
('0024413113', '0180356', 'Dadap Kuswandari', 4, 'Jl. Erlangga No. 6, Padang, YO 22782', '08263908049', 1, 'lunas'),
('0024475479', '0155943', 'Laila Nababan', 6, 'Jl. Monginsidi No. 098, Kupang, Aceh 11347', '08946145890', 3, 'lunas'),
('0024555568', '0183093', 'Puti Maimunah Hutasoit, S.Gz', 3, 'Jalan Joyoboyo No. 355, Serang, KB 52634', '08414631421', 3, 'lunas'),
('0024817125', '0170658', 'Vivi Susanti', 3, 'Jl. Surapati No. 47, Kota Administrasi Jakarta Pusat, Riau 33082', '08608167941', 3, 'lunas'),
('0025207646', '0180404', 'Atmaja Habibi', 6, 'Jl. Cempaka No. 329, Palembang, Jawa Timur 81362', '08865778060', 1, 'belum lunas'),
('0025305329', '0143108', 'Rafid Puspita', 2, 'Jl. Kebonjati No. 0, Gorontalo, Gorontalo 66491', '08800351361', 2, 'lunas'),
('0025326141', '0124987', 'Hj. Kiandra Saragih', 2, 'Gg. Soekarno Hatta No. 76, Magelang, Aceh 61214', '08702309961', 2, 'lunas'),
('0025572744', '0151988', 'Lanjar Irawan', 1, 'Gang Siliwangi No. 98, Banda Aceh, Kalimantan Timur 76029', '08774624895', 1, 'belum lunas'),
('0025741756', '0147713', 'Cahya Nugroho', 3, 'Jl. Ronggowarsito No. 6, Tasikmalaya, Nusa Tenggara Barat 87663', '08776072651', 3, 'lunas'),
('0025754054', '0130019', 'Irma Pranowo, S.E.I', 4, 'Gang Jamika No. 1, Pangkalpinang, MU 86308', '08485196394', 2, 'belum lunas'),
('0025819167', '0120785', 'Victoria Hutapea', 5, 'Jalan Cikutra Barat No. 66, Lhokseumawe, Sulawesi Barat 46930', '08773988028', 2, 'lunas'),
('0025853220', '0132903', 'Arta Handayani', 3, 'Jalan Setiabudhi No. 787, Banjarbaru, KU 33808', '08761570408', 1, 'lunas'),
('0025937813', '0152552', 'Alika Mardhiyah', 5, 'Gang M.H Thamrin No. 528, Purwokerto, KI 14072', '08513912275', 2, 'lunas'),
('0026013399', '0144016', 'dr. Wani Wastuti, S.Sos', 3, 'Jalan Stasiun Wonokromo No. 566, Surakarta, Kepulauan Riau 22051', '08138912365', 2, 'lunas'),
('0026089689', '0123556', 'Harsana Agustina', 3, 'Jl. Rajiman No. 239, Prabumulih, Bengkulu 59199', '08891428097', 3, 'belum lunas'),
('0026111119', '0199797', 'Ana Zulkarnain', 1, 'Gg. Pelajar Pejuang No. 51, Probolinggo, SS 27004', '08888345638', 1, 'lunas'),
('0026121773', '0157612', 'Ajeng Wahyudin', 3, 'Jl. Cikapayang No. 5, Pematangsiantar, MU 22174', '08121651073', 1, 'lunas'),
('0026127526', '0162142', 'Prabu Haryanti', 6, 'Gang Surapati No. 46, Kota Administrasi Jakarta Timur, Sumatera Selatan 62355', '08356169561', 1, 'lunas'),
('0026176796', '0199181', 'Gawati Winarno', 5, 'Jl. Astana Anyar No. 66, Makassar, Lampung 76662', '08147109626', 3, 'lunas'),
('0026214565', '0122890', 'Tina Rahayu', 1, 'Jalan R.E Martadinata No. 584, Bima, BA 27821', '08558897154', 2, 'lunas'),
('0026303339', '0148101', 'Oliva Marbun', 2, 'Jalan Peta No. 551, Langsa, BE 73790', '08984625819', 3, 'lunas'),
('0026508975', '0195606', 'Purwanto Sirait', 5, 'Jalan Abdul Muis No. 5, Serang, DI Yogyakarta 28165', '08845984817', 3, 'belum lunas'),
('0026579761', '0163313', 'Latika Sitompul, M.TI.', 1, 'Gang Rumah Sakit No. 0, Surakarta, PB 39442', '08550241722', 1, 'belum lunas'),
('0026700977', '0142017', 'Prayitna Permadi', 4, 'Jl. Rawamangun No. 09, Tanjungbalai, Sulawesi Selatan 24290', '08296465435', 3, 'lunas'),
('0026737481', '0133155', 'T. Cawisadi Irawan, S.IP', 4, 'Gg. Cihampelas No. 468, Tidore Kepulauan, KS 58667', '08986798749', 3, 'belum lunas'),
('0026900955', '0174268', 'Jamil Nasyiah', 1, 'Gg. W.R. Supratman No. 13, Pasuruan, KT 90009', '08967067982', 1, 'lunas'),
('0026924997', '0184266', 'Widya Usada', 4, 'Gang Indragiri No. 0, Tomohon, BT 94013', '08228375110', 3, 'lunas'),
('0026933147', '0138039', 'dr. Ismail Pranowo', 2, 'Gg. Cihampelas No. 2, Mataram, PA 14198', '08102045135', 1, 'belum lunas'),
('0027078114', '0179021', 'Puti Hana Novitasari, M.M.', 6, 'Jalan Ronggowarsito No. 0, Malang, Bali 35583', '08221643031', 2, 'lunas'),
('0027080208', '0172256', 'R.M. Maryadi Tampubolon, S.IP', 4, 'Jalan Sentot Alibasa No. 750, Solok, JK 78461', '08493469141', 3, 'lunas'),
('0027088505', '0178345', 'Kamila Latupono, S.Gz', 2, 'Jalan Raya Setiabudhi No. 7, Purwokerto, Sulawesi Tenggara 34964', '08599037506', 2, 'belum lunas'),
('0027214866', '0134064', 'Cut Calista Narpati', 5, 'Jalan Gardujati No. 837, Probolinggo, NT 40386', '08191439772', 3, 'lunas'),
('0027216533', '0143502', 'Lili Megantara', 4, 'Gg. Suryakencana No. 73, Lhokseumawe, Jawa Timur 53852', '08992838888', 3, 'belum lunas'),
('0027303541', '0156438', 'Paiman Saragih', 6, 'Gg. Kiaracondong No. 3, Madiun, BB 44026', '08567578658', 1, 'lunas'),
('0027392445', '0156067', 'Gina Utama, S.Psi', 6, 'Gg. Ciwastra No. 0, Makassar, KI 59798', '08603988514', 2, 'lunas'),
('0027569486', '0158052', 'Hj. Eli Farida, S.Sos', 6, 'Gang Asia Afrika No. 919, Semarang, PA 98668', '08224157959', 3, 'lunas'),
('0027608055', '0186540', 'Galih Laksmiwati', 2, 'Jalan Rajawali Barat No. 569, Ternate, PA 70955', '08816957268', 2, 'belum lunas'),
('0027649390', '0126486', 'Ikhsan Halim', 3, 'Gg. Sentot Alibasa No. 8, Jayapura, Papua Barat 26016', '08934421322', 3, 'lunas'),
('0027952552', '0188953', 'Luhung Utami', 6, 'Gg. Abdul Muis No. 45, Tidore Kepulauan, Sumatera Barat 43712', '08674860040', 2, 'lunas'),
('0027980788', '0172865', 'Mariadi Permata', 2, 'Jl. Suniaraja No. 817, Meulaboh, Bengkulu 72404', '08668615364', 2, 'lunas'),
('0028076847', '0176158', 'Hendri Hasanah', 4, 'Jalan Otto Iskandardinata No. 894, Payakumbuh, NB 76920', '08724079443', 3, 'belum lunas'),
('0028099753', '0188755', 'Jumadi Samosir', 6, 'Jl. Abdul Muis No. 723, Yogyakarta, Kalimantan Timur 45663', '08835659742', 3, 'lunas'),
('0028122415', '0111333', 'R.A. Genta Oktaviani', 1, 'Jalan Sentot Alibasa No. 60, Kendari, JB 64248', '08264242428', 1, 'lunas'),
('0028151212', '0166240', 'Mala Irawan, S.Pt', 6, 'Gang Ahmad Dahlan No. 6, Palopo, Sulawesi Barat 27877', '08770498089', 3, 'lunas'),
('0028197163', '0117057', 'Cengkal Saptono', 4, 'Gang S. Parman No. 9, Singkawang, Kalimantan Timur 45104', '08112258726', 1, 'belum lunas'),
('0028226764', '0147446', 'Amalia Siregar', 6, 'Gang Joyoboyo No. 1, Sibolga, NB 89090', '08333003169', 1, 'lunas'),
('0028316808', '0122281', 'Jinawi Marpaung', 2, 'Gang Jakarta No. 801, Bau-Bau, NB 37701', '08906230921', 2, 'belum lunas'),
('0028335750', '0114419', 'Sutan Viktor Latupono', 1, 'Gg. Cikapayang No. 8, Purwokerto, AC 43171', '08589155827', 3, 'lunas'),
('0028410823', '0116916', 'dr. Silvia Mandasari', 6, 'Gg. Rajiman No. 3, Tangerang Selatan, KR 37030', '08982949315', 3, 'belum lunas'),
('0028463798', '0194328', 'Puji Mulyani', 1, 'Jalan Ahmad Yani No. 841, Tanjungbalai, SG 43870', '08815464871', 2, 'belum lunas'),
('0028676382', '0192140', 'Tgk. Jono Gunawan', 2, 'Jl. Pacuan Kuda No. 93, Ambon, LA 00026', '08873943549', 3, 'belum lunas'),
('0028891302', '0145859', 'Tami Salahudin', 2, 'Gang Joyoboyo No. 3, Singkawang, Sumatera Barat 20741', '08580311629', 2, 'lunas'),
('0028893011', '0186494', 'dr. Tami Budiman', 3, 'Gang HOS. Cokroaminoto No. 723, Tegal, JB 38978', '08856692290', 2, 'belum lunas'),
('0028920485', '0121247', 'R.M. Enteng Yuniar, M.Farm', 6, 'Jalan Jamika No. 7, Kupang, Banten 09025', '08541784925', 1, 'belum lunas'),
('0028937734', '0193150', 'Raisa Ardianto', 5, 'Gang Cempaka No. 3, Bengkulu, BA 12355', '08509681826', 1, 'lunas'),
('0029215078', '0174782', 'Artawan Narpati', 1, 'Jl. Tebet Barat Dalam No. 9, Kota Administrasi Jakarta Utara, Kalimantan Timur 45974', '08989920992', 3, 'belum lunas'),
('0029461915', '0175059', 'Vero Farida, S.Pd', 3, 'Jalan Kapten Muslihat No. 55, Banjarmasin, KS 22844', '08915422912', 2, 'lunas'),
('0029494118', '0149367', 'Eli Prabowo', 3, 'Jl. Veteran No. 814, Denpasar, Kalimantan Barat 17247', '08240882197', 2, 'lunas'),
('0029523948', '0121279', 'Gambira Simbolon', 4, 'Jalan W.R. Supratman No. 2, Ambon, Jawa Timur 16259', '08290368636', 1, 'lunas'),
('0029645407', '0119970', 'Dipa Utami', 6, 'Gang Pasteur No. 2, Bau-Bau, JT 41943', '08214342434', 3, 'belum lunas'),
('0029693176', '0154535', 'Rendy Halim', 5, 'Jl. Otto Iskandardinata No. 3, Blitar, Jawa Tengah 70342', '08810693041', 1, 'belum lunas'),
('0029726617', '0136890', 'Pranata Pranowo', 5, 'Gang Setiabudhi No. 0, Cirebon, Sulawesi Selatan 85072', '08240498432', 2, 'lunas'),
('0029753679', '0121204', 'drg. Bagiya Rajata, S.Gz', 5, 'Jl. Otto Iskandardinata No. 2, Bengkulu, JA 14886', '08378864716', 3, 'lunas'),
('0029901886', '0177200', 'Damu Purnawati, S.T.', 3, 'Jalan Sukabumi No. 1, Padang, DKI Jakarta 29452', '08606848828', 2, 'belum lunas'),
('0029977834', '0193806', 'Estiawan Hassanah', 3, 'Gang Raya Ujungberung No. 211, Bau-Bau, SR 30780', '08398223452', 1, 'lunas');

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` year(4) DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(1, '2022', 500000),
(2, '2023', 525000),
(3, '2024', 550000);

-- --------------------------------------------------------

--
-- Structure for view `dashboard_metrics`
--
DROP TABLE IF EXISTS `dashboard_metrics`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `dashboard_metrics`  AS SELECT (select count(0) from `siswa`) AS `total_siswa`, (select count(0) from `siswa` where `siswa`.`status_pembayaran` = 'belum lunas') AS `belum_lunas`, (select count(0) from `siswa` where `siswa`.`status_pembayaran` = 'lunas') AS `lunas` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
