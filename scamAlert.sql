-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 12:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scamaler`
--

-- --------------------------------------------------------

--
-- Table structure for table `sharestory`
--

CREATE TABLE `sharestory` (
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` text CHARACTER SET utf8mb4 NOT NULL,
  `first_scam` text NOT NULL,
  `scammer_report` text NOT NULL,
  `scammer_username` varchar(50) NOT NULL,
  `scammer_contact` text NOT NULL,
  `scammer_email` varchar(50) NOT NULL,
  `scammer_other_info` text NOT NULL,
  `money_lost` text NOT NULL,
  `policeReport` text NOT NULL,
  `scam_exp` text NOT NULL,
  `file1` text NOT NULL,
  `file2` text NOT NULL,
  `anonymous` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sharestory`
--

INSERT INTO `sharestory` (`id`, `firstname`, `lastname`, `email`, `phone`, `first_scam`, `scammer_report`, `scammer_username`, `scammer_contact`, `scammer_email`, `scammer_other_info`, `money_lost`, `policeReport`, `scam_exp`, `file1`, `file2`, `anonymous`) VALUES
(1, 'Oluwasusi', 'Stephen', 'stephanyemmitty@gmail.com', '0908765764', 'In Person', 'credit-for-sex-scam', 'Scammer', '09087654355', 'stephane@gmail.com', '9308479091', '', 'Yes', 'fjcghbn d.f;sbjhdmnca\';osdfhndvkb;jhk;/gakoshj', 'testimonials-04.png', 'img-01.jpg', 'yes'),
(2, 'Oluwasusi', 'Stephen', 'stephanyemmitty@gmail.com', '0908765764', 'In Person', 'credit-for-sex-scam', 'Scammer', '09087654355', 'stephane@gmail.com', '9308479091', '', 'Yes', 'fjcghbn d.f;sbjhdmnca\';osdfhndvkb;jhk;/gakoshj', 'testimonials-04.png', 'img-01.jpg', 'yes'),
(3, 'Oluwasusi', 'Stephen', 'stephanyemmitty@gmail.com', '0908765764', 'In Person', 'credit-for-sex-scam', 'Scammer', '09087654355', 'stephane@gmail.com', '9308479091', '', 'Yes', 'fjcghbn d.f;sbjhdmnca\';osdfhndvkb;jhk;/gakoshj', 'testimonials-04.png', 'img-01.jpg', 'yes'),
(4, 'Oluwasusi', 'Stephen', 'stephanyemmitty@gmail.com', '0908765764', 'In Person', 'credit-for-sex-scam', 'Scammer', '09087654355', 'stephane@gmail.com', '9308479091', '', 'Yes', 'fjcghbn d.f;sbjhdmnca\';osdfhndvkb;jhk;/gakoshj', 'testimonials-04.png', 'img-01.jpg', 'yes'),
(5, 'ola', 'hjcvhkln', 'stephanyemmitty@gmail.com', '5455769774687', 'Fax', 'internet-love-scam', 'jdsjkdcbslkmsn,', '090767569878', 'step@gmail.com', '09809765746', '', 'Yes', 'tfcygvuhbi jklycguhi bjonkpmycgvuhijn', 'header.jpg', 'img-12.jpg', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(255) NOT NULL,
  `Name` varchar(1000) CHARACTER SET utf32 NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `Name`, `email`) VALUES
(1, 'Stephenyemmitty', 'stephanyemmitty@gmail.com'),
(2, 'bolaji', 'stephanydemmitty@gmail.com'),
(3, 'edtffghk', 'stephanyemmittyyy@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sharestory`
--
ALTER TABLE `sharestory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sharestory`
--
ALTER TABLE `sharestory`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
