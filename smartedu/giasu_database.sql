-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 06:05 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giasu_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `bomon`
--

CREATE TABLE `bomon` (
  `BOMON_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TENBOMON` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bomon`
--

INSERT INTO `bomon` (`BOMON_ID`, `TENBOMON`) VALUES
('BM00012345', 'Khoa Học Xã Hội và Nhân Văn'),
('BM00045678', 'Khoa Học Tự Nhiên');

-- --------------------------------------------------------

--
-- Table structure for table `chitietkhoahoc`
--

CREATE TABLE `chitietkhoahoc` (
  `KHOAHOC_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GIAOVIEN_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BOMON_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MONHOC_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LOP_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LICHHOC_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giaovien`
--

CREATE TABLE `giaovien` (
  `GV_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HOTEN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `GIOITINH` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DCHI` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DTHOAI` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `LOP_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `BOMON_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MONHOC_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `EXP` int(2) DEFAULT NULL,
  `PQ` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TK` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MK` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hocvien`
--

CREATE TABLE `hocvien` (
  `HV_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HOTEN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `GIOITINH` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DCHI` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DTHOAI` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `LOP_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PQ` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TK` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MK` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `KHOAHOC_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TENKHOAHOC` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIMESTART` date NOT NULL,
  `TIMEEND` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lichhoc`
--

CREATE TABLE `lichhoc` (
  `LICHHOC_ID` char(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `DAYS` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `BUOIHOC` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TIMES` time DEFAULT NULL,
  `MONHOC_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `LOP_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `GIAOVIEN_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lop`
--

CREATE TABLE `lop` (
  `LOP_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TENLOP` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lop`
--

INSERT INTO `lop` (`LOP_ID`, `TENLOP`) VALUES
('LP00000001', 'Lớp 1'),
('LP00000002', 'Lớp 2'),
('LP00000003', 'Lớp 3'),
('LP00000004', 'Lớp 4'),
('LP00000005', 'Lớp 5'),
('LP00000006', 'Lớp 6'),
('LP00000007', 'Lớp 7'),
('LP00000008', 'Lớp 8'),
('LP00000009', 'Lớp 9'),
('LP00000010', 'Lớp 10'),
('LP00000011', 'Lớp 11'),
('LP00000012', 'Lớp 12');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MONHOC_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `TENMONHOC` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MONHOC_ID`, `TENMONHOC`) VALUES
('MH00000011', 'Toán'),
('MH00000022', 'Văn');

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `PQ` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NOTE` char(2) CHARACTER SET utf16 COLLATE utf16_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quanly`
--

CREATE TABLE `quanly` (
  `QL_ID` char(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `HOTEN` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `GIOITINH` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DCHI` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `DTHOAI` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `PQ` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `TK` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MK` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `TK` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `PQ` char(1) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `MK` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bomon`
--
ALTER TABLE `bomon`
  ADD PRIMARY KEY (`BOMON_ID`);

--
-- Indexes for table `chitietkhoahoc`
--
ALTER TABLE `chitietkhoahoc`
  ADD KEY `FK_CTKH_GV` (`GIAOVIEN_ID`),
  ADD KEY `FK_CTKH_BM` (`BOMON_ID`),
  ADD KEY `FK_CTKH_KH` (`KHOAHOC_ID`),
  ADD KEY `FK_CTKH_LH` (`LICHHOC_ID`),
  ADD KEY `FK_CTKH_LOP` (`LOP_ID`),
  ADD KEY `FK_CTKH_MH` (`MONHOC_ID`);

--
-- Indexes for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`GV_ID`),
  ADD KEY `FK_GV_LOP` (`LOP_ID`),
  ADD KEY `FK_GV_BM` (`BOMON_ID`),
  ADD KEY `FK_GV_MH` (`MONHOC_ID`),
  ADD KEY `FK_GV_PQ` (`PQ`),
  ADD KEY `FK_GV_USER` (`TK`,`MK`);

--
-- Indexes for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD PRIMARY KEY (`HV_ID`),
  ADD KEY `FK_HV_LOP` (`LOP_ID`),
  ADD KEY `FK_HV_PQ` (`PQ`) USING BTREE,
  ADD KEY `FK_HV_USER` (`TK`,`MK`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`KHOAHOC_ID`);

--
-- Indexes for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD PRIMARY KEY (`LICHHOC_ID`);

--
-- Indexes for table `lop`
--
ALTER TABLE `lop`
  ADD PRIMARY KEY (`LOP_ID`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MONHOC_ID`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`PQ`);

--
-- Indexes for table `quanly`
--
ALTER TABLE `quanly`
  ADD PRIMARY KEY (`QL_ID`),
  ADD KEY `FK_QL_PQ` (`PQ`),
  ADD KEY `FK_QL_USER` (`TK`,`MK`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`TK`,`MK`) USING BTREE,
  ADD KEY `FK_USER_PQ` (`PQ`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietkhoahoc`
--
ALTER TABLE `chitietkhoahoc`
  ADD CONSTRAINT `FK_CTKH_BM` FOREIGN KEY (`BOMON_ID`) REFERENCES `bomon` (`BOMON_ID`),
  ADD CONSTRAINT `FK_CTKH_GV` FOREIGN KEY (`GIAOVIEN_ID`) REFERENCES `giaovien` (`GV_ID`),
  ADD CONSTRAINT `FK_CTKH_KH` FOREIGN KEY (`KHOAHOC_ID`) REFERENCES `khoahoc` (`KHOAHOC_ID`),
  ADD CONSTRAINT `FK_CTKH_LH` FOREIGN KEY (`LICHHOC_ID`) REFERENCES `lichhoc` (`LICHHOC_ID`),
  ADD CONSTRAINT `FK_CTKH_LOP` FOREIGN KEY (`LOP_ID`) REFERENCES `lop` (`LOP_ID`),
  ADD CONSTRAINT `FK_CTKH_MH` FOREIGN KEY (`MONHOC_ID`) REFERENCES `monhoc` (`MONHOC_ID`);

--
-- Constraints for table `giaovien`
--
ALTER TABLE `giaovien`
  ADD CONSTRAINT `FK_GV_BM` FOREIGN KEY (`BOMON_ID`) REFERENCES `bomon` (`BOMON_ID`),
  ADD CONSTRAINT `FK_GV_LOP` FOREIGN KEY (`LOP_ID`) REFERENCES `lop` (`LOP_ID`),
  ADD CONSTRAINT `FK_GV_MH` FOREIGN KEY (`MONHOC_ID`) REFERENCES `monhoc` (`MONHOC_ID`),
  ADD CONSTRAINT `FK_GV_PQ` FOREIGN KEY (`PQ`) REFERENCES `phanquyen` (`PQ`),
  ADD CONSTRAINT `FK_GV_USER` FOREIGN KEY (`TK`,`MK`) REFERENCES `user` (`TK`, `MK`);

--
-- Constraints for table `hocvien`
--
ALTER TABLE `hocvien`
  ADD CONSTRAINT `FK_HV_LOP` FOREIGN KEY (`LOP_ID`) REFERENCES `lop` (`LOP_ID`),
  ADD CONSTRAINT `FK_HV_PQ` FOREIGN KEY (`PQ`) REFERENCES `phanquyen` (`PQ`),
  ADD CONSTRAINT `FK_HV_USER` FOREIGN KEY (`TK`,`MK`) REFERENCES `user` (`TK`, `MK`);

--
-- Constraints for table `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `FK_QL_PQ` FOREIGN KEY (`PQ`) REFERENCES `phanquyen` (`PQ`),
  ADD CONSTRAINT `FK_QL_USER` FOREIGN KEY (`TK`,`MK`) REFERENCES `user` (`TK`, `MK`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_USER_PQ` FOREIGN KEY (`PQ`) REFERENCES `phanquyen` (`PQ`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
