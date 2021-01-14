drop database quanlygiasu;
create database quanlygiasu character set utf8 collate utf8_general_ci;
use quanlygiasu;
-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 09:49 AM
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
-- Database: `quanlygiasu`
--

-- --------------------------------------------------------

--
-- Table structure for table `Account`
--

CREATE TABLE `Account` (
  `ID` int(11) NOT NULL,
  `uername` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `MaLoai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Account`
--

INSERT INTO `Account` (`ID`, `uername`, `password`, `MaLoai`) VALUES
(11110001, 'lengocbao', '123', 1),
(11110002, 'lethao', '123', 1),
(11110003, 'vietduc', '123', 1),
(22220001, 'hoanganh', '123', 2),
(22220002, 'ducchinh', '123', 2),
(22220003, 'vanthanh', '123', 2),
(33330001, 'taianh', '123', 3),
(33330002, 'tansang', '123', 3),
(33330003, 'tantruong', '123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `datakh`
--

CREATE TABLE `datakh` (
  `MAKH` int(11) DEFAULT NULL,
  `MAMH` int(11) DEFAULT NULL,
  `MALH` int(11) DEFAULT NULL,
  `HOCPHI` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giasu`
--

CREATE TABLE `giasu` (
  `ID` int(11) DEFAULT NULL,
  `CMND` char(9) DEFAULT NULL,
  `HOTEN` varchar(20) DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `SDT` char(11) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `QUEQUAN` varchar(30) DEFAULT NULL,
  `TRINHDO` varchar(20) DEFAULT NULL,
  `MOTA` text DEFAULT NULL,
  `MALH` int(11) NOT NULL,
  `MAMH` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giasu`
--

INSERT INTO `giasu` (`ID`, `CMND`, `HOTEN`, `NGAYSINH`, `SDT`, `EMAIL`, `QUEQUAN`, `TRINHDO`, `MOTA`, `MALH`, `MAMH`) VALUES
(33330001, '225715863', 'Nguyen Tai Anh', '1977-05-09', '0974856157', 'teacheranh@gmail.com', 'Binh Dinh', 'Giao Vien', 'Co 20 nam kinh nghiem giang day tai truong THPT Le Quy Don, Nha Trang, Khanh Hoa.', '12', '1'),
(33330002, '225785460', 'Truong Tan Sang', '1978-09-05', '0977452360', 'teachersang2gmail.com', 'Da Nang', 'Giao Vien', 'Co hon 20 nam kinh nghiem giang day tai truong THCS Vo Thi Sau, Nha Trang, Khanh Hoa.', '6', '1'),
(33330003, '225812546', 'Nguyen Tan Truong', '1998-12-10', '0977854623', 'svtruong98@gmail.com', 'Ha Noi', 'Sinh Vien', 'Co kinh nghiem 2 nam lam gia su tai gia', '10', '3');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `MAKH` int(11) NOT NULL,
  `TENKH` varchar(20) DEFAULT NULL,
  `NGAYBD` datetime DEFAULT NULL,
  `NGAYKT` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`MAKH`, `TENKH`, `NGAYBD`, `NGAYKT`) VALUES
(2019030601, 'Toán 11', '2019-03-01 00:00:00', '2019-06-01 00:00:00'),
(2020030601, 'Anh 10', '2020-03-01 00:00:00', '2020-06-01 00:00:00'),
(2020060901, 'Toán 12', '2020-06-01 00:00:00', '2020-09-01 00:00:00'),
(2020101201, 'Văn 11', '2020-10-01 00:00:00', '2020-12-01 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `lichhoc`
--

CREATE TABLE `lichhoc` (
  `MAKH` int(11) DEFAULT NULL,
  `BUOIHOC` varchar(20) DEFAULT NULL,
  `NGAYHOC` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `MALH` int(11) NOT NULL,
  `TENLP` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`MALH`, `TENLP`) VALUES
(1, 'Lớp 1'),
(2, 'Lớp 2'),
(3, 'Lớp 3'),
(4, 'Lớp 4'),
(5, 'Lớp 5'),
(6, 'Lớp 6'),
(7, 'Lớp 7'),
(8, 'Lớp 8'),
(9, 'Lớp 9'),
(10, 'Lớp 10'),
(11, 'Lớp 11'),
(12, 'Lớp 12');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MAMH` int(11) NOT NULL,
  `TENMH` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MAMH`, `TENMH`) VALUES
(1, 'Toán'),
(2, 'Văn'),
(3, 'Anh'),
(4, 'Sử'),
(5, 'Địa'),
(6, 'GDCD'),
(7, 'Vật Lý'),
(8, 'Hóa'),
(9, 'Tin');

-- --------------------------------------------------------

--
-- Table structure for table `phhs`
--

CREATE TABLE `phhs` (
  `ID` int(11) DEFAULT NULL,
  `CMND` char(9) DEFAULT NULL,
  `HOTEN` varchar(20) DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `SDT` char(11) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `QUEQUAN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phhs`
--

INSERT INTO `phhs` (`ID`, `CMND`, `HOTEN`, `NGAYSINH`, `SDT`, `EMAIL`, `QUEQUAN`) VALUES
(22220001, '225875632', 'Nguyen Hoang Anh', '1989-10-01', '0125865475', 'hoanganhcmp@gmail.com', 'Dak Lak'),
(22220002, '225689513', 'Ha Duc Chinh', '1980-02-03', '0974586237', 'ducchinhofc@gmail.com', 'Gia Lai'),
(22220003, '225615876', 'Vu Van Thanh', '1977-03-02', '0935486573', 'vanthanh1977@gmail.com', 'Nghe An');

-- --------------------------------------------------------

--
-- Table structure for table `quanly`
--

CREATE TABLE `quanly` (
  `ID` int(11) DEFAULT NULL,
  `CMND` char(9) DEFAULT NULL,
  `HOTEN` varchar(20) DEFAULT NULL,
  `NGAYSINH` date DEFAULT NULL,
  `SDT` char(11) DEFAULT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `QUEQUAN` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quanly`
--

INSERT INTO `quanly` (`ID`, `CMND`, `HOTEN`, `NGAYSINH`, `SDT`, `EMAIL`, `QUEQUAN`) VALUES
(11110001, '225912630', 'Le Ngoc Bao', '1999-10-19', '0977819518', 'ngocbaole1999@gmail.com', 'Hung Yen'),
(11110002, '225875860', 'Le Thi Phuong Thao', '1999-08-10', '0918546753', 'phuongthaocntt@gmail.com', 'Ha Tinh'),
(11110003, '225786423', 'Cao Viet Duc', '1998-06-15', '0985321645', 'vietduc123@gmail.com', 'Phu Yen');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `MaLoai` int(11) NOT NULL,
  `TenLoai` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`MaLoai`, `TenLoai`) VALUES
(1, 'QL'),
(2, 'PHHS'),
(3, 'GS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Account`
--
ALTER TABLE `Account`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_AC_TYPE` (`MaLoai`);

--
-- Indexes for table `datakh`
--
ALTER TABLE `datakh`
  ADD KEY `fk_DT_KH` (`MAKH`),
  ADD KEY `fk_DT_MH` (`MAMH`),
  ADD KEY `fk_DT_LH` (`MALH`);

--
-- Indexes for table `giasu`
--
ALTER TABLE `giasu`
  ADD KEY `fk_GIASU_ID` (`ID`);

--
-- Indexes for table `giasu`
--
ALTER TABLE `giasu`
  ADD KEY `fk_GIASU_MALH` (`MALH`);

--
-- Indexes for table `giasu`
--
ALTER TABLE `giasu`
  ADD KEY `fk_GIASU_MAMH` (`MAMH`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`MAKH`);

--
-- Indexes for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD KEY `fk_KH_LH` (`MAKH`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`MALH`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MAMH`);

--
-- Indexes for table `phhs`
--
ALTER TABLE `phhs`
  ADD KEY `fk_PHHS_ID` (`ID`);

--
-- Indexes for table `quanly`
--
ALTER TABLE `quanly`
  ADD KEY `fk_QUANLY_ID` (`ID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Account`
--
ALTER TABLE `Account`
  ADD CONSTRAINT `fk_AC_TYPE` FOREIGN KEY (`MaLoai`) REFERENCES `type` (`MaLoai`);

--
-- Constraints for table `datakh`
--
ALTER TABLE `datakh`
  ADD CONSTRAINT `fk_DT_KH` FOREIGN KEY (`MAKH`) REFERENCES `khoahoc` (`MAKH`),
  ADD CONSTRAINT `fk_DT_LH` FOREIGN KEY (`MALH`) REFERENCES `lophoc` (`MALH`),
  ADD CONSTRAINT `fk_DT_MH` FOREIGN KEY (`MAMH`) REFERENCES `monhoc` (`MAMH`);

--
-- Constraints for table `giasu`
--
ALTER TABLE `giasu`
  ADD CONSTRAINT `fk_GIASU_ID` FOREIGN KEY (`ID`) REFERENCES `Account` (`ID`);

--
-- Constraints for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD CONSTRAINT `fk_KH_LH` FOREIGN KEY (`MAKH`) REFERENCES `khoahoc` (`MAKH`);

--
-- Constraints for table `phhs`
--
ALTER TABLE `phhs`
  ADD CONSTRAINT `fk_PHHS_ID` FOREIGN KEY (`ID`) REFERENCES `Account` (`ID`);

--
-- Constraints for table `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `fk_QUANLY_ID` FOREIGN KEY (`ID`) REFERENCES `Account` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
