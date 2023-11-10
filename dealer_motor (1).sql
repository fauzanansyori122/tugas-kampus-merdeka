-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 07:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealer_motor`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `IDDealer` int(11) NOT NULL,
  `Nama` varchar(20) DEFAULT NULL,
  `Lokasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`IDDealer`, `Nama`, `Lokasi`) VALUES
(1, 'Ansyori Dealer', 'Tasikmalaya');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `IDKendaraan` int(11) NOT NULL,
  `Merek` varchar(255) DEFAULT NULL,
  `Model` varchar(255) DEFAULT NULL,
  `Tahun` int(11) DEFAULT NULL,
  `Harga` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`IDKendaraan`, `Merek`, `Model`, `Tahun`, `Harga`) VALUES
(1, 'Honda', 'Beat', 2020, 18200000),
(2, 'Honda', 'Scopy', 2020, 19500000),
(3, 'Honda', 'Genio', 2020, 20000000),
(4, 'Honda', 'Beat Street', 2020, 18000000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `IDPelanggan` int(11) NOT NULL,
  `NamaDepan` varchar(10) DEFAULT NULL,
  `NamaBelakang` varchar(10) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`IDPelanggan`, `NamaDepan`, `NamaBelakang`, `Email`) VALUES
(1, 'Muhammad', 'Fauzan', 'fauzansaja@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `IDPesanan` int(11) NOT NULL,
  `IDPelanggan` int(11) DEFAULT NULL,
  `IDDealer` int(11) DEFAULT NULL,
  `TanggalPesanan` date DEFAULT NULL,
  `JumlahTotal` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`IDPesanan`, `IDPelanggan`, `IDDealer`, `TanggalPesanan`, `JumlahTotal`) VALUES
(1, 1, 1, '2023-09-03', 1400000.00);

-- --------------------------------------------------------

--
-- Table structure for table `pesananpelanggan`
--

CREATE TABLE `pesananpelanggan` (
  `IDPesanan` int(11) NOT NULL,
  `IDKendaraan` int(11) NOT NULL,
  `Jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`IDDealer`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`IDKendaraan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`IDPelanggan`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`IDPesanan`),
  ADD KEY `IDPelanggan` (`IDPelanggan`),
  ADD KEY `IDDealer` (`IDDealer`);

--
-- Indexes for table `pesananpelanggan`
--
ALTER TABLE `pesananpelanggan`
  ADD PRIMARY KEY (`IDPesanan`,`IDKendaraan`),
  ADD KEY `IDKendaraan` (`IDKendaraan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `IDDealer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `IDKendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `IDPelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `IDPesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`IDPelanggan`) REFERENCES `pelanggan` (`IDPelanggan`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`IDDealer`) REFERENCES `dealer` (`IDDealer`);

--
-- Constraints for table `pesananpelanggan`
--
ALTER TABLE `pesananpelanggan`
  ADD CONSTRAINT `pesananpelanggan_ibfk_1` FOREIGN KEY (`IDPesanan`) REFERENCES `pesanan` (`IDPesanan`),
  ADD CONSTRAINT `pesananpelanggan_ibfk_2` FOREIGN KEY (`IDKendaraan`) REFERENCES `kendaraan` (`IDKendaraan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
