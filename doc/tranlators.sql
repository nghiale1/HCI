-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 10:39 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hci`
--

-- --------------------------------------------------------

--
-- Table structure for table `tranlators`
--

CREATE TABLE `tranlators` (
  `tranlator_id` int(10) UNSIGNED NOT NULL COMMENT 'id dịch giả',
  `tranlator_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên dịch giả',
  `tranlator_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'thông tin dịch giả',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='dịch giả';

--
-- Dumping data for table `tranlators`
--

INSERT INTO `tranlators` (`tranlator_id`, `tranlator_name`, `tranlator_info`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lê Chu Cầu', 'Lê Chu Cầu', '2019-09-09 02:57:46', '2019-09-09 02:57:46', NULL),
(4, 'Nguyên Phong', NULL, '2019-10-23 08:02:41', '2019-10-23 08:02:41', NULL),
(5, 'Như Nữ', NULL, '2019-10-23 08:21:16', '2019-10-23 08:21:16', NULL),
(6, 'Trần Đăng Khoa, Uông Xuân Vy', NULL, '2019-10-23 08:28:05', '2019-10-23 08:28:05', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tranlators`
--
ALTER TABLE `tranlators`
  ADD PRIMARY KEY (`tranlator_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tranlators`
--
ALTER TABLE `tranlators`
  MODIFY `tranlator_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id dịch giả', AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
