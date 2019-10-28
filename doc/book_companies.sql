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
-- Table structure for table `book_companies`
--

CREATE TABLE `book_companies` (
  `book_company_id` int(10) UNSIGNED NOT NULL COMMENT 'id công ty sách',
  `book_company_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên công ty sách',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='công ty sách';

--
-- Dumping data for table `book_companies`
--

INSERT INTO `book_companies` (`book_company_id`, `book_company_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nhã Nam', '2019-09-08 07:45:05', '2019-09-08 07:45:05', NULL),
(2, 'FirstNews', '2019-09-08 07:46:35', '2019-09-08 07:46:35', NULL),
(3, 'AZ Việt Nam', '2019-10-23 08:21:41', '2019-10-23 08:21:41', NULL),
(4, 'Cty TGM', '2019-10-23 08:27:35', '2019-10-23 08:27:35', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_companies`
--
ALTER TABLE `book_companies`
  ADD PRIMARY KEY (`book_company_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_companies`
--
ALTER TABLE `book_companies`
  MODIFY `book_company_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id công ty sách', AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
