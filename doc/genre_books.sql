-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2019 at 04:14 PM
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
-- Table structure for table `genre_books`
--

CREATE TABLE `genre_books` (
  `genre_book_id` int(10) UNSIGNED NOT NULL COMMENT 'id thể loại nghệ thuật và sách',
  `genre_id` int(10) UNSIGNED NOT NULL COMMENT 'FK id tên thể loại nghệ thuật',
  `book_id` int(10) UNSIGNED NOT NULL COMMENT 'FK id sách',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='thể loại nghệ thuật và sách';

--
-- Dumping data for table `genre_books`
--

INSERT INTO `genre_books` (`genre_book_id`, `genre_id`, `book_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 33, 11, '2019-10-23 13:24:37', '2019-10-23 13:24:37', NULL),
(2, 5, 2, '2019-10-26 14:07:53', '2019-10-26 14:07:53', NULL),
(3, 34, 3, '2019-10-26 14:09:15', '2019-10-26 14:09:15', NULL),
(4, 33, 4, '2019-10-26 14:09:15', '2019-10-26 14:13:02', NULL),
(5, 10, 5, '2019-10-26 14:11:01', '2019-10-26 14:11:01', NULL),
(6, 35, 6, '2019-10-26 14:11:01', '2019-10-26 14:11:01', NULL),
(7, 33, 7, '2019-10-26 14:11:50', '2019-10-26 14:11:50', NULL),
(8, 39, 8, '2019-10-26 14:11:50', '2019-10-26 14:11:50', NULL),
(9, 5, 9, '2019-10-26 14:12:28', '2019-10-26 14:13:24', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genre_books`
--
ALTER TABLE `genre_books`
  ADD PRIMARY KEY (`genre_book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genre_books`
--
ALTER TABLE `genre_books`
  MODIFY `genre_book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id thể loại nghệ thuật và sách', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
