-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2020 at 10:12 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hiroshinakano`
--

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `password`) VALUES
(1, 'test1', '$2y$10$9e5FlcK3T4L3OjkCP7C3/eAN/loUsjLw9S6vpQbphRjqUl/0wFspi'),
(2, 'test2', '$2y$10$fD8e8F0ktRhNcFjf1jfEVe/3dY6PCPAm1I9MWr2Ctng4JvYJ3HQvG'),
(3, 'test4', '$2y$10$I06FT0gRCL7WPntWDkRdQuLcgO4NwNhfRwlbMGF/nF/khMk/j7yDu'),
(4, 'test4', '$2y$10$mmI9RqMgabMX5Q.sCYGY2.vscoOa/qEb/8U/7sJIdxVfRhyl9VuDK'),
(5, 'test5', '$2y$10$6JEfLkQ5n9/5c.Yd/CJTdONDHC.8YUPVBthk8vbqfW90w4x0Cv.t.'),
(6, 'test1', '$2y$10$Xu9iih8TNax4Rjj9uKxc6.le/KS/Fe9NW5E4W9jxGpvO3cs3CyCQW'),
(7, 'test1', '$2y$10$9K6AyZBzf2bJSclVx57MuuKtHyyTgXnxAtpvgaHQDuNW9pkUMcxBm'),
(8, 'test1', '$2y$10$EL7RVQnYxAs6zJ0C2pTn5uRWcBRqxpdTa8eS6s/LISwEu3FkNZSd.'),
(9, 'test1', '$2y$10$7CI3mhmkR599FAqRQ13Q.OWUCa359sLV19G8KpZ5G1j/i0kVnkmCS'),
(10, 'test1', '$2y$10$veCoR9Eel3YBQ4vjcQzyz.gZvah7oRVaOECWs7VD5mqldyp6UhAbe'),
(11, 'test1', '$2y$10$AZDw5Kh9t8nrRSaO7uqFae/XhHzRGCBv5eB3yhbg1sStqclZX1VMq'),
(12, 'test1', '$2y$10$0vpscO.Rhg6j5MCDuEh87.i2Np4lEYlmP5zkCCq6zFmi0vUxq5zba'),
(13, 'test1', '$2y$10$ZykjswwKRd.e2smCzwW0yOd12V3XGS07nqAjOOQug5RXYqTn55lOa'),
(14, 'test1', '$2y$10$ImreR3fJZlTyJ6IfjHm6suEKuBTryRe9nMQOzOo25oTvG0x12QHJW'),
(15, 'test1', '$2y$10$oEzo4JAi/KGjHmQUCW2xBejhWzWJPIefYu8HAps83EHJNXZzN7yYu'),
(16, 'test1', '$2y$10$6LFP0/DQYLSqKvphtZNQhe9wIsOK81zt33w/D/WPAfc7t.XnpCRAy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
