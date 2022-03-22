-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2022 at 10:38 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `state` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `userId`, `productId`, `count`, `state`, `created_at`, `updated_at`) VALUES
(54, 2, 19, 2, 'paid', '2022-03-21 16:01:02', '2022-03-21 22:22:04'),
(55, 2, 18, 2, 'paid', '2022-03-21 16:24:19', '2022-03-21 22:23:31'),
(56, 2, 18, 2, 'paid', '2022-03-21 16:24:19', '2022-03-21 22:23:31'),
(73, 2, 19, 2, 'paid', '2022-03-21 16:56:09', '2022-03-21 22:22:04'),
(74, 2, 19, 2, 'paid', '2022-03-21 16:56:21', '2022-03-21 22:22:04'),
(75, 2, 18, 2, 'paid', '2022-03-21 16:58:27', '2022-03-21 22:23:31'),
(76, 2, 19, 2, 'paid', '2022-03-21 16:58:28', '2022-03-21 22:22:04'),
(77, 2, 19, 2, 'paid', '2022-03-21 16:59:00', '2022-03-21 22:22:04'),
(78, 2, 18, 2, 'paid', '2022-03-21 16:59:02', '2022-03-21 22:23:31'),
(83, 2, 17, 1, 'paid', '2022-03-21 21:39:58', '2022-03-21 21:40:48'),
(84, 2, 19, 2, 'notPaid', '2022-03-21 22:20:05', '2022-03-21 22:22:04'),
(85, 2, 18, 2, 'notPaid', '2022-03-21 22:22:20', '2022-03-21 22:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `title`, `image`) VALUES
(5, 'لوازم خانه', '5563676.jpg'),
(6, 'لوازم ورزشی', 'Sporting-Goods-1024x576.jpg'),
(7, 'لوازم دیجیتال', 'downloنعلاتلad.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'rezaH', '$2y$10$pD.2jVrApMw5kqW5DXp43uqcV.wAWUgpNMdD6flZE4x5nxd7O54fu');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `parentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `title`, `link`, `parentId`) VALUES
(35, 'لوازم ورزشی', 'google.com', 0),
(36, 'لوازم دیجیتال', 'google.com', 0),
(37, 'لوازم خانگی ', 'google.com', 0),
(38, 'برنامه نویسی', 'google.com', 0),
(39, 'موبایل', 'google.com', 36),
(40, 'php', 'google.com', 38),
(41, 'لوازم التحریر', 'google.com', 0),
(42, 'مداد', 'google.com', 41),
(43, 'مشکی', 'google.com', 42),
(44, 'تست', 'google.com', 0),
(45, 'تست 1', 'google.com', 44);

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL,
  `discription` text COLLATE utf8_persian_ci DEFAULT NULL,
  `keywords` text COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`id`, `title`, `author`, `discription`, `keywords`) VALUES
(8, 'فروشگاه', 'سیدرضا حسینی', 'وب سایت فروشگاهی', 'PHP,JAVA,WEB');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `summary` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `price` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `discription` varchar(500) COLLATE utf8_persian_ci NOT NULL,
  `imageBig` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `image1` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `image2` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `image3` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `image4` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `categoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `summary`, `price`, `discription`, `imageBig`, `image1`, `image2`, `image3`, `image4`, `categoryId`) VALUES
(17, 'یخچال53', 'یخچال عالی سامسونگ ', '50000000', '<p>یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسونگ&nbsp;یخچال عالی سامسون', '16473405415563676.jpg', '1647340541Untitled.png', '1647340541Untitled.jpg', 'delete-icon-stock-flat-design-vector-31349816.png', '1647340541delete-icon-stock-flat-design-vector-31349816.jpg', 5),
(18, 'تلویزیون', 'تلویزیونتلویزیونتلویزیونتلویزیون', '15000000', '<p>تلویزیونتلویزیونتلویزیونتلویزیونتلویزیون</p>\r\n', 'downloنعلاتلad.jpg', '5563676.jpg', '1647715554delete-icon-stock-flat-design-vector-31349816.png', '1647715554delete-icon-stock-flat-design-vector-31349816.jpg', 'downloنعلاتلad.jpg', 5),
(19, 'اتو', 'اتو', '515000', '<p>اتواتواتواتواتواتواتواتواتواتواتواتو</p>\r\n', 'update-icon-png-18.jpg', 'view-details-icon-buy-this-icon-for--0-98-2.png', '1647715608Untitled-1.jpg', '1647715608Untitled.png', 'update-icon-png-18.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `register_news`
--

CREATE TABLE `register_news` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `register_news`
--

INSERT INTO `register_news` (`id`, `email`) VALUES
(12, 'rea_h1211@yahoo.com'),
(15, 'reza_332gh11@yahoo.com'),
(16, 'reza_332sffsdsdfgh11@yahoo.com'),
(14, 'reza_erw3h11@yahoo.com'),
(2, 'reza_erwh11@yahoo.com'),
(17, 'reza_erwh4311@yahoo.com'),
(18, 'reza_erwhfgdsg11@yahoo.com'),
(13, 'reza_h11@yahoo.com'),
(8, 'reza_h1211@yahoo.com'),
(3, 'rezshjsgdkjfa_h11@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_persian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `caption`, `link`, `image`) VALUES
(16, 'new2', 'https://www.google.com/', 'Untitled-1.jpg'),
(19, 'یخچال', 'google.com', 'Untitled.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_persian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `tel`, `password`) VALUES
(2, 'rezahosseini', 'reza_h11@yahoo.com', '23424', '$2y$10$F9KuyBuGAwWI.sQ.ZNy5a.kKP6hpP8esiiGSrYI.7EN/J.9njafG2'),
(3, 'reza', 'reza_h1211@yahoo.com', '654654', '$2y$10$Q4Pxq/K6.cksDIJtSmvnSeqxs610hRWSZwRzJRu9b5a4LT3q4tdya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`,`productId`),
  ADD KEY `productId` (`productId`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoryId` (`categoryId`);

--
-- Indexes for table `register_news`
--
ALTER TABLE `register_news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `registerNews_email_uindex` (`email`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `register_news`
--
ALTER TABLE `register_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`productId`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
