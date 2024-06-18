-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 02:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Vishwa', 'vish@gmail.com', '708175b3fdb269c4ebe8e7751bb3fccd', '9283746352', 'Bengaluru', 'JP Nagar 2nd Phase'),
(2, 'Vishal', 'vishal@gmail.com', '72eea11febe23ae3dcab2bf59794c54c', '9120394750', 'Chennai', 'T Nagar'),
(3, 'Ram', 'ram@gmail.com', '1b7b4c38f626766bbdcfc895e2c514f6', '9718273679', 'Delhi', 'PMO'),
(4, 'Raj', 'raj@gmail.com', '1537c1dea8479ff52bc68336e323385f', '9281736475', 'Bengaluru', 'Basavangudi'),
(5, 'Ravi', 'ravi@gmail.com', 'f4690de2554616f5b853d35f5a7970d4', '9182712098', 'Chennai', 'abc'),
(6, 'Vishwadutt', 'vishwadutt99@gmail.com', '8231ac09972b51e692a5f515f8349a29', '9741301718', 'Bengaluru', 'Jayanagar 3rd Block'),
(7, 'adi', 'wav@adi.com', '3718215498913f64cd9490056a2e9c60', '7777534441', 'as', 'sd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
