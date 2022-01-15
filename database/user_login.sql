-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 01:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instagram_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `Fullname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`contact`, `username`, `password`, `Fullname`) VALUES
('acalamonsieur@gmail.com', 'fudomyo123', 'abc123', 'Fudo Myoo Okami Sama'),
('dpquan2001@gmail.com', 'Joandarc', 'abc123', 'Jeanne d\'Arc'),
('muatrentucamthanh@gmail.com', 'lalam123', 'abc123', 'Lã Thanh Lam'),
('lurborve@gmail.com', 'lurborve', 'abc123', 'Lurborve de Montaigne'),
('marseilles.montaigne@gmaill.com', 'Marseilles4', 'abc123', 'Marseilles de Montaigne'),
('mrtuan.mercy@gmail.com', 'mrtuan', 'abc123', 'Hoàng Văn Tuấn'),
('englandragon2001@gmail.com', 'vahalla123', 'abc123', 'Vahalla no Elysum'),
('kakeru02@yahoo.com.vn', 'Yamato123', 'abc123', 'Yamato Fukushiji');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
