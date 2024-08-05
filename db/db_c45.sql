-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 26 Jul 2024 pada 19.59
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_c45`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataset1`
--

CREATE TABLE `dataset1` (
  `id_dataset1` int NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `Usia` int NOT NULL,
  `BB_U` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `TB_U` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `BB_TB` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dataset1`
--

INSERT INTO `dataset1` (`id_dataset1`, `Name`, `Usia`, `BB_U`, `TB_U`, `BB_TB`) VALUES
(1, 'Ulfa Zaahirah\r\n', 2, 'Kurang', 'Pendek', 'Gizi Kurang'),
(2, 'M Kaivan A', 6, 'Kurang', 'Normal', 'Gizi Kurang'),
(3, 'Afifah Khairunnisa', 6, 'Kurang', 'Normal', 'Gizi Kurang'),
(4, 'Rumaisya Fazila', 11, 'Sangat Kurang', 'Pendek', 'Gizi Kurang'),
(5, 'M Hanif Al Ghazali', 11, 'Kurang', 'Pendek', 'Gizi Kurang'),
(6, 'Aufa Thesya Mecca', 12, 'Kurang', 'Normal', 'Gizi Kurang'),
(7, 'Riskia Kasyifa', 12, 'Kurang', 'Normal', 'Gizi Kurang'),
(8, 'Muhammad Adam', 16, 'Kurang', 'Pendek', 'Gizi Kurang'),
(9, 'M sayidil R', 16, 'Kurang', 'Normal', 'Gizi Kurang'),
(10, 'M Aldi Saputra', 16, 'Kurang', 'Normal', 'Gizi Kurang'),
(11, 'Ira Syuhada', 17, 'Kurang', 'Normal', 'Gizi Kurang'),
(12, 'Abdul Hafizh', 17, 'Kurang', 'Pendek', 'Gizi Kurang'),
(13, 'M Izzam Alaksa', 18, 'Kurang', 'Normal', 'Gizi Kurang'),
(14, 'Cut Alea Zea', 18, 'Kurang', 'Normal', 'Gizi Kurang'),
(15, 'M Abiyan', 18, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(16, 'Asyura', 18, 'Normal', 'Normal', 'Gizi Baik'),
(17, 'M Maulana', 19, 'Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(18, 'Saif Al Banna', 19, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(19, 'Abizar Rafasya', 19, 'Sangat Kurang', 'Pendek', 'Gizi Kurang'),
(20, 'M Asyraf', 19, 'Kurang', 'Pendek', 'Gizi Kurang'),
(21, 'M Atariq Chaliq', 20, 'Kurang', 'Normal', 'Gizi Kurang'),
(22, 'M Rayyan', 20, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(23, 'M Aqil', 20, 'Kurang', 'Pendek', 'Gizi Kurang'),
(24, 'Naura Delisya', 21, 'Kurang', 'Normal', 'Gizi Kurang'),
(25, 'Abidzar Alghifari', 22, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(26, 'Mutia Farida', 22, 'Kurang', 'Normal', 'Gizi Kurang'),
(27, 'M Alawi', 23, 'Sangat Kurang', 'Pendek', 'Gizi Kurang'),
(28, 'M kaisar Arkhan', 23, 'Kurang', 'Normal', 'Gizi Kurang'),
(29, 'Alisya Azzuhra', 23, 'Kurang', 'Normal', 'Gizi Kurang'),
(30, 'Noval Shahreza', 24, 'Kurang', 'Normal', 'Gizi Kurang'),
(31, 'Zulaikha Azzahra', 25, 'Kurang', 'Normal', 'Gizi Kurang'),
(32, 'Yuzana', 25, 'Kurang', 'Normal', 'Gizi Kurang'),
(33, 'Zahrul Ihsan Altar', 26, 'Kurang', 'Pendek', 'Gizi Kurang'),
(34, 'Alifa Almahira', 26, 'Sangat Kurang', 'Pendek', 'Gizi Kurang'),
(35, 'Asyraf Azzulfar', 27, 'Kurang', 'Pendek', 'Gizi Kurang'),
(36, 'Zikra Muliya', 27, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(37, 'Jibril Alfatih', 27, 'Kurang', 'Normal', 'Gizi Kurang'),
(38, 'Nurannasya', 27, 'Sangat Kurang', 'Pendek', 'Gizi Kurang'),
(39, 'Aliani', 27, 'Kurang', 'Normal', 'Gizi Kurang'),
(40, 'M Ikram', 27, 'Kurang', 'Normal', 'Gizi Kurang'),
(41, 'Alfa Rizqi', 28, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(42, 'Asma Alifa', 28, 'Kurang', 'Pendek', 'Gizi Kurang'),
(43, 'Ulya Zakiya', 29, 'Kurang', 'Normal', 'Gizi Kurang'),
(44, 'Muammar Azian', 29, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(45, 'M zain Al Zikri', 29, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(46, 'Ahmad AL Farizi', 29, 'Kurang', 'Pendek', 'Gizi Kurang'),
(47, 'Rafisqy Al Fariq', 29, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(48, 'M Sidqan', 30, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(49, 'M rafa Aska', 31, 'Kurang', 'Pendek', 'Gizi Kurang'),
(50, 'Siti Sarah', 32, 'Kurang', 'Pendek', 'Gizi Kurang'),
(51, 'M Azizul', 32, 'Kurang', 'Normal', 'Gizi Kurang'),
(52, 'M Karsani', 32, 'Kurang', 'Normal', 'Gizi Kurang'),
(53, 'M Azril S', 32, 'Normal', 'Normal', 'Gizi Baik'),
(54, 'Zauhara Z', 33, 'Sangat Kurang', 'Pendek', 'Gizi Kurang'),
(55, 'Aisha Lathifa', 33, 'Sangat Kurang', 'Pendek', 'Gizi Kurang'),
(56, 'M Nizam', 33, 'Kurang', 'Pendek', 'Gizi Kurang'),
(57, 'Azril Razik', 34, 'Kurang', 'Pendek', 'Gizi Kurang'),
(58, 'Mishari Arrasyyid', 34, 'Kurang', 'Normal', 'Gizi Kurang'),
(59, 'Safira Nazhifa', 35, 'Kurang', 'Normal', 'Gizi Kurang'),
(60, 'Ahmad Al habsyi', 35, 'Kurang', 'Normal', 'Gizi Kurang'),
(61, 'Raidatul Isma', 36, 'Kurang', 'Normal', 'Gizi Kurang'),
(62, 'Fitria Syawali', 38, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(63, 'M Barran', 38, 'Kurang', 'Pendek', 'Gizi Kurang'),
(64, 'Syahrul Ramadhan', 38, 'Kurang', 'Normal', 'Gizi Kurang'),
(65, 'Azlan Dea Sadisa', 38, 'Normal', 'Normal', 'Gizi Baik'),
(66, 'Najiatul', 39, 'Kurang', 'Normal', 'Gizi Kurang'),
(67, 'Putri Riyana', 40, 'Kurang', 'Normal', 'Gizi Kurang'),
(68, 'M Zabran', 40, 'Kurang', 'Normal', 'Gizi Kurang'),
(69, 'M Hafizul', 41, 'Kurang', 'Normal', 'Gizi Kurang'),
(70, 'Yusnidar', 41, 'Kurang', 'Normal', 'Gizi Kurang'),
(71, 'M thaha', 42, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(72, 'Salman Farisi', 42, 'Kurang', 'Normal', 'Gizi Kurang'),
(73, 'Asyifah Maulida', 43, 'Kurang', 'Pendek', 'Gizi Kurang'),
(74, 'Aurra Salwa A', 43, 'Kurang', 'Pendek', 'Gizi Kurang'),
(75, 'M RifqieArsyad', 43, 'Kurang', 'Pendek', 'Gizi Kurang'),
(76, 'Saidah Nafisah', 44, 'Kurang', 'Pendek', 'Gizi Kurang'),
(77, 'M Kaisar Abrar', 44, 'Kurang', 'Pendek', 'Gizi Kurang'),
(78, 'Arsyla Yuna Putri', 45, 'Kurang', 'Pendek', 'Gizi Kurang'),
(79, 'Qorisa Humaira', 46, 'Kurang', 'Pendek', 'Gizi Kurang'),
(80, 'Fatimah Zuhra', 46, 'Kurang', 'Normal', 'Gizi Kurang'),
(81, 'M Bilal Asyraf', 46, 'Kurang', 'Pendek', 'Gizi Kurang'),
(82, 'ANNISA SHIDQINA ', 46, 'Normal', 'Normal', 'Gizi Baik'),
(83, 'M Zayyan Faiq', 47, 'Kurang', 'Normal', 'Gizi Kurang'),
(84, 'M Hizqil', 47, 'Sangat Kurang', 'Sangat Pendek', 'Gizi Kurang'),
(85, 'Khayra zea Ashsa', 47, 'Kurang', 'Pendek', 'Gizi Kurang'),
(86, 'Ulul Azmi', 47, 'Kurang', 'Normal', 'Gizi Kurang'),
(87, 'ADILA ARDANIA ', 47, 'Normal', 'Normal', 'Gizi Baik'),
(88, 'M Syawal', 48, 'Kurang', 'Normal', 'Gizi Kurang'),
(89, 'Mikhayla Zalfa Ramadhani', 49, 'Kurang', 'Normal', 'Gizi Kurang'),
(90, 'M. FARIS AUDA ', 49, 'Normal', 'Normal', 'Gizi Baik'),
(91, 'SHANUM AISYAH DINILLA ', 49, 'Normal', 'Normal', 'Gizi Baik'),
(92, 'Asyifa Zaki', 50, 'Kurang', 'Normal', 'Gizi Kurang'),
(93, 'Azril Auladi', 52, 'Kurang', 'Normal', 'Gizi Kurang'),
(94, 'AZKA AULIA RAHMA ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(95, 'KHATIJAH KHANZA ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(96, 'INTAN HUMAIRA ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(97, 'BOY DANISH ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(98, 'M.HABIBI ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(99, 'RUMAISHA QAIREEN AZZALEA ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(100, 'AQILA ALMAHIRA ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(101, 'FATHIRA AGHNIA ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(102, 'MUHAMMAD HAFIS AL FAYED ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(103, 'ALFATIH IZZAZI ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(104, 'AISYA FATIQUL ', 52, 'Normal', 'Normal', 'Gizi Baik'),
(105, 'M Khairul', 53, 'Kurang', 'Pendek', 'Gizi Kurang'),
(106, 'SYARIFAH NAFIZA ', 53, 'Normal', 'Normal', 'Gizi Baik'),
(107, 'T.M ALFATIH ', 53, 'Normal', 'Normal', 'Gizi Baik'),
(108, 'GAISHAN RAFFASYA HAFIS ', 53, 'Normal', 'Normal', 'Gizi Baik'),
(109, 'NAFLA SYAKIRA ', 53, 'Normal', 'Normal', 'Gizi Baik'),
(110, 'M farel Geza', 54, 'Kurang', 'Normal', 'Gizi Kurang'),
(111, 'HAFIZA AZZAHIRA ', 54, 'Normal', 'Normal', 'Gizi Baik'),
(112, 'AIZA NAFEESA ', 54, 'Normal', 'Normal', 'Gizi Baik'),
(113, 'MALIK AZZAHIR ', 54, 'Normal', 'Normal', 'Gizi Baik'),
(114, 'ASYRAF LATIF ', 54, 'Normal', 'Normal', 'Gizi Baik'),
(115, 'AINAYYA FATHIYYATURRAHMA ', 54, 'Normal', 'Normal', 'Gizi Baik'),
(116, 'M.KHALID ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(117, 'TIARA LATIFA ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(118, 'SALSABILA HUMAIRA ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(119, 'MUHAMMAD ZIM FERI ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(120, 'ADIBA SHAKILA AL MARINA ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(121, 'M. ELZIO ATHARAZKA ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(122, 'SAZZA NASHIRA ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(123, 'NADIN SIFA BELA ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(124, 'ARSYILA SAFINA ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(125, 'MAFAAZA HANIF ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(126, 'M.SYAWAL ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(127, 'MUHAMMAD ADAM RIFQI ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(128, 'NABILA KHANSA ', 55, 'Normal', 'Normal', 'Gizi Baik'),
(129, 'ASSYIFATU HAIFA HERMAN ', 56, 'Normal', 'Normal', 'Gizi Baik'),
(130, 'ASSYIFA RAMADHANI ', 56, 'Normal', 'Normal', 'Gizi Baik'),
(131, 'AIZA KAMILA ', 56, 'Normal', 'Normal', 'Gizi Baik'),
(132, 'SUCI RAMDHANI ', 56, 'Normal', 'Pendek', 'Gizi Baik'),
(133, 'Ristia Putri', 57, 'Kurang', 'Normal', 'Gizi Kurang'),
(134, 'Hilya asy-syamila ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(135, 'Riziq khalikurrahman ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(136, 'm.tsabiq asy syairazi irfin  ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(137, 'm.arsya ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(138, 'M.HANIF ALFATIH ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(139, 'HAFIZ AL FARIZI ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(140, 'CUT AMELIA MENOPO ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(141, 'ALIFIA AZKYA MECCA ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(142, 'MUHAMMAD SYAUQI ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(143, 'FARHAN ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(144, 'balqis ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(145, 'MUHAMMAD AZZAM ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(146, 'ASYIKA ARRAYAN DEFAN ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(147, 'ZUNUWANIS AL FAIRUZ ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(148, 'AL FAIZ ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(149, 'khadijah azzahra ', 57, 'Normal', 'Normal', 'Gizi Baik'),
(150, 'Naufal Amzar', 58, 'Sangat Kurang', 'Pendek', 'Gizi Kurang'),
(151, 'Assyifa balqis ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(152, 'Ibnu darda mas\'ula ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(153, 'safiya bathina ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(154, 'Muhammad wahyu ', 58, 'Kurang', 'Sangat Pendek', 'Gizi Baik'),
(155, 'ALIFA NAYLA ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(156, 'Rafif rayyan ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(157, 'DINA SYAKINA ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(158, 'ULFA MUNIRA ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(159, 'ZAFIRA LATIFA ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(160, 'mikhayla jasmine maharani ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(161, 'MUHAMMAD HABIB ZAYYAN ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(162, 'adam nur wahid ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(163, 'AISYAH APRINIA ASZAHRA ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(164, 'QARISSA ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(165, 'NARA ATTILA ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(166, 'ARSYIFA CUT ARIANSYAH ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(167, 'MUHAMMAD RAIHAN ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(168, 'MUHAMMAD IZZAN AL KHLAIS ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(169, 'm.rizki ', 58, 'Normal', 'Normal', 'Gizi Baik'),
(170, 'AZKIATUL AULIA ', 59, 'Normal', 'Normal', 'Gizi Baik'),
(171, 'm.rasyid ', 59, 'Normal', 'Normal', 'Gizi Baik'),
(172, 'ASSIFA NAZIA ', 59, 'Normal', 'Normal', 'Gizi Baik'),
(173, 'M.Alkhalif ', 59, 'Normal', 'Normal', 'Gizi Baik'),
(174, 't.m.aqshari zayan ', 59, 'Normal', 'Normal', 'Gizi Baik'),
(175, 'adzra ransi el ghaffar ', 59, 'Normal', 'Normal', 'Gizi Baik'),
(176, 'JIHAN SAHIRA ', 59, 'Normal', 'Normal', 'Gizi Baik'),
(177, 'FARIS MUSTAFA ', 59, 'Normal', 'Normal', 'Gizi Baik'),
(178, 'RAUDHATUL MAGHFIRAH ', 59, 'Normal', 'Normal', 'Gizi Baik'),
(179, 'MUHAMMAD ARSYAD ', 59, 'Normal', 'Normal', 'Gizi Baik'),
(180, 'ELVINA SHABIYYAH AFIFAH ', 59, 'Normal', 'Normal', 'Gizi Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataset2`
--

CREATE TABLE `dataset2` (
  `id_dataset2` int NOT NULL,
  `Usia` int NOT NULL,
  `BB_TB` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `Menu` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `Ket` varchar(200) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dataset2`
--

INSERT INTO `dataset2` (`id_dataset2`, `Usia`, `BB_TB`, `Menu`, `Ket`) VALUES
(1, 2, 'Gizi Kurang', 'M8', 'Tidak baik'),
(2, 6, 'Gizi Kurang', 'M9', 'Baik'),
(3, 6, 'Gizi Kurang', 'M9', 'Baik'),
(4, 11, 'Gizi Kurang', 'M9', 'Baik'),
(5, 11, 'Gizi Kurang', 'M15', 'Baik'),
(6, 12, 'Gizi Kurang', 'M18', 'Tidak baik'),
(7, 12, 'Gizi Kurang', 'M6', 'Tidak baik'),
(8, 16, 'Gizi Kurang', 'M18', 'Tidak baik'),
(9, 16, 'Gizi Kurang', 'M12', 'Baik'),
(10, 16, 'Gizi Kurang', 'M13', 'Baik'),
(11, 17, 'Gizi Kurang', 'M8', 'Tidak baik'),
(12, 17, 'Gizi Kurang', 'M17', 'Tidak baik'),
(13, 18, 'Gizi Kurang', 'M18', 'Tidak baik'),
(14, 18, 'Gizi Kurang', 'M3', 'Tidak baik'),
(15, 18, 'Gizi Kurang', 'M11', 'Baik'),
(16, 18, 'Gizi Baik', 'M3', 'Tidak baik'),
(17, 19, 'Gizi Kurang', 'M17', 'Tidak baik'),
(18, 19, 'Gizi Kurang', 'M13', 'Baik'),
(19, 19, 'Gizi Kurang', 'M12', 'Baik'),
(20, 19, 'Gizi Kurang', 'M12', 'Baik'),
(21, 20, 'Gizi Kurang', 'M17', 'Tidak baik'),
(22, 20, 'Gizi Kurang', 'M13', 'Baik'),
(23, 20, 'Gizi Kurang', 'M16', 'Tidak baik'),
(24, 21, 'Gizi Kurang', 'M13', 'Baik'),
(25, 22, 'Gizi Kurang', 'M7', 'Tidak baik'),
(26, 22, 'Gizi Kurang', 'M13', 'Baik'),
(27, 23, 'Gizi Kurang', 'M12', 'Baik'),
(28, 23, 'Gizi Kurang', 'M3', 'Tidak baik'),
(29, 23, 'Gizi Kurang', 'M18', 'Tidak baik'),
(30, 24, 'Gizi Kurang', 'M11', 'Baik'),
(31, 25, 'Gizi Kurang', 'M18', 'Tidak baik'),
(32, 25, 'Gizi Kurang', 'M11', 'Baik'),
(33, 26, 'Gizi Kurang', 'M16', 'Tidak baik'),
(34, 26, 'Gizi Kurang', 'M18', 'Tidak baik'),
(35, 27, 'Gizi Kurang', 'M14', 'Tidak baik'),
(36, 27, 'Gizi Kurang', 'M17', 'Tidak baik'),
(37, 27, 'Gizi Kurang', 'M12', 'Baik'),
(38, 27, 'Gizi Kurang', 'M18', 'Tidak baik'),
(39, 27, 'Gizi Kurang', 'M12', 'Baik'),
(40, 27, 'Gizi Kurang', 'M13', 'Baik'),
(41, 28, 'Gizi Kurang', 'M5', 'Tidak baik'),
(42, 28, 'Gizi Kurang', 'M11', 'Baik'),
(43, 29, 'Gizi Kurang', 'M13', 'Baik'),
(44, 29, 'Gizi Kurang', 'M18', 'Tidak baik'),
(45, 29, 'Gizi Kurang', 'M1', 'Tidak baik'),
(46, 29, 'Gizi Kurang', 'M16', 'Tidak baik'),
(47, 29, 'Gizi Kurang', 'M17', 'Tidak baik'),
(48, 30, 'Gizi Kurang', 'M18', 'Tidak baik'),
(49, 31, 'Gizi Kurang', 'M13', 'Baik'),
(50, 32, 'Gizi Kurang', 'M12', 'Baik'),
(51, 32, 'Gizi Kurang', 'M17', 'Tidak baik'),
(52, 32, 'Gizi Kurang', 'M18', 'Tidak baik'),
(53, 32, 'Gizi Baik', 'M5', 'Tidak baik'),
(54, 33, 'Gizi Kurang', 'M18', 'Tidak baik'),
(55, 33, 'Gizi Kurang', 'M12', 'Baik'),
(56, 33, 'Gizi Kurang', 'M2', 'Tidak baik'),
(57, 34, 'Gizi Kurang', 'M2', 'Tidak baik'),
(58, 34, 'Gizi Kurang', 'M17', 'Tidak baik'),
(59, 35, 'Gizi Kurang', 'M11', 'Baik'),
(60, 35, 'Gizi Kurang', 'M10', 'Tidak baik'),
(61, 36, 'Gizi Kurang', 'M15', 'Tidak baik'),
(62, 38, 'Gizi Kurang', 'M17', 'Tidak baik'),
(63, 38, 'Gizi Kurang', 'M18', 'Tidak baik'),
(64, 38, 'Gizi Kurang', 'M5', 'Tidak baik'),
(65, 38, 'Gizi Baik', 'M11', 'Baik'),
(66, 39, 'Gizi Kurang', 'M11', 'Baik'),
(67, 40, 'Gizi Kurang', 'M3', 'Tidak baik'),
(68, 40, 'Gizi Kurang', 'M13', 'Baik'),
(69, 41, 'Gizi Kurang', 'M8', 'Tidak baik'),
(70, 41, 'Gizi Kurang', 'M15', 'Tidak baik'),
(71, 42, 'Gizi Kurang', 'M5', 'Tidak baik'),
(72, 42, 'Gizi Kurang', 'M7', 'Tidak baik'),
(73, 43, 'Gizi Kurang', 'M17', 'Tidak baik'),
(74, 43, 'Gizi Kurang', 'M10', 'Tidak baik'),
(75, 43, 'Gizi Kurang', 'M11', 'Baik'),
(76, 44, 'Gizi Kurang', 'M11', 'Baik'),
(77, 44, 'Gizi Kurang', 'M11', 'Baik'),
(78, 45, 'Gizi Kurang', 'M17', 'Tidak baik'),
(79, 46, 'Gizi Kurang', 'M5', 'Tidak baik'),
(80, 46, 'Gizi Kurang', 'M17', 'Tidak baik'),
(81, 46, 'Gizi Kurang', 'M18', 'Tidak baik'),
(82, 46, 'Gizi Baik', 'M12', 'Baik'),
(83, 47, 'Gizi Kurang', 'M12', 'Baik'),
(84, 47, 'Gizi Kurang', 'M7', 'Tidak baik'),
(85, 47, 'Gizi Kurang', 'M12', 'Baik'),
(86, 47, 'Gizi Kurang', 'M3', 'Tidak baik'),
(87, 47, 'Gizi Baik', 'M17', 'Tidak baik'),
(88, 48, 'Gizi Kurang', 'M12', 'Baik'),
(89, 49, 'Gizi Kurang', 'M18', 'Baik'),
(90, 49, 'Gizi Baik', 'M14', 'Tidak baik'),
(91, 49, 'Gizi Baik', 'M11', 'Tidak baik'),
(92, 50, 'Gizi Kurang', 'M18', 'Baik'),
(93, 52, 'Gizi Kurang', 'M12', 'Tidak baik'),
(94, 52, 'Gizi Baik', 'M10', 'Tidak baik'),
(95, 52, 'Gizi Baik', 'M6', 'Tidak baik'),
(96, 52, 'Gizi Baik', 'M18', 'Baik'),
(97, 52, 'Gizi Baik', 'M8', 'Tidak baik'),
(98, 52, 'Gizi Baik', 'M5', 'Tidak baik'),
(99, 52, 'Gizi Baik', 'M18', 'Baik'),
(100, 52, 'Gizi Baik', 'M11', 'Tidak baik'),
(101, 52, 'Gizi Baik', 'M18', 'Baik'),
(102, 52, 'Gizi Baik', 'M16', 'Tidak baik'),
(103, 52, 'Gizi Baik', 'M8', 'Tidak baik'),
(104, 52, 'Gizi Baik', 'M17', 'Baik'),
(105, 53, 'Gizi Kurang', 'M17', 'Baik'),
(106, 53, 'Gizi Baik', 'M17', 'Baik'),
(107, 53, 'Gizi Baik', 'M1', 'Tidak baik'),
(108, 53, 'Gizi Baik', 'M10', 'Tidak baik'),
(109, 53, 'Gizi Baik', 'M8', 'Tidak baik'),
(110, 54, 'Gizi Kurang', 'M11', 'Tidak baik'),
(111, 54, 'Gizi Baik', 'M18', 'Baik'),
(112, 54, 'Gizi Baik', 'M13', 'Tidak baik'),
(113, 54, 'Gizi Baik', 'M18', 'Baik'),
(114, 54, 'Gizi Baik', 'M18', 'Baik'),
(115, 54, 'Gizi Baik', 'M6', 'Tidak baik'),
(116, 55, 'Gizi Baik', 'M12', 'Tidak baik'),
(117, 55, 'Gizi Baik', 'M17', 'Baik'),
(118, 55, 'Gizi Baik', 'M4', 'Tidak baik'),
(119, 55, 'Gizi Baik', 'M1', 'Tidak baik'),
(120, 55, 'Gizi Baik', 'M17', 'Baik'),
(121, 55, 'Gizi Baik', 'M12', 'Tidak baik'),
(122, 55, 'Gizi Baik', 'M13', 'Tidak baik'),
(123, 55, 'Gizi Baik', 'M11', 'Tidak baik'),
(124, 55, 'Gizi Baik', 'M13', 'Tidak baik'),
(125, 55, 'Gizi Baik', 'M16', 'Tidak baik'),
(126, 55, 'Gizi Baik', 'M17', 'Baik'),
(127, 55, 'Gizi Baik', 'M13', 'Tidak baik'),
(128, 55, 'Gizi Baik', 'M17', 'Baik'),
(129, 56, 'Gizi Baik', 'M18', 'Baik'),
(130, 56, 'Gizi Baik', 'M1', 'Tidak baik'),
(131, 56, 'Gizi Baik', 'M4', 'Tidak baik'),
(132, 56, 'Gizi Baik', 'M17', 'Baik'),
(133, 57, 'Gizi Kurang', 'M13', 'Tidak baik'),
(134, 57, 'Gizi Baik', 'M17', 'Baik'),
(135, 57, 'Gizi Baik', 'M17', 'Baik'),
(136, 57, 'Gizi Baik', 'M12', 'Tidak baik'),
(137, 57, 'Gizi Baik', 'M6', 'Tidak baik'),
(138, 57, 'Gizi Baik', 'M13', 'Tidak baik'),
(139, 57, 'Gizi Baik', 'M8', 'Tidak baik'),
(140, 57, 'Gizi Baik', 'M11', 'Tidak baik'),
(141, 57, 'Gizi Baik', 'M9', 'Tidak baik'),
(142, 57, 'Gizi Baik', 'M7', 'Tidak baik'),
(143, 57, 'Gizi Baik', 'M18', 'Baik'),
(144, 57, 'Gizi Baik', 'M11', 'Tidak baik'),
(145, 57, 'Gizi Baik', 'M9', 'Tidak baik'),
(146, 57, 'Gizi Baik', 'M17', 'Baik'),
(147, 57, 'Gizi Baik', 'M17', 'Baik'),
(148, 57, 'Gizi Baik', 'M18', 'Baik'),
(149, 57, 'Gizi Baik', 'M17', 'Baik'),
(150, 58, 'Gizi Kurang', 'M17', 'Baik'),
(151, 58, 'Gizi Baik', 'M13', 'Tidak baik'),
(152, 58, 'Gizi Baik', 'M17', 'Baik'),
(153, 58, 'Gizi Baik', 'M7', 'Tidak baik'),
(154, 58, 'Gizi Baik', 'M1', 'Tidak baik'),
(155, 58, 'Gizi Baik', 'M18', 'Baik'),
(156, 58, 'Gizi Baik', 'M18', 'Baik'),
(157, 58, 'Gizi Baik', 'M13', 'Tidak baik'),
(158, 58, 'Gizi Baik', 'M10', 'Tidak baik'),
(159, 58, 'Gizi Baik', 'M13', 'Tidak baik'),
(160, 58, 'Gizi Baik', 'M11', 'Tidak baik'),
(161, 58, 'Gizi Baik', 'M16', 'Tidak baik'),
(162, 58, 'Gizi Baik', 'M3', 'Tidak baik'),
(163, 58, 'Gizi Baik', 'M17', 'Baik'),
(164, 58, 'Gizi Baik', 'M11', 'Tidak baik'),
(165, 58, 'Gizi Baik', 'M10', 'Tidak baik'),
(166, 58, 'Gizi Baik', 'M11', 'Tidak baik'),
(167, 58, 'Gizi Baik', 'M12', 'Tidak baik'),
(168, 58, 'Gizi Baik', 'M15', 'Tidak baik'),
(169, 58, 'Gizi Baik', 'M11', 'Tidak baik'),
(170, 59, 'Gizi Baik', 'M1', 'Tidak baik'),
(171, 59, 'Gizi Baik', 'M13', 'Tidak baik'),
(172, 59, 'Gizi Baik', 'M8', 'Tidak baik'),
(173, 59, 'Gizi Baik', 'M18', 'Baik'),
(174, 59, 'Gizi Baik', 'M17', 'Baik'),
(175, 59, 'Gizi Baik', 'M12', 'Tidak baik'),
(176, 59, 'Gizi Baik', 'M18', 'Baik'),
(177, 59, 'Gizi Baik', 'M8', 'Tidak baik'),
(178, 59, 'Gizi Baik', 'M18', 'Baik'),
(179, 59, 'Gizi Baik', 'M9', 'Tidak baik'),
(180, 59, 'Gizi Baik', 'M13', 'Tidak baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dataset1`
--
ALTER TABLE `dataset1`
  ADD PRIMARY KEY (`id_dataset1`);

--
-- Indeks untuk tabel `dataset2`
--
ALTER TABLE `dataset2`
  ADD PRIMARY KEY (`id_dataset2`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dataset1`
--
ALTER TABLE `dataset1`
  MODIFY `id_dataset1` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT untuk tabel `dataset2`
--
ALTER TABLE `dataset2`
  MODIFY `id_dataset2` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
