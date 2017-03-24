-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017 年 3 朁E21 日 12:31
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
-- テーブルの構造 `test_drink_master`
--

CREATE TABLE `test_drink_master` (
  `drink_id` int(11) NOT NULL,
  `drink_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `create_datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stock` int(11) NOT NULL,
  `rank2` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- テーブルのデータのダンプ `test_drink_master`
--

INSERT INTO `test_drink_master` (`drink_id`, `drink_name`, `price`, `img`, `create_datetime`, `stock`, `rank2`) VALUES
(54, 'YAMAHA', 175000, '0b539c2e567d8e4d9ee42063854cbadde3e5cca7.jpg', '2017-03-16 10:00:35', 2, NULL),
(56, 'YANAGISAWA', 210000, '45a24f6816398cacc7194e33f5a2ff301b60e3e3.jpg', '2017-03-16 10:03:07', 2, NULL),
(57, 'YANAGISAWA', 210000, '890347954f81f41f97f5336b6ca9fdaebc6fb58d.jpg', '2017-03-16 10:03:42', 2, NULL),
(58, 'selmar ALTOSAX', 321000, '379375ab8e42ec39d460cc6321a4815d8736d33c.jpg', '2017-03-16 10:05:20', 3, NULL),
(119, 'selmar ALTOSAX', 321000, 'b11d9dd4af238265b624327c330790313723ff29.jpg', '2017-03-16 11:58:59', 3, NULL),
(134, '123', 123, '5af1c2bae78eba2258d9656b490671036224d647.jpg', '2017-03-16 12:03:06', 123, NULL),
(135, '', 0, '', '2017-03-16 12:03:06', 0, '123'),
(136, '123', 123, '6432eef5d5a82d0eaffec69cb91601fcec9726c7.jpg', '2017-03-16 12:03:10', 123, NULL),
(137, '', 0, '', '2017-03-16 12:03:10', 0, '123'),
(138, '123', 123, '559c62a09967cafff6a9057c9c7796028f1d5b8f.jpg', '2017-03-16 12:04:13', 123, NULL),
(139, '', 0, '', '2017-03-16 12:04:13', 0, '123'),
(140, '123', 123, '1f62ce4e07296d3a0fe1f05b63b97973471fb764.jpg', '2017-03-16 12:04:33', 123, NULL),
(141, '', 0, '', '2017-03-16 12:04:33', 0, '123'),
(142, '123', 123, 'ef33b20460f5252cb94def146d73b570ecb80984.jpg', '2017-03-16 12:04:39', 123, NULL),
(143, '', 0, '', '2017-03-16 12:04:39', 0, '123'),
(144, 'test', 0, '0ba33df3164fd5de3dcb1696f89e460fa2307cd8.jpg', '2017-03-16 20:00:49', 0, NULL),
(145, '', 0, '', '2017-03-16 20:00:49', 0, 'test'),
(146, '222', 22, '8bb5660b7f71b8b1e03c166409abbc84e0e8fe28.jpg', '2017-03-16 20:13:24', 0, NULL),
(147, '', 0, '', '2017-03-16 20:13:24', 0, '22'),
(148, '12', 123, 'a02271d6f48c07273e96d4012a88c9116641c6b3.jpg', '2017-03-16 20:19:35', 123, NULL),
(149, '', 0, '', '2017-03-16 20:19:35', 0, '123'),
(150, '', 0, 'c7410f0d34cb8e4fc9dd1fd8ff8f56caf3958a79.jpg', '2017-03-16 20:28:16', 0, NULL),
(151, '', 0, '', '2017-03-16 20:28:16', 0, ''),
(152, '123', 123, '90a19f9fb5d34e3cfa7324b6348008e53e237b92.jpg', '2017-03-16 20:40:00', 1, NULL),
(153, '', 0, '', '2017-03-16 20:40:00', 0, '123'),
(154, '123', 123, '1c05d64e1ce0b3192474b2a9f1a6572566a3812b.jpg', '2017-03-16 20:53:24', 123, NULL),
(155, '', 0, '', '2017-03-16 20:53:24', 0, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test_drink_master`
--
ALTER TABLE `test_drink_master`
  ADD PRIMARY KEY (`drink_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test_drink_master`
--
ALTER TABLE `test_drink_master`
  MODIFY `drink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=156;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
