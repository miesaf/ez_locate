-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Generation Time: Feb 06, 2020 at 08:52 AM
-- Server version: 10.2.24-MariaDB
-- PHP Version: 7.2.26

-- Schema and lookup tables only (NEGERI, INDUS, KELAYAKAN); no directory data.

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Table structure for table `BENGKEL`
--

CREATE TABLE `BENGKEL` (
  `ID_BEN` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PENCERAMAH` text NOT NULL,
  `JAWATAN` varchar(50) NOT NULL,
  `KELAYAKAN` varchar(4) NOT NULL,
  `KEMAHIRAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `CAD_BENGKEL`
--

CREATE TABLE `CAD_BENGKEL` (
  `ID_BEN` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PENCERAMAH` text NOT NULL,
  `JAWATAN` varchar(50) NOT NULL,
  `KELAYAKAN` varchar(4) NOT NULL,
  `KEMAHIRAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `CAD_LAWATAN`
--

CREATE TABLE `CAD_LAWATAN` (
  `ID_LAW` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PEGAWAI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `HIT_BENGKEL`
--

CREATE TABLE `HIT_BENGKEL` (
  `ID_BEN` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PENCERAMAH` text NOT NULL,
  `JAWATAN` varchar(50) NOT NULL,
  `KELAYAKAN` varchar(4) NOT NULL,
  `KEMAHIRAN` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `HIT_LAWATAN`
--

CREATE TABLE `HIT_LAWATAN` (
  `ID_LAW` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PEGAWAI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `INDUS`
--

CREATE TABLE `INDUS` (
  `ID_INDUS` varchar(4) NOT NULL,
  `INDUSTRI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `INDUS`
--

INSERT INTO `INDUS` (`ID_INDUS`, `INDUSTRI`) VALUES
('BUAT', 'Pembuatan'),
('DAGA', 'Perdagangan'),
('KHID', 'Perkhidmatan'),
('LAIN', 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `KELAYAKAN`
--

CREATE TABLE `KELAYAKAN` (
  `ID_KEL` varchar(4) NOT NULL,
  `KEL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `KELAYAKAN`
--

INSERT INTO `KELAYAKAN` (`ID_KEL`, `KEL`) VALUES
('DIPL', 'Diploma'),
('DRFL', 'Doktor Falsafah'),
('ISMA', 'Ijazah Sarjana Muda'),
('LAIN', 'Lain-lain'),
('PROF', 'Kelayakan Professional'),
('SARJ', 'Sarjana'),
('SPMA', 'Sijil Pelajaran Malaysia'),
('TDKT', 'Tidak Diketahui');

-- --------------------------------------------------------

--
-- Table structure for table `LAWATAN`
--

CREATE TABLE `LAWATAN` (
  `ID_LAW` int(5) NOT NULL,
  `NAMA` varchar(200) NOT NULL,
  `ALAMAT` text NOT NULL,
  `NEGERI` varchar(4) NOT NULL,
  `SEKTOR` varchar(15) NOT NULL,
  `INDUS` varchar(4) NOT NULL,
  `PEGAWAI` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `NEGERI`
--

CREATE TABLE `NEGERI` (
  `ID_NEGERI` varchar(4) NOT NULL,
  `NEGERI` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NEGERI`
--

INSERT INTO `NEGERI` (`ID_NEGERI`, `NEGERI`) VALUES
('JOHO', 'Johor Darul Ta\'zim'),
('KLUM', 'Kuala Lumpur'),
('MELK', 'Melaka Bandar Bersejarah'),
('NEGS', 'Negeri Sembilan Darul Khusus'),
('PHNG', 'Pahang Darul Makmur'),
('PUTR', 'Putrajaya'),
('SELA', 'Selangor Darul Ehsan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BENGKEL`
--
ALTER TABLE `BENGKEL`
  ADD PRIMARY KEY (`ID_BEN`),
  ADD KEY `NEGERI` (`NEGERI`,`INDUS`,`KELAYAKAN`),
  ADD KEY `INDUS` (`INDUS`),
  ADD KEY `KELAYAKAN` (`KELAYAKAN`);

--
-- Indexes for table `CAD_BENGKEL`
--
ALTER TABLE `CAD_BENGKEL`
  ADD PRIMARY KEY (`ID_BEN`),
  ADD KEY `NEGERI` (`NEGERI`,`INDUS`,`KELAYAKAN`),
  ADD KEY `INDUS` (`INDUS`),
  ADD KEY `KELAYAKAN` (`KELAYAKAN`);

--
-- Indexes for table `CAD_LAWATAN`
--
ALTER TABLE `CAD_LAWATAN`
  ADD PRIMARY KEY (`ID_LAW`),
  ADD KEY `NEGERI` (`NEGERI`),
  ADD KEY `INDUS` (`INDUS`);

--
-- Indexes for table `HIT_BENGKEL`
--
ALTER TABLE `HIT_BENGKEL`
  ADD PRIMARY KEY (`ID_BEN`),
  ADD KEY `NEGERI` (`NEGERI`,`INDUS`,`KELAYAKAN`),
  ADD KEY `INDUS` (`INDUS`),
  ADD KEY `KELAYAKAN` (`KELAYAKAN`);

--
-- Indexes for table `HIT_LAWATAN`
--
ALTER TABLE `HIT_LAWATAN`
  ADD PRIMARY KEY (`ID_LAW`),
  ADD KEY `NEGERI` (`NEGERI`),
  ADD KEY `INDUS` (`INDUS`);

--
-- Indexes for table `INDUS`
--
ALTER TABLE `INDUS`
  ADD PRIMARY KEY (`ID_INDUS`);

--
-- Indexes for table `KELAYAKAN`
--
ALTER TABLE `KELAYAKAN`
  ADD PRIMARY KEY (`ID_KEL`);

--
-- Indexes for table `LAWATAN`
--
ALTER TABLE `LAWATAN`
  ADD PRIMARY KEY (`ID_LAW`),
  ADD KEY `NEGERI` (`NEGERI`),
  ADD KEY `INDUS` (`INDUS`);

--
-- Indexes for table `NEGERI`
--
ALTER TABLE `NEGERI`
  ADD PRIMARY KEY (`ID_NEGERI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BENGKEL`
--
ALTER TABLE `BENGKEL`
  MODIFY `ID_BEN` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CAD_BENGKEL`
--
ALTER TABLE `CAD_BENGKEL`
  MODIFY `ID_BEN` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `CAD_LAWATAN`
--
ALTER TABLE `CAD_LAWATAN`
  MODIFY `ID_LAW` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `HIT_BENGKEL`
--
ALTER TABLE `HIT_BENGKEL`
  MODIFY `ID_BEN` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `HIT_LAWATAN`
--
ALTER TABLE `HIT_LAWATAN`
  MODIFY `ID_LAW` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `LAWATAN`
--
ALTER TABLE `LAWATAN`
  MODIFY `ID_LAW` int(5) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `BENGKEL`
--
ALTER TABLE `BENGKEL`
  ADD CONSTRAINT `bengkel_ibfk_1` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bengkel_ibfk_2` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `bengkel_ibfk_3` FOREIGN KEY (`KELAYAKAN`) REFERENCES `KELAYAKAN` (`ID_KEL`) ON UPDATE CASCADE;

--
-- Constraints for table `CAD_BENGKEL`
--
ALTER TABLE `CAD_BENGKEL`
  ADD CONSTRAINT `CAD_BENGKEL_ibfk_1` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CAD_BENGKEL_ibfk_2` FOREIGN KEY (`KELAYAKAN`) REFERENCES `KELAYAKAN` (`ID_KEL`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CAD_BENGKEL_ibfk_3` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE;

--
-- Constraints for table `CAD_LAWATAN`
--
ALTER TABLE `CAD_LAWATAN`
  ADD CONSTRAINT `CAD_LAWATAN_ibfk_1` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `CAD_LAWATAN_ibfk_2` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE;

--
-- Constraints for table `HIT_BENGKEL`
--
ALTER TABLE `HIT_BENGKEL`
  ADD CONSTRAINT `HIT_BENGKEL_ibfk_1` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE,
  ADD CONSTRAINT `HIT_BENGKEL_ibfk_2` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE,
  ADD CONSTRAINT `HIT_BENGKEL_ibfk_3` FOREIGN KEY (`KELAYAKAN`) REFERENCES `KELAYAKAN` (`ID_KEL`) ON UPDATE CASCADE;

--
-- Constraints for table `HIT_LAWATAN`
--
ALTER TABLE `HIT_LAWATAN`
  ADD CONSTRAINT `HIT_LAWATAN_ibfk_1` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE,
  ADD CONSTRAINT `HIT_LAWATAN_ibfk_2` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE;

--
-- Constraints for table `LAWATAN`
--
ALTER TABLE `LAWATAN`
  ADD CONSTRAINT `lawatan_ibfk_1` FOREIGN KEY (`NEGERI`) REFERENCES `NEGERI` (`ID_NEGERI`) ON UPDATE CASCADE,
  ADD CONSTRAINT `lawatan_ibfk_2` FOREIGN KEY (`INDUS`) REFERENCES `INDUS` (`ID_INDUS`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
