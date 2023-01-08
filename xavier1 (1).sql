-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 12:27 AM
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
-- Database: `xavier1`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`, `created_date`) VALUES
(0, 'mustafa', 'mrm60051@gmail.com', 'bnbv', '2023-01-06'),
(0, '', '', '', '2023-01-06'),
(0, '', '', '', '2023-01-06'),
(0, '', '', '', '2023-01-06'),
(0, '', '', '', '2023-01-06'),
(0, '', '', '', '2023-01-06'),
(0, '', '', '', '2023-01-06'),
(0, 'mustafa', 'mrm60051@gmail.com', 'bnbv', '2023-01-06'),
(0, 'mustafa', 'mrm60051@gmail.com', 'bnbv', '2023-01-06'),
(0, 'mustafa', 'mrm60051@gmail.com', 'bnbv', '2023-01-06'),
(0, 'mustafa', 'mrm60051@gmail.com', 'bnbv', '2023-01-06'),
(0, 'mustafa', 'mrm60051@gmail.com', 'bnbv', '2023-01-06'),
(0, 'mustafa', 'mrm60051@gmail.com', 'bnbv', '2023-01-06'),
(0, 'mustafa', 'mrm60051@gmail.com', 'bnbv', '2023-01-06'),
(0, 'mustafa', 'mrm60051@gmail.com', 'bnbv', '2023-01-06'),
(0, 'mustafa', 'mrm60051@gmail.com', 'bnbv', '2023-01-06'),
(0, '', '', '', '2023-01-06'),
(0, 'Murtaza', 'murtazahussnainj5@gmail.com', 'hi', '2023-01-06'),
(0, '', '', '', '2023-01-06'),
(0, 'mustafa', 'mrm60051@gmail.com', 'hey i just want to know how to open oil filter', '2023-01-08'),
(0, '', '', '', '2023-01-08'),
(0, 'ali', 'mrm60051@gmail.com', 'what oil brand ?', '2023-01-08'),
(0, '', '', '', '2023-01-08'),
(0, 'ali', 'mrm60051@gmail.com', 'what oil brand ?', '2023-01-08'),
(0, '', '', '', '2023-01-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'mustafa', '$2y$10$nEyI/3i91lLqMRmQ3MNBJuaMmeH92pdmvw.UutfnWsa6wxa6zcm82', '2023-01-05 23:09:15'),
(3, 'junaid', '$2y$10$BLsjzc8fR9IbwE4bK/1MMOOT6AWYXL19/uwwFJCywGqLoZndZKzCi', '2023-01-08 08:57:56'),
(4, 'saud', '$2y$10$W8CpQMR9EPrfewFL.ERxJukd73nE7Y8lke.p/fFjBoGrYR6USWDDW', '2023-01-08 16:14:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
