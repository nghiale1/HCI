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
-- Table structure for table `publishing_houses`
--

CREATE TABLE `publishing_houses` (
  `publishing_house_id` int(10) UNSIGNED NOT NULL COMMENT 'id nhà xuất bản',
  `publishing_house_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên nhà xuất bản',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='nhà xuất bản';

--
-- Dumping data for table `publishing_houses`
--

INSERT INTO `publishing_houses` (`publishing_house_id`, `publishing_house_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nhã Nam', '2019-09-08 07:54:22', '2019-09-08 07:54:22', NULL),
(2, 'NXB Hội Nhà Văn', '2019-10-23 07:56:20', '2019-10-23 07:56:20', NULL),
(3, 'NXB Thế Giới', '2019-10-23 08:02:56', '2019-10-23 08:02:56', NULL),
(4, 'NXB Tổng Hợp TPHCM', '2019-10-23 08:17:48', '2019-10-23 08:17:48', NULL),
(5, 'NXB Hà Nội', '2019-10-23 08:21:49', '2019-10-23 08:21:49', NULL),
(6, 'NXB Phụ Nữ', '2019-10-23 08:27:45', '2019-10-23 08:27:45', NULL),
(7, 'NXB Văn Học', '2019-10-23 08:32:22', '2019-10-23 08:32:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publishing_houses`
--
ALTER TABLE `publishing_houses`
  ADD PRIMARY KEY (`publishing_house_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publishing_houses`
--
ALTER TABLE `publishing_houses`
  MODIFY `publishing_house_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id nhà xuất bản', AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
