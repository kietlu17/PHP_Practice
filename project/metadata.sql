-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 06, 2025 at 03:14 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlsv`
--

-- --------------------------------------------------------

--
-- Table structure for table `metadata`
--

CREATE TABLE `metadata` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_name_enc` varbinary(255) DEFAULT NULL,
  `column_name_enc` varbinary(255) DEFAULT NULL,
  `real_table_name` varchar(255) DEFAULT NULL,
  `real_column_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metadata`
--

INSERT INTO `metadata` (`id`, `table_name_enc`, `column_name_enc`, `real_table_name`, `real_column_name`) VALUES
(1, 0xb887b1f68a4ca01e59d7a4bdad724d32, 0xc3c2d83ae09302a5f51184644c501e94, 'KHOA', 'ID'),
(2, 0xb887b1f68a4ca01e59d7a4bdad724d32, 0xd4c2e98255990afe05dad080f1943da7, 'KHOA', 'TEN'),
(3, 0x858653d3cf577e0e73e493d3aa5443d7, 0xf5af392cecaff04083e4c8be19015e11, 'SINHVIEN', 'ho_ten'),
(4, 0x858653d3cf577e0e73e493d3aa5443d7, 0xc9be9a5dd8b4f5acd466fe51f7abc6fd, 'SINHVIEN', 'masv'),
(5, 0x858653d3cf577e0e73e493d3aa5443d7, 0x47e1693da6673f2e68b5d233fa30b0e9, 'SINHVIEN', 'matkhau'),
(6, 0x858653d3cf577e0e73e493d3aa5443d7, 0x49b1efec24d47ae21fc4c3c5c3f7206b, 'SINHVIEN', 'ngaysinh'),
(7, 0x858653d3cf577e0e73e493d3aa5443d7, 0xd6c661c53d01028be1eb5af9839591cb, 'SINHVIEN', 'id_khoa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `metadata`
--
ALTER TABLE `metadata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `metadata`
--
ALTER TABLE `metadata`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
