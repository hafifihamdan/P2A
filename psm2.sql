-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 06:50 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `aduan`
--

CREATE TABLE `aduan` (
  `idaduan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `emel` varchar(50) NOT NULL,
  `notelad` varchar(50) NOT NULL,
  `maduan` text NOT NULL,
  `tarikhaduan` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aduan`
--

INSERT INTO `aduan` (`idaduan`, `nama`, `emel`, `notelad`, `maduan`, `tarikhaduan`, `status`) VALUES
(18, 'Mohammad Hafifi Bin Hamdan', 'hafifi01@gmail.com', '0135282234', 'mengenai sistem ini ada beberapa masalah, paparan peta untuk ke lokasi ', '2018-05-14', 'Selesai'),
(24, 'NOOR ATHIRAH BT MUHAMMED ASRI', 'atiwanaz96@gmail.com', '60129078414', 'selamat berpuasa', '2018-05-21', ''),
(25, 'NOOR ATHIRAH BT MUHAMMED ASRI', 'atiwanaz96@gmail.com', '60129078414', 'selamat', '2018-05-21', ''),
(26, 'Dr shahreen', 'drshahreen@gmail.com', '0135282234', 'website lemau', '2018-05-22', 'Selesai');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(12) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `emel` varchar(100) NOT NULL,
  `katalaluan` varchar(40) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `bandar` varchar(20) NOT NULL,
  `negeri` varchar(50) NOT NULL,
  `poskod` varchar(10) NOT NULL,
  `tarikhlahir` date NOT NULL,
  `notel` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `Nama`, `emel`, `katalaluan`, `alamat`, `bandar`, `negeri`, `poskod`, `tarikhlahir`, `notel`, `status`) VALUES
(26, 'Mohd Hussaini Bin Hamid', 'hussainihamid@gmail.com', 'b813df744b9d9c0a4d1ccb4dad1fe1af', 'Lot 4, Tiang 6, kampung Belat, Kubur Panjang', 'Pendang', 'Kedah', '01000', '1965-01-04', '0135282234', ''),
(27, 'Mohammad Hafifi Bin Hamdan', 'hafifi01@gmail.com', '72fe174770e644488bee7c1e8e8cbc21', 'NO.1, JALAN MASMUDA 3, TAMAN MASMUDA FASA 2', 'KANGAR', '', '01000', '1992-07-20', '0135282234', 'YA'),
(36, 'Ahmad Iqbal Bin Mohd Radzi ', 'iqbal@gmail.com', '5c2fb951458b57e8e049d48a55cdddad', 'no1,jelutong', 'parit raja', 'Johor', '06400', '1991-04-02', '0193706046', 'YA'),
(37, 'Muhammad Hafiz Bin Abdul Rahman', 'hafizrahman@yahoo.com', '7a5bde8adaf60027e794a3af535dcaff', 'no,23, jln mewangi 5, taman mewangi', 'Bagan Ajam', 'Penang', '02490', '1986-02-07', '0194307605', 'TIDAK'),
(39, 'norfazlin', 'norfzlin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'bandar baru uda', 'johor bahru', 'Johor', '81200', '2018-05-22', '0135282234', ''),
(40, 'NOOR ATHIRAH BT MUHAMMED ASRI', 'atiwanaz96@gmail.com', 'ed32bfc7dca8889447f9627cfa209279', 'KKTF', 'BATU PAHAT', 'Johor', '06400', '1996-10-03', '60129078414', ''),
(41, 'HUSSAINI', 'hussaini@gmail.com', '6cc7e6404d363fc021c21dafb1c34824', 'NO.1, JALAN MASMUDA 3, TAMAN MASMUDA FASA 2', 'KANGAR', 'Perlis', '01000', '1993-09-20', '0194307605', ''),
(42, 'NUR HAZWANI BINTI HAMDAN', 'hazwani@gmail.cpm', 'bbd6bd60a43e43955906f9828e92594b', 'No2,Jln Tualang 3, kampung tualang', 'TUALANG', 'Perak', '02380', '1993-01-23', '0174648195', ''),
(43, 'NORHIDAYAH BINTI ABDUL RAZAK', 'anjewieda@gmail.com', 'd1476d03175d68ebfbe9b9f66935d434', 'NO 40, KAMPUNG TERUSAN SEBERANG', 'KUALA PILAH', 'Negeri Sembilan', '72500', '1993-02-24', '0194956212', '');

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE `pengurus` (
  `id` int(12) NOT NULL,
  `namapengurus` varchar(100) NOT NULL,
  `katalaluan` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengurus`
--

INSERT INTO `pengurus` (`id`, `namapengurus`, `katalaluan`) VALUES
(1, 'hamdan', 'hamdan1');

-- --------------------------------------------------------

--
-- Table structure for table `tempahan`
--

CREATE TABLE `tempahan` (
  `notempah` int(12) NOT NULL,
  `gred` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `kuantiti` int(100) NOT NULL,
  `tarikhtempah` date NOT NULL,
  `jumlah` decimal(9,2) NOT NULL,
  `tarikhisitempah` date NOT NULL,
  `emel` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempahan`
--

INSERT INTO `tempahan` (`notempah`, `gred`, `kategori`, `kuantiti`, `tarikhtempah`, `jumlah`, `tarikhisitempah`, `emel`, `status`) VALUES
(46, 'C', 'Peruncit', 15, '2018-05-27', '45.00', '2018-05-17', 'hussainihamid@gmail.com', 'Belum'),
(50, 'C', 'Peruncit', 25, '2018-05-29', '38.00', '2018-05-13', 'hafifi01@gmail.com', ''),
(52, 'B', 'Pembeli', 2, '2018-05-22', '4.00', '2018-05-13', 'hussainihamid@gmail.com', ''),
(53, 'C', 'Pembeli', 3, '2018-05-23', '4.50', '2018-05-13', 'hafifi01@gmail.com', ''),
(54, 'A', 'Pembeli', 25, '2018-05-30', '12.50', '2018-05-13', 'hamdan@gmail.com', ''),
(55, 'Anak Pokok', 'Pembeli', 11, '2018-05-25', '5.50', '2018-05-13', 'hafizh@gmail.com', ''),
(56, 'Anak Pokok', 'Pembeli', 13, '2018-06-14', '6.50', '2018-05-14', 'hafizrahman@yahoo.com', ''),
(57, 'A', 'Pembeli', 10, '2018-05-24', '30.00', '2018-05-15', 'hafifi01@gmail.com', ''),
(58, 'A', 'Pembeli', 10, '2018-05-24', '30.00', '2018-05-15', 'hafifi01@gmail.com', ''),
(63, 'Anak Pokok', 'Pembeli', 55, '2018-06-14', '27.50', '2018-05-15', 'hafifi01@gmail.com', ''),
(64, 'Anak Pokok', 'Pembeli', 42, '2018-05-30', '21.00', '2018-05-15', 'hafifi01@gmail.com', ''),
(65, 'A', 'Pembeli', 23, '2018-05-25', '69.00', '2018-05-15', 'hafifi01@gmail.com', ''),
(67, 'A', 'Peruncit', 50, '2018-05-22', '47.50', '2018-05-18', 'hussainihamid@gmail.com', ''),
(68, 'D', 'Peruncit', 35, '2018-05-30', '33.25', '2018-05-18', 'hussainihamid@gmail.com', ''),
(70, 'A', 'Pembeli', 10, '2018-05-24', '30.00', '2018-05-19', 'norfzlin@gmail.com', ''),
(72, 'A', 'Pembeli', 23, '2018-05-04', '65.55', '2018-05-20', 'l@l.com', ''),
(74, 'A', 'Pembeli', 34, '2018-05-24', '96.90', '2018-05-20', 'hussainihamid@gmail.com', ''),
(75, 'C', 'Pembeli', 23, '2018-05-25', '32.78', '2018-05-20', 'hussainihamid@gmail.com', ''),
(76, 'Anak Pokok', 'Peruncit', 23, '2018-05-29', '10.93', '2018-05-20', 'hussainihamid@gmail.com', ''),
(78, 'A', 'Pembeli', 12, '2018-05-21', '36.00', '2018-05-21', 'atiwanaz96@gmail.com', ''),
(79, 'Anak Pokok', 'Pemborong', 900, '1996-10-03', '405.00', '2018-05-21', 'atiwanaz96@gmail.com', ''),
(80, 'C', 'Pembeli', 123, '2018-05-21', '166.05', '2018-05-21', 'atiwanaz96@gmail.com', ''),
(81, 'C', 'Pembeli', 123, '2018-05-21', '0.00', '2018-05-21', 'atiwanaz96@gmail.com', ''),
(82, 'D', 'Peruncit', 23, '2018-05-29', '21.85', '2018-05-21', 'atiwanaz96@gmail.com', ''),
(83, 'D', 'Pembeli', 28, '2018-06-06', '26.60', '2018-05-22', 'hafifi01@gmail.com', ''),
(84, 'C', 'Pemborong', 120, '2018-05-29', '162.00', '2018-05-22', 'hazwani@gmail.cpm', ''),
(85, 'A', 'Pemborong', 39, '2018-05-24', '111.15', '2018-05-22', 'hafifi01@gmail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aduan`
--
ALTER TABLE `aduan`
  ADD PRIMARY KEY (`idaduan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempahan`
--
ALTER TABLE `tempahan`
  ADD PRIMARY KEY (`notempah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aduan`
--
ALTER TABLE `aduan`
  MODIFY `idaduan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tempahan`
--
ALTER TABLE `tempahan`
  MODIFY `notempah` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
