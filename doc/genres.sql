-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 08:55 AM
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
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(10) UNSIGNED NOT NULL COMMENT 'id thể loại nghệ thuật',
  `genre_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên thể loại nghệ thuật',
  `category_id` int(10) UNSIGNED NOT NULL COMMENT 'FK id hạng mục sách',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='thể loại nghệ thuật';

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Tiểu Thuyết', 9, '2019-10-23 06:38:46', '2019-10-23 06:38:46', NULL),
(6, 'Truyện Ngắn - Tản Văn', 9, '2019-10-23 06:40:23', '2019-10-23 06:40:23', NULL),
(7, 'Ngôn Tình', 9, '2019-10-23 06:40:32', '2019-10-23 06:40:32', NULL),
(8, 'Truyện Trinh Thám - Kiếm Hiệp', 9, '2019-10-23 06:40:41', '2019-10-23 06:40:41', NULL),
(9, 'Light Novel', 9, '2019-10-23 06:40:52', '2019-10-23 06:40:52', NULL),
(10, 'Huyền Bí - Giả Tưởng - Kinh Dị', 9, '2019-10-23 06:41:03', '2019-10-23 06:41:03', NULL),
(11, 'Tác Phẩm Kinh Điển', 9, '2019-10-23 06:41:12', '2019-10-23 06:41:12', NULL),
(12, 'Thơ Ca, Tục Ngữ, Ca Dao, Thành Ngữ', 9, '2019-10-23 06:41:22', '2019-10-23 06:41:22', NULL),
(14, '12 Cung Hoàng Đạo', 9, '2019-10-23 06:42:06', '2019-10-23 06:42:06', NULL),
(15, 'Tác Giả - Tác Phẩm', 9, '2019-10-23 06:42:15', '2019-10-23 06:42:15', NULL),
(16, 'Truyện Tranh', 9, '2019-10-23 06:42:23', '2019-10-23 06:42:23', NULL),
(17, 'Tuổi Teen', 9, '2019-10-23 06:42:31', '2019-10-23 06:42:31', NULL),
(18, 'Du Ký', 9, '2019-10-23 06:42:39', '2019-10-23 06:42:39', NULL),
(19, 'Hài Hước - Truyện Cười', 9, '2019-10-23 06:42:47', '2019-10-23 06:42:47', NULL),
(20, 'Sách Ảnh', 9, '2019-10-23 06:42:54', '2019-10-23 06:42:54', NULL),
(21, 'Thể Loại Khác', 9, '2019-10-23 06:43:01', '2019-10-23 06:43:01', NULL),
(22, 'Phóng Sự - Ký Sự - Phê Bình Văn Học', 9, '2019-10-23 06:43:24', '2019-10-23 06:43:24', NULL),
(23, 'Quản Trị - Lãnh Đạo', 10, '2019-10-23 06:43:41', '2019-10-23 06:43:41', NULL),
(24, 'Nhân Vật - Bài Học Kinh Doanh', 10, '2019-10-23 06:43:48', '2019-10-23 06:43:48', NULL),
(25, 'Marketing - Bán Hàng', 10, '2019-10-23 06:43:57', '2019-10-23 06:43:57', NULL),
(26, 'Phân Tích Kinh Tế', 10, '2019-10-23 06:44:06', '2019-10-23 06:44:06', NULL),
(27, 'Khởi Nghiệp - Làm Giàu', 10, '2019-10-23 06:44:15', '2019-10-23 06:44:15', NULL),
(28, 'Tài Chính - Ngân Hàng', 10, '2019-10-23 06:44:22', '2019-10-23 06:44:22', NULL),
(29, 'Chứng Khoán - Bất Động Sản - Đầu Tư', 10, '2019-10-23 06:44:36', '2019-10-23 06:44:36', NULL),
(30, 'Nhân Sự - Việc Làm', 10, '2019-10-23 06:44:46', '2019-10-23 06:44:46', NULL),
(31, 'Kế Toán - Kiểm Toán - Thuế', 10, '2019-10-23 06:44:54', '2019-10-23 06:44:54', NULL),
(32, 'Ngoại Thương', 10, '2019-10-23 06:45:05', '2019-10-23 06:45:05', NULL),
(33, 'Kỹ Năng Sống', 6, '2019-10-23 06:45:23', '2019-10-23 06:45:23', NULL),
(34, 'Rèn Luyện Nhân Cách', 6, '2019-10-23 06:45:31', '2019-10-23 06:45:31', NULL),
(35, 'Tâm Lý', 6, '2019-10-23 06:45:39', '2019-10-23 06:45:39', NULL),
(36, 'Sách Cho Tuổi Mới Lớn', 6, '2019-10-23 06:45:47', '2019-10-23 06:45:47', NULL),
(37, 'Chicken Soup - Hạt Giống Tâm Hồn', 6, '2019-10-23 06:45:57', '2019-10-23 06:45:57', NULL),
(38, 'Cẩm Nang Làm Cha Mẹ', 7, '2019-10-23 06:46:15', '2019-10-23 06:46:15', NULL),
(39, 'Phát Triển Kỹ Năng - Trí Tuệ Cho Trẻ', 7, '2019-10-23 06:46:22', '2019-10-23 06:46:22', NULL),
(40, 'Phương Pháp Giáo Dục Trẻ Các Nước', 7, '2019-10-23 06:46:54', '2019-10-23 06:46:54', NULL),
(41, 'Dinh Dưỡng - Sức Khỏe Cho Trẻ', 7, '2019-10-23 06:47:05', '2019-10-23 06:47:05', NULL),
(42, 'Dành Cho Mẹ Bầu', 7, '2019-10-23 06:47:13', '2019-10-23 06:47:13', NULL),
(43, 'Giáo Dục Trẻ Tuổi Teen', 7, '2019-10-23 06:47:22', '2019-10-23 06:47:22', NULL),
(44, 'Truyện Thiếu Nhi', 8, '2019-10-23 06:47:45', '2019-10-23 06:47:45', NULL),
(45, 'Manga - Comic', 8, '2019-10-23 06:47:53', '2019-10-23 06:47:53', NULL),
(46, 'Kiến Thức Bách Khoa', 8, '2019-10-23 06:48:19', '2019-10-23 06:55:46', NULL),
(47, 'Kiến Thức - Kỹ Năng Sống Cho Trẻ', 8, '2019-10-23 06:48:46', '2019-10-23 06:48:46', NULL),
(48, 'Tô Màu, Luyện Chữ', 8, '2019-10-23 06:48:57', '2019-10-23 06:48:57', NULL),
(49, 'Flashcard - Thẻ Học Thông Minh', 8, '2019-10-23 06:49:06', '2019-10-23 06:49:06', NULL),
(50, 'Từ Điển Thiếu Nhi', 8, '2019-10-23 06:49:19', '2019-10-23 06:49:19', NULL),
(51, 'Tạp Chí Thiếu Nhi', 8, '2019-10-23 06:49:31', '2019-10-23 06:49:31', NULL),
(52, 'Sách Nói', 8, '2019-10-23 06:49:43', '2019-10-23 06:49:43', NULL),
(53, 'Câu Chuyện Cuộc Đời', 11, '2019-10-23 06:50:09', '2019-10-23 06:50:09', NULL),
(54, 'Chính Trị', 11, '2019-10-23 06:50:18', '2019-10-23 06:50:18', NULL),
(55, 'Nghệ Thuật - Giải Trí', 11, '2019-10-23 06:50:26', '2019-10-23 06:50:26', NULL),
(56, 'Kinh Tế', 11, '2019-10-23 06:50:35', '2019-10-23 06:50:35', NULL),
(57, 'Lịch Sử', 11, '2019-10-23 06:50:46', '2019-10-23 06:50:46', NULL),
(58, 'Thể Thao', 11, '2019-10-23 06:50:55', '2019-10-23 06:50:55', NULL),
(59, 'Cấp 1', 12, '2019-10-23 06:51:15', '2019-10-23 06:51:15', NULL),
(60, 'Cấp 2', 12, '2019-10-23 06:51:22', '2019-10-23 06:51:22', NULL),
(61, 'Cấp 3', 12, '2019-10-23 06:51:29', '2019-10-23 06:51:29', NULL),
(62, 'Mẫu Giáo', 12, '2019-10-23 06:51:40', '2019-10-23 06:51:40', NULL),
(63, 'Luyện Thi ĐH, CĐ', 12, '2019-10-23 06:51:50', '2019-10-23 06:51:50', NULL),
(64, 'Sách Giáo Viên', 12, '2019-10-23 06:51:58', '2019-10-23 06:51:58', NULL),
(65, 'Đại Học', 12, '2019-10-23 06:52:06', '2019-10-23 06:52:06', NULL),
(66, 'Tiếng Anh', 13, '2019-10-23 06:52:26', '2019-10-23 06:52:26', NULL),
(67, 'Tiếng Nhật', 13, '2019-10-23 06:52:34', '2019-10-23 06:52:34', NULL),
(68, 'Tiếng Hoa', 13, '2019-10-23 06:52:44', '2019-10-23 06:52:44', NULL),
(69, 'Tiếng Hàn', 13, '2019-10-23 06:52:52', '2019-10-23 06:52:52', NULL),
(70, 'Tiếng Việt Cho Người Nước Ngoài', 13, '2019-10-23 06:53:00', '2019-10-23 06:53:00', NULL),
(71, 'Tiếng Pháp', 13, '2019-10-23 06:53:08', '2019-10-23 06:53:08', NULL),
(72, 'Ngoại Ngữ Khác', 13, '2019-10-23 06:53:16', '2019-10-23 06:53:16', NULL),
(73, 'Flashcard', 13, '2019-10-23 06:53:29', '2019-10-23 06:53:29', NULL),
(74, 'Luyện Thi Chứng Chỉ A,B,C', 13, '2019-10-23 06:53:37', '2019-10-23 06:53:37', NULL),
(75, 'Tiếng Đức', 13, '2019-10-23 06:53:46', '2019-10-23 06:53:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id thể loại nghệ thuật', AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
