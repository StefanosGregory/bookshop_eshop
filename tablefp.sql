-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2019 at 06:57 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbfinalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablefp`
--

CREATE TABLE `tablefp` (
  `id` int(11) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Book1` text NOT NULL,
  `Book2` text NOT NULL,
  `Book3` text NOT NULL,
  `Book4` text NOT NULL,
  `Book5` text NOT NULL,
  `Book6` text NOT NULL,
  `Book7` text NOT NULL,
  `Book8` text NOT NULL,
  `Book9` text NOT NULL,
  `Book10` text NOT NULL,
  `Book11` text NOT NULL,
  `Book12` text NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablefp`
--

INSERT INTO `tablefp` (`id`, `Email`, `Book1`, `Book2`, `Book3`, `Book4`, `Book5`, `Book6`, `Book7`, `Book8`, `Book9`, `Book10`, `Book11`, `Book12`, `Price`) VALUES
(1, 'g@gmail.com', 'The Fault in Our Stars', '', '', '', 'All the Light We Cannot See', '', '', '', '', '', '', '', 30),
(2, 'gregorystefanos@gmail.com', '', 'The Hunger Games', '', '', 'All the Light We Cannot See', '', '', '', '', 'Monstress', '', '', 107),
(3, 'gregorystefanos@gmail.com', 'The Fault in Our Stars', 'The Hunger Games', 'The Girl with the Dragon Tattoo', 'The Help', 'All the Light We Cannot See', 'The Book Thief', 'Clueless: One Last Summer', 'Maus', 'Saga', 'Monstress', 'X-Men: God Loves, Man Kills', 'Mighty Thor Vol. 1: Thunder in Her Veins', 269);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tablefp`
--
ALTER TABLE `tablefp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tablefp`
--
ALTER TABLE `tablefp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
