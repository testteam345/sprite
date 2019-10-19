-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2019 at 06:39 PM
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
-- Database: `car_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` char(1) NOT NULL,
  `type` char(1) NOT NULL DEFAULT '1' COMMENT '1::สินค้าในตะกร้า 0::กำลังชำระ 2::ชำระเเล้ว',
  `cart_qty` int(11) NOT NULL DEFAULT 1,
  `count_list` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`cart_id`, `pro_id`, `user_id`, `status`, `type`, `cart_qty`, `count_list`) VALUES
(2, 2, 1, '1', '1', 8, NULL),
(4, 1, 1, '1', '1', 9, NULL),
(7, 1, 2, '1', '1', 2, NULL),
(8, 2, 2, '1', '1', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`cate_id`, `cate_name`) VALUES
(12, 'test55555'),
(13, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout`
--

CREATE TABLE `tbl_checkout` (
  `ch_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `create_date` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_checkout`
--

INSERT INTO `tbl_checkout` (`ch_id`, `user_id`, `status`, `create_date`) VALUES
(3, 5, 0, '2019-10-15 14:52:45'),
(4, 5, 0, '2019-10-15 15:02:34'),
(5, 5, 0, '2019-10-15 15:09:07'),
(6, 5, 0, '2019-10-15 15:09:46'),
(7, 5, 0, '2019-10-15 15:10:18'),
(8, 5, 0, '2019-10-15 15:10:25'),
(9, 5, 0, '2019-10-15 15:12:13'),
(10, 5, 0, '2019-10-15 16:27:07'),
(11, 5, 0, '2019-10-15 16:28:16'),
(12, 5, 0, '2019-10-15 16:28:22'),
(13, 5, 0, '2019-10-15 16:31:23'),
(14, 5, 0, '2019-10-15 16:31:56'),
(15, 5, 0, '2019-10-15 16:32:27'),
(16, 5, 0, '2019-10-15 16:33:08'),
(17, 5, 0, '2019-10-15 16:33:29'),
(18, 5, 0, '2019-10-15 16:34:11'),
(19, 5, 0, '2019-10-15 16:34:58'),
(20, 5, 0, '2019-10-15 16:35:20'),
(21, 5, 0, '2019-10-15 16:35:27'),
(22, 5, 0, '2019-10-15 16:35:41'),
(23, 5, 0, '2019-10-15 16:36:23'),
(24, 5, 0, '2019-10-15 16:37:40'),
(25, 5, 0, '2019-10-15 16:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_checkout_list`
--

CREATE TABLE `tbl_checkout_list` (
  `ch_ls_id` int(11) NOT NULL,
  `ch_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_checkout_list`
--

INSERT INTO `tbl_checkout_list` (`ch_ls_id`, `ch_id`, `pro_id`, `qty`) VALUES
(3, 3, 1, 2),
(4, 3, 5, 1),
(5, 4, 1, 2),
(6, 4, 5, 1),
(7, 5, 1, 2),
(8, 5, 5, 1),
(9, 6, 1, 2),
(10, 6, 5, 1),
(11, 7, 1, 2),
(12, 7, 5, 1),
(13, 8, 1, 2),
(14, 8, 5, 1),
(15, 9, 1, 2),
(16, 9, 5, 1),
(17, 10, 1, 2),
(18, 10, 5, 1),
(19, 11, 1, 2),
(20, 11, 5, 1),
(21, 12, 1, 2),
(22, 12, 5, 1),
(23, 13, 1, 2),
(24, 13, 5, 1),
(25, 14, 1, 2),
(26, 14, 5, 1),
(27, 15, 1, 2),
(28, 15, 5, 1),
(29, 16, 1, 2),
(30, 16, 5, 1),
(31, 17, 1, 2),
(32, 17, 5, 1),
(33, 18, 1, 2),
(34, 18, 5, 1),
(35, 19, 1, 2),
(36, 19, 5, 1),
(37, 20, 1, 2),
(38, 20, 5, 1),
(39, 21, 1, 2),
(40, 21, 5, 1),
(41, 22, 1, 2),
(42, 22, 5, 1),
(43, 23, 1, 2),
(44, 23, 5, 1),
(45, 25, 1, 2),
(46, 25, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `pro_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `pro_price` float NOT NULL,
  `pro_detail` text DEFAULT NULL,
  `pro_sub_detail` text CHARACTER SET utf8mb4 NOT NULL,
  `pro_img` varchar(255) NOT NULL,
  `active` char(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`pro_id`, `cate_id`, `pro_name`, `pro_price`, `pro_detail`, `pro_sub_detail`, `pro_img`, `active`) VALUES
(1, 13, 'test', 12.58, NULL, 'setsdsdfa', '20191005112834_511.jpg', '1'),
(2, 12, 'testww', 45.22, NULL, 'sets', '20191005112843_007.jpg', '1'),
(3, 12, 'test_product', 154.23, 'asdfasdf', 'sdafasdf', '20191005112852_076.jpg', '1'),
(4, 12, 'asdf', 12.585, 'safd', 'sadf', '20191005112901_910.jpg', '1'),
(5, 12, 'asdf', 12.585, 'safd', 'sadf', '20191005112911_353.jpg', '1'),
(6, 12, 'asdf', 12.585, 'safd', 'sadf', '20191005112920_958.jpg', '1'),
(7, 12, '555', 45.66, '5555', '555', '20191005112926_354.jpg', '1'),
(8, 12, 'sadf', 12.2, 'asdf', 'sadf', '20191005112936_114.jpg', '1'),
(9, 12, 'asdf', 33, 'asdf3', 'sdf', '20191005112946_859.jpg', '1'),
(10, 12, 'test', 1202, 'aset', 'etasa', '20191007125451_919.jpg', '1'),
(11, 12, 'sai1000', 100000000, 'sainarakmakkkk', 'satnarai', '20191007164720_585.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `review_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `review_content` text NOT NULL,
  `review_rate` int(11) NOT NULL,
  `create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`review_id`, `pro_id`, `user_id`, `review_content`, `review_rate`, `create_date`) VALUES
(1, 4, 5, 'eraereaf', 3, '2019-10-07 23:08:26'),
(2, 4, 5, 'test_comment', 5, '2019-10-07 23:38:32'),
(3, 4, 5, 'sadfas', 1, '2019-10-07 23:41:08'),
(4, 4, 5, 'sadfas', 1, '2019-10-07 23:41:14'),
(5, 4, 5, 'sadfas', 3, '2019-10-07 23:42:03'),
(6, 4, 5, 'pae', 4, '2019-10-07 23:42:52'),
(7, 1, 5, 'sdfgsd', 4, '2019-10-08 22:07:33'),
(8, 1, 5, 'asdf', 1, '2019-10-08 22:08:41'),
(9, 2, 5, 'test', 5, '2019-10-14 22:40:27'),
(10, 2, 5, 'sss', 5, '2019-10-14 22:44:13'),
(11, 2, 5, 'ff', 5, '2019-10-14 22:46:42'),
(12, 2, 5, 'df', 5, '2019-10-15 20:18:48'),
(13, 2, 5, 'dsg', 5, '2019-10-15 20:19:01'),
(14, 2, 5, 'sadf', 1, '2019-10-15 20:24:24'),
(15, 2, 5, 'sadf', 1, '2019-10-15 20:24:26'),
(16, 2, 5, 'asdf', 1, '2019-10-15 20:24:29'),
(17, 2, 5, 'as', 1, '2019-10-15 20:24:35'),
(18, 2, 5, 'asdf', 1, '2019-10-15 20:35:10'),
(19, 2, 5, 'asdf', 1, '2019-10-15 20:35:15'),
(20, 2, 5, 'sdf', 1, '2019-10-15 20:35:19'),
(21, 2, 5, 'sdfg', 1, '2019-10-15 20:36:28'),
(22, 2, 5, 'sdf', 1, '2019-10-15 20:36:30'),
(23, 2, 5, 'sdfg', 1, '2019-10-15 20:36:32'),
(24, 2, 5, 'sdf', 1, '2019-10-15 20:36:34'),
(25, 2, 5, 'sdf', 1, '2019-10-15 20:36:37'),
(26, 2, 5, 'sdf', 1, '2019-10-15 20:36:39'),
(27, 2, 5, 'sdf', 1, '2019-10-15 20:36:41'),
(28, 2, 5, 'sdf', 1, '2019-10-15 20:36:43'),
(29, 2, 5, 'sdf', 1, '2019-10-15 20:36:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `user_email`, `create_date`, `update_date`) VALUES
(1, 'Tatchai', 'Admin', 'a0db8f6d8c1106e971a81625153eff2e', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'surasak', 'surasak', '827ccb0eea8a706c4c34a16891f84e7b', 'test@gmail.com', '2019-10-04 14:38:24', '2019-10-04 14:38:24'),
(6, 'asdf', 'asdfs', '912ec803b2ce49e4a541068d495ab570', 'sdaf', '2019-10-05 04:01:50', '2019-10-05 04:01:50'),
(7, 'test', 'test', '192c3425f0a3a4cca70e96149b5f3ff9', 'test.gmail.com', '2019-10-05 04:05:03', '2019-10-05 04:05:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`) USING BTREE;

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  ADD PRIMARY KEY (`ch_id`),
  ADD KEY `ch_id` (`ch_id`);

--
-- Indexes for table `tbl_checkout_list`
--
ALTER TABLE `tbl_checkout_list`
  ADD PRIMARY KEY (`ch_ls_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`pro_id`) USING BTREE;

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_checkout`
--
ALTER TABLE `tbl_checkout`
  MODIFY `ch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbl_checkout_list`
--
ALTER TABLE `tbl_checkout_list`
  MODIFY `ch_ls_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
