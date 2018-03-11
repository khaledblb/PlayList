-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2018 at 03:17 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `playlist_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'Autos & Vehicles'),
(3, 'Music'),
(4, 'Pets & Animals'),
(5, 'Sports'),
(2, 'Film & Animation');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `categoryId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `userId`, `categoryId`, `title`, `description`, `link`) VALUES
(115, 42, 2, 'Class JavaScript2', 'JAVA script video about a Classes in JS and OPP programming\r\n', 'https://www.youtube.com/embed/T-HGdc8L-7w'),
(116, 42, 2, 'js in half hour', 'hour Tutorial for adva one ANd half', 'https://www.youtube.com/embed/zPHerhks2Vg'),
(117, 43, 3, 'Ya Zareef EL Tool', 'ÙŠØ§ Ø¸Ø±ÙŠÙ Ø§Ù„Ø·ÙˆÙ„ 48 \r\nYA zarefa altool Music\r\n47 Soul', 'https://www.youtube.com/embed/B-VLeqZkQcg'),
(118, 42, 3, 'Luca & Hishrb Hashish', 'Hashish Luca & Hishrab Hasshesh !!', 'https://www.youtube.com/embed/0_dhrFCBBWg'),
(119, 42, 3, 'Samti', 'Samti Rap music is one of The Best RAP MUUISX', 'https://www.youtube.com/embed/AgPmcBmo5Eg'),
(126, 47, 0, 'asdf', '', ''),
(127, 42, 5, 'The black Man 2', 'lkjmnb', 'https://www.youtube.com/watch?v=Oe_43onYubs');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userName`, `firstName`, `lastName`, `password`) VALUES
(42, 'khaledblb', 'Khaled', 'Blbesie', 'a6da6220bfe923bf02dfd7e5caf069323f101b78799cb582b588032d687078c735012a9efc9dfb80e2c6bf98b8acc9f06ba2736b6b7e889fa15c7763ed2d26f3'),
(43, 'test', 'test', 'test', 'ee26b0dd4af7e749aa1a8ee3c10ae9923f618980772e473f8819a5d4940e0db27ac185f8a0e1d5f84f88bc887fd67b143732c304cc5fa9ad8e6f57f50028a8ff'),
(44, 'sari', 'Sari', 'sari', '31e79f5f35bbc7d6616dd6866d10db5b3013d5a1077be54ef9b33e007f097d92094dccd6dd9230672bfdf269cecf03536007feb7a5d0f571801b0bb19fde5023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
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
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
