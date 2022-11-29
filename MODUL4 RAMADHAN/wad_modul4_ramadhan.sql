-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 27, 2022 at 01:40 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wad_modul4_ramadhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_ramadhan`
--

CREATE TABLE `user_ramadhan` (
  `id` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_ramadhan`
--

INSERT INTO `user_ramadhan` (`id`, `nama`, `email`, `password`, `no_hp`) VALUES
(1413284, 'Ramadhan - 1202204096', 'mramadhanm2018@gmail.com', '12345', '0895349092975'),
(1455309, 'Ramadhan - 1202204096', 'mramadhanm2002@gmail.com', '123', '0895349092975'),
(1468093, 'Ramadhan - 1202204096', 'mramadhanm@student.telkomuniversity.ac.id', '234', '234234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_ramadhan`
--
ALTER TABLE `user_ramadhan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
