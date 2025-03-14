-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 06, 2025 at 03:52 PM
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
  `table_name_enc` varchar(255) DEFAULT NULL,
  `column_name_enc` varchar(255) DEFAULT NULL,
  `real_table_name` varchar(255) DEFAULT NULL,
  `real_column_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `metadata`
--

INSERT INTO `metadata` (`id`, `table_name_enc`, `column_name_enc`, `real_table_name`, `real_column_name`) VALUES
(2, '5a63aebddb72c18e042ad066a97f9145', 'b80bb7740288fda1f201890375a60c8f', 'SINHVIEN', 'id'),
(3, '5a63aebddb72c18e042ad066a97f9145', '209dbda1655e93abcde595f9336620a1', 'SINHVIEN', 'ho_ten'),
(4, '5a63aebddb72c18e042ad066a97f9145', '9f7a044ba9165e95a5e0fbe935886594', 'SINHVIEN', 'masv'),
(5, '5a63aebddb72c18e042ad066a97f9145', 'a788f6d55914857d4b97c1de99cb896b', 'SINHVIEN', 'matkhau'),
(6, '5a63aebddb72c18e042ad066a97f9145', '8e486fed03f4eccac57034ee91cbec9b', 'SINHVIEN', 'ngaysinh'),
(7, '5a63aebddb72c18e042ad066a97f9145', '452e96aaf1bb0959fdee3605009951b0', 'SINHVIEN', 'id_khoa'),
(8, '94e93eb2a42dd7d444eecd7904f8ae3f', 'b80bb7740288fda1f201890375a60c8f', 'KHOA', 'ten_khoa'),
(9, '94e93eb2a42dd7d444eecd7904f8ae3f', 'b78ed53b341fb90dec4aea68e95d8344', 'KHOA', 'ten_khoa');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
