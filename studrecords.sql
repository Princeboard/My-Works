-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 06:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labsql`
--

-- --------------------------------------------------------

--
-- Table structure for table `studrecords`
--

CREATE TABLE `studrecords` (
  `id` int(8) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `age` varchar(2) NOT NULL,
  `addr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studrecords`
--

INSERT INTO `studrecords` (`id`, `fname`, `lname`, `age`, `addr`) VALUES
(1, 'Chrsitian Jamel', 'Mateo', '20', 'Hindi nga'),
(2, 'Cj ', 'Matthew', '20', 'Silicon Valley'),
(3, 'Kurichan Jameru', 'Mateo', '20', 'Tokyo, Japan'),
(4, 'Cjj', 'Matt', '21', 'Jj Village'),
(5, 'Jam', 'Mateo', '20', 'Strawberry Jam'),
(6, 'Pogi', 'Acoz', '21', 'Mr. Pogi Island'),
(7, 'Madam', 'Damin ', '22', 'Sad City, Happy Village'),
(8, 'Seener', 'Zon e', '19', 'Seen City'),
(9, 'Hak', 'Dogieman', '30', 'Hakman, DU'),
(10, 'Sana ', 'Owl', '10', 'Owl Sakit City');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studrecords`
--
ALTER TABLE `studrecords`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studrecords`
--
ALTER TABLE `studrecords`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
