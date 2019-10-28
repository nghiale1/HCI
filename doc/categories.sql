-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 08:54 AM
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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) UNSIGNED NOT NULL COMMENT 'id hạng mục sách',
  `category_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên hạng mục sách',
  `type_id` int(10) UNSIGNED NOT NULL COMMENT 'FK id loại sách',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='hạng mục sách';

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `type_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'Tâm lý - Kỹ năng sống', 1, '2019-10-23 06:31:32', '2019-10-23 06:31:32', NULL),
(7, 'Nuôi dạy con', 1, '2019-10-23 06:31:42', '2019-10-23 06:31:42', NULL),
(8, 'Sách thiếu nhi', 1, '2019-10-23 06:32:16', '2019-10-23 06:32:16', NULL),
(9, 'Văn học', 1, '2019-10-23 06:32:38', '2019-10-23 06:32:38', NULL),
(10, 'Kinh tế', 1, '2019-10-23 06:32:47', '2019-10-23 06:32:47', NULL),
(11, 'Tiểu sử - Hồi ký', 1, '2019-10-23 06:33:11', '2019-10-23 06:33:11', NULL),
(12, 'Giáo khoa - Tham khảo', 1, '2019-10-23 06:33:23', '2019-10-23 06:33:23', NULL),
(13, 'Sách học ngoại ngữ', 1, '2019-10-23 06:33:35', '2019-10-23 06:33:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id hạng mục sách', AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
