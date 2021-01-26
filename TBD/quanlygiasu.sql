-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2021 at 10:23 AM
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `username` char(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` char(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `maloai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `username`, `password`, `maloai`) VALUES
(1, 'lengocbao', 'bao123', 1),
(2, 'lethiphuongthao', 'thao123', 1),
(3, 'caovietduc', 'duc123', 1),
(4, 'tranminhtam', 'tam123', 2),
(5, 'huynhtanthinh', 'thinh123', 2),
(6, 'lehoangkhoi', 'khoi123', 2),
(7, 'lethithanhthuy', 'thuy123', 2),
(8, 'tonnudieuhuyen', 'huyen123', 2),
(9, 'lehongphong', 'phong123', 2),
(10, 'nguyenvanky', 'ky123', 2),
(11, 'nguyenthanhdat', 'dat123', 2),
(12, 'nguyenvanwin', 'win123', 3),
(13, 'huynhthingoc', 'ngoc123', 3),
(14, 'nguyenthanhphat', 'phat123', 3),
(15, 'nguyentiendung', 'dung123', 3),
(16, 'hoxuanhuong', 'huong123', 3),
(17, 'nguyenminhthong', 'thong123', 3),
(18, 'phamquocviet', 'viet123', 3),
(19, 'ngogiatu', 'tu123', 3),
(20, 'truongngochuy', 'huy123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `datakh`
--

CREATE TABLE `datakh` (
  `ID_KH` int(11) DEFAULT NULL,
  `ID` int(11) DEFAULT NULL,
  `ID_LH` int(11) DEFAULT NULL,
  `ID_MH` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakh`
--

INSERT INTO `datakh` (`ID_KH`, `ID`, `ID_LH`, `ID_MH`) VALUES
(1001, 12, 40, 1),
(1002, 13, 20, 9);

-- --------------------------------------------------------

--
-- Table structure for table `info_giasu`
--

CREATE TABLE `info_giasu` (
  `ID` int(11) NOT NULL,
  `CMND` char(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hoten` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `sdt` char(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` char(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequan` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `trinhdo` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_giasu`
--

INSERT INTO `info_giasu` (`ID`, `CMND`, `hoten`, `ngaysinh`, `sdt`, `email`, `quequan`, `trinhdo`, `mota`) VALUES
(4, '225914253', 'Trần Minh Tâm', '1999-05-09', '0909852986', 'tranminhtam@gmail.com', 'Khánh Hòa', 'Sinh Viên', '2 năm kinh nghiệm dạy kèm'),
(5, '225978543', 'Huỳnh Tấn Thịnh', '1999-09-05', '0979562259', 'huynhtanthinh@gmail.com', 'Khánh Hòa', 'Sinh Viên', '2 năm kinh nghiệm dạy kèm'),
(6, '225715623', 'Lê Hoàng Khôi', '1975-08-06', '0878010109', 'lehoangkhoi@gmail.com', 'Phú Yên', 'Giáo Viên', '20 năm kinh nghiệm dạy học, 5 năm dạy kèm'),
(7, '225815436', 'Lê Thị Thanh Thúy', '1989-04-01', '0968700979', 'lethithanhthuy@gmail.com', 'Khánh Hòa', 'Giáo Viên', '10 năm kinh nghiệm giảng dạy, 5 năm kinh nghiệm dạy kèm'),
(8, '225714897', 'Tôn Nữ Diệu Huyền', '1977-07-02', '0965989879', 'tonnudieuhuyen@gmail.com', 'Khánh Hòa', 'Giáo Viên', '20 năm kinh nghiệm giảng dạy, 10 năm kinh nghiệm dạy kèm.'),
(9, '225714523', 'Lê Hồng Phong', '1989-01-02', '0981773279', 'lehongphong@gmail.com', 'Khánh Hòa', 'Giáo Viên', '10 năm kinh nghiệm giảng day, 5 năm kinh nghiệm dạy kèm.'),
(10, '225912586', 'Nguyễn Văn Ký', '1995-03-02', '0962381386', 'nguyenvanky@gmail.com', 'Khánh Hòa', 'Sinh Viên', '5 năm kinh nghiệm dạy kèm'),
(11, '225812754', 'Nguyễn Thành Đạt', '1998-06-09', '0862951618', 'nguyenthanhdat@gmail.com', 'Khánh Hòa', 'Sinh Viên', '3 năm kinh nghiệm dạy kèm.');

-- --------------------------------------------------------

--
-- Table structure for table `info_phhs`
--

CREATE TABLE `info_phhs` (
  `ID` int(11) NOT NULL,
  `CMND` char(9) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenph` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `sdt` char(11) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` char(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `quequan` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `hotenhs` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_phhs`
--

INSERT INTO `info_phhs` (`ID`, `CMND`, `hotenph`, `ngaysinh`, `sdt`, `email`, `quequan`, `hotenhs`) VALUES
(12, '225714586', 'Nguyễn Văn Win', '1989-06-03', '0981299279', 'nguyenvanwin@gmail.com', 'Khánh Hòa', 'Nguyễn Minh Thông'),
(13, '225813657', 'Huỳnh Thị Ngọc', '1990-09-09', '0961255779', 'huynhthingoc@gmail.com', 'Khánh Hòa', 'Nguyễn Hà My'),
(14, '225814587', 'Nguyễn Thanh Phát', '1988-07-09', '0986631515', 'nguyenthanhphat', 'Khánh Hòa', 'Nông Thị Thơm'),
(15, '225784623', 'Nguyễn Tiến Dũng', '1980-02-05', '0971855858', 'nguyentiendung@gmail.com', 'Khánh Hòa', 'Hà Khánh Vân');

-- --------------------------------------------------------

--
-- Table structure for table `khoahoc`
--

CREATE TABLE `khoahoc` (
  `ID_KH` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `ten_kh` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_bd` date DEFAULT NULL,
  `time_kt` date DEFAULT NULL,
  `hocphi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khoahoc`
--

INSERT INTO `khoahoc` (`ID_KH`, `ID`, `ten_kh`, `time_bd`, `time_kt`, `hocphi`) VALUES
(1001, 4, 'Toán Lớp 1', '2020-01-01', '2020-03-01', 3000000),
(1002, 5, 'Tin Học 12', '2020-01-01', '2020-02-01', 2000000),
(1003, 6, 'Toán Lớp 10', '2020-06-01', '2020-08-31', 5000000),
(1004, 7, 'Hóa Học Lớp 11', '2020-06-01', '2020-08-31', 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `lichhoc`
--

CREATE TABLE `lichhoc` (
  `ID_KH` int(11) NOT NULL,
  `buoihoc` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ngayhoc` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lichhoc`
--

INSERT INTO `lichhoc` (`ID_KH`, `buoihoc`, `ngayhoc`) VALUES
(1001, 'Tối', ' Thứ 2, 4, 6 17h30-19h'),
(1002, 'Sáng', '8h-10h Thứ 7, Chủ Nhật'),
(1003, 'Tối', '19h30 -21h Thứ 3, 5, 7'),
(1004, 'Tối', '19h - 21h Thứ 4, 6');

-- --------------------------------------------------------

--
-- Table structure for table `lophoc`
--

CREATE TABLE `lophoc` (
  `ID_LH` int(11) NOT NULL,
  `ten_lh` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lophoc`
--

INSERT INTO `lophoc` (`ID_LH`, `ten_lh`) VALUES
(10, 'Lớp Thầy Khôi'),
(20, 'Lớp Anh Thịnh'),
(30, 'Lớp Cô thúy'),
(40, 'Lớp Anh Tâm');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `ID_MH` int(11) NOT NULL,
  `ten_mh` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`ID_MH`, `ten_mh`) VALUES
(1, 'Toán'),
(2, 'Anh'),
(3, 'Văn'),
(4, 'Hóa'),
(5, 'Địa'),
(6, 'GDCD'),
(7, 'Sử'),
(8, 'Vật Lý'),
(9, 'Tin Học'),
(10, 'Âm Nhạc');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`maloai`, `tenloai`) VALUES
(1, 'QuanLy'),
(2, 'GiaSu'),
(3, 'PHHS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_type_AC` (`maloai`);

--
-- Indexes for table `datakh`
--
ALTER TABLE `datakh`
  ADD KEY `fk_dt_kh` (`ID_KH`),
  ADD KEY `fk_dt_mh` (`ID_MH`),
  ADD KEY `fk_dt_lh` (`ID_LH`),
  ADD KEY `fk_dt_phhs` (`ID`);

--
-- Indexes for table `info_giasu`
--
ALTER TABLE `info_giasu`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `info_phhs`
--
ALTER TABLE `info_phhs`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`ID_KH`),
  ADD KEY `fk_kh_giasu` (`ID`);

--
-- Indexes for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD PRIMARY KEY (`ID_KH`);

--
-- Indexes for table `lophoc`
--
ALTER TABLE `lophoc`
  ADD PRIMARY KEY (`ID_LH`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`ID_MH`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`maloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `ID_KH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `lophoc`
--
ALTER TABLE `lophoc`
  MODIFY `ID_LH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `monhoc`
--
ALTER TABLE `monhoc`
  MODIFY `ID_MH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `fk_type_AC` FOREIGN KEY (`maloai`) REFERENCES `type` (`maloai`);

--
-- Constraints for table `datakh`
--
ALTER TABLE `datakh`
  ADD CONSTRAINT `fk_dt_kh` FOREIGN KEY (`ID_KH`) REFERENCES `khoahoc` (`ID_KH`),
  ADD CONSTRAINT `fk_dt_lh` FOREIGN KEY (`ID_LH`) REFERENCES `lophoc` (`ID_LH`),
  ADD CONSTRAINT `fk_dt_mh` FOREIGN KEY (`ID_MH`) REFERENCES `monhoc` (`ID_MH`),
  ADD CONSTRAINT `fk_dt_phhs` FOREIGN KEY (`ID`) REFERENCES `info_phhs` (`ID`);

--
-- Constraints for table `info_giasu`
--
ALTER TABLE `info_giasu`
  ADD CONSTRAINT `fk_AC_giasu` FOREIGN KEY (`ID`) REFERENCES `account` (`ID`);

--
-- Constraints for table `info_phhs`
--
ALTER TABLE `info_phhs`
  ADD CONSTRAINT `fk_AC_PHHS` FOREIGN KEY (`ID`) REFERENCES `account` (`ID`);

--
-- Constraints for table `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD CONSTRAINT `fk_kh_giasu` FOREIGN KEY (`ID`) REFERENCES `info_giasu` (`ID`);

--
-- Constraints for table `lichhoc`
--
ALTER TABLE `lichhoc`
  ADD CONSTRAINT `fk_lh_kh` FOREIGN KEY (`ID_KH`) REFERENCES `khoahoc` (`ID_KH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
