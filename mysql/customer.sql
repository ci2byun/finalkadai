-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 3 朁E21 日 13:16
-- サーバのバージョン： 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camp`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `adressnumber` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `create_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `customer`
--

INSERT INTO `customer` (`id`, `company`, `name`, `name2`, `mail`, `tel`, `adressnumber`, `city`, `adress`, `create_datetime`) VALUES
(1, '123', '123', '', '', '', '', '', '', '2017-03-14 16:46:03'),
(2, '123', '123', '123', '', '', '', '', '', '2017-03-14 16:46:08'),
(3, '123', '123', '123', '', '', '', '', '', '2017-03-14 16:48:51'),
(4, '', '', '', '', '', '', '', '', '2017-03-14 16:48:53'),
(5, '', '', '', '', '', '', '', '', '2017-03-14 16:49:21'),
(6, '', '', '', '', '', '', '', '', '2017-03-14 16:49:41'),
(7, '', '', '', '', '', '', '', '', '2017-03-14 16:49:54'),
(8, '', '', '', '', '', '', '', '', '2017-03-14 16:50:08'),
(9, '', '', '', '', '', '', '', '', '2017-03-14 16:56:28'),
(10, '', '', '', '', '', '', '', '', '2017-03-14 16:56:31'),
(11, '', '', '', '', '', '', '', '', '2017-03-14 16:56:32'),
(12, '', '', '', '', '', '', '', '', '2017-03-14 16:56:33'),
(13, '', '', '', '', '', '', '', '', '2017-03-14 16:56:34'),
(14, '', '', '', '', '', '', '', '', '2017-03-14 16:56:47'),
(15, '', '', '', '', '', '', '', '', '2017-03-14 16:56:49'),
(16, '', '', '', '', '', '', '', '', '2017-03-14 16:56:50'),
(17, '', '', '', '', '', '', '', '', '2017-03-14 16:56:53'),
(18, '', '', '', '', '', '', '', '', '2017-03-14 16:56:55'),
(19, '123', '', '', '', '', '', '', '', '2017-03-14 16:56:57'),
(20, '123', '123', '123', '', '', '', '', '', '2017-03-14 16:57:55'),
(21, '123', '123', '123', '', '', '', '', '', '2017-03-14 16:57:58'),
(22, '123', '', '', '', '', '', '', '', '2017-03-14 16:58:06'),
(23, '123', '', '', '', '', '', '', '', '2017-03-14 16:59:06'),
(24, '123', '', '', '', '', '', '', '', '2017-03-14 16:59:09'),
(25, '123', '', '', '', '', '', '', '', '2017-03-14 19:06:13'),
(26, '123', '123', '123', '123@123', '123', '1212', '12', '12', '2017-03-14 19:06:32'),
(27, '123', '123', '123', '123@123', '123', '123', '123', '123', '2017-03-14 19:09:55'),
(28, '', '', '', '', '', '', '', '', '2017-03-16 17:10:22'),
(29, '', '', '', '', '', '', '', '', '2017-03-16 17:21:08'),
(30, '', '', '', '', '', '', '', '', '2017-03-16 17:23:09'),
(31, '', '', '', '', '', '', '', '', '2017-03-16 17:25:54'),
(32, '123', 'byun', '123', '123@123', 'byun', '123', '123', '123', '2017-03-16 17:26:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
