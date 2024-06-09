-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 03:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `keopi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access_level` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email_address`, `password`, `access_level`, `created`) VALUES
(1, '', '', '$2y$10$wzNvpXlh2fVbaEi3kZZIKelObnovQv0AxX4t8aRYwH0Z/kwQvSuxu', 'User', '2024-06-09 07:00:09'),
(2, 'regret', 'zero@example.com', '$2y$10$4qMq/Cb2tx8X0yv/U3QmeuaP9o4.hfEcjunl5wIq8E9UZxf24dxFK', 'User', '2024-06-09 07:01:50'),
(3, 'Marc', 'marc@example.com', '$2y$10$BePlxnjmfb8a6kHDlFTCRuAfRd6BeE8wIvZ.y4ZMght5t273ZZIZS', 'User', '2024-06-09 07:10:31'),
(4, 'Regret_Zero', 'regretzero03@gmail.com', '$2y$10$zLGZ5/QPsp2fN24OeaMfse4Y8MGKTcNow3zyWx9P8bMn3jIPA7nXa', 'User', '2024-06-09 07:19:21'),
(5, 'Jomari', 'jomari@example.com', '$2y$10$oZhb5N7ne4OEjzXOX47WHOiwrttGViAGHg6MabxOzwGgydeLc/BRK', 'User', '2024-06-09 07:26:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
