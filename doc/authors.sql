-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2019 at 10:40 AM
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
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(10) UNSIGNED NOT NULL COMMENT 'id tác giả',
  `author_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'tên tác giả',
  `author_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'thông tin tác giả',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'ngày tạo',
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp() COMMENT 'ngày cập nhật',
  `deleted_at` timestamp NULL DEFAULT NULL COMMENT 'ngày xóa tạm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='tác giả';

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`, `author_info`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cửu Bả Đao', 'Cửu Bả Đao (Jiubadao, 九把刀, nghĩa là \"chín con dao\"[1]) là bút danh của Kha Cảnh Đằng (giản thể: 柯景腾; phồn thể: 柯景騰; bính âm: Kē Jǐngténg; sinh ngày 25 tháng 8 năm 1978), một tiểu thuyết gia và đạo diễn người Đài Loan. Ông tốt nghiệp Cử nhân ngành Khoa học Quản lí, Đại học Quốc gia Chiao Tung và Thạc sĩ Khoa học xã hội, Đại học Tunghai. Quyển sách đầu tiên của Cửu Bả Đao được phát hành trên mạng, và kể từ đó, ông đã hoàn thành khoảng 60 quyển sách khác nhau, nhiều trong số đó đã được sản xuất thành phim', '2019-09-08 07:15:19', '2019-09-08 07:15:19', NULL),
(2, 'Nguyễn Nhật Ánh', 'Nguyễn Nhật Ánh sinh ngày 7 tháng 5 năm 1955 tại làng Đo Đo, xã Bình Quế, huyện Thăng Bình, tỉnh Quảng Nam.Ông là một văn nhân người Việt Nam,được biết đến với nhiều tác phẩm văn học về đề tài tuổi mới lớn, các tác phẩm của Nguyễn Nhật Ánh rất được độc giả ưa chuộng và nhiều tác phẩm đã được chuyển thể thành phim', '2019-09-08 07:16:08', '2019-09-08 07:16:08', NULL),
(4, 'Paulo Coelho', 'Paulo Coelho sinh tại Rio de Janeiro (Brasil), vào trường luật ở đó, nhưng đã bỏ học năm 1970 để du lịch qua México, Peru, Bolivia và Chile, cũng như châu Âu và Bắc Phi. Hai năm sau ông trở về Brasil và bắt đầu soạn lời cho nhạc pop. Ông cộng tác với những nhạc sĩ pop như Raul Seixas. Năm 1974 ông bị bắt giam một thời gian ngắn vì những hoạt động chống lại chế độ độc tài lúc đó ở Brasil.\r\n\r\nSách của ông đã được bán ra hơn 86 triệu bản trên 150 nước và được dịch ra 56 thứ tiếng. Ông đã nhận được nhiều giải thưởng của nhiều nước, trong đó tác phẩm Veronika quyết chết (Veronika decide morrer) được đề cử cho Giải Văn chương Dublin IMPAC Quốc tế có uy tín.\r\n\r\nTiểu thuyết Nhà giả kim (O Alquimista) của ông, một câu chuyện thấm đẫm chất thơ, đã bán được hơn 65 triệu bản trên thế giới và được dịch ra 56 thứ tiếng, trong đó có tiếng Việt.[1] Tác phẩm này được dựng thành phim do Lawrence Fishburne sản xuất, vì diễn viên này rất hâm mộ Coelho. Sách của ông còn có Hành hương (O diário de um mago) (được công ty Arxel Tribe lấy làm cơ sở cho một trò chơi vi tính), Bên sông Piedra tôi ngồi xuống và khóc (Na margem do rio Piedra eu sentei e chorei) và Những nữ chiến binh (As Valkírias). Cuốn tiểu thuyết năm 2005 O Zahir của ông bị cấm ở Iran, 1000 bản sách bị tịch thu [1], nhưng sau đó lại được phát hành.\r\n\r\nNhững sách của ông đã được vào các danh sách những quyển sách bán chạy nhất ở nhiều nước, kể cả Brasil, Anh, Hoa Kỳ, Pháp, Đức, Canada, Ý, Israel và Hy Lạp. Ông là tác giả viết tiếng Bồ Đào Nha bán chạy nhất mọi thời đại.\r\n\r\nMặc dù có nhiều thành công, nhiều nhà phê bình ở Brasil vẫn nhìn ông như một tác giả không quan trọng, cho rằng những tác phẩm của ông quá đơn giản và giống sách tự lực (self-help book). Cũng có người xem các tiểu thuyết của ông có quá nhiều tính chất \"thương mại\". Sự kiện ông được vào Viện Hàn lâm Văn chương Brasil (ABL) đã gây ra nhiều tranh cãi trong các độc giả Brasil và ngay trong chính Viện Hàn lâm.\r\n\r\nÔng và vợ là Christina định cư tại Rio de Janeiro (Brasil) và Tarbes (Pháp).', '2019-10-23 07:12:30', '2019-10-23 07:12:30', NULL),
(5, 'Dale Carnegie', 'Dale Breckenridge Carnegie (trước kia là Carnagey cho tới năm 1922 và có thể một thời gian muộn hơn) (24 tháng 11 năm 1888 – 1 tháng 11 năm 1955) là một nhà văn và nhà thuyết trình Mỹ và là người phát triển các lớp tự giáo dục, nghệ thuật bán hàng, huấn luyện đoàn thể, nói trước công chúng và các kỹ năng giao tiếp giữa mọi người. Ra đời trong cảnh nghèo đói tại một trang trại ở Missouri, ông là tác giả cuốn Đắc Nhân Tâm, được xuất bản lần đầu năm 1936, một cuốn sách thuộc hàng bán chạy nhất và được biết đến nhiều nhất cho đến tận ngày nay, nội dung nói về cách ứng xử, cư xử trong cuộc sống. Ông cũng viết một cuốn tiểu sử Abraham Lincoln, với tựa đề Lincoln con người chưa biết, và nhiều cuốn sách khác.\r\n\r\nCarnegie là một trong những người đầu tiên đề xuất cái ngày nay được gọi là đảm đương trách nhiệm, dù nó chỉ được đề cập tỉ mỉ trong tác phẩm viết của ông. Một trong những ý tưởng chủ chốt trong những cuốn sách của ông là có thể thay đổi thái độ của người khác khi thay đổi sự đối xử của ta với họ.', '2019-10-23 07:19:26', '2019-10-23 07:19:26', NULL),
(6, 'Rosie Nguyễn', 'Là giáo viên yoga, sở hữu gia tài “du lịch bụi” đến 20 quốc gia, được bạn bè dành tặng danh hiệu “phượt thủ chuyên nghiệp” nhưng Rosie Nguyễn, tác giả quyển sách “Ta ba lô trên đất Á” lại định nghĩa mình trong 3 cụm từ: “Tôi là một người viết, một kẻ mộng mơ và là một người yêu cuộc sống”', '2019-10-23 07:55:35', '2019-10-23 07:55:35', NULL),
(7, 'Dr Blair Thomas Spalding', 'Được dịch từ tiếng Anh-Baird Thomas Spalding là một nhà văn tâm linh người Mỹ, tác giả của bộ sách tâm linh: Cuộc sống và sự giảng dạy của các bậc thầy ở Viễn Đông.', '2019-10-23 08:01:22', '2019-10-23 08:01:22', NULL),
(8, 'Viktor E Frankl', NULL, '2019-10-23 08:17:36', '2019-10-23 08:17:36', NULL),
(9, 'Takeshi Furukawa', NULL, '2019-10-23 08:20:59', '2019-10-23 08:20:59', NULL),
(10, 'Adam Khoo', NULL, '2019-10-23 08:28:39', '2019-10-23 08:28:39', NULL),
(11, 'Haruki Murakami', NULL, '2019-10-23 08:32:13', '2019-10-23 08:32:13', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id tác giả', AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
