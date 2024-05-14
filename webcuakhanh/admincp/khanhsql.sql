-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 03:14 AM
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
-- Database: `khanhsql`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `MaAD` varchar(255) NOT NULL,
  `TenAD` varchar(255) NOT NULL,
  `SĐT` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `id_danhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmucsp`
--

INSERT INTO `danhmucsp` (`id_danhmuc`, `tendanhmuc`, `thutu`) VALUES
(61, 'Tai nghe', 1),
(62, 'Cục sạc', 2),
(63, 'Ốp lưng', 3),
(64, 'Cường lực', 4);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`author`, `image`) VALUES
('No', 'image.svg'),
('No', 'image.svg'),
('No', 'image.svg'),
('No', 'image.svg');

-- --------------------------------------------------------

--
-- Table structure for table `gio_hang`
--

CREATE TABLE `gio_hang` (
  `MaKH` varchar(255) NOT NULL,
  `MaSP` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gio_hang`
--

INSERT INTO `gio_hang` (`MaKH`, `MaSP`, `SoLuong`) VALUES
('KH6', 'TNMT', 1),
('KH6', 'CL1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoa_don`
--

CREATE TABLE `hoa_don` (
  `MaHD` varchar(255) NOT NULL,
  `MaKH` varchar(255) NOT NULL,
  `MaSP` varchar(255) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `Tong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hoa_don`
--

INSERT INTO `hoa_don` (`MaHD`, `MaKH`, `MaSP`, `SoLuong`, `gia`, `Tong`) VALUES
('HD1', 'KHkhachhang123', 'TNGM2', 4, 880000, 3520000),
('HD2', 'KHkhachhang123', 'TNMT', 3, 600000, 1800000),
('HD3', 'KHkhachhang123', 'CL1', 7, 77777, 544439);

-- --------------------------------------------------------

--
-- Table structure for table `khach_hang`
--

CREATE TABLE `khach_hang` (
  `MaKH` varchar(255) NOT NULL,
  `TenKH` varchar(255) NOT NULL,
  `SĐT` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khach_hang`
--

INSERT INTO `khach_hang` (`MaKH`, `TenKH`, `SĐT`, `Email`, `DiaChi`, `Username`, `Password`) VALUES
('KHkhachhang123', 'Khach Hang 123', '0999888777', 'khachhang123@gmail.com', 'Ha Noi', 'khachhang123', 'fab559d4a26dd15da9df6016515d46b4f1e47bd067aadfc177c92350cbb82ef3'),
('KHkhachhang456', 'Khach Hang 456', '0777666555', 'khachhang456@gmail.com', 'Thanh Hoa', 'khachhang456', 'fab559d4a26dd15da9df6016515d46b4f1e47bd067aadfc177c92350cbb82ef3'),
('KHkhachhang789', 'Khach Hang 789', '0111222333', 'khachhang789@gmail.com', 'HCM', 'khachhang789', 'fab559d4a26dd15da9df6016515d46b4f1e47bd067aadfc177c92350cbb82ef3');

-- --------------------------------------------------------

--
-- Table structure for table `nhan_vien`
--

CREATE TABLE `nhan_vien` (
  `MaNV` varchar(255) NOT NULL,
  `TenNV` varchar(255) NOT NULL,
  `SĐT` varchar(10) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `tensp` varchar(255) NOT NULL,
  `masp` varchar(255) NOT NULL,
  `gia` int(255) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `soluong` int(255) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `tinhtrang` int(2) NOT NULL,
  `madanhmuc` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`tensp`, `masp`, `gia`, `anh`, `soluong`, `mota`, `tinhtrang`, `madanhmuc`) VALUES
('Tai Nghe Pro1', 'Pro', 750000, '1702478397_apro.jpg', 100, '', 1, '1'),
('Cường Lực 1', 'CL1', 77777, '1712649728_kinh-cuong-luc-pisen-hd-iphone-12-pro-127_2.jpg', 50, '', 1, '1'),
('Ốp lưng VIP', 'OL1', 50000, '1712666654_op-lung-cap-16-ver-2-1.jpg', 50, '', 1, '1'),
('Tai nghe GM2', 'TNGM2', 880000, '1712666694_gm2.jfif', 96, '', 1, '1'),
('Tai nghe MT', 'TNMT', 600000, '1712668496_master.jpg', 97, '', 1, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`MaAD`);

--
-- Indexes for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Indexes for table `hoa_don`
--
ALTER TABLE `hoa_don`
  ADD PRIMARY KEY (`MaHD`);

--
-- Indexes for table `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `nhan_vien`
--
ALTER TABLE `nhan_vien`
  ADD PRIMARY KEY (`MaNV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `id_danhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
